@extends('master')

<style>
    .banner {
        background-image: url('/img/banner_2.jpg');
        background-size: 100%;
        height: 32vw;
    }
    .menuItem {
        cursor: pointer;
    }

    .menuItem:hover {
        background-color: #ffffff;
        transition: 0.1s;
        box-shadow: 0 0 1px 1px #0000002f;
    }
</style>

@section('content')
<div class="m-0 p-o row">
    {{-- sidebar --}}
    <div class="col-2 p-0 shadow" style="height: 91.5vh; background-color: #fff7f0">
        @include('user.sidebar')
    </div>
    {{-- content --}}
    <div class="col-10">
        <div class="p-3 h2 textPrimary boldText">
            My Tours
        </div>
        <table class="table mx-auto w-75">
        <thead>
            <tr class="semiBoldText">
                <td>Tour Name</td>
                <td>Travel Date</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tour as $item)
            <tr class="mediumText">
                <td>{{$item->tourName}}</td>
                <td>{{$item->travelDate}}</td>
                <td>{{$item->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
    </div>
</div>

<script>
    
</script>
@endsection