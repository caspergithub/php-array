<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Opgave</title>
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

<p><i>Her trækker vi enkeltvis 3 values ud af et array: True Detective, Breaking Bad og Game of Thrones.</i></p>

<?php
/* Et simpelt array */
$serier = array("True Detective", "Breaking Bad", "Game of Thrones"); 
/* træk enkelte values ud ved at bruge deres index som altid starter på 0 */
echo "I like " . $serier[0] . ", " . $serier[1] . " and " . $serier[2] . ".";
?>

<p><i>og så kan man loope igennem dem istedet for</i></p>

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

<!-- MULTIDIMENSIONAL ARRAYS -->

<h2>Multidimensional arrays</h2>

<?php
$serier = 
[
    ["True Detective",2014,"9,0"], 
    ["Breaking Bad",2008,"9,5"], 
    ["Game of Thrones",2011,"9,4"],
    ["Our Planet",2019,"9,4"]
];
echo $serier[0][0]."<span>: Udkom i: </span>".$serier[0][1]."<span>, rating: </span>".$serier[0][2].".<br>";
echo $serier[1][0]."<span>: Udkom i: </span>".$serier[1][1]."<span>, rating: </span>".$serier[1][2].".<br>";
echo $serier[2][0]."<span>: Udkom i: </span>".$serier[2][1]."<span>, rating: </span>".$serier[2][2].".<br>";
echo $serier[3][0]."<span>: Udkom i: </span>".$serier[3][1]."<span>, rating: </span>".$serier[3][2].".<br>";
?>

<br>

<a href="https://www.imdb.com/chart/toptv/?sort=ir,desc&mode=simple&page=1">www.imdb.com/chart/toptv</a>

</body>
</html>