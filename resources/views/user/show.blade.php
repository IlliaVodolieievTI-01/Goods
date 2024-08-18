@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Color</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex p-3">
                                <div class="mr-3">
                                    <a href="{{route('user.edit', $user -> id)}}" class="btn btn-primary">Edit user</a>
                                </div>
                                <form action="{{route('user.delete', $user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>


                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Patronymic</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Adress</th>
                                        <th>Gender</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$user -> id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{$user -> name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Surame</td>
                                            <td>{{$user -> surname}}</td>
                                        </tr>
                                        <tr>
                                            <td>Patronymic</td>
                                            <td>{{$user -> patronymic}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$user -> email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td>{{$user -> Age}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adress</td>
                                            <td>{{$user -> adress}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>{{$user -> genderTitle}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
