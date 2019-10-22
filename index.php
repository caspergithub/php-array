<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP array opgave</title>
</head>
<style>
    body{
        font-family: Helvetica;
        padding: 22px 64px;
    }
    h1{
        text-align: center;
    }
    span{
        color: red;
    }
</style>
<body>

<h1>Arrays</h1>

<!-- INDEXED ARRAYS -->
<h2>Indexed arrays</h2>

<?php
/* sådan skriver man et array
$ kan være hvad som helst: biler, både, film */
$serier = array(
    /* herinde skriver man values som automatisk får
     et index som altid starter med 0 */
    "True Detective", 
    "Breaking Bad", 
    "Game of Thrones", 
    "Our Planet", 
    "Rick & Morty", 
    "Black Mirror", 
    "The Haunting of Hill House", 
    "Archer", 
    "Dexter", 
    "Mindhunter", 
    "House");
    /* her får du koden til at tælle arrayets values */
$arrlength = count($serier);

/* og her siger du at for hver value */
for($x = 0; $x < $arrlength; $x++) {
    /* echo indholdet */
    echo $serier[$x];
    /* og lav et break */
    echo "<br>";
}
?>

<p><i>fra php version 5.4 kan man bare bruge square brackets, 
    istedet for at skrive array</i></p>

<?php
/* den nye måde at lave et array */
$serier = [
    "True Detective", 
    "Breaking Bad", 
    "Game of Thrones", 
    "Our Planet", 
    "Rick & Morty", 
    "Black Mirror", 
    "The Haunting of Hill House", 
    "Archer", 
    "Dexter", 
    "Mindhunter", 
    "House"];
$arrlength = count($serier);

for($x = 0; $x < $arrlength; $x++) {
    echo $serier[$x];
    echo "<br>";
}
?>

<!-- ASSOCIATIVE ARRAYS -->
<h2>Associative arrays</h2>

<?php
$year = [
    /* her assigner du en key til dine values og så kan du bruge
    det til at trække det value ud med */
    "True Detective"=>"2014", 
    "Breaking Bad"=>"2008", 
    "Game of Thrones"=>"2011"];
    /* her trækker du valuet 2014 ud med key True Detective */
echo "True Detective sæson 1 udkom i " . $year['True Detective'];
?>

<!-- SORTING ARRAYS -->
<h2>Sorting array</h2>
<p>Ascending sorting array:</p>

<?php
$serier = [
    "True Detective", 
    "Breaking Bad", 
    "Game of Thrones", 
    "Our Planet", 
    "Rick & Morty", 
    "Black Mirror", 
    "The Haunting of Hill House", 
    "Archer", 
    "Dexter", 
    "Mindhunter", 
    "House"];
    /* du kan sortere dit array alfabetisk ved at skrive
    sort($serier); */
sort($serier);

$clength = count($serier);
for($x = 0; $x < $clength; $x++) {
    echo $serier[$x];
    echo "<br>";
}
?>

<p>Descending sorting array:</p>

<?php
$serier = [
    "True Detective", 
    "Breaking Bad", 
    "Game of Thrones", 
    "Our Planet", 
    "Rick & Morty", 
    "Black Mirror", 
    "The Haunting of Hill House", 
    "Archer", "Dexter", 
    "Mindhunter", 
    "House"];
    /* hvis du vil sortere dem i omvendt rækkefølge skriver du bare
    rsort for reverse */
rsort($serier);

$clength = count($serier);
for($x = 0; $x < $clength; $x++) {
    echo $serier[$x];
    echo "<br>";
}
?>

<!-- MULTIDIMENSIONAL ARRAYS OPGAVEN -->
<h2>Multidimensional arrays opgaven</h2>

<!-- Byg selv en multidimensionel array som er et array med flere arrays inden i -->

<?php
$array = 
[
    ["find","selv","noget"]
    /* sæt selv flere arrays med flere values ind */
];
echo $array[0][0]." måske ".$array[0][1]." på ".$array[0][2].".<br>";
 /* hent selv jeres arrays ind og echo dem ud */
?>

<br>

<a href="https://www.imdb.com/chart/toptv/?sort=ir,desc&mode=simple&page=1">www.imdb.com/chart/toptv</a>

</body>
</html>