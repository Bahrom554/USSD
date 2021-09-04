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
                        <form role="form" action="{{route('internet.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Paket</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Internet Paket" >
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">Narxi</label>
                                        <input type="text" class="form-control" id="cost" name="cost" placeholder="Narxi">
                                    </div>
                                    <div class="form-group">
                                        <label for="time">Muddati</label>
                                        <input type="text" class="form-control" id="time" name="time" placeholder="Muddati">
                                    </div>
                                    <div class="form-group">
                                        <label for="turnon">Yoqish ko'di</label>
                                        <input type="text" class="form-control" id="turnon" name="turnon" placeholder="Yoqish ko'di">
                                    </div>
                                    <div class="form-group">
                                        <label for="clear">O'chirish ko'di</label>
                                        <input type="text" class="form-control" id="clear" name="clear" placeholder="O'chirish ko'di">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumot</label>
                                        <input type="text" class="form-control" id="body" name="body" placeholder="Qo'shimcha malumot">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Xolatni tekshirish</label>
                                        <input type="text" class="form-control" id="status" name="status" placeholder="Xolatni tekshirish ">
                                    </div>



                                    <div class="form-group">
                                        <label for="group">Categoryasi</label>
                                        <select name="category_id" id="group" class="form-control">
                                            @foreach( $categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kiritish</button>
                                        <a href="{{route('internet.index')}}" class="btn btn-warning">Orqaga</a>
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
