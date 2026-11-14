<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
Use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\User;

// class TestExport implements FromCollection
class TestExport implements FromView, ShouldAutoSize, WithEvents, WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    use Exportable;

    protected $export_type;
    protected $users;
    protected $year; //used in multiple sheet

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

    function __construct($export_type, $users, $year)
    {
        $this->export_type = $export_type;
        $this->users = $users;
        $this->year = $year;
    }

    //for designs
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1')->getFont()->setSize(30);
                // $event->sheet->getDelegate()->getStyle('A2')->getFont()->setSize(15);
            },
        ];
    }

    //for multiple sheets
    public function sheets(): array
    {
        $sheets = [];

        $users = User::all();

        $sheets[] = new UserTestExport(1, $users);

        for ($month = 1; $month <= 12; $month++) {
            $sheets[] = new InvoicesPerMonthSheet($this->year, $month);
        }

        return $sheets;
    }
}
