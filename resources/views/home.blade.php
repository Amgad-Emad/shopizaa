@extends('layouts.shopizaa')

@section('title', 'Home - SHOPIZAA')

@section('content')
    @include('sections.home.hero')
    @include('sections.home.about')
    @include('sections.home.banner')
    @include('sections.home.services')
    @include('sections.home.text-slider')
    @include('sections.home.portfolio')
    @include('sections.home.pricing')
    @include('sections.home.testimonials')
    @include('sections.home.faq')
    @include('sections.home.cta')
    @include('sections.home.blog')
@endsection
