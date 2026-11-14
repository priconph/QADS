<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
Use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

// class UserTestExport implements FromCollection
class UserTestExport implements FromView, ShouldAutoSize, WithEvents, WithTitle, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    protected $export_type;
    protected $users;

    public function view(): View {
        if($this->export_type == 1){
            return view('exports.test_export', ['users' => $this->users]);
        }
        // else if($this->export_type == 2){
        //     return view('Reports.MonthlyApplicantReport');
        // }
        // else if($this->export_type == 3){
        //     return view('Reports.ComparativeApplicantReport');
        // }
	}

    function __construct($export_type, $users)
    {
        $this->export_type = $export_type;
        $this->users = $users;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1')->getFont()->setSize(30);
                // $event->sheet->getDelegate()->getStyle('A2')->getFont()->setSize(15);
            },
        ];
    }

	/**
     * @return string
     */
    public function title(): string
    {
        return 'User Test Report';
    }

    // For drawing only
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('storage/design/pricon_logo2.png'));
        $drawing->setHeight(52);
        $drawing->setCoordinates('A1');

        $drawing2 = new Drawing();
        $drawing2->setName('Other image');
        $drawing2->setDescription('This is a second image');
        $drawing2->setPath(public_path('storage/design/pricon_logo1.png'));
        $drawing2->setHeight(52);
        $drawing2->setCoordinates('E1');

        return [$drawing, $drawing2];
    }
}
