<?php
$paragrafo1 = 'mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza';

$wordCensored1  = $_GET["wordCensored1"];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura!</title>
</head>
<body>
    <main>
        <section>
            <article>
                <p>
                    <?php 
                        echo $paragrafo1  
                    ?>
                </p>

                <h3>
                    Lunghezza caratteri: <?php echo strlen($paragrafo1) ?>
                </h3>
            </article>

            <div>
                <form action="./index.php" method="get">
                    <label for="wordCensored1">parola da censurare:</label>
                    <input type="text" name="wordCensored1" id="wordCensored1" required>
                    <button type="submit">
                        Modifica Paragrafo
                    </button>
                    <h5>
                        Censura una di queste parole : mamma, papa, fratello, sorella, nonno, nonna ragazzo, ragazza
                    </h5>

                </form>
            </div>
            <h3>
                Parola censurata : <?php echo $wordCensored1 ?>
            </h3>
        </section>
    </main>
</body>
</html>