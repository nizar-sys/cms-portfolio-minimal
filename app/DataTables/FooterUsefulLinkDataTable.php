<?php

namespace App\DataTables;

use App\Models\FooterUsefulLink;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FooterUsefulLinkDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                return '<a href="'.route('admin.footer-useful-links.edit', $query->id).'" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="'.route('admin.footer-useful-links.destroy', $query->id).'" class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
            }) 
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\FooterUsefulLink $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(FooterUsefulLink $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('footerusefullink-table') 
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    // ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([
                      
                    ])
                    ->parameters([
                        'responsive' => true,
                        'autoWidth' => false,
                    //     'ordering' => false
                      ])
                    ;
                    
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('url'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(200)
            ->addClass('text-center'),
         
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'FooterUsefulLink_' . date('YmdHis');
    }
}
