<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <style type="text/css">
      body { background: #c4c4c4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>

    <title>@yield('title')Wisconsin Forum</title>

    <!-- Bootstrap core CSS -->
    

     <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link href="{{asset('css/slider.css')}}" rel="stylesheet">

    <link href="{{asset('css/profile.css')}}" rel="stylesheet">

     <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet">

<!-- include summernote css/js-->
<link href="{{asset('summernote/summernote.css')}}" rel="stylesheet">

<!-- include libraries(jQuery, bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>


      <script>
        tinymce.init({
        selector: '#textarea'
        
      });
    </script>


  
   {{-- <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="body">
          <table summary id="up">
    
   <center>

            <a href="
/

"  class="g" title="Wisconsin I.T Forum">Wisconsin Forum</a>

            @if( ! $currentUser )
            

            <li><a>Welcome, <b>Guest:</b></a></li>
            <li><a href="
/

">Home</a></li>
            <li><a href="{{ route('get_login')}}">Login</a></li>
            <li><a href="{{ route('get_register')}}">Register</a></li>

            @else

            <li><a> Welcome, {{ $currentUser->name }}</a></li>
            <li><a href="
/

">Home</a></li>
            <li><a href="{{ route('get_post')}}">Create New Topic</a></li>
            <li><a href="{{ route('get_logout')}}">Logout</a></li>

            @endif

        </table>
      </nav>
 </center>--}}

 <center id="clockDisplay"></center>


 @include('layouts.partials.nav')

    </head>

     <body onLoad="renderTime();">



  @yield ('page-content')


   <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
    <script src="{{asset('summernote/summernote.js')}}"></script>
   <!-- <script src="http://cdn.ckeditor.com/4.6.0/basic/ckeditor.js"></script>-->

    <script type="text/javascript">

      
    @if( notify()->ready() )

      swal({
        title: "{!! notify()->message() !!}",
        type: "{{ notify()->type() }}",
        @if( notify()->option('timer') )

          timer: "{{ notify()->option('timer') }}",
          showConfirmButton: false,

        @endif
        html: true
      });

      @endif

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
              height: '200px',
              focus: true,
              placeholder: 'Content here...'

            });
        });
    </script>

   <!-- <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>-->



  </body>



</html>