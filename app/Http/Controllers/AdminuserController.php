<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
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
      User::insert([
          'name'         => $request->input('user_name'),
          'user_address'      => $request->input('user_address'),
          'user_post_code'    => $request->input('user_postcode'),
          'email'        => $request->input('user_email'),
          'user_phone_number' => $request->input('user_phone_number'),
          'password'     => sha1($request->input('user_pass')),
          'created_at'   => Carbon::now()
      ]);
      return redirect('/admin/user');
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
      $user = User::find($id);
      $user->name = $request->input('user_name');
      $user->user_post_code= $request->input('user_postcode');
      $user->user_address= $request->input('user_address');
      $user->email= $request->input('user_email');
      $user->user_phone_number= $request->input('user_phone_number');
      $user->save();

      return redirect('/admin/user');
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete_flg = 1;
      $user->save();
      return redirect('/admin/user/');
    }
}
