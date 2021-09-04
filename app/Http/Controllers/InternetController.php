<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internet;
use App\Category;

class InternetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internets= Internet::where('company',session('company'))->get();
        return view('internet.show',compact('internets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories=Category::where('company',session('company'))->where('type',Category::TYPE_INTERNET)->get();
        return view('internet.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate( [
            'name' => 'required|string|max:255',
            'cost' => 'required',
            'time' => 'required',
            'turnon' => 'required',
            'category_id'=>'required',

        ]);
        $internet =new Internet;
        $internet->name =$request->name;
        $internet->cost =$request->cost;
        $internet->time = $request->time;
        $internet->turnon = $request->turnon;
        $internet->category_id = $request->category_id;
        $internet->clear = $request->clear;
        $internet->body = $request->body;
        $internet->status = $request->status;
        $internet->company=session('company',Category::UCELL);
        $internet->save();
        return redirect(route('internet.index'));
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
        $internet=Internet::find($id);
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_INTERNET)->get();
        return view('internet.edit', compact('internet','categories'));
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'cost' => 'required',
            'time' => 'required',
            'turnon' => 'required',
            'category_id'=>'required'
        ]);
        Internet::where('id', $id)->update($request->except('_token', '_method'));
        return redirect(route('internet.index'))->with('message', 'internet update succesfully' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Internet::where('id', $id)->delete();
        return redirect()->back()->with('message', 'internet is deleted successfully');

    }
}
