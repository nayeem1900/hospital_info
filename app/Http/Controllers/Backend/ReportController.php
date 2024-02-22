<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\HospitalEntry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
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


           /*
        $html['thsource'] = '<th> Students Fee</th>';
        $html['thsource'].= '<th>Other Cost</th>';
        $html['thsource'].= '<th>Employee Salary</th>';
        $html['thsource'].= '<th>Total Cost</th>';
        $html['thsource'].= '<th>Profit</th>';
        $html['thsource'].= '<th>Action</th>';
        $color='success';

        $html['tdsource'] = '<td>' .$item->admit_emergency. '</td>';
        $html['tdsource'] .= '<td>' . $other_cost.'</td>';
        $html['tdsource'] .= '<td>' . $emp_salary.'</td>';
        $html['tdsource'] .= '<td>' . $total_cost.'</td>';
        $html['tdsource'] .= '<td>' . $profit.'</td>';
        $html['tdsource'] .= '<td>';

        $html['tdsource'] .='<a class="btn btn-sm btn-'.$color.'"  titel="PDF" target="_blank" href="'.route("reports.profit.pdf").'?start_date='.$sdate.'&end_date='.$edate.'">
<i class="fa fa-file"> </i> </a>';
        $html['tdsource'] .= '</td>';
*/

//        return response()->json(@$html);


    }


}
