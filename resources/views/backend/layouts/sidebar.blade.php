
@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link  ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Your password</p>
                    </a>
                </li>



            </ul>
        </li>

        @isset(auth()->user()->role->permission['permission']['report']['view'])

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Report
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('reports.bh.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Hospital Report</p>
                    </a>
                </li>
            </ul>
        </li>

        @endisset

        @isset(auth()->user()->role->permission['permission']['role']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Role
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('role.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Role</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['permission']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Permission
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('permission.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Permission</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['subadmin']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Sub Admin Management
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('subadmin.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View subadmin</p>
                    </a>
                </li>


            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['branch']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Branch
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('branches.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Branch</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['hospital_info']['add'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Hospital Info
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('hospitalform.add')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Form</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

    </ul>
</nav>