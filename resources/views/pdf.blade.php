<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <style>
        .pdfobject-container {
            width: 100%;
            max-width: 600px;
            height: 600px;
            margin: 2em 0;
        }

        .pdfobject {
            border: solid 6px #666;
        }

        #results {
            padding: 1rem;
        }

        .hidden {
            display: none;
        }

        .success {
            color: #4F8A10;
            background-color: #DFF2BF;
        }

        .fail {
            color: #D8000C;
            background-color: #FFBABA;
        }

    </style>

</head>

<body>

    <div id="pdf" style="border: solid 3px red"></div>

    <script src="https://unpkg.com/pdfobject@2.2.5/pdfobject.min.js"></script>
    <script>
        var options = {
            pdfOpenParams: {
                navpanes: 0
                , toolbar: 0
                , statusbar: 0
            , }
            , forcePDFJS: true
            , PDFJS_URL: "{{ $path }}"
            //PDFJS_URL: "./pdfjs/web/viewer.html"
        };

        var myPDF = PDFObject.embed("1.pdf", "#pdf", options);

    </script>

</body>

</html>
