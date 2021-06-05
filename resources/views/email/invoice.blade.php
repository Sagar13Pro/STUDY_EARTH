<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        mt--5 {
            margin-top: 5px !important;
        }

        mt--3 {
            margin-top: 3px !important;
        }

        .mt--50 {
            margin-top: 50px !important;
        }

        .p--50 {
            padding: 50px !important;
        }

        .px--0 {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .p--10 {
            padding: 10px !important;
        }

        .p--5 {
            padding: 5px !important;
        }

        .p--20 {
            padding: 20px !important;
        }

        .font-size-20 {
            font-size: 20px !important;
        }

        table.table-width-100 {
            width: 100% !important;
        }

        .border {
            border: 2px solid;
        }

        .border.border-color-grey {
            border-color: #d4d4d3;
        }

        .text-align-center {
            text-align: center !important;
        }

        .font-700 {
            font-weight: 700;
        }

        .font-size-26 {
            font-size: 26px !important;
        }

        .font-size-20 {
            font-size: 20px !important;
        }

        .border-right {
            border-right: 2px solid #d3d3d3;
        }

        .border-left {
            border-left: 2px solid #d3d3d3;
        }

        .border-bottom {
            border-bottom: 2px solid #d3d3d3;
        }

        body {
            margin-top: 0;
        }

        .bg-grey {
            background: #d4d4d4;
        }

        img.logo {
            width: 15rem;
            height: 6rem;
        }

        .details {
            text-align: right;
        }

        .details .contact-info {
            margin-top: 5px;
        }

        table.border-spacing-0 {
            border-spacing: 0px;
        }

    </style>
</head>
<body>
    <div class="header">
        <table class="table-width-100">
            <tr>
                <img class="logo" src="assets/images/logo.png" alt="" style="margin: 0 14rem">
            </tr>
        </table>
    </div>

    <div class="mt--50">
        <table class="table-width-100">
            <tr>
                <td>
                    <div class="font-size-20 font-700">Transaction Receipt</div>
                    <div>Order ID: 1234567890</div>
                </td>
                <td class="details">{{ $date }}</td>
            </tr>
        </table>
    </div>
    <div class="border border-color-grey">
        <table class="table-width-100 p--50 px--0">
            <tr>
                <td class="text-align-center p--10 border-right">
                    <div>Product</div>
                    <div class=" mt--5">{{ $product }}
                    </div>
                </td>
                <td class="text-align-center p--10">
                    <div class="font-700">Amount Paid</div>
                    <div><span class="font-700">Rs</span> {{ $amount }}/-</div>
                </td>
            </tr>
        </table>
    </div>
    <div class="mt--50 border border-color-grey">
        <table class="table-width-100 border-spacing-0">
            <tr class="bg-grey">
                <td class="p--10 font-700">Customer Details</td>
                <td class="p--10"></td>
            </tr>
            <tr>
                <td class="p--10">Name</td>
                <td class="p--10">{{ $name }}</td>
            </tr>
            <tr>
                <td class="p--10">Email</td>
                <td class="p--10">{{ $email }}</td>
            </tr>
            <tr>
                <td class="p--10">Mobile Number</td>
                <td class="p--10">{{ $mobile }}</td>
            </tr>
            <tr>
                <td class="p--10">Address</td>
                <td class="p--10">{{ $address }}</td>
            </tr>
            <tr>
                <td class="p--10">Birth Date</td>
                <td class="p--10">{{ $dob }}</td>
            </tr>
            <tr class="bg-grey">
                <td class="p--10">Amount Paid</td>
                <td class="p--10">{{ $amount }}</td>
            </tr>
        </table>
    </div>
    <div class="mt--50">
        <table class="table-width-100">
            <tr>
                <td class="font-700 p--5 font-size-26">Declaration</td>
            </tr>
            <tr>
                <td class="p--5 font-size-20">
                    This is not an invoice but only a confirmation of the receipt of the amouout paid against for the service as
                    described above.
                </td>
            </tr>
            <tr>
                <td class="font-size-20 p--5 font-700">
                    Note: This is computer generated receipt and does not require physical signature.
                </td>
            </tr>
        </table>
    </div>
    <div class="mt--50">
        <table class="table-width-100">
            <tr>
                <td>Need help, Click <a href="https://www.studyearth.co.in/contact">here</td>

                <td class="details">For More, visit us: <a href="https://www.studyearth.co.in" target="_blank">Click here</a></td>

            </tr>
        </table>
    </div>

</body>
</html>
