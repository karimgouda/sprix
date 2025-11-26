@extends('web.frontend.layout')

@section('title', __('site.shared.About us'))

@section('content')
<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">{{$banner->title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('site.home')}}">{{__('site.shared.Home')}}</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{__('site.shared.About Us')}}</li>
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


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <img class="img-fluid" src="{{public_storage($about->image)}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.shared.About Us')}}</div>
                <h1 class="mb-4">{{$about->title_1}}</h1>
                <p class="mb-4">{{$about->description_1}}</p>
                <p class="mb-4">{{$about->description_2}}</p>

                <div class="row g-3">
                    @php
                    $points = collect($about->title_2)->chunk(ceil(count($about->title_2) / 2));
                    @endphp

                    @foreach($points as $chunk)
                    <div class="col-sm-6">
                        @foreach($chunk as $point)
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $point }}</h6>
                        @endforeach
                    </div>
                    @endforeach

                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="{{route('site.about')}}">{{__('site.Read More')}}</a>
                    <a class="btn btn-outline-primary btn-square me-3" href="{{settings('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="{{settings('twitter')}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="{{settings('instagram')}}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="{{settings('linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.Our Team')}}</div>
                <h1 class="mb-4">{{__('site.Meet Our Experienced Team Members')}}</h1>
                <p class="mb-4">{{__('site.team_description')}}</p>
                <a class="btn btn-primary rounded-pill px-4" href="{{route('site.about')}}">{{__('site.Read More')}}</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    @foreach($teams->chunk(ceil($teams->count() / 2)) as $team)
                    <div class="col-md-6">
                        <div class="row g-4">
                            @foreach($team as $item)
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="{{public_storage($item->image)}}" alt="">
                                    <h5 class="mb-0">{{$item->title}}</h5>
                                    <small>{{$item->description}}</small>

                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary m-1" href="{{$item->video}}"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href="{{$item->progresses_titles}}"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href="{{$item->progresses_percentages}}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection