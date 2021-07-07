@extends('frontsite.layout.master')
@section('content')


    <!-- // Page Wrapper -->
    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Category Posts</h1>


            <div class="post-wrapper">
                @foreach($Posts as $pos)
                    <div class="post">
                        <img src="{{asset('post_images/'.$pos->large_image)}}" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="{{route('frontsite.single',$pos->id)}}">{{$pos->title}}</a></h4>
                            {{--                        <i class="far fa-user"> Awa Melvine</i>--}}
                            &nbsp;
                            <i class="far fa-calendar">{{$pos->created_at}}</i>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>

        @endsection
        @section('title')
            Category post
@endsection
