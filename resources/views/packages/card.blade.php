<?php
    $sum = $item['reviewPoint'];
    $count = $item['totalReview'];

    if($count == 0) {
        $avarage = 0;
    }
    else {
        $avarage = $sum / $count;
    }
?>

<style>
    .desc {
        max-height: 3vw;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="card col-md-3 col-10 p-0 shadow-sm m-3" style="cursor: pointer">
    <img src="{{ asset('storage/package/'. $item['file_path']) }}" class="card-img-top" alt="...">
    <div class="card-body p-3">
        <h5 class="card-title h6 semiBoldText">{{$item['title']}}</h5>
        <div class="mediumText" style="font-size: 0.9rem">
            <i class="bi bi-star-fill text-warning me-2"></i>{{round($avarage, 1)}} ({{$count}})
        </div>
    </div>
    <ul class="list-group list-group-flush" style="font-size: 0.8rem">
        <li class="list-group-item">
            <i class="bi bi-clock-fill textPrimary"></i>
            <span class="semiBoldText ms-2">{{$item['durationDay']}} Days {{$item['durationNight']}} Nights</span>
        </li>
        <li class="list-group-item">
            <i class="bi bi-tags-fill textPrimary"></i>
            <span class="semiBoldText ms-2">{{$item['finalPrice']}} BDT</span>
            @if ($item['discount'] != 0)
                <span class="semiBoldText ms-2"><del class="text-danger">{{$item['price']}} BDT</del></span>
            @endif
        </li>
    </ul>
    <div class="card-body text-center">
        <a href="/package/{{$item['id']}}" class="card-link btn py-1 px-2 bgPrimary semiBoldText text-light" style="font-size: 0.7rem">Learn More</a>
        @if (Auth::check())
        <a href="/booking/{{$item['id']}}" class="card-link btn py-1 px-2 bgPrimary semiBoldText text-light" style="font-size: 0.7rem">Book Tour</a>    
        @else
        <a href="/login" class="card-link btn py-1 px-2 bgPrimary semiBoldText text-light" style="font-size: 0.7rem">Book Tour</a>
        @endif
        
    </div>
</div>