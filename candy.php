<?php
$candies = [
//["Name", "WinPercent", "sugarpercent", "pricepercent"],
["100 Grand", 66.972, 0.732, 0.860],
["3 Musketeers", 67.603, 0.604, 0.511],
["One dime", 32.261, 0.011, 0.116],
["One quarter", 46.117, 0.011, 0.511],
["Air Heads", 52.341, 0.906, 0.511],
["Almond Joy", 50.348, 0.465, 0.767],
["Baby Ruth", 56.915, 0.604, 0.767],
["Boston Baked Beans", 23.418, 0.313, 0.511],
["Candy Corn", 38.011, 0.906, 0.325],
["Caramel Apple Pops", 34.518, 0.604, 0.325],
["Charleston Chew", 38.975, 0.604, 0.511],
["Chewey Lemonhead Fruit Mix", 36.018, 0.732, 0.511],
["Chiclets", 24.525, 0.046, 0.325],
["Dots", 42.272, 0.732, 0.511],
["Dum Dums", 39.461, 0.732, 0.034],
["Fruit Chews", 43.089, 0.127, 0.034],
["Fun Dip", 39.186, 0.732, 0.325],
["Gobstopper", 46.783, 0.906, 0.453],
["Haribo Gold Bears", 57.120, 0.465, 0.465],
["Haribo Happy Cola", 34.159, 0.465, 0.465],
["Haribo Sour Bears", 51.412, 0.465, 0.465],
["Haribo Twin Snakes", 42.179, 0.465, 0.465],
["Hershey's Kisses", 55.375, 0.127, 0.093],
["Hershey's Krackel", 62.284, 0.430, 0.918],
["Hershey's Milk Chocolate", 56.491, 0.430, 0.918],
["Hershey's Special Dark", 59.236, 0.430, 0.918],
["Jawbusters", 28.127, 0.093, 0.511],
["Junior Mints", 57.219, 0.197, 0.511],
["Kit Kat", 76.769, 0.313, 0.511],
["Laffy Taffy", 41.390, 0.220, 0.116],
["Lemonhead", 39.141, 0.046, 0.104],
["Lifesavers big ring gummies", 52.911, 0.267, 0.279],
["Peanut butter M&M's", 71.465, 0.825, 0.651],
["M&M's", 66.575, 0.825, 0.651],
["Mike & Ike", 46.412, 0.872, 0.325],
["Milk Duds", 55.064, 0.302, 0.511],
["Milky Way", 73.100, 0.604, 0.651],
["Milky Way Midnight", 60.801, 0.732, 0.441],
["Milky Way Simply Caramel", 64.353, 0.965, 0.860],
["Mounds", 47.830, 0.313, 0.860],
["Mr Good Bar", 54.526, 0.313, 0.918],
["Nerds", 55.354, 0.848, 0.325],
["Nestle Butterfinger", 70.736, 0.604, 0.767],
["Nestle Crunch", 66.471, 0.313, 0.767],
["Nik L Nip", 22.445, 0.197, 0.976],
["Now & Later", 39.447, 0.220, 0.325],
["Payday", 46.297, 0.465, 0.767],
["Peanut M&Ms", 69.484, 0.593, 0.651],
["Pixie Sticks", 37.722, 0.093, 0.023],
["Pop Rocks", 41.266, 0.604, 0.837],
["Red vines", 37.349, 0.581, 0.116],
["Reese's Miniatures", 81.866, 0.034, 0.279],
["Reese's Peanut Butter cup", 84.180, 0.720, 0.651],
["Reese's pieces", 73.435, 0.406, 0.651],
["Reese's stuffed with pieces", 72.888, 0.988, 0.651],
["Ring pop", 35.291, 0.732, 0.965],
["Rolo", 65.716, 0.860, 0.860],
["Root Beer Barrels", 29.704, 0.732, 0.069],
["Runts", 42.849, 0.872, 0.279],
["Sixlets", 34.722, 0.220, 0.081],
["Skittles original", 63.085, 0.941, 0.220],
["Skittles wildberry", 55.104, 0.941, 0.220],
["Nestle Smarties", 37.887, 0.267, 0.976],
["Smarties candy", 45.996, 0.267, 0.116],
["Snickers", 76.674, 0.546, 0.651],
["Snickers Crisper", 59.529, 0.604, 0.651],
["Sour Patch Kids", 59.864, 0.069, 0.116],
["Sour Patch Tricksters", 52.826, 0.069, 0.116],
["Starburst", 67.038, 0.151, 0.220],
["Strawberry bon bons", 34.579, 0.569, 0.058],
["Sugar Babies", 33.438, 0.965, 0.767],
["Sugar Daddy", 32.231, 0.418, 0.325],
["Super Bubble", 27.304, 0.162, 0.116],
["Swedish Fish", 54.861, 0.604, 0.755],
["Tootsie Pop", 48.983, 0.604, 0.325],
["Tootsie Roll Juniors", 43.069, 0.313, 0.511],
["Tootsie Roll Midgies", 45.737, 0.174, 0.011],
["Tootsie Roll Snack Bars", 49.654, 0.465, 0.325],
["Trolli Sour Bites", 47.173, 0.313, 0.255],
["Twix", 81.643, 0.546, 0.906],
["Twizzlers", 45.466, 0.220, 0.116],
["Warheads", 39.012, 0.093, 0.116],
["Welch's Fruit Snacks", 44.376, 0.313, 0.313],
["Werther's Original Caramel", 41.904, 0.186, 0.267],
["Whoppers", 49.524, 0.872, 0.848],
];

$candy1 = $candies[array_rand($candies)];
$candy2 = $candies[array_rand($candies)];

$choice_one = strval($candy1[0]);
$choice_two = strval($candy2[0]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halloween Candies</title>
   <link rel="stylesheet" href="candy.css" type="text/css">
</head>

<body>
<div id="poll">
<h2>

    Which candy do you prefer?
    <br>

</h2>

    <form method="post" action="candyresults.php">

<label>
<input type="radio" id="candy1" name="candy_choice" value=<?php echo $choice_one?>> <?php echo $choice_one?>
</label>
<br><br>
        <label>
    <input type="radio" name="candy_choice" value=<?php echo $choice_two?>> <?php echo $choice_two?>
</label>

    <br><br>
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>