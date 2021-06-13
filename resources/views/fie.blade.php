<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .notifier {
            width: 350px;
            max-width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 1.25rem;
            border-radius: .50rem;
            box-shadow: .5rem .5rem 1rem 0 #d3d3d3;
            margin-top: 5rem;
            float: right;
            position: relative;

        }

        .notifier-header {
            display: flex;
            align-items: center;
            padding: 10px !important;
        }

        .notifier-text {
            margin-left: .5rem !important;
            margin-right: auto;
            font: bolder
        }

        .close {
            text-decoration: none;
            margin-right: .5rem !important;
        }

        .notifier-divider {
            border-bottom: 2px #d3d3d3 solid;
            margin: 0 5px;
        }

        .notifier-body {
            padding: 10px;
        }

        .show {
            opacity: 1;
            animation: move 2s ease-out;
            animation-iteration-count: 1;
        }

        @keyframes move {
            0% {
                right: -30%
            }

            100% {
                right: 0
            }
        }

        .hide {
            opacity: 0;
        }

        .invisible {
            animation: ltr 2s ease-in;
            animation-iteration-count: 1;
            opacity: 0;
            transition: opacity 1s linear 2s;
        }

        @keyframes ltr {
            0% {
                right: 0%;
                opacity: .9;
            }

            100% {
                right: -40%;
                opacity: .4;
            }
        }

    </style>
</head>
<body>

    <div class="notifier hide">
        <div class="notifier-header">
            <div class="notifier-text">Info</div>
            <a href="javascript:void(0);" class="close" id="close">&times;</a>
        </div>
        <div class="notifier-divider"></div>
        <div class="notifier-body">
            Your request for custom project form submited. Kindly wait for 24hr for reply.
        </div>
    </div>
    <button type="btn" id="showBtn">show</button>
    <script>
        let show = document.getElementById('showBtn');
        let close = document.getElementById('close')
        show.addEventListener("click", function() {
            let not = document.querySelector('.notifier');
            not.setAttribute('class', 'notifier show');
        })
        close.addEventListener("click", function() {
            let not = document.querySelector('.notifier');
            not.setAttribute('class', 'notifier invisible');
        })

    </script>
</body>
</html>
