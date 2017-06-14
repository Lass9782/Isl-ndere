<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style.css">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Islændere</title>
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
                            <li> <a href="#">Forside</a> </li>
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
                            <form><a href="logout.php?logout=true">Log ud</a> </form>
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
            <!-- Main med artikler -->
            <main>
                <!-- Mine col classer med artikler -->
                <div class="col1">
                    <article> <img src="IMG/articleImg1.png" alt="Storm Rider">
                        <h1>Article 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                    <article> <img src="IMG/articleImg2.png" alt="Storm Rider">
                        <h1>Article 2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                </div>
                <div class="col2">
                    <article> <img src="IMG/articleImg3.png" alt="Storm Rider">
                        <h1>Article 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                    <article> <img src="IMG/articleImg4.png" alt="Storm Rider">
                        <h1>Article 4</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                </div>
                <div class="col3">
                    <article> <img src="IMG/articleImg5.png" alt="Storm Rider">
                        <h1>Article 5</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                    <article> <img src="IMG/articleImg6.png" alt="Storm Rider">
                        <h1>Article 6</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                </div>
                <div class="col4">
                    <article> <img src="IMG/articleImg7.png" alt="Storm Rider">
                        <h1>Article 7</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                    <article> <img src="IMG/articleImg8.png" alt="Storm Rider">
                        <h1>Article 8</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita at aspernatur consectetur sint possimus sapiente odio, labore, totam eligendi soluta. Fugiat dolorum corporis quia obcaecati reiciendis. Maiores voluptate laudantium, est.</p>
                    </article>
                </div>
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