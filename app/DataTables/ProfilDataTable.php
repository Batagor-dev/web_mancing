<?php

namespace App\DataTables;

use App\Models\Profil;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProfilDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()

            // FOTO (thumbnail)
            ->addColumn('photo', function ($row) {
                if (!$row->photo) {
                    return '<span class="text-muted">-</span>';
                }

                $url = asset('storage/' . $row->photo);

                return '<img src="'.$url.'" 
                        style="width:50px;height:50px;object-fit:cover;border-radius:6px;">';
            })

            // ACTION COLUMS
            ->addColumn('action', function ($row) {
                $edit = '<a href="'.route('profil.edit', $row->uuid).'" 
                            class="btn btn-sm btn-text-secondary rounded-pill btn-icon"
                            data-bs-toggle="tooltip" title="Edit">
                            <i class="ri ri-edit-line icon-20px"></i></a>';

                $delete = '
                    <form action="'.route('profil.destroy', $row->uuid).'" 
                          method="POST" style="display:inline-block;" class="delete-form">
                        '.csrf_field().method_field('DELETE').'
                        <button type="button" 
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon delete-btn"
                                data-id="'.$row->uuid.'"
                                data-bs-toggle="tooltip" title="Delete">
                            <i class="ri ri-delete-bin-line icon-20px"></i>
                        </button>
                    </form>';

                return $edit . ' ' . $delete;
            })

            ->rawColumns(['photo', 'action']);
    }

    public function query(Profil $model)
    {
        return $model->newQuery()->orderBy('created_at', 'desc');
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('profilkomunitas-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->responsive(true)
            ->addTableClass('table table-bordered table-hover align-middle bg-white')
            ->parameters([
                'dom' => '<"row mb-3"
                            <"col-md-6 d-flex align-items-center"l>
                            <"col-md-6 d-flex justify-content-end"f>
                         >
                         <"table-responsive"tr>
                         <"row mt-3"
                            <"col-md-6"i>
                            <"col-md-6 d-flex justify-content-end"p>
                         >',
                'language' => [
                    'search' => 'Search',
                    'searchPlaceholder' => 'Search profile...',
                    'lengthMenu' => '_MENU_ Entries',
                    'info' => 'Showing _START_ to _END_ of _TOTAL_ entries',
                    'paginate' => [
                        'previous' => '<i class="ri-arrow-left-s-line"></i>',
                        'next' => '<i class="ri-arrow-right-s-line"></i>'
                    ],
                ],
            ]);
    }

    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No')->searchable(false)->orderable(false)->width(30),

            Column::computed('photo')
                ->title('Foto')
                ->searchable(false)
                ->orderable(false)
                ->width(70),

            Column::make('judul')->title('Judul'),
            Column::make('deskripsi')->title('Deskripsi'),

            Column::computed('action')
                ->title('Action')
                ->exportable(false)
                ->printable(false)
                ->width(120),
        ];
    }

    protected function filename(): string
    {
        return 'Profil_' . date('YmdHis');
    }
}
