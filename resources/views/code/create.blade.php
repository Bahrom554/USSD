@extends('app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <center><h1>USSD kodlar/Xizmatlar qo'sish</h1></center>

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
                        <form role="form" action="{{route('code.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Paket</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder=" Paket" >
                                    </div>




                                    <div class="form-group">
                                        <label for="body">Qo'shimcha malumot</label>
                                        <input type="text" class="form-control" id="body" name="body" placeholder="Qo'shimcha malumot">
                                    </div>
                                    <div class="form-group">
                                        <label for="group">Turi</label>
                                        <select name="category" id="group" class="form-control">
                                            <option value="ussd">Ussd ko'd</option>
                                            <option value="xiz">Xizmatlar</option>
                                            <option value="pxiz"> Pullik Xizmatlar</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kiritish</button>
                                        <a href="{{route('code.index')}}" class="btn btn-warning">Orqaga</a>
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
