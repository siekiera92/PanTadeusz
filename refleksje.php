<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Pan Tadeusz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	
	<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
	
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
		<!-- Grupowanie "marki" i przycisku rozwijania mobilnego menu -->
		<div class="navbar-header">
		  <a class="navbar-brand" href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/Index.html">Pan Tadeusz</a>
		</div>

		<!-- Grupowanie elementów menu w celu lepszego wyświetlania na urządzeniach moblinych -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega1.html" itemprop="url">Księga 1</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega2.html" itemprop="url">Księga 2</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega3.html" itemprop="url">Księga 3</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega4.html" itemprop="url">Księga 4</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega5.html" itemprop="url">Księga 5</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega6.html" itemprop="url">Księga 6</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega7.html" itemprop="url">Księga 7</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega8.html" itemprop="url">Księga 8</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega9.html" itemprop="url">Księga 9</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega10.html" itemprop="url">Księga 10</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega11.html" itemprop="url">Księga 11</a></li>
			<li><a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega12.html" itemprop="url">Księga 12</a></li>
			<li class="dropdown">
			  
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="page-header">
		<h1>Pan Tadeusz <small>Spis ksiąg</small></h1>
	</div>

 <script>
$(document).ready(function(){
    $('.button').click(function(){
    	var reflectionTitle = document.getElementById("InputTitle").value;
    	var reflection = document.getElementById("InputReflection").value;
        var ajaxurl = 'insert.php',
        data =  {'action': 'insert', 'refleksja' : reflection, 'tytul' : reflectionTitle};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert(response);
        });
    });

});
</script>

  </head>
  
  <body>
  <div class="row">
  
		<!-- Zakładki -->

 <div class="btn-group btn-group-vertical col-xs-1">
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega1.html" class="btn btn-primary">Księga 1</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega2.html" class="btn btn-primary">Księga 2</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega3.html" class="btn btn-primary">Księga 3</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega4.html" class="btn btn-primary">Księga 4</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega5.html" class="btn btn-primary">Księga 5</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega6.html" class="btn btn-primary">Księga 6</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega7.html" class="btn btn-primary">Księga 7</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega8.html" class="btn btn-primary">Księga 8</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega9.html" class="btn btn-primary">Księga 9</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega10.html" class="btn btn-primary">Księga 10</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega11.html" class="btn btn-primary">Księga 11</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/ksiega12.html" class="btn btn-primary">Księga 12</a>
  <a href="http://v-ie.uek.krakow.pl/~s181616/PanTadeusz/refleksje.html" class="btn btn-primary">Refleksje</a>

</div>

<div class="container">
            <form class="form-horizontal" role="form" action="" method="post" >
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="InputTitle">Tytu�.</label>
                    <input class="form-control" type="text" id="InputTitle" name="InputTitle">
                  </div>
                  <div class="form-group">
                    <label for="InputReflection">Refleksja</label>
                      <textarea class="form-control" name="InputReflection" id="InputReflection" rows="5" required></textarea>
                  </div>
                  	<input type="submit" class="button btn btn-info" name="insert" value="Wy�.lij" />
                </div>
              </form>
            </div>

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

 
  <footer class="footer">
      <div class="container">
        <p class="text-muted">Piotr Siekierski</p>
		<p class="text-muted">KrDzIs3012Si</p>
		<p class="text-muted">piotr.siekierski.92@gmail.com</p>
      </div>
   </footer>
  </body>

</html>
