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

			$sql = "SELECT * FROM discos;";

			$stmt = $pdo->prepare($sql);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch all the rows from the result
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Loop through the results and print each user
    header('Content-Type: application/json');
	echo json_encode($users);


?>