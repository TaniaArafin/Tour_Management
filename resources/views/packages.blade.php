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
</style>

@section('content')
    <div class="col-10 mx-auto">
        <h4 class="boldText textPrimary m-3 text-center">All Offered Packeges</h4>
        <div class="row my-3 justify-content-center">
            @foreach ($packages as $item)
                @include('packages.card')
            @endforeach
        </div>
        <div class="mt-3 justify-content-center d-flex mediumText pagination">
            {{$packages->links()}}
        </div>
    </div>
@endsection