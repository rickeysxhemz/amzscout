<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Amazon Scouts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Six Revisions">
  <meta name="description" content="How to use the CSS background-size property to make an image fully span the entire viewport.">
  <link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon" />
  <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Not required: presentational-only.css only contains CSS for prettifying the demo -->
  <link rel="stylesheet" href="../css/presentational-only.css">

  <!-- responsive-full-background-image.css stylesheet contains the code you want -->
  <link rel="stylesheet" href="../css/responsive-full-background-image.css">
  
  <!-- Not required: jquery.min.js and presentational-only.js is only used to demonstrate scrolling behavior of the viewport  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../js/presentational-only.js"></script>
</head>
<body>
  <nav class="navbar" id="top">
  @if (Route::has('login')) 
  <div class="inner">
   
                 @auth
                  <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                 @endauth  
    </div>
    @endif
  </nav>
  <header class="container">
    <section class="content">
      <h1 font-weight: bold>Amazon Scouts</h1>
      <p class="sub-title"><strong>ACHIEVE BETTER</strong> <br />An open directory of distributors and wholesalers</p>
      <p><a class="button" id="load-more-content" href="{{ route('register') }}"><strong>Get Started</strong></a></p>
      
      
    </section>
  </header>
</body>
</html>
