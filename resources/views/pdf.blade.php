<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>StudyEarth | PDF Viewer</title>
    <style>
        .pdfobject-container {
            width: 100%;
            height: 100vh;

        }

        .pdfobject {
            border: solid 6px #666;
        }

        .hidden {
            display: none;
        }

    </style>

</head>

<body>

    <div id="pdf" style="border: solid 1px black"></div>

    <script src="https://unpkg.com/pdfobject@2.2.5/pdfobject.min.js"></script>
    <script>
        var options = {
            pdfOpenParams: {
                navpanes: 0
                , toolbar: 0
                , statusbar: 0
            , }
            , forcePDFJS: true
            , PDFJS_URL: "{{ $viewer }}"
        };

        var myPDF = PDFObject.embed('{{ $pdf_name }}', "#pdf", options);

    </script>

</body>

</html>
