<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\HospitalEntry;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function repView(){
        $allData = HospitalEntry::with('user.branch')->get();
        return view('backend.hospital-report.hospital-report', compact('allData'));


    }

    //
    public function BhrView(Request $request)
    {


        if (Auth::user()->branch_id === 4) {
            $allData = HospitalEntry::with('user.branch')->get();
//            dd($allData->toArray());
            return view('backend.hospital-report.hospital-view', compact('allData'));
        } else {
            $allData = HospitalEntry::where('user_id', Auth::user()->id)->with('user.branch')->get();
//            dd($allData->toArray());
            return view('backend.hospital-report.hospital-view', compact('allData'));
        }

    }

    public function hReport(Request $request){

//        $start_date=date('Y-m',strtotime($request->start_date));
//        $end_date=date('Y-m',strtotime($request->end_date));
        $sdate=date('Y-m-d',strtotime($request->start_date));
        $edate=date('Y-m-d',strtotime($request->end_date));


        if (Auth::user()->branch_id === 4) {
            $hospital_entry = HospitalEntry::with('user.branch')->whereBetween('entry_date', [$sdate, $edate])->get();
        } else {
            $hospital_entry = HospitalEntry::where('user_id', Auth::user()->id)
                ->with('user.branch')
                ->whereBetween('entry_date', [$sdate, $edate])
                ->get();
        }

        return response()->json($hospital_entry);
    }

    public function hReportPdf(Request $request){

//dd($request->all());
        $data['sdate']=date('Y-m-d',strtotime($request->start_date));
        $data['edate']=date('Y-m-d',strtotime($request->end_date));

//        return  view('backend.report.pdf.hospital_pdf',$data);

        $pdf =Pdf::loadView('backend.report.pdf.hospital_pdf',$data);

      return $pdf->download('document.pdf');
      /*$path = public_path('backend.pdf');
        $pdf->save($path);*/
    }




}
