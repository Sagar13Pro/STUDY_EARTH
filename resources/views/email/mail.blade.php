<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Study Earth</title>
    <style>
        .invoice-box {
            background-color: #FFFFFF;
            max-width: 800px;
            margin: 30px 0;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial,
                sans-serif;
            color: #555;
        }

        .invoice-boxx {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial,
                sans-serif;
            color: #f7f7f7;
        }

        .btn {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -o-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: linear-gradient(to bottom, #3cb0fd, #3cb0fd);
            -webkit-border-radius: 4;
            -moz-border-radius: 4;
            border-radius: 4px;
            font-family: Arial;
            color: #ffffff;
            font-size: 35px;
            padding: 6px 16px 10px 20px;
            text-decoration: none;
        }

        .btn:hover {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: -o-linear-gradient(top, #3cb0fd, #3cb0fd);
            background-image: linear-gradient(to bottom, #3cb0fd, #3cb0fd);
            text-decoration: none;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #EEEEE0;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

    </style>
</head>
<body>
    <div class="invoice-boxx">
        <h1 align="center" style="color: black;">Study Earth</h1>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title" align="center">
                                    <img src="c_plus_plus.png" style="width:50%; max-width:300px;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <table>
                    <tr class="heading">
                        <td> Payment Details
                        </td>
                    </tr><br>
                    <tr class="details">
                        <td> Transaction ID
                        </td>
                        <td> {{ $txn_id }}
                        </td>
                    </tr>
                    <tr class="details">
                        <td> Total Amount
                        </td>
                        <td> {{ $amount }}
                        </td>
                    </tr>
                    @if (!empty($data['paid_for']))
                    <tr class="details">
                        <td> Paid For
                        </td>
                        <td>
                            {{ $paid_for }}
                        </td>
                    </tr>
                    @endif
                    <tr class="details">
                        <td> Paid To
                        </td>
                        <td> Study Earth
                        </td>
                    </tr>
                </table>
                <p>Reply to this email to get in touch with <strong>Study Earth</strong></p><br><br>
                <p>Share this on social media
                    <a href="#">
                        <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png" align="middle" style="width:10%; max-width:50px;">
                    </a>
                    <a href="#">
                        <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_circle_color-128.png" align="middle" style="width:10%; max-width:50px;">
                    </a>
                </p>
        </div>
        <div>
        </div>
</body>
</html>
