@extends('admin.layout.master')
@section('title')
    Users
@endsection
@section('title_page')
    Users page
@endsection
@section('content')
    @include('admin.layout.messages')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            User title
                        </th>
{{--                        <th style="width: 30%">--}}
{{--                            image--}}
{{--                        </th>--}}
{{--                        <th>--}}
{{--                            Password--}}
{{--                        </th>--}}

                        <th style="width: 30%" class="text-center">
                            Status
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{$loop->iteration}}

                        </td>
                        <td>
                            <a>
                                {{$user->name}}                            </a>
                            <br/>
                            <small>
                                Created {{$user->created_at}}
                            </small>
                        </td>
{{--                        <td>--}}
{{--                            <ul class="list-inline">--}}
{{--                                <li class="list-inline-item">--}}
{{--                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </td>--}}

{{--                        <td class="project-state">--}}
{{--                            <span class="badge badge-success">{{$user->password}}</span>--}}
{{--                        </td>--}}
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('user.show',$user)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('user.edit',$user)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form method="post" action="{{route('user.destroy',$user)}}">
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="btn btn-danger btn-sm" >

                                Delete
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$users->links()}}

    </section>
    <!-- /.content -->
@endsection
