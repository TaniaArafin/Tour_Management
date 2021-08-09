<?php
    $sum = $package['reviewPoint'];
    $count = $package['totalReview'];

    if($count == 0) {
        $avarage = 0;
    }
    else {
        $avarage = $sum / $count;
    }
?>
@extends('master')

<style>
    .bannerImage {
            object-fit: cover;
            width: 100%;
            max-height: 40vh;
        }
</style>

@section('content')
    <div class="col-8 mx-auto my-3 shadow rounded-3" style="background-color: #fff7f0">
        <img src="{{ asset('storage/package/'. $package['file_path']) }}" class="card-img-top bannerImage" alt="...">
        <div class="container">
            <div class="row py-3">
                <div class="col-6 boldText h2 px-4 m-0 textPrimary">
                    {{$package['title']}}
                    <div class="mediumText h5">
                        <i class="bi bi-star-fill text-warning me-2"></i>{{round($avarage, 1)}} ({{$count}})
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <a href="/booking/{{$package['id']}}" class="card-link btn py-1 px-3 me-3 bgPrimary semiBoldText text-light">Book Tour</a>
                </div>
            </div>
            <div class="row bg-light py-2 shadow-sm border-top border-bottom justify-content-center">
                <div class="col-3 border-end text-center">
                    <span class="semiBoldText">Price</span><br>
                    <span class="mediumText">{{$package['finalPrice']}} BDT</span>
                </div>
                <div class="col-3 text-center">
                    <span class="semiBoldText">Duration</span><br>
                    <span class="mediumText">{{$package['durationDay']}} Days {{$package['durationNight']}} Nights</span>
                </div>
            </div>
            <div class="row py-2">
                <h5 class="mt-2 boldText ms-3 fst-italic textPrimary">About the Tour</h5>
                <div class="container">
                    <div class="mediumText mx-3">
                        {!! $package['description'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection