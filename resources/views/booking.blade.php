@extends('master')

<style>
    .banner {
        background-image: url('/img/banner_2.jpg');
        background-size: 100%;
        height: 65vh;
    }
</style>

@section('content')
<div class="col-5 mx-auto">
    <h4 class="boldText textPrimary m-3 text-center">Tour Booking</h4>

    <div class="mx-auto my-3 shadow rounded-3 p-4" style="background-color: #fff7f0">
        <form action="/book" method="POST">
            @csrf
            <input type="text" name="userID" value="{{auth()->user()->id}}" style="display: none">
            <input type="text" name="userName" value="{{auth()->user()->name}}" style="display: none">
            <input type="text" name="userEmail" value="{{auth()->user()->email}}" style="display: none">
            <input type="text" name="userContact" value="{{auth()->user()->contact}}" style="display: none">
            <div class="mediumText my-2 row justify-content-center">
                <div class="col-4 semiBoldText">
                    Tour ID:
                </div>
                <div class="col-6">
                    {{$package['id']}}
                </div>
                <input type="text" name="tourID" value="{{$package['id']}}" style="display: none">
            </div>
            <div class="mediumText my-2 row justify-content-center">
                <div class="col-4 semiBoldText">
                    Tour Name:
                </div>
                <div class="col-6">
                    {{$package['title']}}
                </div>
                <input type="text" name="tourName" value="{{$package['title']}}" style="display: none">
            </div>
            <div class="mediumText my-2 row justify-content-center">
                <div class="col-4 semiBoldText">
                    Tour Duration:
                </div>
                <div class="col-6">
                    {{$package['durationDay']}} Days {{$package['durationNight']}} Nights
                </div>
                <input type="text" style="display: none" name="tourDuration" value="{{$package['durationDay']}} Days {{$package['durationNight']}} Nights">
            </div>
            <hr class="w-100">
            <div class="row justify-content-center my-3">
                <div class="col-5 py-0">
                    <div class="semiBoldText align-middle my-1">Pick the Travel Date</div>
                    <input type="date" class="form-control mediumText" style="font-size: 0.8rem" name="travelDate">
                </div>
                <div class="col-5 py-0">
                    <div class="semiBoldText align-middle my-1">Transportation</div>
                    <select class="form-select mediumText" name="transportation" aria-label="transportation" style="font-size: 0.8rem">
                        <option value="Bus" selected>Bus</option>
                        <option value="Launch">Launch</option>
                        <option value="Airplane">Airplane</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-5 mb-2">
                    <div class="semiBoldText align-middle my-1">Food Preference</div>
                    <select onChange="addExtra('food', this)" class="form-select mediumText" name="food" aria-label="Transportation" style="font-size: 0.8rem">
                        <option value="Standard" selected>Standard</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>
                <div class="col-5 mb-2">
                    <div class="semiBoldText align-middle my-1">Accomodation</div>
                    <select onChange="addExtra('accomodation', this)" class="form-select mediumText" name="hotel" aria-label="Transportation" style="font-size: 0.8rem">
                        <option value="Standard" selected>Standard</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>
            </div>
            <hr class="w-100">
            <div class="mediumText my-2 px-2 row justify-content-center col-10 mx-auto">
                <div class="col-9 semiBoldText">
                    Tour Price:
                </div>
                <div class="col-3 text-end" id="price">
                    {{$package['finalPrice']}}
                </div>
            </div>
            <div style="display: none" class="mediumText my-2 px-2 row justify-content-center col-10 mx-auto" id="food">
                <div class="col-9 semiBoldText">
                    Additional Cost (Food):
                </div>
                <div class="col-3 text-end" id="FoodCost">
                    
                </div>
            </div>
            <div style="display: none" class="mediumText my-2 px-2 row justify-content-center col-10 mx-auto" id="accomodation">
                <div class="col-9 semiBoldText">
                    Additional Cost (Accomodation):
                </div>
                <div class="col-3 text-end" id="AccomodationCost">
                    
                </div>
            </div>
            <div class="mediumText my-2 p-2 textPrimary row border-top rounded-2 justify-content-center col-10 mx-auto" id="accomodation">
                <div class="col-9 semiBoldText">
                    Total
                </div>
                <div class="col-3 text-end" id="total">
                    
                </div>
                <input type="text" name="price" id="totalPrice" value="" style="display: none">
            </div>
            <div class="text-center">
                <button type="submit" class="btn bgPrimary semiBoldText text-light shadow-sm">
                    Confirm Booking
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    var date = document.getElementById('date');
    var price = document.getElementById('price').innerHTML;
    var foodBox = document.getElementById('food');
    var hotelBox = document.getElementById('accomodation');
    var food = document.getElementById('FoodCost');
    var hotel = document.getElementById('AccomodationCost');

    var total = document.getElementById('total');
    var totalPrice = document.getElementById('totalPrice');
    var foodCost = food.innerHTML;
    var hotelCost = hotel.innerHTML;

    window.onload = getTotal(0, 0);

    function getTotal(cost1, cost2) {
        cost1 = Number(cost1);
        cost2 = Number(cost2);
        var value = Number(price) + cost1 + cost2;

        total.innerHTML = value;
        totalPrice.value = value;
    }
    
    function addExtra(value, object) {
        if (value == 'food') {
            if (object.value == 'Premium') {
                food.innerHTML = price * (15/100);
                foodBox.style.display = 'flex';
            }
            else {
                food.innerHTML = 0;
                foodBox.style.display = 'none';
            }
        }
        if (value == 'accomodation') {
            if (object.value == 'Premium') {
                hotel.innerHTML = price * (30/100);
                hotelBox.style.display = 'flex';
            }
            else {
                hotel.innerHTML = 0;
                hotelBox.style.display = 'none';
            }
        }
        getTotal(food.innerHTML, hotel.innerHTML);
        //console.log(price * (15/100));
    }
</script>
@endsection