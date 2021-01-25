<?php
echo "1<br>";

$txt = "Ajourd'hui il fait -1000 degrés";

echo addcslashes($txt, "'");

echo "<br>2<br>";

$newTxt = "le texte de votre choix, le tout en minuscules<br>";

echo strtoupper($newTxt);

echo ucfirst($newTxt);

echo ucwords($newTxt);

$otherTxt = "LE TEXTE DE VOTRE CHOIX, LE TOUT EN MAJUSCULES<br>";

echo strtolower($otherTxt);

echo lcfirst($otherTxt);

echo "3<br>";

$size = "Il faut ecrire une phrase d'au moins vingt cinq mots et compter les mots avec une fonction mais attention aux
chiffres et attention aux accents";

echo str_word_count($size);

echo "<br>4<br>";

$quest4 = "creer une chaine de caracteres et la transformer";

$ref = explode(" ",$quest4);

foreach ($ref as $item){
    echo "$item<br>";
}

echo "5<br>";

$arrWords = ["je", "fais", "une", "liste", "de", "mots"];

echo implode($arrWords);

echo "<br>6<br>";

$twist = "avec le texte de votre choix";

echo strrev($twist);
echo "<br>";
echo str_shuffle($twist);

echo "<br>7<br>";

$hello = "<div><span>Hello</span>, nous apprenons PHP</div>";
echo $hello;
echo strip_tags($hello);

echo "<br>8<br>";

$txt8 = "Le texte de mon choix";

echo str_pad($txt8, 500, "|", 0);

echo "<br>9<br>";

$txt9 = "affichez les lettres";

$arr = str_split($txt9);
foreach ($arr as $item){
    echo "$item<br>";
}

echo "<br>10<br>";

$txt10 = "I am the king of the training !";

echo str_replace("training", "world", $txt10);

echo "<br>11<br>";

$newTest = "je recherche la presence de test";

