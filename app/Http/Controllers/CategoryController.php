<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Internet;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company= session('company');
        $categories=Category::where('company',$company)->get();
        return view('categories.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Category::typesList();
        return view('categories.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:128',
            'type'=>'required|max:20'
        ]);
        if (!array_key_exists($request->type, Category::typesList())) {
            throw new \InvalidArgumentException('Undefined role "' . $request->type . '"');
        }
        $category = new Category;
        $category->name = $request->name;
        $category->type = $request->type;
        $category->company= session('company',Category::UCELL);
        $category->save();

        return redirect(route('categories.index'));

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
        $category=Category::find($id);
        $types = Category::typesList();
        return view('categories.edit',compact('category','types'));
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
        $this->validate($request,[
            'name'=>'required|max:128',
            'type'=>'required|max:20'
        ]);
        if (!array_key_exists($request->type, Category::typesList())) {
            throw new \InvalidArgumentException('Undefined role "' . $request->type . '"');}


        $category=Category::where('id', $id)->first();
        $category->name=$request->name;
        $category->save();

        return redirect(route('categories.index'))->with('message', 'internet update succesfully' );



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->back()->with('message', 'internet is deleted successfully');
    }
}
