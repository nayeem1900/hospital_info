<!Doctype html>
<html>
<head>
    <title>Employee Details Info</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">



    <style type="text/css">
        table{
            border-collapse:collapse;
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

            @endphp



            <table border="1" width="100%">
                <tbody>

                <tr>
                    <th  style="text-align:center"><h4>Reporting Date:{{date('d M Y',strtotime($sdate))}} - {{date('d M Y',strtotime($edate))}}</h4>

                    </th>
                </tr>
                <tr>
                    <th>Sl</th>
                    <th>Particular</th>
                    @foreach($hospital_entry as $branch)
                    <th>{{$branch->user()->branch_name}}</th>
                    @endforeach
                    <th>IBH Motijheel</th>
                    <th>IBH Mirpur</th>
                    <th>IBH Cardiac</th>
                    <th>IBH NayaPaltan</th>
                    <th>IBH Mugdha</th>
                    <th>IBH Barishal</th>
                    <th>IBH Khulna</th>
                    <th>IBH CTG. AG</th>
                    <th>IBMH, Rajshahi</th>
                    <th>IBH, Luxmipur, Rajshahi</th>
                    <th>Total</th>
                </tr>
                <tr>
                    @foreach($hospital_entry as $key=>$value)
                    <td>1</td>
                    <td>No Of Patient Admit from Emergency</td>
                    <td>12</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>12</td>


                </tr>


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
                    <p style="text-align: center;">{{ Auth::user()->id}}
                </td>
            </tr>
            </tbody>

        </table>
    </div>
</div>
</body>
</html>