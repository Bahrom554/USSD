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
                        <form role="form" action="{{route('categories.update',$category->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="@if (old('name')){{old('name')}}@else{{$category->name}}@endif" >
                                    </div>
                                    <div class="form-group">
                                        <label for="group">Turi</label>
                                        <select name="type" id="group" class="form-control">
                                            @foreach($types as $value => $label)
                                                <option value="{{$value}}" {{$category->type == $value ? 'selected' : ''}}>{{$label}}</option>
                                            @endforeach

                                        </select>
                                    </div>





                                    <!--                                    <div class="form-group">
                                                                            <label for="group">Turi</label>
                                                                            <select name="group" id="group" class="form-control">
                                                                                <option value="operator">Operator</option>
                                                                                <option value="moderator">Moderator</option>

                                                                            </select>
                                                                        </div>-->
                                    <!--                                    <div class="form-group">
                                                                            <label for="name">Hududni Tanlang</label>
                                                                            <select name="city" id="city" class="form-control">
                                                                                <option value="iz">Izboskan</option>
                                                                                <option value="ba">Baliqchi</option>
                                                                                <option value="ol">Oltinko'l</option>

                                                                            </select>
                                                                        </div>-->

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Yuborish</button>
                                        <a href="{{route('categories.index')}}" class="btn btn-warning">Orqaga</a>
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
