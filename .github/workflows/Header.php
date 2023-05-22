<?php
// sprawdzenie czy plik jest częścią wywołania przez plik zawierający zmienną $add_file
if (!$add_file)
    exit;
?>
<!-- naglowek serwisu WWW, wygenerowane w dniu - <?php echo date("F j, Y, g:i a"); ?>  -->
<html>

<head>
    <title>Przykładowa strona</title>
    <link rel="stylesheet" href="main.css" type="text/css" media="screen">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Strona Responsywna </title>
    <meta name="description"
        content="Przebudowanie strony na responsywną za pomocą Bootstrapa oraz nadanie jej charakteru serwisu dynamicznego przy pomocy języka PHP">
    <meta name="keywords" content="responsywność">
    <meta name="author" content="Winicjusz Cyboran">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="cssfontello/fontello.css" type="text/css" />

    <script src="timer.js"></script>

</head>

<body>


    <body onload="odliczanie();">

        <main>

            <section class="Tiles">

                <div class="container">
                    <div class="row">
                        <header>

                            <h1>Strona Responsywna jako strona "wizytówka" lub portfolio.</h1>
                            <p>Jest to responsywna wersja strony uprzednio opartej o budowę divów z wykorzystaniem
                                HTML5.
                                Obecnie przeniesiona do Bootstrapa - dzięki któremu zyskała pełną responsywność. Nadano
                                jej charakter Dynamicznego Serwisu WWW poprzez użycie języka PHP. </p>

                        </header>

                        <div class="col-sm-7 ml-5 font-weight-bold">
                            <a class="first" href="index.php"> WINICJUSZ CYBORAN </a>
                        </div>

                        <div class="col-sm-4  ml-2 font-weight-bold "><span id="zegar">

                                12:30:25</span>
                        </div>