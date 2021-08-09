@extends('master')

<style>
.founder {
        object-fit: cover;
        border: 4px solid #ea5d11;
    }
</style>

@section('content')
<div class="col-8 mx-auto mb-4">
    <h1 class="text-center my-3">
        <img src="{{url('/img/logo.jpg')}}" class="align-middle" alt="" width="100" height="100" loading="lazy">
        <span class="boldText align-middle textPrimary display-1">VROMON</span>
    </h1>
    <div class="semiBoldText h4 text-center textPrimary col-6 mx-auto p-2 text-uppercase m-0">
        About Us
    </div>
    <div class="mediumText" style="text-align: justify">
        Vromon is Bangladesh's largest travel agency, operating in all 64 districts in Bangladesh. We, the trip advisor Team
        always try to ensure the most satisfying tour for our customers. We believe that success only comes with hard work. 
        With Vromon, you can expect the best service possible while making your life memories. From ocean to hill tracks, 
        we are constantly working to expand our network.
    </div>
    <div class="semiBoldText h4 text-center textPrimary col-6 mx-auto p-2 text-uppercase m-0 mt-3">
        Meet The Founder
    </div>
    <div class="my-2 p-0 row justify-content-center">
        <div class="col-3 m-0 text-end">
            <img src="{{url('/img/founder.jpg')}}" alt="" class="rounded-circle founder" height="200" width="200">
        </div>
        <div class="col-6 m-0 d-flex align-items-center">
            <div class="m-0 p-0">
                <div class="boldText h3 textPrimary">
                    Umma Tania Arafin
                </div>
                <div class="mediumText">
                    <div class="semiBoldText m-0">Founder</div>
                    Vromon Travels Ltd.
                </div>
                <div class="mediumText mt-3">
                    <div class="semiBoldText">Undergradute Student</div>
                    Department of Computer Science & Engineering<br>
                    BRAC University
                </div>
            </div>
        </div>
    </div>
    <div class="semiBoldText h4 text-center textPrimary col-6 mx-auto p-2 text-uppercase m-0 mt-3">
        Message From The Founder
    </div>
    <div class="my-2 p-0 mediumText">
        This website is made for a project for my CSE471 course. It is built with Laravel, Javascript & Bootstrap.
        We tried to make it as much user frindly as possible. If you have any constructive suggestions, please
        leave a review. We will be glad to hear from you. Thank you.
    </div>
</div>

@endsection