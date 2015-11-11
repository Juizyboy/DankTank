<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fixed fullscreen backgrounds - fullPage.js</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage fixed full-screen backgrounds." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fixed,fullscreen,backgrounds,full-screen" />
    <meta name="Resource-type" content="Document" />
    <link href="{{url("plugins/fullpage/jquery.fullpage.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("plugins/fullpage/examples.css")}}" rel="stylesheet" type="text/css" />

    <style>

        /* Style for our header texts
        * --------------------------------------- */
        h1{
            font-size: 5em;
            font-family: arial,helvetica;
            color: #fff;
            margin:0;
            padding:0;
        }
        h2{
            font-size: 2em;
            margin: 0 0 18px 0;
            font-family: arial,helvetica;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
        }


        /* Backgrounds will cover all the section
        * --------------------------------------- */
        #section0,
        #section1,
        #section2,
        #section3{
            background-size: cover;
            background-attachment: fixed;
        }

        /* Defining each sectino background and styles
        * --------------------------------------- */
        #section0{
            background-image: url({{url("plugins/fullpage/imgs/bg1.jpg")}});
            padding: 7.5% 0 0 0;
        }
        #section2{
            background-image: url({{url("plugins/fullpage/imgs/bg2.jpg")}});
            padding: 6% 0 0 0;
        }
        #section3{
            background-image: url({{url("plugins/fullpage/imgs/bg3.jpg")}});
            padding: 6% 0 0 0;
        }
        #section3 h1{
            color: #000;
        }
        #section4{
            background-image: url({{url("plugins/fullpage/imgs/bg4.jpg")}});
            padding: 6% 0 0 0;
        }
        #section5{
            background-image: url({{url("plugins/fullpage/imgs/bg5.jpg")}});
            padding: 6% 0 0 0;
        }


        /*Adding background for the slides
       * --------------------------------------- */
        #slide1{
            background-image: url({{url("plugins/fullpage/imgs/bg4.jpg")}});
            padding: 6% 0 0 0;
        }
        #slide2{
            background-image: url({{url("plugins/fullpage/imgs/bg3.jpg")}});
            padding: 6% 0 0 0;
        }


        #header{
            position:fixed;
            height: 50px;
            display:block;
            width: 100%;
            background: #333;
            z-index:9;
            text-align:center;
            color: #f2f2f2;
            padding: 20px 0 0 0;
        }

        #header{
            top:0px;
        }

    </style>

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{url("plugins/fullpage/jquery.fullpage.min.js")}}"></script>
    <script type="text/javascript" src="{{url("plugins/fullpage/examples.js")}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                verticalCentered: false,

                //to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
                css3:false
            });
        });
    </script>

</head>
<body>
<div id="header">Header</div>
<div id="fullpage">
    <div class="section" id="section0">
        <h1>De Zilte Kust</h1>
        <p>De Appartementen ‘De Zilte Kust’ bevinden zich op een prachtige locatie: in de Vlissingense Duinen op 50 meter van het strand. Het appartementenhuis bestaat uit 3 appartementen.
            De ligging is tevens ideaal omdat de appartementen maar 100 meter van het gezellige centrum van Vlissingen liggen. Appartementenhuis "‘De Zilte Kust’" bestaat uit de appartementen A, B en C.
        </p>
    </div>

    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <h1>Appartement A</h1>
            <h2>Binnenkant</h2>
        </div>
        <div class="slide" id="slide2">
            <h1>Appartement A</h1>
            <h2>Keuken</h2>
        </div>
        <div class="slide" id="slide3">
            <h1>Appartement A</h1>
            <h2>Uitzicht</h2>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="slide" id="slide4">
            <h1>Appartement B</h1>
            <h2>Binnenkant</h2>
        </div>
        <div class="slide" id="slide5">
            <h1>Appartement B</h1>
            <h2>Keuken</h2>
        </div>
        <div class="slide" id="slide6">
            <h1>Appartement B</h1>
            <h2>Uitzicht</h2>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="slide" id="slide7">
            <h1>Appartement C</h1>
            <h2>Binnenkant</h2>
        </div>
        <div class="slide" id="slide8">
            <h1>Appartement C</h1>
            <h2>Keuken</h2>
        </div>
        <div class="slide" id="slide9">
            <h1>Appartement C</h1>
            <h2>Uitzicht</h2>
        </div>
    </div>
    <div class="section" id="section4">
        <h1>Reserveer nu!</h1>
    </div>
    <div class="section" id="section5">
        <h1>Contact</h1>
    </div>
</div>

</body>
</html>