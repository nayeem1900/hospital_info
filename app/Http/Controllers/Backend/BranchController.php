<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Auth;

class BranchController extends Controller
{
    public function view()
    {

        $data['allData'] = Branch::orderBy('id')->get();

        return view('backend.branch.view-branch', $data);
    }

    public function add()
    {

        return view('backend.branch.add-branch');

    }
    public function store(Request $request)
    {

        $data = new Branch();
        $data->branch_name = $request->branch_name;
        $data->address = $request->address;
        $data->branch_type = $request->branch_type;

        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('branches.view');
    }

    public function edit($id)
    {

        $editData = Branch::find($id);
        return view('backend.branch.add-branch',compact('editData'));
    }
    public function update(Request $request, $id)
    {

        $data =Branch::find($id);
        $data->branch_name = $request->branch_name;
        $data->branch_type = $request->branch_type;
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('branches.view');
    }




}
