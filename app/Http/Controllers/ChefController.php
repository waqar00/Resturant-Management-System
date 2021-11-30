<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::all();
        return view('admin.chef.index', compact('chefs'));
    }
    public function getchef(Request $request)
    {
        $data = Chef::all();

        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chef = new Chef;
        $chef->name = $request->name;
        $chef->speciality = $request->Speciality;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fname = time() . '.' . $extention;
            $file->move(('images/chefImages'), $fname);
            $chef->image = $fname;
        }
        $chef->save();
        return back()->with('status', 'Chef Added Successfully');
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
        $chef = Chef::find($id);
        return view('admin.chef.edit', compact('chef'));
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
        $update = Chef::find($id);
        $update->name = $request->name;
        $update->speciality = $request->Speciality;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extention;
            $file->move(('images/chefImages'), $fileName);
            $update->image = $fileName;
        }

        $update->save();
        return back()->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Chef::destroy($request->chef_id);
        return back()->with('success', 'Chef Deleted Successfully');
    }
}
