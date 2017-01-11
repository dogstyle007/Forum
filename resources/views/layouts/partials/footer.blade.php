<!-- Fixed navbar -->
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

    </style>
<link href="{{asset('css/style.css')}}" rel="stylesheet">

   
  </head>

  <body>

<div class="container">
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <div id="push">
        
      </div>
    </div>

    <div id="footer">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
            <ul class="nav nav-pills nav-justified">

                <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
            </ul>
            <p align="center"><b>Disclaimer: </b> Every Wisconsin member is <b> solely responsible </b> for <b> anything </b>that he/she <b> posts </b> on Wisconsin Forum.</p>
        </div>    
    </nav>
    </div>
</div>

  </body>
</html>


