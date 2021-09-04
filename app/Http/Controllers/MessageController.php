<?php

namespace App\Http\Controllers;

use App\Category;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages= Message::where('company',session('company'))->get();
        return view('message.show',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_SMS)->get();
        return view('message.create' , compact('categories'));
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
        $message =new Message;
        $message->name =$request->name;
        $message->cost =$request->cost;
        $message->time = $request->time;
        $message->turnon = $request->turnon;
        $message->category_id = $request->category_id;
        $message->delete = $request->delete;
        $message->check = $request->check;
        $message->company=session('company',Category::UCELL);
        $message->save();
        return redirect(route('message.index'));
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
        $message=Message::find($id);
        $categories=Category::where('company',session('company'))->where('type',Category::TYPE_SMS)->get();
        return view('message.edit', compact('message','categories'));
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
        Message::where('id', $id)->update($request->except('_token', '_method'));
              return redirect(route('message.index'))->with('message', 'message update succesfully' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::where('id', $id)->delete();
        return redirect()->back()->with('message', 'message is deleted successfully');

    }
}
