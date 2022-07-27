<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>II Homework Task</title>
</head>

<body>

    <h2>Strings</h2>
    <h4 style="color: green;">-------- II.I. Task --------</h4>
    <!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
    Atspausdinti trumpesnį stringą. -->
    <?php
    $name = "Javier";
    $surname = "Bardem";

    echo "Mylimas aktorius: " . $name . " " . $surname;
    $nameLength = strlen($name);
    $surnameLength = strlen($surname);

    if ($nameLength > $surnameLength) {
        echo "$surnameLength";
    } else if ($nameLength < $surnameLength) {
        echo "$nameLength";
    } else {
        echo "<br>Vardas ir pavarde turi vienoda simboliu skaiciu";
    }
    ?>

    <h4 style="color: green;">-------- II.II. Task --------</h4>
    <!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti 
    tik didžiosiom raidėm, o pavardę tik mažosioms. 
    (LEONARDO dicaprio) -->
    <?php
    $name = "Javier";
    $surname = "Bardem";
    $nameString = strtoupper($name);
    $surnameString = strtolower($surname);
    echo "<br>" . $nameString . " " . $surnameString;
    ?>

    <h4 style="color: green;">-------- II.III. Task --------</h4>
    <!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią 
    kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo 
    ir pavardės kintamųjų raidžių. Jį atspausdinti. -->

    <?php
    $name = "Javier";
    $surname = "Bardem";
    $firstOfName = substr($name, 0, 1);
    $firstOfSurname = substr($surname, 0, 1);
    echo $firstOfName . $firstOfSurname;
    ?>

    <h4 style="color: green;">-------- II.IV. Task --------</h4>
    <!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. 
    Sukurti trečią kintamąjį ir jam priskirti stringą, 
    sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų 
    raidžių. Jį atspausdinti. -->
    <?php
    $name = "Javier";
    $surname = "Bardem";
    $mix = substr($name, 3) . substr($surname, 3);
    echo $mix;
    ?>

    <h4 style="color: green;">-------- II.V. Task --------</h4>
    <!-- Sukurti kintamąjį su stringu: “An American in Paris”. 
    Jame visas “a” (didžiąsias ir mažąsias) pakeisti 
    žvaigždutėm “*”.  Rezultatą atspausdinti. -->
    <?php
    $string = "An American in Paris";
    $changed = str_replace(["A", "a"], "*", $string);
    echo $changed;
    ?>

    <h4 style="color: green;">-------- II.VI. Task --------</h4>
    <!-- Sukurti kintamąjį su stringu: “An American in Paris”. 
    Jame ištrinti visas balses. Rezultatą atspausdinti. 
    Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
    “2001: A Space Odyssey” ir “It's a Wonderful Life”. -->
    <?php
    $string = "An American in Paris";
    $replaced = preg_replace(["/a/i", "/i/", "/e/"], "", $string);
    echo $replaced . "<br>";

    $string2 = "Breakfast at Tiffany's";
    $replaced2 = preg_replace(["/a/i", "/i/", "/e/", "/y/"], "", $string2);
    echo $replaced2 . "<br>";

    $string3 = "2001: A Space Odyssey";
    $replaced3 = preg_replace(["/a/i", "/i/", "/e/", "/y/", "/o/i"], "", $string3);
    echo $replaced3 . "<br>";

    $string4 = "It's a Wonderful Life";
    $replaced4 = preg_replace(["/a/i", "/e/", "/i/i", "/y/", "/o/i", "/u/"], "", $string4);
    echo $replaced4 . "<br>";
    ?>

    <h4 style="color: green;">-------- II.VIII. Task --------</h4>
    <!-- Suskaičiuoti kiek stringe “Don't Be a Menace to South 
    Central While Drinking Your Juice in the Hood” yra žodžių 
    trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su 
    stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis 
    pas save kvartale”. -->

    <?php
    $count = 0;
    $string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    $split = explode(" ", $string);
    $arrayStringNo = str_word_count($string);
    echo "<br>Words in the string: " . $arrayStringNo;
    for ($i = 0; $i < $arrayStringNo; $i++) {
        if (strlen($split[$i]) <= 5) {
            $count++;
        }
    }
    echo "<br>" . $count . " zodziai (-iu) trumpesniu (ar lygiu) 5 raidems";

    $count2 = 0;
    $string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
    $split2 = explode(" ", $string2);
    $arrayStringNo2 = str_word_count($string2);
    echo "<br>Words in the string: " . $arrayStringNo2;
    for ($i = 0; $i < $arrayStringNo2; $i++) {
        if (strlen($split2[$i]) <= 5) {
            $count2++;
        }
    }
    echo "<br>" . $count2 . " zodziai (-iu) trumpesniu (ar lygiu) 5 raidems";
    ?>

</body>

</html>