<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style/accueil.css"/>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/acceuil.js"></script>
</head>
<body>
<div class="container">
    <?php include("part/menu.php") ?>
    <div class="row">
        <div class="col-md-12" id="TitleWebSite">
            <h1>Game Ipi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" id="Content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed malesuada ligula. Curabitur
                porttitor vitae dui at viverra. In eleifend quis massa et ultricies. Donec ut turpis aliquet, facilisis
                tellus vestibulum, mollis purus. Duis vulputate id nulla ut facilisis. Maecenas leo turpis, hendrerit
                eget turpis ac, rhoncus lobortis metus. Pellentesque consequat aliquam lorem, et maximus purus mattis
                nec. Ut nec auctor massa, eu placerat felis. Pellentesque hendrerit cursus sem vel posuere. Donec at
                quam consequat, lobortis odio non, scelerisque neque. Aliquam et ullamcorper eros. Aenean aliquam
                ullamcorper urna et rhoncus. Nunc fermentum vitae dolor id semper. Sed auctor, est nec accumsan
                dignissim, ipsum odio commodo ligula, sit amet hendrerit augue orci vel magna. Aliquam porttitor
                vulputate libero, tincidunt fringilla massa imperdiet et.
            </p>
        </div>
        <div class="col-md-4" id="Score">
            <?php include("part/score.php")?>
        </div>
    </div>

    <div class="row" id="TeamTitle">
        <h2>Our team</h2>
    </div>
    <div class="row" id="Animation">
        <div class="col-xs-6 col-md-3">
            <img id="Rocket1" data-src="holder.js/100%x180" alt="100%x180" src="images/Rocket1.png"
                 data-holder-rendered="true"
                >
        </div>
        <div class="col-xs-6 col-md-3">
            <img id="Rocket2" data-src="holder.js/100%x180" alt="100%x180" src="images/Rocket2.png"
                 data-holder-rendered="true"
                >
        </div>
        <div class="col-xs-6 col-md-3">
            <img id="Rocket3" data-src="holder.js/100%x180" alt="100%x180" src="images/Rocket3.png"
                 data-holder-rendered="true"
                >
        </div>
        <div class="col-xs-6 col-md-3">
            <img id="Rocket4" data-src="holder.js/100%x180" alt="100%x180" src="images/Rocket4.png"
                 data-holder-rendered="true"
                >
        </div>
    </div>
</div>
<audio id="AudioRocket1">
    <source src="sound/Rocket1.mp3"/>
</audio>
<audio id="AudioRocket2">
    <source src="sound/Rocket2.mp3"/>
</audio>
<audio id="AudioRocket3">
    <source src="sound/Rocket3.mp3"/>
</audio>
<audio id="AudioRocket4">
    <source src="sound/Rocket4.mp3"/>
</audio>
</body>
</html>