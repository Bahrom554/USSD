<?php

namespace App\Http\Controllers;

use App\Category;
use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes= Code::where('company',session('company'))->get();
        return view('code.show',compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('code.create' );
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
        $code =new Code;
        $code->name =$request->name;
        $code->body =$request->body;
        $code->category = $request->category;
        $code->company=session('company',Category::UCELL);
        $code->save();
        return redirect(route('code.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $code=Code::find($id);
        return view('code.edit', compact('code'));
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
        Code::where('id', $id)->update($request->except('_token', '_method'));
        return redirect(route('code.index'))->with('message', ' update succesfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Code::where('id', $id)->delete();
        return redirect()->back()->with('message', 'deleted successfully');
    }
}
