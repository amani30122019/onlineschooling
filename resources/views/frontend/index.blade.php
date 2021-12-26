@extends('frontend.app')

@section('content')
    <!-- Header -->
    @include('frontend.index-pages.header')
    <!-- end of header -->
    <!-- Customers -->
    @include('frontend.index-pages.customers')
    <!-- end of customers -->
    <!-- Description -->
    @include('frontend.index-pages.descriptions')
    <!-- end of description -->
    <!-- Features -->
    @include('frontend.index-pages.features')
    <!-- end of features -->
    <!-- Details Lightboxes -->
    @include('frontend.index-pages.lightboxes')
    <!-- end of details lightboxes -->
    <!-- Details -->
    @include('frontend.index-pages.details')
    <!-- end of details -->
    <!-- Video -->
    @include('frontend.index-pages.videos')
    <!-- end of video -->
    <!-- Pricing -->
    @include('frontend.index-pages.pricing')
    <!-- end of pricing -->
    <!-- Testimonials -->
    @include('frontend.index-pages.testimonials')
    <!-- end of testimonials -->
    <!-- Newsletter -->
    @include('frontend.index-pages.newsletter')
    <!-- end of newsletter -->
@endsection
