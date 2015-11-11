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
            font-size: 3em;
            font-family: arial,helvetica;
            color: #fdfdfd;
            margin: 0 0 18px 0;
            padding:0;
        }
        h2{
            font-size: 2em;
            margin: 0 0 18px 0;
            color: #f2f2f2;
            font-family: arial,helvetica;
        }
        ul{
            list-style: circle;
            color: #f2f2f2;
            padding-left: 20px;
        }
        p{
            color: #f2f2f2;
            font-size: 1em;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
            overflow:hidden;
        }
        .wrap{
            width: 1180px;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }
        .box{
            text-align: left;
            color: #808080;
            font-size: 1.2em;
            line-height: 1.6em;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -325px;
            margin-left: 150px;
            width: 395px;
            z-index: 1;
        }
        .imgsContainer{
            display: block;
            position: absolute;
            z-index: 1;
            top: 42%;
            left: 58%;
            margin-top: -325px;
            margin-left: -747px;
            width: 800px;
            height: 696px;
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
        img{
            -webkit-transition: all 0.7s ease-out;
            -moz-transition: all 0.7s ease-out;
            -o-transition: all 0.7s ease-out;
            transition: all 0.7s ease-out;
        }

        /* Defining each sectino background and styles
        * --------------------------------------- */
        /*#section0{
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
        */
        .section{
            background-color: rgba(110, 149, 216, 0.67);
            padding: 5% 0 0 0;
        }


        /*Adding background for the slides
       * --------------------------------------- */


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
<div id="fullpage">
    <div class="section" id="section0">
        <h1>De Zilte Kust</h1>
        <p>De Appartementen ‘De Zilte Kust’ bevinden zich op een prachtige locatie: in de Vlissingense Duinen op 50 meter van het strand. Het appartementenhuis bestaat uit 3 appartementen.
            De ligging is tevens ideaal omdat de appartementen maar 100 meter van het gezellige centrum van Vlissingen liggen. Appartementenhuis "‘De Zilte Kust’" bestaat uit de appartementen A, B en C.
        </p>
    </div>

    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement A.2/BinnenkantA.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement A</h1>
                    <h2>Binnenkant</h2>
                    <p>Appartement A is voor 2-4 personen. Prijzen vanaf  € 325 tot € 675
                        Het is iets dieper dan de straat gelegen, met een groot terras.
                    </p>
                    <ul>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Slaapkamer met 2 eenpersoonbedden</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat, waterkoker</li>
                        <li>Badkamer met douche en wastafel</li>
                        <li>Apart toilet</li>
                        <li>Verder aanwezig: Tuinset, kinderbed, kinderstoel, safe</li>
                        <li>Prive parkeerplaats</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="slide" id="slide2">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement A.2/KeukenA.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement A</h1>
                    <h2>Keuken</h2>
                    <p>Appartement A is voor 2-4 personen. Prijzen vanaf  € 325 tot € 675
                        Het is iets dieper dan de straat gelegen, met een groot terras.
                    </p>
                    <ul>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Slaapkamer met 2 eenpersoonbedden</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat, waterkoker</li>
                        <li>Badkamer met douche en wastafel</li>
                        <li>Apart toilet</li>
                        <li>Verder aanwezig: Tuinset, kinderbed, kinderstoel, safe</li>
                        <li>Prive parkeerplaats</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide" id="slide3">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement A.2/UitzichtA.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement A</h1>
                    <h2>Uitzicht</h2>
                    <p>Appartement A is voor 2-4 personen. Prijzen vanaf  € 325 tot € 675
                        Het is iets dieper dan de straat gelegen, met een groot terras.
                    </p>
                    <ul>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Woonkamer/serre met 2-persoons slaapbank, LCD Tv en Dvd speler</li>
                        <li>Slaapkamer met 2 eenpersoonbedden</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat, waterkoker</li>
                        <li>Badkamer met douche en wastafel</li>
                        <li>Apart toilet</li>
                        <li>Verder aanwezig: Tuinset, kinderbed, kinderstoel, safe</li>
                        <li>Prive parkeerplaats</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="slide" id="slide4">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement B.2/BinnenkantB.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement B</h1>
                    <h2>Binnenkant</h2>
                    <p>
                        Appartement B is voor 4 personen. Prijs van € 350 tot € 797
                        Het appartement ligt op de begane grond en heeft aan de achterkant van het huis een balkon.
                    </p>
                        <ul>
                        <li>Woonkamer met serre.</li>
                        <li>Grote slaapkamer met 2-persoonsbed 1.80 x 2.00.</li>
                        <li>Kleine slaapkamer met 2 éénpersoonbedden 80 x 1.90.</li>
                        <li>Badkamer met douche, wastafel, toilet.</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat en waterkoker.</li>
                        <li>Balkon met tuinset</li>
                        <li>Kinderbedje,Kinderstoel,safe</li>
                        <li>Prive Parkeerplaats</li>
                    </ul>


                </div>
            </div>
        </div>
        <div class="slide" id="slide5">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement B.2/KeukenB.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement B</h1>
                    <h2>Keuken</h2>
                    <p>
                        Appartement B is voor 4 personen. Prijs van € 350 tot € 797
                        Het appartement ligt op de begane grond en heeft aan de achterkant van het huis een balkon.
                    </p>
                    <ul>
                        <li>Woonkamer met serre.</li>
                        <li>Grote slaapkamer met 2-persoonsbed 1.80 x 2.00.</li>
                        <li>Kleine slaapkamer met 2 éénpersoonbedden 80 x 1.90.</li>
                        <li>Badkamer met douche, wastafel, toilet.</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat en waterkoker.</li>
                        <li>Balkon met tuinset</li>
                        <li>Kinderbedje,Kinderstoel,safe</li>
                        <li>Prive Parkeerplaats</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide" id="slide6">
            <div class="wrap">
                <div class="imgsContainer">
                    <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement B.2/UitzichtB.jpg")}}">
                </div>
                <div class="box">
                    <h1>Appartement B</h1>
                    <h2>Uitzicht</h2>
                    <p>
                        Appartement B is voor 4 personen. Prijs van € 350 tot € 797
                        Het appartement ligt op de begane grond en heeft aan de achterkant van het huis een balkon.
                    </p>
                    <ul>
                        <li>Woonkamer met serre.</li>
                        <li>Grote slaapkamer met 2-persoonsbed 1.80 x 2.00.</li>
                        <li>Kleine slaapkamer met 2 éénpersoonbedden 80 x 1.90.</li>
                        <li>Badkamer met douche, wastafel, toilet.</li>
                        <li>Keuken met vaatwasser, magnetron, koffiezetapparaat en waterkoker.</li>
                        <li>Balkon met tuinset</li>
                        <li>Kinderbedje,Kinderstoel,safe</li>
                        <li>Prive Parkeerplaats</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="slide" id="slide7">
            <div class="wrap">
            <div class="imgsContainer">
                <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement C.2/BinnenkantC.jpg")}}">
            </div>
            <div class="box">
                <h1>Appartement C</h1>
                <h2>Binnenkant</h2>
                <p>Appartement C is voor 6 personen. Prijs van € 450 tot € 995
                Dit appartement met zeezicht ligt op de 1e en 2e verdieping en heeft een groot balkon.</p>
                <ul>
                1e verdieping
                <li>	Woonkamer/keuken.</li>
                <li>	2 slaapkamers met 1-persoonsbedden 90 x 2.00 en wastafel.</li>
                <li>	Badkamer met douche en wastafel. Apart toilet.</li>
                <li>	Balkon.</li>
                2e verdieping
                <li>	1 slaapkamer</li>
                Verder aanwezig:
                <li>	Tuinset, kinderbed, kinderstoel, safe,dvd speler</li>
                <li>	Prive Parkeerplaats</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="slide" id="slide8">
            <div class="wrap">
            <div class="imgsContainer">
                <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement C.2/KeukenC.jpg")}}">
            </div>
            <div class="box">
                <h1>Appartement C</h1>
                <h2>Keuken</h2>
                <p>Appartement C is voor 6 personen. Prijs van € 450 tot € 995
                    Dit appartement met zeezicht ligt op de 1e en 2e verdieping en heeft een groot balkon.</p>
                <ul>
                    1e verdieping
                    <li>	Woonkamer/keuken.</li>
                    <li>	2 slaapkamers met 1-persoonsbedden 90 x 2.00 en wastafel.</li>
                    <li>	Badkamer met douche en wastafel. Apart toilet.</li>
                    <li>	Balkon.</li>
                    2e verdieping
                    <li>	1 slaapkamer</li>
                    Verder aanwezig:
                    <li>	Tuinset, kinderbed, kinderstoel, safe,dvd speler</li>
                    <li>	Prive Parkeerplaats</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="slide" id="slide9">
            <div class="wrap">
            <div class="imgsContainer">
                <img style="max-width: 90%;" src="{{url("plugins/fullpage/imgs2/Appartement C.2/UitzichtC.jpg")}}">
            </div>
            <div class="box">
                <h1>Appartement C</h1>
                <h2>Uitzicht</h2>
                <p>Appartement C is voor 6 personen. Prijs van € 450 tot € 995
                    Dit appartement met zeezicht ligt op de 1e en 2e verdieping en heeft een groot balkon.</p>
                <ul>
                    1e verdieping
                    <li>	Woonkamer/keuken.</li>
                    <li>	2 slaapkamers met 1-persoonsbedden 90 x 2.00 en wastafel.</li>
                    <li>	Badkamer met douche en wastafel. Apart toilet.</li>
                    <li>	Balkon.</li>
                    2e verdieping
                    <li>	1 slaapkamer</li>
                    Verder aanwezig:
                    <li>	Tuinset, kinderbed, kinderstoel, safe,dvd speler</li>
                    <li>	Prive Parkeerplaats</li>
                </ul>
            </div>
            </div>
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