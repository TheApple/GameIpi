<!doctype HTML>
<html>
<head>
    <title>Ma page html</title>
    <link rel="stylesheet" href="style/game.css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/morpion.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/game.css"/>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php include("part/menu.php") ?>

    <!--  <canvas id="canvas" width="900" height="700">
          Sorry, your browser doesn't support the &lt;canvas&gt; element.
      </canvas>
      -->
    <div class="row" id="Players">
        <div class="col-md-12">
            <label>Player 1 : </label>
            <input id="PlayerName1" required="required">
            <label style="margin-left:20px ">Player 2 : </label>
            <input id="PlayerName1" required="required">
            <button id="playButton">Play</button>
        </div>
    </div>

    <div class="row" id="rowPlateau">
        <table id="Plateau" cellpadding="0" cellspacing="0">
            <tr>
                <td class="case" data-position="0,0"></td>
                <td class="case" data-position="1,0"></td>
                <td class="case" data-position="2,0"></td>
            </tr>
            <tr>
                <td class="case" data-position="0,1"></td>
                <td class="case" data-position="1,1"></td>
                <td class="case" data-position="2,1"></td>
            </tr>
            <tr>
                <td class="case" data-position="0,2"></td>
                <td class="case" data-position="1,2"></td>
                <td class="case" data-position="2,2"></td>
            </tr>
        </table>
    </div>

    <div class="row">
        <?php include("part/score.php") ?>

    </div>

</div>

</body>

<script>
    function draw() {
        var canvas = document.getElementById('canvas');
        if (canvas.getContext) {

            var ctx = canvas.getContext('2d');

            // ctx.fillRect(25,25,100,100);
            //ctx.clearRect(45,45,60,60);
            ctx.strokeRect(0, 0, 202, 202);
            ctx.strokeRect(0, 202, 202, 202);
            ctx.strokeRect(0, 404, 202, 202);
            ctx.strokeRect(202, 0, 202, 202);
            ctx.strokeRect(202, 202, 202, 202);
            ctx.strokeRect(202, 404, 202, 202);
            ctx.strokeRect(404, 0, 202, 202);
            ctx.strokeRect(404, 202, 202, 202);
            ctx.strokeRect(404, 404, 202, 202);

            ctx.beginPath();
            ctx.arc(675, 75, 50, 0, Math.PI * 2, true); // Outer circle
            ctx.moveTo(710, 75);
            ctx.arc(675, 75, 35, 0, Math.PI, false);  // Mouth (clockwise)
            ctx.moveTo(665, 65);
            ctx.arc(660, 65, 5, 0, Math.PI * 2, true);  // Left eye
            ctx.moveTo(695, 65);
            ctx.arc(690, 65, 5, 0, Math.PI * 2, true);  // Right eye
            ctx.stroke();
        }
    }
    draw();
</script>

</html>