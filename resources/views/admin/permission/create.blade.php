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
                                <h3>Add permission

                                    <a class="btn btn-success float-right btn-sm" href="{{route('permission.index')}}"><i class="fa fa-list"></i>permission List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="post" action="{{route('permission.store')}}"enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label for="role">Select Role</label>
                                                <select class="form-control" name="role_id" id="role">
                                                <option value="">Select Role</option>
                                                    @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
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
                                          <table class="table table-bordered">
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
                                                  <td>Hospital Info</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[hospital_info][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[hospital_info][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[hospital_info][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[hospital_info][delete]" value="1">
                                                  </td>

                                              </tr>
                                              <tr>
                                                  <td>Role</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[role][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[role][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[role][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[role][delete]" value="1">
                                                  </td>

                                              </tr>
                                              <tr>
                                                  <td>Report</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[report][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[report][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[report][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[report][delete]" value="1">
                                                  </td>

                                              </tr>
                                              <tr>
                                                  <td>Branch</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[branch][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[branch][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[branch][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[branch][delete]" value="1">
                                                  </td>

                                              </tr>

                                              <tr>
                                                  <td>Sub Admin</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[subadmin][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[subadmin][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[subadmin][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[subadmin][delete]" value="1">
                                                  </td>

                                              </tr>


                                              <tr>
                                                  <td>Permissions</td>

                                                  <td>
                                                      <input type="checkbox" name="permission[permission][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[permission][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[permission][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[permission][delete]" value="1">
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