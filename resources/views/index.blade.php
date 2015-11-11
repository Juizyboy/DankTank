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
    <script type="text/javascript" src="{{url("plugins/fullpage/jquery.fullpage.min.js")}}"></script>
    <script type="text/javascript" src="{{url("plugins/fullpage/examples.js")}}"></script>
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
            padding: 30% 0 0 0;
        }
        #section2{
            background-image: url({{url("plugins/fullpage/imgs/bg3.jpg")}});
            padding: 6% 0 0 0;
        }
        #section3{
            background-image: url({{url("plugins/fullpage/imgs/bg4.jpg")}});
            padding: 6% 0 0 0;
        }
        #section3 h1{
            color: #000;
        }


        /*Adding background for the slides
       * --------------------------------------- */
        #slide1{
            background-image: url({{url("plugins/fullpage/imgs/bg2.jpg")}});
            padding: 6% 0 0 0;
        }
        #slide2{
            background-image: url({{url("plugins/fullpage/imgs/bg5.jpg")}});
            padding: 6% 0 0 0;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
    </style>

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

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

<a href="https://github.com/alvarotrigo/fullPage.js" id="githubLink"><img style="position: fixed;z-index:99; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alvarotrigo.com/fullPage/" data-text="Great plugin to create fullscreen scrolling websites: http://alvarotrigo.com/fullPage/">Tweet</a>

<div id="fullpage">
    <div class="section " id="section0"><h1>fullPage.js</h1></div>
    <div class="section" id="section1">
        <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
        <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
    </div>
    <div class="section" id="section2"><h1>Lovely images <br />for a lovely page</h1></div>
    <div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>

</body>
</html>