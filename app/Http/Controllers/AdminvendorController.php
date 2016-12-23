<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VENDOR;
use Carbon\Carbon;

class AdminvendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vendor = VENDOR::Active()
            ->ID($request->input('id'))
            ->Name($request->input('name'))
            ->Tel($request->input('tel'))
            ->paginate(20);
        return view('administer/vendor/admin_vendor', compact('request', 'vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('administer/vendor/admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      VENDOR::insert([
          'vendor_name'         => $request->input('vendor_name'),
          'vendor_email'        => $request->input('vendor_email'),
          'vendor_phone_number' => $request->input('vendor_phone_number'),
          'vendor_address'     => $request->input('vendor_address')
      ]);
      return redirect('/admin/vendor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = VENDOR::find($id);
        return view('administer/vendor/admin_detail', compact('id', 'vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = VENDOR::find($id);
        return view('administer/vendor/admin_edit', compact('id', 'vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $vendor = VENDOR::find($id);
      $vendor->vendor_name = $request->input('vendor_name');
      $vendor->vendor_email = $request->input('vendor_email');
      $vendor->vendor_phone_number = $request->input('vendor_phone_number');
      $vendor->vendor_address = $request->input('vendor_address');
      $vendor->save();

      return redirect('/admin/vendor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
      $vendor = VENDOR::find($id);
      $vendor->delete_flg = 1;
      $vendor->save();
      return redirect('/admin/vendor');
    }
}
