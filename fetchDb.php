<?php
/*Her henter vi connect.php*/
require_once "connect.php";

//Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles");
/*Udføre koden*/
$statement->execute();
/*Her bliver artiklen lavet udfra de informationer som databasen har modtaget fra brugeren*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
        <h1><?php echo $row['heading'] ?></h1>
        <p>
            <?php echo $row['time'] ?>
        </p> <img src="IMG/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">
        <p>
            <?php echo $row['articleText'] ?>
        </p>
    </article>
    <?php
}
?>