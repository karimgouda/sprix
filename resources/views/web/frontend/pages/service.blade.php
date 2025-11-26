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
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('site.home')}}">{{__('site.Home')}}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{__('site.About Us')}}</li>
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


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.Our Services')}}</div>
                    <h1 class="mb-4">{{__('site.service_title')}}</h1>
                    <p class="mb-4">{{__('site.service_description')}}</p>
                    <a class="btn btn-primary rounded-pill px-4" href="{{route('site.about')}}">{{__('site.Read More')}}</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">

                        @foreach($services->chunk(ceil($services->count() / 2)) as $serviceChunk)
                            <div class="col-md-6">
                                <div class="row g-4">
                                    @foreach($serviceChunk as $item)
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                                <div class="service-icon btn-square">
                                                    <i class="fa fa-robot fa-2x"></i>
                                                </div>
                                                <h5 class="mb-3">{{ $item->title ?? 'Service Title' }}</h5>
                                                <p>{{ $item->description ?? 'Default description' }}</p>
                                                <a class="btn px-3 mt-auto mx-auto" href="{{route('site.services.details', $item->slug)}}">{{__('site.Read More')}}</a>
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
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.Testimonial')}}</div>
                    <h1 class="mb-4">{{__('site.What Say Our Clients!')}}</h1>
                    <p class="mb-4">{{__('site.Testimonial_description')}}</p>
                    <a class="btn btn-primary rounded-pill px-4" href="{{route('site.about')}}">{{__('site.Read More')}}</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        @foreach($clients as $client)
                            <div class="testimonial-item ps-5">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p class="fs-4">{{$client->description}}</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{public_storage($client->image)}}"
                                         style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">{{$client->name}}</h5>
                                        <span>{{$client->profession}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection
