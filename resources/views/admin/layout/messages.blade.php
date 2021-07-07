@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> success !</h5>
        {{session::get('success')}}
    </div>
    @endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Error !</h5>
        {{session::get('error')}}
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Errors !</h5>
        @foreach($errors->all() as $error)
           {{$error}}.'<br>'
        @endforeach
    </div>
{{--    {{'There are errors'}}--}}

    @endif
