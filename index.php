<?php
$paragrafo1 = 'mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza mamma papà fratello sorella nonno nonna ragazzo ragazza';

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
        </section>
    </main>
</body>
</html>