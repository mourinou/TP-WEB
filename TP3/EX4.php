<form method="GET">
    <label for="a">Veuillez saisir le coefficient a :</label>
    <input type="text"  name="a"><br>
    <label for="b">Veuillez saisir le coefficient b :</label>
    <input type="text"  name="b"><br>
    <label for="c">Veuillez saisir le coefficient c :</label>
    <input type="text"  name="c"><br>
    <input type="submit" value="Calculer">
</form>
<?php 
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    if (is_numeric($_GET["a"]) && is_numeric($_GET["b"]) && is_numeric($_GET["c"])) {

    
    if ($a == 0 && $b == 0 && $c == 0) {
        echo "L'équation admet une infinité de solutions.";
    } elseif ($a == 0 && $b == 0) {
        echo "L'équation n'admet aucune solution dans l'ensemble des réels.";
    } elseif ($a == 0) {
        $solution = -$c / $b;
        echo "L'équation admet une seule solution : x = $solution.";
    } else {
        $delta = $b * $b - 4 * $a * $c;
        
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "L'équation admet deux solutions distinctes : x1 = $x1 et x2 = $x2.";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "L'équation admet une solution double : x = $x.";
        } else {
            echo "L'équation n'admet aucune solution dans l'ensemble des réels.";
        }
    }
}
}