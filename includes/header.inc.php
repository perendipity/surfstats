<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Surfscore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Surf styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
          padding-top: 60px;
          padding-bottom: 40px;
      }
      
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
      
      /* GLOBAL STYLES
         -------------------------------------------------- */
      /* Padding below the footer and lighter body text */
      
      body {
          padding-bottom: 40px;
          color: #5a5a5a;
      }
      
      
      
      /* CUSTOMIZE THE NAVBAR
         -------------------------------------------------- */
      
      /* Special class on .container surrounding .navbar, used for positioning it into place. */
      .navbar-wrapper {
          position: relative;
          z-index: 10;
          margin-top: -50px;
          margin-bottom: 0px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
      }
      
      /* Remove border and change up box shadow for more contrast */
      .navbar .navbar-inner {
          border: 0;
          -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
          -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
          box-shadow: 0 2px 10px rgba(0,0,0,.25);
      }
      
      /* Downsize the brand/project name a bit */
      .navbar .brand {
          padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
          font-size: 16px;
          font-weight: bold;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
      }
      
      /* Navbar links: increase padding for taller navbar */
      .navbar .nav > li > a {
          padding: 15px 20px;
      }
      
      /* Offset the responsive button for proper vertical alignment */
      .navbar .btn-navbar {
          margin-top: 10px;
      }
      
      
      
      /* CUSTOMIZE THE NAVBAR
         -------------------------------------------------- */
      
      /* Carousel base class */
      .carousel {
          margin-bottom: 60px;
      }
      
      .carousel .container {
          position: absolute;
          right: 0;
          bottom: 0;
          left: 0;
      }
      
      .carousel-control {
          background-color: transparent;
          border: 0;
          font-size: 120px;
          margin-top: 0;
          text-shadow: 0 1px 1px rgba(0,0,0,.4);
      }
      
      .carousel .item {
          height: 500px;
      }
      .carousel img {
          min-width: 100%;
          height: 300px;
      }
      
      .carousel-caption {
          background-color: transparent;
          position: static;
          max-width: 550px;
          padding: 0 20px;
          margin-bottom: 100px;
      }
      .carousel-caption h1,
      .carousel-caption .lead {
          margin: 0;
          line-height: 1.25;
          color: #fff;
          text-shadow: 0 1px 1px rgba(0,0,0,.4);
      }
      .carousel-caption .btn {
          margin-top: 10px;
      }
      
      
      
      /* MARKETING CONTENT
         -------------------------------------------------- */
      
      /* Center align the text within the three columns below the carousel */
      .marketing .span4 {
          text-align: center;
      }
      .marketing h2 {
          font-weight: normal;
      }
      .marketing .span4 p {
          margin-left: 10px;
          margin-right: 10px;
      }
      
      
      /* Featurettes
         ------------------------- */
      
      .featurette-divider {
          margin: 80px 0; /* Space out the Bootstrap <hr> more */
      }
      .featurette {
          padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
          overflow: hidden; /* Vertically center images part 2: clear their floats. */
      }
      .featurette-image {
          margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
      }
      
      /* Give some space on the sides of the floated elements so text doesn't run right into it. */
      .featurette-image.pull-left {
          margin-right: 40px;
      }
      .featurette-image.pull-right {
          margin-left: 40px;
      }
      
      /* Thin out the marketing headings */
      .featurette-heading {
          font-size: 50px;
          font-weight: 300;
          line-height: 1;
          letter-spacing: -1px;
      }
      
      
      
      /* RESPONSIVE CSS
         -------------------------------------------------- */
      
      @media (max-width: 979px) {
          
          .container.navbar-wrapper {
              margin-bottom: 0;
              width: auto;
          }
          .navbar-inner {
              border-radius: 0;
              margin: -20px 0;
          }
          
          .carousel .item {
              height: 500px;
          }
          .carousel img {
              width: auto;
              height: 500px;
          }
          
          .featurette {
              height: auto;
              padding: 0;
          }
          .featurette-image.pull-left,
          .featurette-image.pull-right {
              display: block;
              float: none;
              max-width: 40%;
              margin: 0 auto 20px;
          }
      }
      
      
      @media (max-width: 767px) {
          
          .navbar-inner {
              margin: -20px;
          }
          
          .carousel {
              margin-left: -20px;
              margin-right: -20px;
          }
          .carousel .container {
              
          }
          .carousel .item {
              height: 300px;
          }
          .carousel img {
              height: 300px;
          }
          .carousel-caption {
              width: 65%;
              padding: 0 70px;
              margin-bottom: 40px;
          }
          .carousel-caption h1 {
              font-size: 30px;
          }
          .carousel-caption .lead,
          .carousel-caption .btn {
              font-size: 18px;
          }
          
          .marketing .span4 + .span4 {
              margin-top: 40px;
          }
          
          .featurette-heading {
              font-size: 30px;
          }
          .featurette .lead {
              font-size: 18px;
              line-height: 1.5;
          }
          
      }
      
    </style>
	<link href='http://fonts.googleapis.com/css?family=Exo:500,100,400' rel='stylesheet' type='text/css'>    
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/surfscore.css" rel="stylesheet">
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Averia+Libre:700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>
