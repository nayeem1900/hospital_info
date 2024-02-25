@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Hospital Information</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hospital Information</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Select Criteria</h3> <button id="btnPdf">PDF</button>
                                <a href="{{route('reportView')}}">report show</a>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Start Date</label>
                                        <input type="text" name="start_date" id="start_date" class="singledatepicker form-control form-control-sm
                                    " autocomplete="off" placeholder="Start Date" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">End Date</label>
                                        <input type="text" name="end_date" id="end_date" class="singledatepicker form-control form-control-sm
                                        " autocomplete="off" placeholder="End Date" readonly>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <a class="btn btn-sm btn-block btn-success" id="search" style="margin-top: 29px; color:white">Search</a>
                                    </div>

                                </div>


                            </div><!-- /.card-body -->

                            <div class="card-body">
                                <div id="DocumentResults"></div>

                                <table class="table table-bordered table-striped dt-responsive datatable_example" style="width: 100%">
                                    <thead id="report-thead"> </thead>
                                    <tbody id="report-tbody"></tbody>

                                </table>

                            </div>
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->

        <script type="text/javascript">


            $(document).ready( function () {
                var table = $('.datatable_example').dataTable();
                var tableTools = new $.fn.dataTable.TableTools( table, {
                    "buttons": [
                        "copy",
                        "csv",
                        "xls",
                        "pdf",
                        { "type": "print", "buttonText": "Print me!" }
                    ]
                } );

                $( tableTools.fnContainer() ).insertAfter('div.info');
            } );



            $(document).on('click','#search',function () {

                var start_date=$('#start_date').val();
                var end_date=$('#end_date').val();

                $('.notifyjs-corner').html('');
                if(start_date==''){
                    $.notify("Start Date required",{globalPosition:'top right',className:'error'});
                    return false;
                }
                if(end_date==''){
                    $.notify("End Date required",{globalPosition:'top right',className:'error'});
                    return false;
                }

                $.ajax({
                    url:"{{route('reports.h_report.datewise.get')}}",
                    type:"GET",
                    data:{'start_date':start_date,'end_date':end_date},
                    beforeSend:function () {

                    },
                    success:function (data) {
                        console.log('response', data);

                        var thead = '<tr>' +
                                        '<th>SL No</th>'+
                                        '<th>Branch Name</th>'+
                                        '<th>No Of Patient Admit from Emergency</th>'+
                                        '<th>No Of Ward (Last Date)</th>'+
                                         '<th>No Of Ward Occuiped (Last Date)</th>'+
                                         '<th>No Of Cabin (Last Date)</th>'+
                                        '<th>No Of Cabin Occuiped (Last Date)</th>'+
                                         '<th>Total Hospital Bed</th>'+
                                         '<th>Total Hospital Bed Occuiped</th>'+
                                         '<th>No Of Ward (Last Date)</th>'+
                                        '<th>No Of Admitted Patient</th>'+
                                        '<th>No Of Emergency Patient</th>'+
                                        '<th>No Of Consultant</th>'+
                                        '<th>No Of Outdoor Patient</th>'+
                                        '<th>Physiotherapy Patients</th>'+
                                        '<th>Dental Patients</th>'+
                                        '<th>No Of CTSCAN</th>'+
                                         '<th>No Of MRI</th>'+
                                        '<th>No Of Imaging (without CT & MRI)</th>'+
                                        '<th>No Of Lab Investigation</th>'+
                                        '<th>No Of Operation</th>'+
                                        '<th>Canteen Sales</th>'+
                                        '<th>Drug Outdoor Sales</th>'+
                                        '<th>Drug Indoor Sales</th>'+
                                         '<th>Total Drug Sales</th>'+
                                        '<th>Collection Imaging</th>'+
                                         '<th>Collection Lab</th>'+
                                        '<th>Collection Hospital</th>'+
                                        '<th>Estimated Income</th>'+
                                        '<th>Estimated Expense</th>'+
                                        '<th>Estimated Net Income</th>'+
                                        '<th>Entry Date</th>'+


                                    '</tr>';
                        $('#report-thead').html(thead);

                        var tbody = '';
                        var trs = '';
                        $.each(data,function (key,v) {
                            trs+='<tr>'
                                    +'<td>'+(key+1)+'</td>'
                                    +'<td>'+v.user.branch.branch_name+'</td>'
                                    +'<td>'+v.admit_emergency+'</td>'
                                    +'<td>'+v.ward_no+'</td>'
                                     +'<td>'+v.ward_occuiped+'</td>'
                                      +'<td>'+v.cabin_no+'</td>'
                                     +'<td>'+v.cabin_occupied+'</td>'
                                    +'<td>'+v.total_bed+'</td>'
                                  +'<td>'+v.total_bed_occuiped+'</td>'
                                  +'<td>'+v.admited_patient_no+'</td>'
                                    +'<td>'+v.released_patient_no+'</td>'
                                    +'<td>'+v.emergency_patient+'</td>'
                                     +'<td>'+v.consultant_no+'</td>'
                                     +'<td>'+v.opd_no+'</td>'
                                     +'<td>'+v.physiotherapy_patient+'</td>'
                                     +'<td>'+v.dental_patient+'</td>'
                                     +'<td>'+v.ctscan_no+'</td>'
                                  +'<td>'+v.mri_no+'</td>'
                                 +'<td>'+v.imaging_no+'</td>'
                                  +'<td>'+v.lab_investigation_no+'</td>'
                                 +'<td>'+v.ot_no+'</td>'
                                 +'<td>'+v.canteen_sales+'</td>'
                                 +'<td>'+v.drug_outdoor_sales+'</td>'
                                 +'<td>'+v.drug_indoor_sales+'</td>'
                                    +'<td>'+v.total_drug_sales+'</td>'
                                +'<td>'+v.collection_imaging+'</td>'
                                +'<td>'+v.collection_lab+'</td>'
                                +'<td>'+v.collection_hospital+'</td>'
                                +'<td>'+v.estimated_income+'</td>'
                                +'<td>'+v.estimated_expense+'</td>'
                                +'<td>'+v.estimated_netincome+'</td>'
                                +'<td>'+v.entry_date+'</td>'



                                +'</tr>'

                        });
                        tbody+=trs;
                        $('#report-tbody').html(tbody);
                    }
                });

            });

            $(document).on('click','#btnPdf',function () {
                var start_date=$('#start_date').val();
                var end_date=$('#end_date').val();

                $('.notifyjs-corner').html('');
                if(start_date==''){
                    $.notify("Start Date required",{globalPosition:'top right',className:'error'});
                    return false;
                }
                if(end_date==''){
                    $.notify("End Date required",{globalPosition:'top right',className:'error'});
                    return false;
                }

                console.log("{{route('reports.h-report.pdf')}} ?start_date="+start_date+"&end_date="+end_date );

                {{--return window.location.href ="{{route('reports.h-report.pdf')}}?start_date="+start_date+"&end_date="+end_date+"download";--}}
                return window.open("{{route('reports.h-report.pdf')}}?start_date="+start_date+"&end_date="+end_date, "download");


                $.ajax({
                    url:"{{route('reports.h-report.pdf')}}",
                    type:"GET",
                    data:{'start_date':start_date,'end_date':end_date},
                    beforeSend:function () {

                    },
                    success:function (response) {
                        console.log('response', response);
                    }
                });
            });
        </script>


    </div>

@endsection