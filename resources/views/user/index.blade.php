@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
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
                            <div class="card-header">
                                <a href="{{route('user.create')}}" class="btn btn-primary">Add user</a>
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
                                    @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{route('user.show', $user->id)}}">{{$user -> id}}</td>
                                        <td>{{$user -> name}}</td>
                                        <td>{{$user -> surname}}</td>
                                        <td>{{$user -> patronymic}}</td>
                                        <td>{{$user -> email}}</td>
                                        <td>{{$user -> age}}</td>
                                        <td>{{$user -> adress}}</td>
                                        <td>{{$user -> genderTitle}}</td>
                                    </tr>
                                    @endforeach
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
