<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/news.css">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Nyheder</title>
    </head>

    <body>
        <!-- Wrapper til indholdet -->
        <div class="wrapper">
            <header>
                <!-- Logo class med overskrift og billede -->
                <div class="logo">
                    <h1>Islændere i DK</h1>
                    <div class="medlem"><img src="IMG/medlem-emblem.png" alt="Bliv medlem"> </div>
                </div>
                <!-- Min menu -->
                <div class="menu">
                    <nav>
                        <ul>
                            <li> <a href="index.php">Forside</a> </li>
                            <li> <a href="news.php">Nyheder</a> </li>
                            <li> <a href="">Sitemap</a> </li>
                            <li> <a href="">Print</a> </li>
                            <li> <a href="">Kontakt</a> </li>
                        </ul>
                    </nav>
                </div>
                <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                    <section>
                        <aside>
                            <!-- Min aside med log ind hvis brugeren er logget ind -->
                            <h4>Velkommen
                        
                            <?php echo $_SESSION['username']; ?> </h4>
                            <form>
                                <button><a href="logout.php?logout=true">Log ud</a></button>
                            </form>
                        </aside>
                    </section>
                    <?php        
                    } else{
                    ?>
                        <!-- Section med log ind hvis brugeren ikke er logget ind -->
                        <section>
                            <form action="checkUser.php" method="post">
                                <input type="text" id="user" placeholder="Brugernavn" name="formUsername">
                                <input type="text" id="pass" placeholder="Password" name="formPassword">
                                <input type="submit" value="Log ind"> </form>
                        </section>
                        <?php } ?>
            </header>
            <!-- Main med artikler og aside -->
            <main>
                <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                    <!-- Min post class med artikler hvis brugeren er logget ind -->
                    <div class="post">
                        <!--Min form til at indsætte articles-->
                        <form action="insert.php" method="get">
                            <div class="form-group">
                                <h1>Lav en ny artikel:</h1> </div>
                            <div class="form-group">
                                <label for="heading">Artiklens overskrift her:</label>
                                <br>
                                <input id="heading" type="text" name="heading" placeholder="Overskrift her..."> </div>
                            <div class="form-group">
                                <label for="imgSrc">Billedenavn:</label>
                                <br>
                                <input id="imgSrc" type="text" name="imgSrc" placeholder="Sti til billedet uden .png"> </div>
                            <div class="form-group">
                                <label for="imgAlt">Beskrivelse af dit billede:</label>
                                <br>
                                <input id="imgAlt" type="text" name="imgAlt" placeholder="Tekst der beskriver dit billede"> </div>
                            <div class="form-group">
                                <label for="articleText" name="articleText" placeholder="Tekst">Artiklens tekst her:</label>
                                <br>
                                <textarea id="articleText" type="text" name="articleText" placeholder="Tekst her..."> </textarea>
                            </div>
                            <input type="submit" value="Indsæt ny artikel"> </form>
                        <!-- Her inkludere jeg den php fil som indholder alt hvad der har med selve artiklens udsende at gøre -->
                        <?php include "fetchDb.php";?>
                    </div>
                    <!-- Aside med sponsorer -->
                    <aside>
                        <h3>Vores sponsonrer</h3> <img src="IMG/sponsor1.png" alt=""> <img src="IMG/sponsor2.png" alt=""> <img src="IMG/sponsor3.png" alt=""> <img src="IMG/sponsor4.png" alt=""> </aside>
                    <?php        
                    } else{
                    ?>
                        <!-- Min post class hvis brugeren ikke er logget ind -->
                        <div class="post">
                            <?php include "fetchDb.php";?>
                        </div>
                        <!-- Aside med sponsorer -->
                        <aside>
                            <h3>Vores sponsonrer</h3> <img src="IMG/sponsor1.png" alt=""> <img src="IMG/sponsor2.png" alt=""> <img src="IMG/sponsor3.png" alt=""> <img src="IMG/sponsor4.png" alt=""> </aside>
                        <?php } ?>
            </main>
            <!-- Footer -->
            <footer>
                <div class="kontakt">
                    <p>Islændere i DK</p>
                    <p>Tågehornvej 32</p>
                    <p>9300 Ølstykke</p>
                    <p>islander(at)live.com</p>
                    <p> <i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>1234 5678</p>
                </div>
                <div class="tider">
                    <p>Mandag-fredag</p>
                    <p>08:00-13:00</p>
                    <p>Lørdag</p>
                    <p>09:00-11:00</p>
                </div>
                <div class="afsendere"><img src="IMG/guy.jpg" alt="">
                    <p>Thomas Karse</p><img src="IMG/guy2.jpg" alt="">
                    <p>Bjarne Arm</p> <img src="IMG/guy3.jpg" alt="">
                    <p>Lisbeth Grøn</p>
                </div>
            </footer>
        </div>
    </body>

    </html>