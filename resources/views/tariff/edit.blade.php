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
                        <form role="form" action="{{route('tariff.update',$tariff->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}


                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Paket</label>
                                        <input type="text" class="form-control" id="name" name="name" value="@if (old('name')){{old('name')}}@else{{$tariff->name}}@endif"
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Abonent To'lovi</label>
                                        <input type="text" class="form-control" id="payment" name="payment" value="@if(old('payment')){{old('payment')}}@else{{$tariff->payment}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="minute">Chiquvchi O'zbekiston bo'yicha Minut</label>
                                        <input type="text" class="form-control" id="minute" name="minute" value="@if(old('minute')){{old('minute')}}@else{{$tariff->minute}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="minute1">Chiquvchi tarmoq ichida</label>
                                        <input type="text" class="form-control" id="minute1" name="minute1" value="@if(old('minute1')){{old('minute1')}}@else{{$tariff->minute1}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="internet">Internet</label>
                                        <input type="text" class="form-control" id="internet" name="internet" value="@if(old('internet')){{old('internet')}}@else{{$tariff->internet}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="sms">SMS</label>
                                        <input type="text" class="form-control" id="sms" name="sms" value="@if(old('sms')){{old('sms')}}@else{{$tariff->sms}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumot</label>
                                        <input type="text" class="form-control" id="body" name="body" value="@if(old('body')){{old('body')}}@else{{$tariff->body}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="changing">Tarifni almashtirish</label>
                                        <input type="text" class="form-control" id="changing" name="changing" value="@if(old('changing')){{old('changing')}}@else{{$tariff->changing}}@endif">
                                    </div>



                                    <div class="form-group">
                                        <label for="group">Categoryasi</label>
                                        <select name="category_id" id="group" class="form-control">
                                            @foreach( $categories as $category)
                                                <option value="{{$category->id}}" {{$tariff->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Yuborish</button>
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
