@extends('app')
@section('Resection')
    <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('main_content')
    @include('includes.errors')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <center><h1>Categoryalar</h1></center>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <a class='col-lg-offset-5 btn btn-success' href="{{route('categories.create')}}">Yangi category qo'shish</a>


                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomi</th>
                                <th>Turi</th>
                                <th>Companya</th>
                                <th>O'zgartirish</th>
                                <th>O'chirish</th>
                            </tr>
                            </thead>
                            <body>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->type}}</td>
                                    <td>{{$category->company}}</td>

                                    <td><a href="{{route('categories.edit',$category  ->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                                    </td>
                                    <td>
                                        <form id="delete-form-{{$category->id}}" action="{{route('categories.destroy',$category->id)}}" method="post"  style="display: none">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are sure,You want delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$category->id}}').submit();}
                                            else{
                                            event.preventDefault();}" >
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                            </body>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nomi</th>
                                <th>Turi</th>
                                <th>Companya</th>
                                <th>O'zgartirish</th>
                                <th>O'chirish</th>
                            </tr>

                            </tfoot>

                        </table>
                    </div>

                    <!-- /.box-body -->


                </div>
            </div></section>
        <!-- /.content -->
    </div>
@endsection
@section('footsteps')
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection
