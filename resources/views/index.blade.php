@extends('master')

<style>
    .banner {
        background-image: url('/img/banner_2.jpg');
        background-size: 100%;
        height: 32vw;
    }
</style>

@section('content')
    <div class="col-12">
        <div class="banner px-5 d-flex align-items-center">
            <div>
                <h3 class="text-light boldText my-2 mt-5 mt-xl-0">Lets Visit Somewhere Amazing</h3>
                <a href="/allPackages" class="btn bgPrimary text-light semiBoldText px-3 py-2 my-2 shadow-sm">Explore Now</a>
            </div>
        </div>
        <div class="bgPrimary px-2 py-4 justify-content-center d-flex">
            <form action="/search" method="GET" class="col-7 d-flex my-auto align-middle justify-content-center">
                <label class="text-light semiBoldText d-md-flex justify-content-center my-auto align-middle mx-3">Where you want to go?</label>
                <input type="text" name="search" class="w-50 form-control semiBoldText border border-0 shadow-sm" placeholder="Search Packeges">
                <button type="submit" class="btn btn-light semiBoldText ms-2 px-5 shadow-sm">Search</button>
            </form>
        </div>
        <div class="col-8 mx-auto my-4">
            <div class="semiBoldText h4 textPrimary text-center my-2">Popular Packeges</div>
            <div class="mediumText text-center col-6 mx-auto">“The world is a book and those who do not travel read only one page.” - <i>Saint Augustine</i></div>
            
            <div class="row my-3 justify-content-center">
                @foreach ($packages as $item)
                    @include('packages.card')
                @endforeach
            </div>
        </div>
    </div>
@endsection