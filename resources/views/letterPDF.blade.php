<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GenrateSurat</title>
        <!-- Styles -->
        <style>
            html {
                font-family: "Times New Roman", Times, serif;
            }

            page {
                background: white;
                display: block;
                margin: 0 auto;
                margin-bottom: 0.5cm;
                box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);

            }

            page[size="A4"] {
                position: relative;
                width: 21cm;
                height: 15cm;
            }

            .headerLetter {
                border-bottom: 5px solid #000;
                margin-right: 100px;
            }

            .headerContent {
                display: flex;
                margin-bottom: -200px
            }

            .border-botom {
                margin-bottom: -10px;
                border-bottom: 3px solid #000;
                color: #000;
                font-size: 15px;
            }

            .bodyLetter {
                margin-top: 10px;
                padding: 10px 50px;
            }

            .image {
                text-align: center;
                margin-right: 30px;
            }

            #footer {
                position: absolute;
                bottom: 0;
                height: auto;
            }

            .footLetter {
                border-top: 5px solid #000;
                margin-right: 100px;
                margin-bottom: -80px
            }

            .senderInfo {
                margin-bottom: 5px;
                padding-top: 10px;
                opacity: 0.5;
            }

            .senderInfo .info h5 {
                font-size: 12px;
                margin-top: 3px;
            }

            .senderInfo .info label {
                font-size: 12px;
                font-weight: bold;
                font-style: bold;
            }

            .senderInfo .info {
                display: flex;
                flex-direction: row;
                gap: 5px;
            }

            .midHeader h1 {
                font-size: 30px;
            }

            .midHeader h2 {
                font-size: 25px;
            }

            .midHeader h3 {
                font-size: 20px;
            }

            .midHeader h4 {
                font-size: 15px;
            }

            .midHeader {
                margin-top: 20px;
                text-align: center;
            }

            .leftHeader {
                text-align: center;
                opacity: 0.7;
                color: rgb(114, 113, 113);
                padding-bottom: -50px;
            }

            .leftHeader h3 {
                font-size: 10px;
            }

            .leftHeader h4 {
                font-size: 10px;
            }

            .info {
                display: flex;
                margin-bottom: -30px
            }

            .info h5 {
                font-size: 15px;
                padding-left: 50px;
            }

            .info label {
                font-size: 15px;
                font-weight: bold;
                font-style: bold;
            }

            .content {
                padding: 20px;
                font-size: 15px;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="{{ storage_path('app/public/images/appIcon.png') }}">
        <title>Generate Surat</title>
    </head>

    <body class="letterBody">
        <page size="A4">
            <div class="headerLetter">
                <div class="headerContent">
                    <div class="image" style="margin-right: 500px;">
                        <img class="img-fluid" width="140px" src="{{ storage_path('app/public/images/company.png') }}"
                            alt="">
                        <p>Omar's Company</p>
                    </div>
                    <div class="midHeader">
                        <h1>Omar Company</h1>
                        <h2>Jl. Pisang Kipas</h2>
                        <h3>+62 082123533955 - 1582479</h3>
                        <h4>omar.yem1111@gmail.com</h4>
                    </div>
                    <div class="leftHeader" style="margin-left: 500px;">
                        <h3>Malang,@php
                            $today = date("F j, Y, g:i a");
                            @endphp
                            {{$today}}
                        </h3>

                    </div>
                </div>
                <div class="border-botom" style="margin: 10px 10px; color: #fff">
                    -
                </div>
            </div>
            <div class="bodyLetter">
                <div class="senderInfo" style="margin-left: 20px">
                    <div class="info">
                        <label for="">Name:</label>
                        <h5>Omar Al-Maktary</h5>
                    </div>
                    <div class="info">
                        <label for="">Position:</label>
                        <h5>Programer</h5>
                    </div>
                    <div class="info">
                        <label for="">Phone:</label>
                        <h5>+62 08212 3533 955</h5>
                    </div>
                    <div class="info">
                        <label for="">Email:</label>
                        <h5>omar.yem1111@gmail.com</h5>
                    </div>
                </div>
                <div class="reciver" style="margin-top: 30px">
                    <div class="info">
                        <label for="">Dear/ </label>
                        <h5 style="padding-left: 80px">{{$letter->toWhom}}</h5>
                    </div>
                    <div class="info">
                        <label for="">Subject: </label>
                        <h5 style="padding-left: 80px">{{$letter->title}}</h5>
                    </div>
                </div>
                <div class="content">
                    {!!$letter->body!!}
                </div>
            </div>
            <div id="footer" class="footLetter" style="">
                <div class="border-botom" style="text-align: center">
                    Omar Company
                </div>
                <div class="container" style="">
                    <div class="senderInfo container" style="padding-top: 10px">
                        <div class="info">
                            <label for="">Name:</label>
                            <h5>Omar Al-Maktary</h5>
                        </div>
                        <div class="info">
                            <label for="">Position:</label>
                            <h5>Programer</h5>
                        </div>
                        <div class="info">
                            <label for="">Phone:</label>
                            <h5>+62 08212 3533 955</h5>
                        </div>
                        <div class="info">
                            <label for="">Email:</label>
                            <h5>omar.yem1111@gmail.com</h5>
                        </div>
                    </div>
                    <div class="image" style="margin-left: 400px; padding-top: 20px">
                        <img class="img-fluid" width="100px" src="{{ public_path('storage\images\company.png') }}"
                            alt="">
                        <p style="font-size: 15px">Omar's Company</p>
                    </div>
                </div>
            </div>
        </page>
    </body>

</html>