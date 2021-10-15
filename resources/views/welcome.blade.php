<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GenrateSurat') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Generate Surat</title>
    </head>

    <body>
        <div class="container">
            <form method="post" action="" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
                </div>

                <div class="form-group">
                    <label for="toWhom">To Whom</label>
                    <input type="text" name="toWhom" class="form-control" id="toWhom" aria-describedby="toWhom">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="ckeditor" id="body"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Generate</button>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor',{tabSpaces:4});
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/surat/genrate') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#title').val(),
                     type: jQuery('#toWhom').val(),
                     price: jQuery('#body').val()
                  },
                  success: function(result){
                     console.log(result);
                  }});
               });
            });
    </script>

</html>