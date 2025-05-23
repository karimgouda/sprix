@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Sprix</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">{{$slider->title}}</h1>
                    <p class="text-white mb-4 animated slideInRight">{{$slider->description}}</p>
                    <a href="{{route('site.about')}}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">{{__('site.Read More')}}</a>
                    <a href="{{route('site.contact')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">{{__('site.Contact Us')}}</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{public_storage($slider->image)}}" alt="">
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
                                                <a class="btn px-3 mt-auto mx-auto" href="{{route('site.about')}}">{{__('site.Read More')}}</a>
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



    <!-- Case Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.Sprix')}}</div>
                <h1 class="mb-4">{{__('site.blog_title')}}</h1>
            </div>
            <div class="row g-4">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{public_storage($blog->image)}}" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>{{$blog->title}}</small>
                                <h5 class="lh-base text-white mb-3">
                                    {{str()->length($blog->description)}}
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{__('site.Popular FAQs')}}</div>
                <h1 class="mb-4">{{__('site.Frequently Asked Questions')}}</h1>
            </div>
            <div class="row">
                @foreach($faqs->chunk(ceil($faqs->count() / 2)) as $faq )
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionFAQ1">
                            @foreach($faq as $item)
                                <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-{{$item->id}}" aria-expanded="false" aria-controls="collapseOne">
                                           {{$item->title}}
                                        </button>
                                    </h2>
                                    <div id="collapseOne-{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            {{$item->description}}
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
    <!-- FAQs Start -->


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

