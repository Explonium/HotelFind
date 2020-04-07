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
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
    <?php require_once "blocks/header.php"?>
    <?php require_once "blocks/gallery_block.php"?>

    <div class="main_block">

        <div id="ķīna" class="row" style="margin-top: 0.5em; float: left">
            <div class="block_hover" style="border-radius: 7px; padding-left: 20px; padding-right: 20px">
                <h1 style="font-size: 1.5em">Ķīna</h1>
            </div>
        </div>
        <p class="half-line">Tourism in China is a growing industry that is becoming a significant part of the Chinese economy. The rate of tourism
            has greatly expanded over the last few decades since the beginning of reform and opening-up. The emergence of a newly rich
            middle class and an easing of restrictions on movement by the Chinese authorities are both fueling this travel boom. China has
            become one of the world's most-watched and hottest inbound and outbound tourist markets. According to Xinhuanet, the world is
            on the cusp of a sustained Chinese tourism boom.</p>

            <p class="half-line">As of 2015, China is the fourth most visited country in the world, after France, United States, and Spain, with 56.9 million
                international tourists per year.</p>

            <p class="half-line">In 2017, tourism contributed about CNY 8.77 trillion (US$1.35 trillion), 11.04% of the GDP, and contributed direct and
                indirect employment of up to 28.25 million people. There were 139.48 million inbound trips and five billion domestic trips.
                Data from 2016 indicated that the majority of China's foreign tourists came (transferred) from Hong Kong, Macau, and Taiwan.
                Among the number of tourist arrivals who stayed for at least a night, 27.72 million came from Hong Kong, 4.81 million from
                Macau and 5.09 million from Taiwan. When adjusted to exclude transfers from Hong Kong, Macau and Taiwan, the number of
                tourist arrivals from foreign countries directly to China is 21.65 million.</p>
        <?php echo_gallery_block("image/china"); ?>




        <div id="japāna" class="row" style="margin-top: 0.5em; float: left">
            <div class="block_hover" style="border-radius: 7px; padding-left: 20px; padding-right: 20px">
                <h1 style="font-size: 1.5em">Japāna</h1>
            </div>
        </div>
        <p class="half-line">Japan attracted 31.19 million international tourists in 2018. Japan has 21 World Heritage Sites, including Himeji Castle,
            Historic Monuments of Ancient Kyoto and Nara. Popular foreigner attractions include Tokyo and Hiroshima, Mount Fuji,
            ski resorts such as Niseko in Hokkaido, Okinawa, riding the shinkansen and taking advantage of Japan's hotel and hotspring
            network.</p>

            <p class="half-line">The 2017 Travel and Tourism Competitiveness Report ranked Japan 4th out of 141 countries overall, which was the highest
                in Asia. Japan gained relatively high scores in almost all of the featured aspects, such as health and hygiene, safety
                and security, and cultural resources and business travel. According to Google’s Year in Search 2019, Japan was the
                second highest search term of the travel category, behind the Maldives.</p>
        <?php echo_gallery_block("image/japan"); ?>




        <div id="krievija" class="row" style="margin-top: 3em; float: left">
            <div class="block_hover" style="border-radius: 7px; padding-left: 20px; padding-right: 20px">
                <h1 style="font-size: 1.5em">Krievija</h1>
            </div>
        </div>
        <p class="half-line">Tourism in Russia has seen rapid growth since the late Soviet times, first domestic tourism and then international tourism as well.
        Rich cultural heritage and great natural variety place Russia among the most popular tourist destinations in the world.
            Not including Crimea, the country contains 23 UNESCO World Heritage Sites, while many more are on UNESCO's tentative lists.</p>
        <p class="half-line">Major tourist routes in Russia include a travel around the Golden Ring of ancient cities, cruises on the big rivers
        including the Volga, and long journeys on the famous Trans-Siberian Railway. Diverse regions and ethnic cultures of Russia
        offer many different foods and souvenirs, and show a great variety of traditions, including Russian Maslenitsa, Tatar Sabantuy,
        or Siberian shamanist rituals. In 2013, Russia was visited by 33 million tourists, making it the ninth-most visited country in
            the world and the seventh-most visited in Europe.</p>
        <?php echo_gallery_block("image/russia"); ?>
    </div>
    <div class="row" style="height: 3em"></div>
    <div id="footer">
    asdadsadad
    </div>
</body>
</html>
