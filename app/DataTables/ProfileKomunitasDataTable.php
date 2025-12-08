<?php

namespace App\DataTables;

use App\Models\ProfileKomunitas;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProfileKomunitasDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('photo', function ($row) {
                return '<img src="'.asset('storage/'.$row->photo).'" 
                            alt="Photo" 
                            class="img-thumbnail" 
                            width="60">';
            })
            ->addColumn('action', function ($row) {
                $edit = '
                    <a href="'.route('profil_komunitas.edit', $row->uuid).'" 
                        class="btn btn-sm btn-text-secondary rounded-pill btn-icon"
                        data-bs-toggle="tooltip" title="Edit">
                        <i class="ri ri-edit-line icon-20px"></i>
                    </a>';

                $delete = '
                    <form action="'.route('profil_komunitas.destroy', $row->uuid).'" 
                          method="POST" 
                          style="display:inline-block;" 
                          class="delete-form">
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

    public function query(ProfileKomunitas $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('profilekomunitas-table')
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
                    'searchPlaceholder' => 'Search komunitas...',
                    'lengthMenu' => '_MENU_ Entries',
                    'info' => 'Showing _START_ to _END_ of _TOTAL_ entries',
                    'paginate' => [
                        'previous' => '<i class="ri-arrow-left-s-line"></i>',
                        'next' => '<i class="ri-arrow-right-s-line"></i>',
                    ],
                ],
            ]);
    }

    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No')->searchable(false)->orderable(false)->width(30),

            Column::make('title')->title('Title'),
            Column::make('slug')->title('Slug'),
            Column::make('deskripsi')->title('Deskripsi'),
            Column::computed('photo')->title('Photo')->exportable(false)->printable(false)->width(80),

            Column::computed('action')
                ->title('Action')
                ->exportable(false)
                ->printable(false)
                ->width(120),
        ];
    }

    protected function filename(): string
    {
        return 'ProfileKomunitas_' . date('YmdHis');
    }
}
