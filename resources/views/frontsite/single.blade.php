@extends('frontsite.layout.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content Wrapper -->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title">{{$post->title}}</h1>

                    <div class="post-content">
{{--                        <p>{{$pos->title}}--}}
{{--                        </p>--}}
                        <p>{{$post->body}}</p>

                    </div>
                </div>
            </div>
            <!-- // Main Content -->

            <!-- Sidebar -->
            <div class="sidebar single">

                <div class="fb-page" data-href="https://web.facebook.com/codingpoets/" data-small-header="false"
                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://web.facebook.com/codingpoets/" class="fb-xfbml-parse-ignore"><a
                            href="https://web.facebook.com/codingpoets/">Coding Poets</a></blockquote>
                </div>


{{--                <div class="section popular">--}}
{{--                    <h2 class="section-title">Popular</h2>--}}
{{--                    <div class="post clearfix">--}}
{{--                        @foreach($post as $pos)--}}
{{--                        <img src="{{asset('post_images/'.$post->large_image)}}" alt="">--}}
{{--                        <a href="{{route('frontsite.single',$post->id)}}" class="title">--}}
{{--                            <h4>{{$post->title}}</h4>--}}
{{--                        </a>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <div class="post clearfix">--}}
{{--                        <img src="{{asset('post_images/'.$post->large_image)}}" alt="">--}}
{{--                        <a href="{{route('frontsite.single',$post->id)}}" class="title">--}}
{{--                            <h4>{{$post->title}}</h4>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post clearfix">--}}
{{--                        <img src="images/image_1.png" alt="">--}}
{{--                        <a href="" class="title">--}}
{{--                            <h4>How to overcome your fears</h4>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post clearfix">--}}
{{--                        <img src="images/image_1.png" alt="">--}}
{{--                        <a href="" class="title">--}}
{{--                            <h4>How to overcome your fears</h4>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post clearfix">--}}
{{--                        <img src="images/image_1.png" alt="">--}}
{{--                        <a href="" class="title">--}}
{{--                            <h4>How to overcome your fears</h4>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                </div>


            </div>
            <!-- // Sidebar -->

        </div>
        <!-- // Content -->

    </div>
    <!-- // Page Wrapper -->

@endsection

@section('title')
    Single page
@endsection
