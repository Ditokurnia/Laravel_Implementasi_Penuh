<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class ProductExport implements FromView, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $products = Product::all();
        return view('export.product', ['products' => $products]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle("A1:G1")->getAlignment()->setVertical("center");
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth('10');
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth('20');
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth('30');
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth('30');
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth('15');
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth('20');
                $event->sheet->getDelegate()->getColumnDimension('G')->setWidth('20');
            }
        ];
    }
}
