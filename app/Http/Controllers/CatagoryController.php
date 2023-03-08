<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use RealRashid\SweetAlert\Facades\Alert;


class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat=Catagory::all();
        return view('Admin.pages.catagory')->with('catagories',$cat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'cname' =>'required|min:3'
        ]);
        $cat=new Catagory;
        $cat->name=$request->cname;
        $cat->save();
        return redirect()->back()->with('massege','categery added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $id;
        $cat=Catagory::find($id);
        $cat->delete();

    Alert::success('Catagory deleted successfully',"You have deleted the category");
    return redirect()->back()->with('massege','deleted successfully');



    }
}
