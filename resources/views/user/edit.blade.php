@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit user</h1>
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
                    <form action="{{route('user.update', $user->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <br><input type="text" name="name" value="{{$user->name ?? old('name')}}" class="form-control" placeholder="New name">
                        </div>
                        <div class="form-group">
                            <br><input type="text" name="surname" value="{{$user->surname ?? old('surname')}}" class="form-control" placeholder="New surname">
                        </div>
                        <div class="form-group">
                            <br><input type="text" name="patronymic" value="{{$user->patronymic ?? old('patronymic')}}" class="form-control" placeholder="New patronymic">
                        </div>
                        <div class="form-group">
                            <br><input type="text" name="age" value="{{$user->age ?? old('age')}}" class="form-control" placeholder="New age">
                        </div>
                        <div class="form-group">
                            <br><input type="text" name="adress" value="{{$user->adress ?? old('adress')}}" class="form-control" placeholder="New adress">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                                <option disabled selected>Gender</option>
                                <option {{$user->gender == 1 || old('gender')== 1 ? 'selected' : ''}} value="1">Male</option>
                                <option {{$user->gender == 2 || old('gender')== 2 ? 'selected' : ''}} value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit">
                        </div>
                    </form>
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
