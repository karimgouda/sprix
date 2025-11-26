@extends('web.frontend.layout')

@section('title', $blog->title)

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">{{$blog->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('site.home')}}">{{__('site.Home')}}</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('site.blog')}}">{{__('site.Blog')}}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{$blog->title}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{public_storage($banner->image)}}" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Details Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="{{public_storage($blog->image)}}" alt="{{$blog->title}}">
                    <h1 class="mb-4">{{$blog->title}}</h1>
                    <p class="mb-4">{!! nl2br(e($blog->description)) !!}</p>
                    
                    @if($blog->points)
                        <h3 class="mb-3">{{__('site.Points')}}</h3>
                        <ul>
                            @foreach($blog->points as $point)
                                <li>{{$point}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details End -->

@endsection
