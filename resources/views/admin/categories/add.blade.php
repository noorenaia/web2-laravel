@extends('admin.layout.master')
@section('title')
    Add category
@endsection
@section('title_page')
    Add category
@endsection

@section('content')
    @include('admin.layout.messages')

    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{route('category.store')}}">
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
                            <label for="inputName"  >Category Title</label>
                            <input type="text" id="inputName" name="title" value="{{old('title')}}"class="form-control">
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
                <input type="submit" value="Create new Category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->

@endsection
