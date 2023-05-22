<?php
header("content-type: text/html; charset=utf-8");
// wczytanie zmiennej informujacej, do której strony odwołuje się nasze żądanie
// format żadania http - index.php?page='main' (odwołanie do strony głównej)
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'Main';
}
// zmienna umożliwiająca wczytannie elementów strony
$add_file = 'true';

include "Header.php";
include "Menu.php";
switch ($page) {
    case 'Main':
        //  wczytanie zawartości strony głównej
        include "Main.php";
        break;
    case 'KimJestem':
        // wczytanaie zawartości kolejnej strony
        include "KimJestem.php";
        break;
    case 'MojaOferta':
        // wczytanaie zawartości kolejnej strony
        include "MojaOferta.php";
        break;
    case 'CV':
        // wczytanaie zawartości kolejnej strony
        include "CV.php";
        break;
    case 'Kontakt':
        // wczytanaie zawartości kolejnej strony
        include "Kontakt.php";
        break;

}
// wczytanie stopki naszej strony
include "Main2.php";
include "Footer.php";
?>