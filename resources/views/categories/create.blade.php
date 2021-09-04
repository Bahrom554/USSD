@extends('app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <center><h1>Internet Paket qo'sish</h1></center>

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
                        <form role="form" action="{{route('categories.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Nomi</label>
                                        <input type="text" class="form-control" id="name" name="name"  >
                                    </div>




                                    <div class="form-group">
                                        <label for="group">Turi</label>
                                        <select name="type" id="group" class="form-control">
                                            @foreach($types as $value => $label)
                                                <option value="{{$value}}">{{$label}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label for="name">Hududni Tanlang</label>
                                        <select name="city" id="city" class="form-control">
                                            <option value="iz">Izboskan</option>
                                            <option value="ba">Baliqchi</option>
                                            <option value="ol">Oltinko'l</option>

                                        </select>
                                    </div>-->

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kiritish</button>
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
