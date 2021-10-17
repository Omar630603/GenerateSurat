<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GenrateSurat') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('css/appStyle.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="icon" href="{{ asset('images/appIcon.png') }}">
        <title>Generate Surat</title>
    </head>
    <nav class="navbar navbar-dark bg-primary">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/appIcon.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                GenrateSurat
            </a>
            <div>
                <a href="{{ route('edit', ['id'=>$letter->id]) }}" class="btn btn-sm btn-dark">Edit</a>
                <a href="{{ route('printPDF', ['id'=>$letter->id]) }}" class="btn btn-sm btn-dark">Print PDF</a>
            </div>
        </div>
    </nav>

    <body class="letterBody">
        <page size="A4">
            <div class="headerLetter">
                <div class="headerContent">
                    <div class="image">
                        <img class="img-fluid" width="140px" src="{{ asset('images/company.png') }}" alt="">
                        <p>Omar's Company</p>
                    </div>
                    <div class="midHeader">
                        <h1>Omar Company</h1>
                        <h2>Jl. Pisang Kipas</h2>
                        <h3>+62 082123533955 - 1582479</h3>
                        <h4>omar.yem1111@gmail.com</h4>
                    </div>
                    <div class="leftHeader">
                        <h3>Malang, </h3>
                        <h4>@php
                            $today = date("F j, Y, g:i a");
                            @endphp
                            {{$today}}
                        </h4>
                    </div>
                </div>
                <div class="border-botom">
                    -
                </div>
            </div>
            <div class="bodyLetter">
                <div class="senderInfo container" style="opacity: 1; margin-top: -20px">
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
                <div class="reciver">
                    <div class="info">
                        <label for="">Dear/ </label>
                        <h5>{{$letter->toWhom}}</h5>
                    </div>
                    <div class="info">
                        <label for="">Subject: </label>
                        <h5>{{$letter->title}}</h5>
                    </div>
                </div>
                <div class="content">
                    {!!$letter->body!!}
                </div>
            </div>
            <div id="footer" class="footLetter">
                <div class="border-botom" style="text-align: center">
                    Omar Company
                </div>
                <div class="container" style="display: flex; justify-content: space-between">
                    <div class="senderInfo container">
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
                    <div class="image">
                        <img class="img-fluid" width="100px" src="{{ asset('images/company.png') }}" alt="">
                        <p>Omar's Company</p>
                    </div>
                </div>
            </div>
        </page>
    </body>

</html>