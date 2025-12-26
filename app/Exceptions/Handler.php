<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{
    protected $levels = [
        // ...
    ];

    protected $dontReport = [
        // ...
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        // 404 - Not Found
        $this->renderable(function (NotFoundHttpException $e, Request $request) {
            if (view()->exists('errors.404')) {
                return response()->view('errors.404', [], 404);
            }
        });

        // Semua HTTP Error (401–511)
        $this->renderable(function (HttpExceptionInterface $e, Request $request) {
            $status = $e->getStatusCode();

            if (view()->exists("errors.$status")) {
                return response()->view("errors.$status", [], $status);
            }
        });
    }

    public function render($request, Throwable $exception)
    {
        // Custom fishing exception (AMAN)
        if ($exception instanceof FishingSpotNotFoundException) {
            return response()->view('errors.community.custom-fishing-spot', [
                'message' => $exception->getMessage(),
                'suggestedSpots' => $this->getSuggestedFishingSpots()
            ], 404);
        }

        // FIX: tangkap SEMUA HTTP exception termasuk 404
        if ($exception instanceof HttpExceptionInterface) {
            $status = $exception->getStatusCode();

            if (view()->exists("errors.$status")) {
                return response()->view("errors.$status", [
                    'exception' => $exception
                ], $status);
            }
        }

        return parent::render($request, $exception);
    }

    // ... methods lainnya
}