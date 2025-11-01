@extends('layouts.site')

@section('meta_title', $data->meta_title)
@section('meta_kw', $data->meta_kw)
@section('meta_des', $data->meta_des)

@section('content')
@include('layouts.slider')

<div class="container py-5">

    <div class="row">
        <div class="col text-center mb-5">
            <h1 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="maskUp">
                {{ $data->title }}
            </h1>
            <div class="lead text-justify appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                {!! $data->body !!}
            </div>
        </div>
    </div>

    {{-- Image Gallery Section --}}
    <div class="row justify-content-center">
        <div class="col-md-12 text-center mb-4">
            <h3 class="fw-bold border-bottom pb-2 d-inline-block">Gallery</h3>
        </div>

        @php
            $images = [
                $page->img1,
                $page->img2,
                $page->img3,
                $page->img4,
            ];
        @endphp

        @foreach ($images as $img)
            @if ($img)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card border-0 shadow-sm rounded-3 h-100 overflow-hidden hover-zoom">
                        <img src="{{ asset('uploads/' . $img) }}" class="card-img-top img-fluid" alt="Image" style="object-fit: cover; height: 220px;">
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Partners --}}
    @include('layouts.partner')

</div>

{{-- Small CSS to make it more stylish --}}
<style>
    .hover-zoom img {
        transition: transform 0.4s ease;
    }
    .hover-zoom:hover img {
        transform: scale(1.05);
    }
</style>

@stop
