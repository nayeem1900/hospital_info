<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubadminController extends Controller
{
    public function index()
    {

        $users=User::with('role','branch')->where('role_id','!=',2)->get();
//        $users=User::with('role')->where('role_id','!=',2)->get();
       // dd($users);
        return view('admin.subadmin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $branches=Branch::all();
        $roles=Role::where('id','!=',2)->get();
        return view('admin.subadmin.create',compact('roles','branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  dd($request->all());*/


        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|confirmed',
            'role_id'=>'required|numeric',
            'branch_id'=>'required|numeric',

        ]);
        $request['password']=Hash::make($request->password);

        User::create($request->all());

        session()->flash('success', ' Data save success');
        return redirect()->route('subadmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $branches=Branch::all();
        $user=User::find($id);
        $roles=Role::where('id','!=',2)->get();


        return view('admin.subadmin.edit',compact('user','roles','branches'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'nullable|min:8|confirmed',
            'role_id'=>'required|numeric',
            'branch_id'=>'required|numeric'

        ]);
        if($request->password ==null){
            $request['password']=auth()->user()->password;

        }else{
            $request['password']=Hash::make($request->password);
        }

        User::findOrFail($id)->update($request->all());

        session()->flash('success', ' Data Update success');
        return redirect()->route('admin.subadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::findOrFail($id)->delete();
        session()->flash('success', ' Data Delete success');
        return redirect()->route('subadmin.index');

    }
}
