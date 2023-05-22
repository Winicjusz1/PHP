<?php
// sprawdzenie czy plik jest częścią wywołania przez plik zawierający zmienną $add_page
if (!$add_file)
    exit;
?>
<!--     Menu serwisu www, wygenerowane w dniu - <?php echo date("F j, Y, g:i a"); ?> -->




<div class="col-sm-5 ml-5">

    <nav class="row">
        <div class="col-6 bg-primary text-dark font-weight-bold"> <a href="index.php?page=KimJestem">
                <h2> <span class="icon-user"></span><br />Kim jestem </h2>
            </a></div>
        <div class="col-6 bg-success text-dark font-weight-bold"> <a href="index.php?page=MojaOferta">
                <h2><span class="icon-laptop"></span><br />Moja oferta </h2>
            </a></div>
        <div class="col-6 bg-danger text-dark font-weight-bold"> <a href="index.php?page=CV">
                <h2><span class="icon-graduation-cap"></span><br /> CV - Życiorys Zawodowy </h2>
            </a></div>
        <div class="col-6 bg-info text-dark font-weight-bold"> <a href="index.php?page=Kontakt">
                <h2><span class="icon-mail"></span><br />Mail do mnie </h2>
            </a></div>
    </nav>

</div>