<?php
    include "./email.php";
?>

    <!DOCTYPE html>
    <html lang="sk">

    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->

        <link href="style/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/main.css">
        <script src="js/prefixfree.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800" rel="stylesheet">
    </head>

    <body>

        <?php echo $error.$successMessage; ?>
        <nav>
            <div class="container">
                <ul class="navbar-left">
                    <!--nested block-->
                    <li class="navbar-left__item">

                        <a class="navbar-left__tile" href="#header"></a>
                    </li>
                    <li class="navbar-left__item">
                        <a class="navbar-left__tile" href="#main"></a>
                    </li>
                </ul>

                <ul class="navbar-right">
                    <!--nested block-->
                    <li class="navbar-right__item"><a class="navbar-right__tile" href="#jumbotron">Úvod</a></li>
                    <li class="navbar-right__item"><a class="navbar-right__tile" href="#main">O nás</a></li>
                    <li class="navbar-right__item"><a class="navbar-right__tile" href="#footer">Kontakt</a></li>
                    <li class="navbar-right__item"><a class="navbar-right__tile greenBtn" href="#" role="button" data-toggle="modal" data-target=".bs-example-modal-lg">Online registrácia</a></li>
                </ul>
            </div>
        </nav>

        <a class="menuBtn">
            <span class="icon-line top1"></span>
            <span class="icon-line top2"></span>
            <span class="icon-line middle1"></span>
            <span class="icon-line middle2"></span>
            <span class="icon-line bottom1"></span>
            <span class="icon-line bottom2"></span>
        </a>

        <div class="menu">
            <div class="menuItems">
                <a href="#jumbotron"><h1>Úvod</h1></a>
                <a href="#main"><h1>O nás</h1></a>
                <a href="#footer"><h1>Kontakt</h1></a>
                <a class="navbar-right__tile " href="#" role="button" data-toggle="modal" data-target=".bs-example-modal-lg"><h1 class='greenBtn'>Online registrácia</h1></a>

            </div>



        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="container">
                        <div class="modal-header">
                            <h3 class="modal-title text-center">Kontakt</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:white;">&times;</span>
                            </button>
                        </div>
                        <form id="form" method="post">
                            <fieldset class="form-group name">
                                <label for="name">Meno</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Vaše meno">
                            </fieldset>
                            <fieldset class="form-group name">
                                <label for="name">Telefónne číslo</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Vaše číslo">
                            </fieldset>
                            <fieldset class="form-group email">
                                <label for="email">Emailová adresa</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </fieldset>
                            <div class="clearfix"></div>

                            <fieldset class="form-group">
                                <label for="comment">Správa</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </fieldset>
                            <br>
                            <div class="error pull-left">
                                

                            </div>

                            <input type="reset" value="Reset" id="resetButton" class="btn btn-danger pull-right">
                            <input type="submit" value="Odoslať" id="submitButton" name="submit" class="btn btn-primary pull-right">

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="jumbotron" class="jumbotron">
            <div class="container">
                <h1 class='jumboText'>Autoškola Sabolčák. </h1>

                <p class="jumboBtn"><a class="greenBtn jumboText" href="#main" role="button">Dozvediet sa viac</a></p>
            </div>
        </div>

        <div id="main">
            <img class="trafficLighter" src="img/trafficLighter.svg">
            <div class="container">


                <div class="row">


                    <div class="col-md-6">


                    </div>
                    <div class="col-md-6">
                        <h1 class='display-1'>Služby ktoré poskytuje autoškola</h1>
                        <div class="">

                            <ul>
                                <li>výcvik na získanie vodičského oprávnenia skupín :</li>
                            </ul>
                            <ul class="groups">
                                <li>AM / 15 rokov</li>
                                <li>A1 / 16 rokov</li>
                                <li>A2 / 18 rokov</li>
                                <li>A / 20 rokov</li>
                                <li>B / 18 rokov</li>

                            </ul>

                            <ul>
                                <li>doškoľovacie kurzy</li>
                                <li>školenie vodičov</li>
                                <li>kondičné jazdy</li>
                                <li>prednášková činnosť</li>
                                <li>doškoľovanie vodičov kamiónov</li>

                            </ul>
                            <img class="tyres" src='img/tyres1.svg'>
                            <h2 class="center">Cena kurzu od 400€ podľa požiadavky</h2>

                        </div>

                    </div>



                </div>

            </div>
        </div>

        <!--
<div id="music">
            <h1>MUSIC <span class="slash">/</span> VIDEO</h1>
        </div>
-->






        <div id="feature">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="vertical-align">
                            <h2>Často kladené otázky</h2>
                            <ol>
                                <li>Od koľkých rokov môžem začať robiť vodičák?</li>
                                <p>Nastúpiť do kurzu k získaniu vodičského oprávnenia skupiny B je možné od 16-tich rokov. Záverečné skúšky môže žiadateľ o vodičské oprávnenie absolvovať najskôr v deň dovŕšenia 17-tich rokov.</p>
                                <li>Ako dlho trvá kurz?</li>
                                <p>Dĺžka trvania kurzu je minimalne 30 dni. Maximálne trvanie kurzu podľa platnej legislatívy je maximálne jeden rok.</p>
                                <li>Čo potrebujem keď sa chcem prihlásiť do kurzu?</li>
                                <p>Pred nástupom do kurzu je potrebné absolvovať lekársku prehliadku u Vášho ošetrujúceho lekára.Spôsobilosť k nástupu do kurzu lekár potvrdí na predpísanom tlačive ,ktoré si môžete vyzdvihnúť v autoškole.</p>
                                <li>Ako sa môžem prihlásiť do kurzu?</li>
                                <p>Prihlásiť sa môžete osobne v autoškole v deň zápisu do kurzu, alebo začiatku kurzu, online prihláškou , alebo telefonicky na tel. čísle xxx.</p>
                                <li>Čo je zahrnuté v cene kurzu?</li>
                                <p>V cene kurzu je zahrnutý kompletný výcvik podľa učebnej osnovy , prihlásenie a predvedenie na riadny termín záverečnej skúšky.</p>
                                <li>Keď dostanem vodičák v 17-tich, môžem jazdiť sám?</li>
                                <p>Podľa sučasne platnej legislatívy ak držiteľ vodičského oprávnenia skupiny B nedosiahol vek 18 rokov môže viesť vozidlo pod dohľadom osoby, ktorá má prax vo vedení motorového vozidla minimálne 10 rokov.</p>
                            </ol>
                        </div>

                    </div>
                    <div class="col-md-6 questionMark">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>

                    </div>



                </div>

            </div>
        </div>


        <div style="width: 100%;height:300px;">
            <iframe width="100%" height="300" src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=300&amp;hl=en&amp;q=Kosice%2C%20Juzna%20Trieda%2093+(Auto%C5%A1kola%20Sabol%C4%8D%C3%A1k)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events:none; margin:0;padding:0"><a href="http://www.mapsdirections.info/medir-distancia-area.html">Cómo medir área en Google Maps</a> en <a href="http://www.mapsdirections.info/">www.mapsdirections.info</a></iframe>
        </div>
        </div>

        <div id="footer">
            <div class="row">
                <div class="col-md-4">
                    <!--               <img src="img/motorbike.jpg">-->
                </div>
                <div class="col-md-4">
                    <div class="contactInfo text-center">
                        <h1>Kontakt</h1>

                        <p>autoskolasabolcak@gmail.com</p>

                        <p>Južná trieda 93, 04001 Košice</p>
                        <p>0944 596 785 / 0949 443 944</p>
                    </div>

                    <div class="footerInfo">

                        <div class="credit">
                            <p>&copy;2017 Autoškola Sabolčák</p>
                        </div>
                        <div class="advert">
                            <p>WEBSITE DESIGN BY <a href="http://www.on-dro.com" target="_blank">ON-DRO</a></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>



        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

        <script src="js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/b70e0f0a83.js"></script>
        <script src="js/script.js"></script>
    </body>

    </html>