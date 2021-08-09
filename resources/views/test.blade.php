<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
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

        table {
            border-collapse:separate; 
            border-spacing: 0 0.7rem
        }

    </style>
</head>
<body>
    <div>
        <h1 class="textPrimary" style="font-weight: bold; text-align: center">VROMON</h1>
        <div style="text-align: center; font-weight: bold; margin-top: -10px">Booking Receipt</div>
    </div>
    <table width="100%" style="margin-top: 10px; ">
        <tr style="background-color: #ea5d11;">
            <td colspan="2" style="padding: 10px; color: #ffffff; font-weight: bold;">Traveller Information</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Name:</td>
            <td>{{$booking['userName']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Email:</td>
            <td>{{$booking['userEmail']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Contact:</td>
            <td>{{$booking['userContact']}}</td>
        </tr>
        <tr style="background-color: #ea5d11;">
            <td colspan="2" style="padding: 10px; color: #ffffff; font-weight: bold;">Booking Information</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Tour ID:</td>
            <td>{{$booking['tourID']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Tour Name:</td>
            <td>{{$booking['tourName']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Travel Date</td>
            <td>{{$booking['travelDate']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Food Preference:</td>
            <td>{{$booking['food']}}</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Accomodation:</td>
            <td>{{$booking['hotel']}}</td>
        </tr>
        <tr style="background-color: #ea5d11;">
            <td colspan="2" style="padding: 10px; color: #ffffff; font-weight: bold;">Pricing</td>
        </tr>
        <tr>
            <td width="180px" style="padding: 5px 10px; font-weight: bold">Total Amount:</td>
            <td>{{$booking['price']}}</td>
        </tr>
    </table>
    
    

</body>
</html>