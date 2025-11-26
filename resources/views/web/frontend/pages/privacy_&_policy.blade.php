@extends('web.frontend.layout')

@section('title', __('site.shared.Privacy Policy'))

@section('content')
<!-- Hero Start -->
@if($banner)
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">{{$banner->title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('site.home')}}">{{__('site.shared.Home')}}</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{__('site.shared.Privacy Policy')}}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="{{public_storage($banner->image)}}" alt="" style="max-height: 300px;">
            </div>
        </div>
    </div>
</div>
@endif
<!-- Hero End -->

<!-- Privacy Policy Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                @foreach($privacyPolicies as $policy)
                    <div class="mb-5">
                        @if(!$policy->without_title)
                            <h2 class="mb-4">{{ $policy->title }}</h2>
                        @endif

                        @if($policy->points->count() > 0)
                            <ul class="list-unstyled">
                                @foreach($policy->points as $point)
                                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $point->point }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Privacy Policy End -->

@endsection
