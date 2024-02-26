<!Doctype html>
<html>
<head>
    <title>Employee Details Info</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">



    <style type="text/css">
        table{
            border-collapse:collapse;
            max-width:100% !important;
            font-size: 8px;
        }
        h2 h3{
            margin:0;
            padding:0;
        }
        table{
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid#dee2e6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid#dee2e6;
        }
        .table tbody+tbody{
            border-top:2px solid#dee2e6;
        }
        .table table{
            background-color: #fff;
        }
        .table-bordered th,
        .table-bordered td {
            border:1px solid#dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td{
            border-bottom-width: 2px;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        table tr td{
            padding:5px;
        }
        .table-bordered thead th, .table-bordered td , .table-bordered th{
            border: 1px; solid: black !important;
        }
        .table-bordered thead th{
            background-color: #cacaca;
        }
    </style>
</head>
<body>









{{--jj--}}

<div class="container">
    <div class="row">


        <div class="col-md-12 text-center">
            <h5 style="font-weight: bold;padding-top: -25px;">Hospital Information Report</h5>

        </div>
        <div class="col-md-12">
            @php

               $sdate=date('Y-m-d',strtotime($sdate));
               $edate=date('Y-m-d',strtotime($edate));


               if (auth()->user()->branch_id === 4) {
                   $hospital_entry = \App\Models\HospitalEntry::with('user.branch')->whereBetween('entry_date', [$sdate, $edate])->get();
               } else {
                   $hospital_entry = \App\Models\HospitalEntry::where('user_id', auth()->user()->id)
                       ->with('user.branch')
                       ->whereBetween('entry_date', [$sdate, $edate])
                       ->get();
               }
//dd($hospital_entry );
            @endphp



            <h4>Reporting Date:{{date('d M Y',strtotime($sdate))}} - {{date('d M Y',strtotime($edate))}}</h4>

            <table border="1" width="100%">

                <tbody>


                <tr>
                    <th>Sl</th>
                    <th>Branch Name</th>

                    <th>No Of Patient Admit from Emergency</th>

                    <th>No Of Ward (Last Date)</th>
                    <th>No Of Ward Occuiped (Last Date)</th>
                    <th>No Of Cabin (Last Date)</th>
                    <th>No Of Cabin Occuiped (Last Date)</th>
                    <th>Total Hospital Bed</th>
                    <th>Total Hospital Bed Occuiped</th>
                    <th>No Of Ward (Last Date)</th>
                    <th>No Of Admitted Patient</th>
                    <th>No Of Emergency Patient</th>
                    <th>No Of Consultant</th>
                    <th>No Of Outdoor Patient</th>
                    <th>Physiotherapy Patients</th>
                    <th>Dental Patients</th>
                    <th>No Of CTSCAN</th>
                    <th>No Of MRI</th>
                    <th>No Of Imaging (without CT & MRI)</th>
                    <th>No Of Lab Investigation</th>
                    <th>No Of Operation</th>
                    <th>Canteen Sales</th>
                    <th>Drug Outdoor Sales</th>
                    <th>Drug Indoor Sales</th>
                    <th>Total Drug Sales</th>
                    <th>Collection Imaging</th>
                    <th>Collection Lab</th>
                    <th>Collection Hospital</th>
                    <th>Estimated Income</th>
                    <th>Estimated Expense</th>
                    <th>Estimated Net Income</th>
                    <th>Entry Date</th>
                    <th>Total</th>
                </tr>
                @foreach($hospital_entry as $key => $value )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->user->branch->branch_name}}</td>
                    <td>{{$value->admit_emergency}}</td>
                    <td>{{$value->ward_no}}</td>
                    <td>{{$value->ward_occuiped}}</td>
                    <td>{{$value->cabin_no}}</td>
                    <td>{{$value->cabin_occupied}}</td>
                    <td>{{$value->total_bed}}</td>
                    <td>{{$value->total_bed_occuiped}}</td>
                    <td>{{$value->admited_patient_no}}</td>
                    <td>{{$value->released_patient_no}}</td>
                    <td>{{$value->emergency_patient}}</td>
                    <td>{{$value->consultant_no}}</td>
                    <td>{{$value->opd_no}}</td>
                    <td>{{$value->physiotherapy_patient}}</td>
                    <td>{{$value->dental_patient}}</td>
                    <td>{{$value->ctscan_no}}</td>
                    <td>{{$value->mri_no}}</td>
                    <td>{{$value->imaging_no}}</td>
                    <td>{{$value->lab_investigation_no}}</td>
                    <td>{{$value->ot_no}}</td>
                    <td>{{$value->canteen_sales}}</td>
                    <td>{{$value->drug_outdoor_sales}}</td>
                    <td>{{$value->drug_indoor_sales}}</td>
                    <td>{{$value->total_drug_sales}}</td>
                    <td>{{$value->collection_imaging}}</td>
                    <td>{{$value->collection_lab}}</td>
                    <td>{{$value->collection_hospital}}</td>
                    <td>{{$value->estimated_income}}</td>
                    <td>{{$value->estimated_income}}</td>
                    <td>{{$value->estimated_expense}}</td>
                    <td>{{$value->estimated_netincome}}</td>
                    <td>{{$value->entry_date}}</td>
                    <td>total</td>






                </tr>
                @endforeach

                </tbody>

            </table>
            <i style="font-size: 10px; float: right">Printed Date:{{date("d M Y")}}</i>
        </div>

    </div><br/>
    <div class="col-md-12">
        <table border="0" width="100%">
            <tbody>
            <tr>

                <td style="width: 35%"></td>
                <td style="width: 35%"></td>
                <td style="width: 30%; text-align: center;">
                    <hr style="border:solid 1px;width: 60%;color: #000;margin-bottom: 0px;">
                    <p style="text-align: center;">{{ Auth::user()->name}}
                </td>
            </tr>
            </tbody>

        </table>
    </div>
</div>
</body>
</html>