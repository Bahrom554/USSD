@extends('app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <center><h1>O'zgartirish</h1></center>

        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('includes.errors')
                        <form role="form" action="{{route('minute.update',$minute->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Minute</label>
                                        <input type="text" class="form-control" id="name" name="name" value="@if (old('name')){{old('name')}}@else{{$minute->name}}@endif" >
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">Narxi</label>
                                        <input type="text" class="form-control" id="cost" name="cost" value="@if (old('cost ')){{old('cost')}}@else{{$minute->cost}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="time">Muddati</label>
                                        <input type="text" class="form-control" id="time" name="time" value="@if (old('time')){{old('time')}}@else{{$minute->time}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="turnon">Yoqish ko'di</label>
                                        <input type="text" class="form-control" id="turnon" name="turnon"value="@if (old('turnon')){{old('turnon')}}@else{{$minute->turnon}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumot</label>
                                        <input type="text" class="form-control" id="body" name="body" value="@if (old('body')){{old('body')}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="group">Categoryasi</label>
                                        <select name="category_id" id="group" class="form-control">
                                            @foreach( $categories as $category)
                                                <option value="{{$category->id}}" {{$minute->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Yuborish</button>
                                        <a href="{{route('minute.index')}}" class="btn btn-warning">Orqaga</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
