<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/qrcode.js') }}"></script>
    
    <title>Receipt</title>

    <style>
        body {
            font-family: Montserrat;
        }

        .semiBoldText {
            font-family: Montserrat;
            font-weight: 600;
        }

        .boldText {
            font-family: Montserrat;
            font-weight: 700;
        }

        .mediumText {
            font-family: Montserrat;
            font-weight: 500;
        }

        a {
            text-decoration: none;
        }

        .textPrimary {
            color: #ea5d11;
        }

        .textSecondery {
            color: #ffffff;
        }

        .textLight {
            color: #ffffff;
        }

        .borderPrimary {
            border: 2px solid #ea5d11;
        }

        .bgPrimary {
            background-color: #ea5d11;
        }

        .bgLight {
            background-color: #ffffff;
        }

        .socialLinks {
            color: #b4b4b4;
            cursor: pointer;
            transition: 0.2s;
        }

        .socialLinks:hover {
            color: #525252;
        }

        .bannerImage {
            object-fit: cover;
            width: 100%;
            height: 65vh;
        }

    </style>
</head>
<body>
    <div class="col-9 mx-auto border">
        <div class="row p-3 justify-content-between shadow-sm m-0" style="background-color: #fff7f0">
            <div class="col-5 my-0 ms-3">
                <img src="{{url('/img/logo.jpg')}}" class="align-middle shadow-sm rounded-3" alt="" width="50" height="50" loading="lazy">
                <span class="boldText align-middle textPrimary h3 ms-2">VROMON</span>
            </div>
            <div class="col-6 h3 boldText me-3 my-0 d-flex align-items-center justify-content-end">
                <span class="align-middle">Booking Receipt</span>
            </div>
        </div>
        <div class="bgPrimary py-2 px-3 rounded-2 m-2 semiBoldText shadow-sm text-light">
            Traveller Information
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Name:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['userName']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Email:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['userEmail']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Contact:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['userContact']}}
            </div>
        </div>
        <div class="bgPrimary py-2 px-3 rounded-2 m-2 semiBoldText shadow-sm text-light">
            Booking Information
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Tour ID:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['tourID']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Tour Name:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['tourName']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Tour Duration:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['tourDuration']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Travel Date:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['travelDate']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Transportation:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['transportation']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Food Preference:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['food']}}
            </div>
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Accomodation:
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['hotel']}}
            </div>
        </div>
        <div class="bgPrimary py-2 px-3 rounded-2 m-2 semiBoldText shadow-sm text-light">
            Pricing
        </div>
        <div class="row px-1 py-1 mx-2">
            <div class="col-2 semiBoldText">
                Total Amount
            </div>
            <div class="col-4 mediumText border-bottom">
                {{$booking['price']}}
            </div>
        </div>
        <div class="bgPrimary py-2 px-3 rounded-2 m-2 semiBoldText shadow-sm text-light">
            Ticket
        </div>
        <div class="border col-2 mx-auto text-center d-flex justify-content-center p-2 m-3">
            <div id="qrcode"></div>    
        </div>
        <div class="col-2 text-center semiBoldText text-light mx-auto mb-4 bgPrimary rounded-2 p-2">
            Scan Me
        </div>
        
        <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "{{$booking['userName']}} | {{$booking['userContact']}} | {{$booking['tourID']}} |",
            width: 150,
            height: 150,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
        </script>
    </div>
</body>
</html>