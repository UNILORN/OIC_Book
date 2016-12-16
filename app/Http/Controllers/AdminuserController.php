<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminuserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::whereNull('employee_id')
        ->ID($request->input('id'))
        ->Name($request->input('name'))
        ->Tel($request->input('tel'))
        ->paginate(20);
        return view('/administer/user/admin_user',compact('user','request'));
    }

    public function create()
    {
        return view('/administer/user/admin_create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::active()
            ->find($id);

        return view('/administer/user/admin_detail', compact('user', 'id'));
    }

    public function edit($id)
    {
        $user = User::active()
            ->find($id);

        return view('/administer/user/admin_edit', compact('user', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
