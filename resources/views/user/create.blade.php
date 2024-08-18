@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create user</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <br><input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('surname')}}" type="text" name="surname" class="form-control" placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('patronymic')}}" type="text" name="patronymic" class="form-control" placeholder="Patronymic">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('email')}}" type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('password')}}" type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('password_confirmation')}}" type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('age')}}" type="text" name="age" class="form-control" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <br><input value="{{old('adress')}}" type="text" name="adress" class="form-control" placeholder="Adress">
                            </div>
                            <div class="form-group">
                                <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option disabled selected>Gender</option>
                                    <option {{old('gender')== 1 ? ' selected' : ''}} value="1">Male</option>
                                    <option {{old('gender')== 2 ? ' selected' : ''}} value="2">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                        </form>
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
