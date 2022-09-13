@extends('Admin')

@section('title')
    <title>Create Regio</title>
@endsection

@section('content')
    @extends('Admin')

    @section('title')
        <title>Meldingen</title>
    @endsection

    @section('content')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Meldingen</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">meldingen</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="container-fluid px-4">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Congratulations!</strong>  {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Meldingen Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Regio</th>

                                            <th>Regio Url</th>
                                            <th>Provincie</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($regios as $item)

                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->p2000}}
                                                </td>

                                                <td>{{$item->stad}}</td>
                                                <td>{{$item->straat}}</td>

                                                <td><a href="/meldingen/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a> <a href="/delete/meldingen/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Regio</th>

                                            <th>Regio Url</th>
                                            <th>Provincie</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>




    @endsection

@endsection
