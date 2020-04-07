<!DOCTYPE html>
<html lang="lv">
<head>
    <!-- Main settings -->
    <meta charset="UTF-8">
    <title>Hotel Find</title>

    <!-- CSS styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/heading.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/block.css">
</head>
<body>
    <?php require_once "blocks/header.php"?>

    <div class="main_block">
        <div id="kartas" class="row" style="margin-top: 0.5em; float: left">
            <div class="block_hover" style="border-radius: 7px; padding-left: 20px; padding-right: 20px">
                <h1 style="font-size: 1.5em">Kartas</h1>
            </div>
        </div>
        <div id="googleMap" style="width:100%;height:90vh; margin-top: 0.5em"></div>

        <script src="js/maps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdxN1iD6Sc-ddPqRfGWBF_q6pQYWw4o80&callback=myMap"></script>

        <div id="interesantas vietas" class="row" style="margin-top: 0.5em; float: left">
            <div class="block_hover" style="border-radius: 7px; padding-left: 20px; padding-right: 20px">
                <h1 style="font-size: 1.5em">Interesantas vietas</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 0.5em">
            <a style="font-weight: bold" onclick="gotoLatLng(56.845902, 24.037246, 20);">Mana dzīves vieta</a>
        </div>

        <div class="row" style="margin-top: 0.5em">
            <a style="font-weight: bold" onclick="gotoLatLng(56.953221, 24.103784, 19);">RVT</a>
        </div>

        <div class="row" style="margin-top: 0.5em">
            <a style="font-weight: bold" onclick="gotoLatLng(1.463924, 32.387367, 7);">Uganda</a>
        </div>
    </div>

    <div class="row" style="height: 3em"></div>
    <div id="footer">
        azzzazaza
    </div>
</body>
</html>