@extends('app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <center><h1>tariff Paket qo'sish</h1></center>

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
                        <form role="form" action="{{route('tariff.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Paket</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="tariff Paket" >
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Abonent To'lovi</label>
                                        <input type="text" class="form-control" id="payment" name="payment" placeholder="Narxi">
                                    </div>
                                    <div class="form-group">
                                        <label for="minute">Chiquvchi O'zbekiston bo'yicha Minut</label>
                                        <input type="text" class="form-control" id="minute" name="minute" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="minute1">Chiquvchi tarmoq ichida</label>
                                        <input type="text" class="form-control" id="minute1" name="minute1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="internet">Internet</label>
                                        <input type="text" class="form-control" id="internet" name="internet" placeholder="Yoqish ko'di">
                                    </div>
                                    <div class="form-group">
                                        <label for="sms">SMS</label>
                                        <input type="text" class="form-control" id="sms" name="sms" placeholder="O'chirish ko'di">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumot</label>
                                        <input type="text" class="form-control" id="body" name="body" placeholder="Qo'shimcha malumot">
                                    </div>
                                    <div class="form-group">
                                        <label for="changing">Tarifni almashtirish</label>
                                        <input type="text" class="form-control" id="changing" name="changing" placeholder="Xolatni tekshirish ">
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
                                        <a href="{{route('tariff.index')}}" class="btn btn-warning">Orqaga</a>
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
