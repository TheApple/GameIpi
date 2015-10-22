<table class="table table-striped">
    <thead>
    <tr>
        <th>Player Name</th>
        <th>Win</th>
        <th>Lose</th>
        <th>Ratio</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=gameipi;charset=utf8','root','');

    $response = $bdd->query("SELECT * FROM morpion ORDER BY MO_Win DESC");

    while ($data = $response->fetch()) {
        $win = $data["MO_Win"];
        $lose = $data["MO_Lose"];
        if ($win == 0 and $lose == 0) {
            $ratio = 0;
        }
        else if ($lose == 0){
            $ratio = 100;
        }
        else if ($win == 0)
        {
            $ratio = -100;
        }
        else{
            $ratio = $win / ($lose + $win) * 100;
        }
        ?>
        <tr>
            <td><?= $data["MO_PlayerName"] ?></td>
            <td><?= $win ?></td>
            <td><?= $lose ?></td>
            <td><?= $ratio ?>%</td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
