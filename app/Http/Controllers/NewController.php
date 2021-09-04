<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;
use App\Category;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= Discount::where('company',session('company'))->get();
        return view('new.show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new.create' );
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
            'body' => 'required',


        ]);
        $new =new Discount;
        $new->name =$request->name;
        $new->body =$request->body;
        $new->category = $request->category;
        $new->company=session('company',Category::UCELL);
        $new->save();
        return redirect(route('new.index'));
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
        $new=Discount::find($id);
        return view('new.edit', compact('new'));
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
            'body' => 'required',

        ]);
        Discount::where('id', $id)->update($request->except('_token', '_method'));
        return redirect(route('new.index'))->with('message', ' update succesfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Discount::where('id', $id)->delete();
        return redirect()->back()->with('message', 'deleted successfully');
    }
}
