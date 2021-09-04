<?php

namespace App\Http\Controllers;

use App\Category;
use App\Minute;
use Illuminate\Http\Request;

class MinuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minutes= Minute::where('company',session('company'))->get();
        return view('minute.show',compact('minutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_MINUTE)->get();
        return view('minute.create' , compact('categories'));
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
        $minute =new Minute;
        $minute->name =$request->name;
        $minute->cost =$request->cost;
        $minute->time = $request->time;
        $minute->turnon = $request->turnon;
        $minute->category_id = $request->category_id;
        $minute->body = $request->body;
        $minute->company=session('company',Category::UCELL);
        $minute->save();
        return redirect(route('minute.index'));
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
        $minute=Minute::find($id);
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_MINUTE)->get();
        return view('minute.edit', compact('minute','categories'));
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
        Minute::where('id', $id)->update($request->except('_token', '_method'));
        return redirect(route('minute.index'))->with('message', 'minute update succesfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Minute::where('id', $id)->delete();
        return redirect()->back()->with('message', 'minute is deleted successfully');

    }
}
