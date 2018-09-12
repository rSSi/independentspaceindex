<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>JSON test</title>
	  <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
<?php

/*
** JSON to TABLE
** to do:
** 	* links
**	* filtern und verarbeiten von Klartextnamen wo nötig (LLLLLL / __TIM NOLAS)
**	* zusätzliches Feld in JSON für spezial Styles (KLUCKYLAND spiegelverkehrt)
*/


$string = file_get_contents("index.json");
$index = json_decode($string);

echo "<h2>RAW JSON -> Table</h2>\n";
$table = "<table id='maintable'>\n";
$table .= "\t<thead>
		<tr>
			<th>Name</th><th>District</th><th>Address</th><th class='sorter-false'>Website</th>
		</tr>
	</thead>
	<tbody id='mainTableBody'>\n";

foreach ($index as $offspace)
{
	$table .= "\t\t<tr>\n\t\t\t";
	foreach ($offspace as $value) {
		$table .= "<td>{$value}</td>";
	}
	$table .= "\n\t\t</tr>\n";
}
$table .= "\t</tbody>\n</table>\n";
echo $table;
?>

</body>
</html>