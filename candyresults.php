<?php echo



$candy_choice = array($_GET['candy_choice']);
print_r($candy_choice);

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<head>
    <title>
        Poll Results
    </title>
</head>
<body>
<div id="table">

    <table>
        <tr>
            <th>Candy Name</th>
            <th>Win Percent</th>
            <th>Sugar percent</th>
            <th>Unit Price Percentile</th>
        </tr>
<!--        <tr>-->
<!--            <td>--><?php //echo $candy[0]; ?><!--</td>-->
<!--            <td>--><?php //echo $candy[1]; ?><!--</td>-->
<!--            <td>--><?php //echo $candy[2]; ?><!--</td>-->
<!--            <td>--><?php //echo $candy[3]; ?><!--</td>-->
<!--        </tr>-->

    </table>
</div>
</body>
</html>