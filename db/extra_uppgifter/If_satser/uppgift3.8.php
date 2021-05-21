<!-- På det nationella provet i Svenska 1 så fanns följande poänggränser.
Betyg
Poänggräns
A
55
B
45
C
35
D
25
E
15
Skapa ett skript som frågar användaren hur många poäng hen fick på provet. 
Skriptet ska svara vilket blev betyget. -->
<!-- Skriv ut kropp och huvud -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vad fick du för betyg i på provet</title>
    <!-- Ritningen på sidan -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="#" method="POST">
            <h1>Vad fick du för betyg i på provet</h1>
            <label> Skriv in antalet poäng du fick på ditt prov här
                <input type="text" name="poäng">
            </label>
            <button type="submit">Kolla betyget</button>
        </form>
        <?php
        $antalPoäng = filter_input(INPUT_POST, "poäng", FILTER_SANITIZE_STRING);
        /* <!-- Göra massa elesif med mindre än eller större än för varje poängsgränds --> */
        if ($antalPoäng >= 46) {
            echo " <p>Du fick A som betyg</p>";
        } elseif ($antalPoäng >=36) {
            echo " <p>Du fick B som betyg</p>";
        } elseif ($antalPoäng >=26) {
            echo " <p>Du fick C som betyg</p>";
        } elseif ($antalPoäng >=16) {
            echo " <p>Du fick D som betyg</p>";
        } elseif ($antalPoäng == 15) {
            echo " <p>Du fick E som betyg</p>";
        } elseif ($antalPoäng <15) {
            echo " <p>Du fick F som betyg</p>";
        } 
        ?>
    </div>
</body>
</html>
