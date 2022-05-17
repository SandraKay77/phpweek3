<?php

$candy_choice = unserialize($_POST['candy']);


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<head>
    <link rel="stylesheet" href="candy.css" type="text/css">
    <title>
        Poll Results
    </title>
</head>
<body>
<div id="table">
    <h1>See how your choice stacks up:</h1>
    <table>
        <tr>
            <th>Candy Name</th>
            <th>Win Percent</th>
            <th>Sugar percent</th>
            <th>Unit Price Percentile</th>
        </tr>
        <tr>
            <td><?php echo $candy_choice[0]; ?></td>
            <td>
                <?php echo $candy_choice[1]; ?>
            </td>
            <td>
                <?php echo $candy_choice[2]; ?>
            </td>
            <td>
                <?php echo $candy_choice[3]; ?>
            </td>
            </tr>

    </table>

</div>
</body>
</html>