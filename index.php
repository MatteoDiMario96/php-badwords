<?php
$paragrafo1 = 'mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza';

$wordCensored1  = $_GET["wordCensored1"];

$prova = 'prova';
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
                        echo str_replace(trim($wordCensored1), '***', $paragrafo1);
                        print $prova;
                    ?>
                </p>

                <h3>
                    Lunghezza caratteri: <?php echo strlen($paragrafo1) ?>
                </h3>
            </article>

            <div>
                <form action="./index.php" method="get">
                    <label for="wordCensored1">Censura:</label>
                    <input type="text" name="wordCensored1" id="wordCensored1" required>
                    <button type="submit">
                        Modifica Paragrafo
                    </button>
                    <h5>
                        Censura una parola, una sillaba, una lettera, quello che vuoi...
                    </h5>

                </form>
            </div>
            <h3>
                Percorso variabile e cos'hai censurato : <?php var_dump($wordCensored1)  ?>
            </h3>
        </section>
    </main>
</body>
</html>