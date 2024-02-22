@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Monthly/Yearly Profit</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Monthly/Yearly Profit</li>
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
                                <h3>Select Criteria</h3>

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

                                <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
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

                console.log('request data', start_date,end_date );
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
                                        '<th>Admit Emergency</th>'+
                                        '<th>Admit Emergency</th>'+
                                    '</tr>';
                        $('#report-thead').html(thead);

                        var tbody = '';
                        var trs = '';
                        $.each(data,function (key,v) {
                            trs+='<tr>'
                                    +'<td>'+(key+1)+'</td>'
                                    +'<td>'+v.user.branch.branch_name+'</td>'
                                    +'<td>'+v.admit_emergency+'</td>'
                                    +'<td>'+v.admit_emergency+'</td>'
                                +'</tr>'

                        });
                        tbody+=trs;
                        $('#report-tbody').html(tbody);
                    }
                });

            });

        </script>


        {{--tbody += '<tr>'--}}
            {{--+'<td>'+(key+1)+'</td>'--}}
            {{--+'<td> No Of Admitted Patient form Emergency </td>'--}}
            {{--+'<td>No Of Ward (Last Date) </td>'--}}
            {{--+'<td>No of Ward Occuiped </td>'--}}
            {{--+'</tr>';--}}
    </div>

@endsection