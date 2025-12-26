<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
<<<<<<< HEAD
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

=======
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * Daftar tipe exception yang tidak dilaporkan.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * Daftar input yang tidak pernah diflash untuk validasi.
     *
     * @var array<int, string>
     */
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

<<<<<<< HEAD
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
=======
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            // Kirim notifikasi error ke Slack/Email dll
            if (app()->environment('production')) {
                $this->sendErrorNotification($e);
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
            }
        });
    }

<<<<<<< HEAD
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
=======
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // Untuk error HTTP
        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();
            
            // View name berdasarkan status code
            $viewName = "errors.{$statusCode}";
            
            // Cek jika view untuk status code tersebut ada
            if (view()->exists($viewName)) {
                return response()->view($viewName, [
                    'exception' => $exception
                ], $statusCode);
            }
        }
        
        // Untuk error umum
        if ($this->shouldReturnJson($request)) {
            return $this->prepareJsonResponse($request, $exception);
        }
        
        // Fallback ke view error default
        return response()->view('errors.default', [
            'exception' => $exception
        ], 500);
    }

    /**
     * Kirim notifikasi error (contoh implementasi)
     */
    private function sendErrorNotification(Throwable $e): void
    {
        // Implementasi notifikasi error
        // Bisa ke Slack, Email, Telegram, dll.
        
        if (app()->bound('sentry')) {
            app('sentry')->captureException($e);
        }
    }
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
}