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
                        <form role="form" action="{{route('new.update',$new->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Paket</label>
                                        <input type="text" class="form-control" id="name" name="name" value="@if (old('name')){{old('name')}}@else{{$new->name}}@endif" >
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumotlar</label>
                                        <input type="text" class="form-control" id="body" name="body" value="@if (old('body ')){{old('body')}}@else{{$new->body}}@endif">
                                    </div>



                                    <div class="form-group">
                                        <label for="group">Turi</label>
                                        <select name="category" id="group" class="form-control">
                                            <option {{$new->category=="yan" ? 'selected': ''}} value="yan">Yangiliklar</option>
                                            <option {{$new->category=="ak" ? 'selected': ''}} value="ak">Aksiyalar</option>
                                        </select>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Yuborish</button>
                                        <a href="{{route('new.index')}}" class="btn btn-warning">Orqaga</a>
                                    </div>
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
