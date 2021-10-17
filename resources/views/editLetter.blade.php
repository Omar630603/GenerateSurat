<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GenrateSurat') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('css/appStyle.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

        <link rel="icon" href="{{ asset('images/appIcon.png') }}">
        <title>Generate Surat</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/appIcon.png') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top">
                    GenrateSurat
                </a>
            </div>
        </nav>
        <div class="container mt-4 lettersContainer">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="container">
                <h2>Edit Letter</h2>
                <div class="card">
                    <div class="card-header">
                        Edit LETTER for {{$letter->toWhom}}
                    </div>
                    <div class="card-body">
                        <form id="myForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" name="title" class="form-control" id="title" aria-describedby="title"
                                    value="{{$letter->title}}">
                            </div>

                            <div class="form-group">
                                <label for="toWhom">To Whom</label>
                                <input type="text" name="toWhom" class="form-control" id="toWhom"
                                    aria-describedby="toWhom" value="{{$letter->toWhom}}">
                            </div>

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="letterBody" class="ckeditor">{!!$letter->body!!}</textarea>
                            </div>
                            <hr>
                            <input type="text" name="id" id="id" hidden value="{{$letter->id}}">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-edit">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script type="text/javascript">
        $(".btn-edit").click(function(e){
            e.preventDefault();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var title = $("input[name=title]").val();
            var toWhom = $("input[name=toWhom]").val();
            var body = CKEDITOR.instances.letterBody.getData();
            var id = $("input[name=id]").val();
            var url = '{{ url('suratEditing') }}';
            console.log(id)
            $.ajax({
                url:url,
                method:'POST',
                data:{
                        Title:title, 
                        ToWhom:toWhom,
                        Body:body,
                        id: id
                        },
                success:function(response){
                    if(response.success){
                        alert(response.message) 
                    }
                },
                error:function(){
                    alert('data is invalid or empty')
                }
            });
	    });
    </script>

</html>