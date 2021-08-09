@extends('master')

<style>
    .banner {
        background-image: url('/img/banner_2.jpg');
        background-size: 100%;
        height: 65vh;
    }

    .pagination > li > a
    {
        background-color: white;
        color: #ea5d11;
    }

    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover
    {
        color: #5a5a5a;
        background-color: #eee;
        border-color: #ddd;
    }

    .pagination > .active > a
    {
        color: white;
        background-color: #ea5d11 !Important;
        border: solid 1px #ea5d11 !Important;
    }

    .pagination > .active > a:hover
    {
        background-color: #ea5d11 !Important;
        border: solid 1px #ea5d11;
    }
    .desc {
        max-height: 3vw;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

@section('content')
    <div class="col-10 mx-auto">
        <h4 class="boldText textPrimary m-3 text-center">
            Search Results for:
            <span class="text-dark">
                {{$Query}}
            </span>
        </h4>
        @if ($Results == null)
            <div class="semiBoldText">
                No Packeges Found
            </div>
        @else
            <div class="row my-3 justify-content-center">
                @foreach ($Results as $item)
                <div class="card col-md-3 col-10 p-0 shadow-sm m-3" style="cursor: pointer">
                    <img src="{{ asset('storage/package/'. $item->file_path) }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title h6 semiBoldText">{{$item->title}}</h5>
                        {{-- <div class="mediumText" style="font-size: 0.9rem">
                            <i class="bi bi-star-fill text-warning me-2"></i>{{round($Avarage, 1)}} ({{$count}})
                        </div> --}}
                    </div>
                    <ul class="list-group list-group-flush" style="font-size: 0.8rem">
                        <li class="list-group-item">
                            <i class="bi bi-clock-fill textPrimary"></i>
                            <span class="semiBoldText ms-2">{{$item->durationDay}} Days {{$item->durationNight}} Nights</span>
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-tags-fill textPrimary"></i>
                            <span class="semiBoldText ms-2">{{$item->finalPrice}} BDT</span>
                            @if ($item->discount != 0)
                                <span class="semiBoldText ms-2"><del class="text-danger">{{$item->price}} BDT</del></span>
                            @endif
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="/package/{{$item->id}}" class="card-link btn py-1 px-2 bgPrimary semiBoldText text-light" style="font-size: 0.7rem">Learn More</a>
                        <a href="#" class="card-link btn py-1 px-2 bgPrimary semiBoldText text-light" style="font-size: 0.7rem">Book Tour</a>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="mt-3 justify-content-center d-flex mediumText pagination">
                {{$Results->links()}}
            </div> --}}
        @endif
    </div>
@endsection