@extends('frontsite.layout.master')
@section('content')


    <!-- // Page Wrapper -->
    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                @foreach($post as $pos)
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
        <!-- // Post Slider -->

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                @foreach($post as $pos)
                <div class="post clearfix">
                    <img  src="{{asset('post_images/'.$pos->large_image)}}" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="{{route('frontsite.single',$pos->id)}}">{{$pos->title}}</a></h2>
{{--                        <i class="far fa-user"> Awa Melvine</i>--}}
                        &nbsp;
                        <i class="far fa-calendar">{{$pos->created_at}}</i>
                        <p class="preview-text">
                            {{substr($pos->body, 0,150).'...'}}
                        </p>
                        <a href="{{route('frontsite.single',$pos->id)}}" class="btn read-more">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- // Main Content -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="{{route('frontsite.search')}}" method="get">
                        @csrf
{{--                        @method('PUT')--}}
                        <input type="text" name="search" class="text-input" placeholder="Search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        @foreach($category as $cat)
                        <li><a href="{{route('frontsite.category',$cat->id)}}">{{$cat->title}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
        <!-- // Content -->

    </div>
    <!-- // Page Wrapper -->

@endsection
@section('title')
    Home page
@endsection
