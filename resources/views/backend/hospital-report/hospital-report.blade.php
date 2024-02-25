@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Branch</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Branch</li>
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
                                <h3>Branch List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('branches.add')}}"><i class="fa fa-plus-circle"></i> Add Branch</a>

                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <style>
                                    table {
                                        font-family: arial, sans-serif;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    td, th {
                                        border: 1px solid #dddddd;
                                        text-align: left;
                                        padding: 8px;
                                    }

                                    tr:nth-child(even) {
                                        background-color: #dddddd;
                                    }
                                </style>

                                <table>

                                    <tr>
                                        <th>Sl</th>
                                        <th>Particular</th>
                                        <th>IBCH</th>
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
                                    <tr>
                                        <td>2</td>
                                        <td>No Of Ward (Last Date)</td>
                                        <td>3</td>
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
                                        <td>3</td>


                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>No Of Ward Occuiped (Last Date)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>No Of Cabin (Last Date)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>No Of Cabin Occuiped (Last Date)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Total Hospital Bed</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                    </tr>


                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection