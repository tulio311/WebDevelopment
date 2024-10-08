<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Musique</title>
	<link rel="stylesheet" href="a.css">

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8KK76KC30X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8KK76KC30X');
</script>


</head>
<body>

<div class="container">
	
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Nombre</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Género</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">País</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Discos</a></div>
		</div>
		<div class="table-content">	

			<?php
			// Path to the SQLite database file
			$dbFile = 'musica.db';

			try {
			    // Create a PDO instance for SQLite
			    $pdo = new PDO("sqlite:$dbFile");

			    // Set the PDO error mode to exception
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    // If the database is connected successfully
			    //echo "Connected to the SQLite database!";
			} catch (PDOException $e) {
			    // Handle connection errors
			    echo "Connection failed: " . $e->getMessage();
}

			$sql = "SELECT * FROM artistas;";

			$stmt = $pdo->prepare($sql);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch all the rows from the result
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Loop through the results and print each user
    foreach ($users as $user) {

    echo '<div class="table-row">	<div class="table-data">' . $user['name'] . '</div><div class="table-data">' . $user['genero']. '</div><div class="table-data">' . $user['pais'] . '</div><div class="table-data disc" id="_' . $user['id'] . '">.</div></div>';

    }


?>


			





			<!--
			
			<div class="table-row">		
				<div class="table-data">Alberto Pedraza</div>
				<div class="table-data">Cumbia</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id="Alberto">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Alex Ubago</div>
				<div class="table-data">Pop</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id="Alex">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Amaral</div>
				<div class="table-data">Pop</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "Amaral">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Ana Mena</div>
				<div class="table-data"></div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "Ana">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Armin Van Buuren</div>
				<div class="table-data"></div>
				<div class="table-data">Países Bajos</div>
				<div class="table-data disc" id = "Armin">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Arturo O'Farrill</div>
				<div class="table-data">Jazz</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Arturo">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Arvo Pärt</div>
				<div class="table-data">Contemporánea</div>
				<div class="table-data">Estonia</div>
				<div class="table-data disc" id = "Arvo">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Avicii</div>
				<div class="table-data"></div>
				<div class="table-data">Suecia</div>
				<div class="table-data disc" id = "Avicii">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Avril Lavigne</div>
				<div class="table-data">Pop Punk</div>
				<div class="table-data">Canadá</div>
				<div class="table-data disc" id = "Avril">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Bach</div>
				<div class="table-data">Barroca</div>
				<div class="table-data">Alemania</div>
				<div class="table-data disc" id = "Bach">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Belinda</div>
				<div class="table-data"></div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "Belinda">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Bizarrap</div>
				<div class="table-data"></div>
				<div class="table-data">Argentina</div>
				<div class="table-data disc" id = "Bizarrap">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Calvin Harris</div>
				<div class="table-data"></div>
				<div class="table-data">UK</div>
				<div class="table-data disc" id = "Calvin">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Cartel de santa</div>
				<div class="table-data"></div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Cartel">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Christopher Larkin</div>
				<div class="table-data"></div>
				<div class="table-data">Australia</div>
				<div class="table-data disc" id = "Christopher">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Disclosure</div>
				<div class="table-data">Electrónica</div>
				<div class="table-data">UK</div>
				<div class="table-data disc" id = "Disclosure">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Ellie Goulding</div>
				<div class="table-data"></div>
				<div class="table-data">UK</div>
				<div class="table-data disc" id = "Ellie">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Enrique Iglesias</div>
				<div class="table-data">Pop</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "Enrique">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Fatoumata Diawara</div>
				<div class="table-data"></div>
				<div class="table-data">Mali</div>
				<div class="table-data disc" id = "Fatoumata">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Gabry Ponte</div>
				<div class="table-data"></div>
				<div class="table-data">Italia</div>
				<div class="table-data disc" id = "Gabry">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Genitallica</div>
				<div class="table-data"></div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Genitallica">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Geoffrey Oryema</div>
				<div class="table-data"></div>
				<div class="table-data">Uganda</div>
				<div class="table-data disc" id = "Geoffrey">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Grupo Quintanna</div>
				<div class="table-data">Cumbia</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Grupo">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Handel</div>
				<div class="table-data">Barroco</div>
				<div class="table-data">UK</div>
				<div class="table-data disc" id = "Handel">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Hombres G</div>
				<div class="table-data">Rock</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "Hombres">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Illapu</div>
				<div class="table-data">Andina</div>
				<div class="table-data">Chile</div>
				<div class="table-data disc" id = "Illapu">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Indila</div>
				<div class="table-data"></div>
				<div class="table-data">Francia</div>
				<div class="table-data disc" id = "Indila">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Karol G</div>
				<div class="table-data"></div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "Karol">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Kesha</div>
				<div class="table-data">Pop</div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "Kesha">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Kudai</div>
				<div class="table-data"></div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "Kudai">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">La maldita vecindad y los hijos del 5to. patio</div>
				<div class="table-data">Ska</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "LaMaldita">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">La oreja de Van Gogh</div>
				<div class="table-data">Pop</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "La">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">La quinta estación</div>
				<div class="table-data">Pop</div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "LaQuinta">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Mendelssohn</div>
				<div class="table-data">Romántica</div>
				<div class="table-data">Alemania</div>
				<div class="table-data disc" id = "Mendelssohn">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Mercedes Sosa</div>
				<div class="table-data"></div>
				<div class="table-data">Argentina</div>
				<div class="table-data disc" id = "Mercedes">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Metallica</div>
				<div class="table-data">Thrash Metal</div>
				<div class="table-data">US</div>
				<div class="table-data disc" id = "Metallica">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Molotov</div>
				<div class="table-data">Rock</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Molotov">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Mozart</div>
				<div class="table-data">Clásica</div>
				<div class="table-data">Austria</div>
				<div class="table-data disc" id = "Mozart">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">November Ultra</div>
				<div class="table-data"></div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "November">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Orquesta la Famosa Ver Alma</div>
				<div class="table-data">Michoacana</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Orquesta">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Oumou Sangaré</div>
				<div class="table-data"></div>
				<div class="table-data">Mali</div>
				<div class="table-data disc" id = "Oumou">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Pantera</div>
				<div class="table-data">Groove Metal</div>
				<div class="table-data">US</div>
				<div class="table-data disc" id = "Pantera">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Pink Floyd</div>
				<div class="table-data">Rock Progresivo</div>
				<div class="table-data">UK</div>
				<div class="table-data disc" id = "Pink">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Pxndx</div>
				<div class="table-data">Punk</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Pxndx">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Rosalía</div>
				<div class="table-data"></div>
				<div class="table-data">España</div>
				<div class="table-data disc" id = "Rosalia">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Santa Fe Klan</div>
				<div class="table-data"></div>
				<div class="table-data">Mexico</div>
				<div class="table-data disc" id = "Santa">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Shakira</div>
				<div class="table-data"></div>
				<div class="table-data">Colombia</div>
				<div class="table-data disc" id = "Shakira">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Sia</div>
				<div class="table-data"></div>
				<div class="table-data"></div>
				<div class="table-data disc" id = "Sia">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Sibelius</div>
				<div class="table-data">Romántica</div>
				<div class="table-data">Finlandia</div>
				<div class="table-data disc" id = "Sibelius">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Tlen Huicani</div>
				<div class="table-data">Veracruzana</div>
				<div class="table-data">México</div>
				<div class="table-data disc" id = "Tlen">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Verdi</div>
				<div class="table-data">Romántica</div>
				<div class="table-data">Italia</div>
				<div class="table-data disc" id = "Verdi">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Victor Jara</div>
				<div class="table-data"></div>
				<div class="table-data">Chile</div>
				<div class="table-data disc" id = "Victor">.</div>
			</div>
			<div class="table-row">
				<div class="table-data">Violeta Parra</div>
				<div class="table-data">Canto nuevo</div>
				<div class="table-data">Chile</div>
				<div class="table-data disc" id = "Violeta">.</div>
			</div>

			-->
		</div>	
	</div>
</div>

<div id = "discos">
	<p id="d0" class="d dc"></p>
	<p id="d1" class="d dc"></p>
	<p id="d2" class="d dc"></p>
	<p id="d3" class="d dc"></p>
	<p id="d4" class="d dc"></p>
	<p id="d5" class="d dc"></p>
	<p id="d6" class="d dc"></p>
	<p id="d7" class="d dc"></p>
	<p id="d8" class="d dc"></p>
</div>


<div id="pop">
	<p class ="rola" id="rola0"></p>
	<p class ="rola" id="rola1"></p>
	<p class ="rola" id="rola2"></p>
	<p class ="rola" id="rola3"></p>
	<p class ="rola" id="rola4"></p>
	<p class ="rola" id="rola5"></p>
	<p class ="rola" id="rola6"></p>
	<p class ="rola" id="rola7"></p>
	<p class ="rola" id="rola8"></p>
	<p class ="rola" id="rola9"></p>
	<p class ="rola" id="rola10"></p>
	<p class ="rola" id="rola11"></p>
	<p class ="rola" id="rola12"></p>
	<p class ="rola" id="rola13"></p>
	<p class ="rola" id="rola14"></p>
	<p class ="rola" id="rola15"></p>
	<p class ="rola" id="rola16"></p>
	<p class ="rola" id="rola17"></p>
	<p class ="rola" id="rola18"></p>
	<p class ="rola" id="rola19"></p>
	<p class ="rola" id="rola20"></p>
	<p class ="rola" id="rola21"></p>
	<p class ="rola" id="rola22"></p>
	<p class ="rola" id="rola23"></p>
	<p class ="rola" id="rola24"></p>
	<p class ="rola" id="rola25"></p>
	<p class ="rola" id="rola26"></p>
	<p class ="rola" id="rola27"></p>
	<p class ="rola" id="rola28"></p>
	<p class ="rola" id="rola29"></p>
	<p class ="rola" id="rola30"></p>
	<p class ="rola" id="rola31"></p>

</div>

<div id="overlay">
</div>


<script src="./info/discos.js"></script>
<script src="./info/rolas.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="a.js"></script>
<script src="discos.js"></script>

</body>
</html>




