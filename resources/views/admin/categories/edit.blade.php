@extends('admin.layout.master')
@section('title')
    Edit category
@endsection
@section('title_page')
    Edit category
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{route('category.update',$category)}}">
            @csrf
            @method('PUT')
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
                            <label for="inputName">Category Title</label>
                            <input type="text" id="inputName" name="title" class="form-control" value="{{$category->title}}">
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
                <input type="submit" value="Update Category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->

@endsection
