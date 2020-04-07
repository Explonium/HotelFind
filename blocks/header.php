<script src="/HotelFind/js/scroll.js"></script>

<div id="header">
    <!-- Main logo -->
    <a href="/HotelFind/index.php" title="Galvenā lapa">
        <div class="block_hover" style="width: 15em; float: left">
            <h1>Hotel Find</h1>
            <div class="block_light" style="width: 100%;height: 2px">
            </div>
            <h2 style="margin-top: 0.3em">Make your travel easier</h2>
        </div>
    </a>

    <!-- Useful links -->
    <div class="block_hover" style="float: left; margin-top: 1.3em; margin-left: 1em; padding: 0.5em">
        <h2>Noderīgas saites:</h2>
        <a href="/HotelFind/gallery.php" style="font-weight: bold">Galerija</a>
        <h2>|</h2>
        <a href="/HotelFind/maps.php" style="font-weight: bold">Kartes</a>
        <h2>|</h2>
        <a href="/HotelFind/about_us.php" style="font-weight: bold">Pār mums</a>
        </h2>
    </div>

    <!-- Register / Login -->
    <a style="float: right; margin-top: 1.3em; margin-right: 1em; font-weight: bold;" href="/HotelFind/index.php">
        <div class="block_hover" style="padding: 0.5em">
            Ienākt
        </div>
    </a>
    <a style="float: right; margin-top: 1.3em; margin-right: 1em; font-weight: bold;" href="/HotelFind/index.php">
        <div class="block_hover" style="padding: 0.5em">
            Registrēties
        </div>
    </a>

    <a style="margin-top: 1.3em; margin-right: 4em; font-weight: bold; float: right">
        <div class="block_hover" style="padding: 0.5em; cursor: pointer" onclick="scrollToElement()">
            Meklēt
        </div>
    </a>

    <input id="txtbox_find" class="input" placeholder="Ievadiet atslēga vārdu" style="float: right; margin: 1.5em" autocomplete="on">
</div>

<script>
    // Get the input field
    var input = document.getElementById("txtbox_find");

    // Execute a function when the user releases a key on the keyboard
    input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            scrollToElement();
        }
    });

    document.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 27) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("header").scrollIntoView();
        }
    });
</script>
