<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HospitalEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalformController extends Controller
{
    //
    public function add()
    {
        //dd('ok');
        return view('backend.hospital-report.hospital_report_entry');
    }
    public function store(Request $request){

        $data =new HospitalEntry();
        $data->created_by=Auth::user()->id;
        $data->user_id= Auth::user()->id;
        $data->admit_emergency = $request->admit_emergency;
        $data->ward_no = $request->ward_no;
        $data->ward_occuiped = $request->ward_occuiped;
        $data->cabin_no = $request->cabin_no;
        $data->total_bed = $request->total_bed;
        $data->total_bed_occuiped = $request->total_bed_occuiped;
        $data->released_patient_no = $request->released_patient_no;
        $data->emergency_patient = $request->emergency_patient;
        $data->consultant_no = $request->consultant_no;
        $data->opd_no = $request->opd_no;
        $data->physiotherapy_patient = $request->physiotherapy_patient;
        $data->dental_patient = $request->dental_patient;
        $data->ctscan_no = $request->ctscan_no;
        $data->mri_no = $request->mri_no;
        $data->imaging_no = $request->imaging_no;
        $data->lab_investigation_no = $request->lab_investigation_no;
        $data->ot_no = $request->ot_no;
        $data->canteen_sales = $request->canteen_sales;
        $data->drug_outdoor_sales = $request->drug_outdoor_sales;
        $data->drug_indoor_sales = $request->drug_indoor_sales;
        $data->total_drug_sales = $request->total_drug_sales;
        $data->collection_imaging = $request->collection_imaging;
        $data->collection_lab = $request->collection_lab;
        $data->collection_hospital = $request->collection_hospital;
        $data->estimated_income = $request->estimated_income;
        $data->estimated_expense = $request->estimated_expense;
        $data->estimated_netincome = $request->estimated_netincome;
        $data->entry_date= $request->entry_date;



        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('hospitalform.add');
    }



}
