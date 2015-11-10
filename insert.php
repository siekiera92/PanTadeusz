<?php
$tytul=$_POST['tytul'];
$refleksja=$_POST['refleksja'];
$con=pg_connect("host=sbazy user=s181616 dbname=s181616 password=LuLmziBV");
$query="insert into refleksje(refleksja, tytul) values('$refleksja','$tytul');";
$result=pg_query($con, $query);
echo "tekst testowy";
?>

