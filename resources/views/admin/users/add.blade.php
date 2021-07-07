@extends('admin.layout.master')
@section('title')
    Add user
@endsection
@section('title_page')
    Add user
@endsection
@section('content')
    @include('admin.layout.messages')

    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{route('user.store')}}">
            @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">User Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>

                        <div class="form-group">
                            <label for="inputName">Password</label>
                            <input type="password" id="password" name="password" class="form-control" >
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new User" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
