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
                            <a class="case-overlay text-decoration-none" href="{{route('site.blog.details', $blog->slug)}}">
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

@endsection
