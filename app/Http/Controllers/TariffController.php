<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tariffs= Tariff::where('company',session('company'))->get();
        return view('tariff.show',compact('tariffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_TARIFF)->get();
        return view('tariff.create' , compact('categories'));
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
            'payment' => 'required',
            'minute' => 'required',
            'minute1' => 'required',
            'category_id'=>'required',

        ]);
        $tariff =new Tariff;
        $tariff->name =$request->name;
        $tariff->payment =$request->payment;
        $tariff->minute = $request->minute;
        $tariff->minute1 = $request->minute1;
        $tariff->category_id = $request->category_id;
        $tariff->internet = $request->internet;
        $tariff->body = $request->body;
        $tariff->changing = $request->changing;
        $tariff->sms = $request->sms;
        $tariff->company=session('company',Category::UCELL);
        $tariff->save();
        return redirect(route('tariff.index'));
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
        $tariff=Tariff::find($id);
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_TARIFF)->get();
        return view('tariff.edit', compact('tariff','categories'));
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
            'payment' => 'required',
            'minute' => 'required',
            'minute1' => 'required',
            'category_id'=>'required'

        ]);
        Tariff::where('id', $id)->update($request->except('_token', '_method'));


        return redirect(route('tariff.index'))->with('message', 'tariff update succesfully' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tariff::where('id', $id)->delete();
        return redirect()->back()->with('message', 'tariff is deleted successfully');

    }
}
