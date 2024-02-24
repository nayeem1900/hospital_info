@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage permission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">permission</li>
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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Update permission

                                    <a class="btn btn-success float-right btn-sm" href="{{route('permission.index')}}"><i class="fa fa-list"></i>permission List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="post" action="{{route('permission.update',$permission->id)}}"enctype="multipart/form-data" >
                                    @csrf
                                    @method('put')
                                    @include('backend.layouts.message')

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="role">Select Role</label>
                                                <select class="form-control" name="role_id" id="role">
                                                    <option value="">Select Role</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}"{{($permission->role_id==$role->id)?'selected':''}}>{{$role->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            <div class="form-group row mb-0">
                                                <div class="col-md-4 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Save') }}
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <table class="table table-bordered table-responsive table-danger">
                                                <thead>

                                                <tr>
                                                    <th>Permission</th>
                                                    <th>View</th>
                                                    <th>Add</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>Branches</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[branch][view]"
                                                               @isset($permission['permission']['branch']['view']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" name="permission[branch][add]"
                                                               @isset($permission['permission']['branch']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[branch][edit]"
                                                               @isset($permission['permission']['branch']['edit']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[branch][delete]"
                                                               @isset($permission['permission']['branch']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Report</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[report][view]"
                                                               @isset($permission['permission']['report']['view']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" name="permission[report][add]"
                                                               @isset($permission['permission']['ibchkdept']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[report][edit]"
                                                               @isset($permission['permission']['ibchkdept']['edit']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[report][delete]"
                                                               @isset($permission['permission']['report']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Hospital_Info</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[hospital_info][view]"
                                                               @isset($permission['permission']['hospital_info']['view']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[hospital_info][add]"
                                                               @isset($permission['permission']['hospital_info']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[hospital_info][edit]"
                                                               @isset($permission['permission']['hospital_info']['edit']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[hospital_info][delete]"
                                                               @isset($permission['permission']['hospital_info']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Permission</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][view]"
                                                               @isset($permission['permission']['permission']['view']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][add]"
                                                               @isset($permission['permission']['permission']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][edit]"
                                                               @isset($permission['permission']['permission']['edit']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][delete]"
                                                               @isset($permission['permission']['permission']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[role][view]"
                                                               @isset($permission['permission']['role']['view']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][add]"
                                                               @isset($permission['permission']['role']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][edit]"
                                                               @isset($permission['permission']['role']['edit']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[permission][delete]"
                                                               @isset($permission['permission']['role']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Sub Admin</td>
                                                    <td>
                                                        <input type="checkbox" name="permission[subadmin][view]"
                                                               @isset($permission['permission']['subadmin']['view']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[subadmin][add]"
                                                               @isset($permission['permission']['subadmin']['add']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[subadmin][edit]"
                                                               @isset($permission['permission']['subadmin']['edit']) checked
                                                               @endisset

                                                               value="1">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="permission[subadmin][delete]"
                                                               @isset($permission['permission']['subadmin']['delete']) checked
                                                               @endisset
                                                               value="1">
                                                    </td>

                                                </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>



                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>






@endsection