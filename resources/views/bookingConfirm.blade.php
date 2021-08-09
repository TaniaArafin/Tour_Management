@extends('master')

<style>

</style>

@section('content')
    <div class="col-6 mx-auto text-center my-5 py-5">
        <div class="boldText h1 textPrimary">
            Booking Successful
        </div>       
        <div class="mediumText my-4">
            A reciept has been sent to <i class="textPrimary">{{auth()->user()->email}}</i>. Please report to our office 
            15 minute before deparature time in your travel date.
            <br><br>
            Travel Safe. Happy Vromon !
        </div>
        <a href="/downloadReceipt/{{$id}}" class="p-3 semiBoldText text-light bgPrimary rounded-3">
            <i class="bi bi-journal-arrow-down me-2"></i>
            Download Booking Receipt
        </a>
    </div>
@endsection