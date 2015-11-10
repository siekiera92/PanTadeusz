<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<meta charset="UTF-8"/>
<?php
$con = pg_connect("host=sbazy user=s181616 dbname=s181616 password=LuLmziBV");
$s = "select * from refleksje";
$r = pg_exec($con, $s);
$lw = pg_numrows($r);
$lk = pg_numfields($r);

print "<table class='table table-hover'>";

print "<th>Refleksja</th>";
print "<th>Tytul</th>";


for ($j=0; $j<$lw; $j++){
print "<tr>";
  for ($i=0; $i<$lk; $i++){
  print "<td>".pg_result($r, $j, $i);
  };
print "</tr>";
};
print "</table>";
?>
</html>
