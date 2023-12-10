<!-- The script allows data that has beenm entered in the "signUp form". To be transfered and stored into the database -->
<?php
    // Check if user enters the signUp page correctly 
    if($_SERVER["REQUEST_METHOD"] == "post"){

        // Grabbing data from form to sent to database
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        $email = $_POST["email"];

    //  Ruuning a try-catch statement
    try {
        // Grabbing connection to database
        require_once "dbh.inc.php"; //Allows access to another php file, or link to a php file

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);"; // (?) acts as a placeholder for the Values

        // Fabricating a prepared statement to query the data inside the database
        $statement = $pdo->prepare($query);

        // executing the values from the array
        $statement->execute([$username, $pwd, $email]);

        // removing any data from the statement and query to free up resources
        $query = null;
        $statement = null;

        // Sending user back to menu wants they Sign Up
        header("Location: ../index.html"); 
        
        die();


    } catch (PDOException $e) {
        // Output a error message
        die("Query Failed: " . $e->getMessage());
    }

    }else{ 
        header("Location: ../index.html"); //This header, accompanied by the Location attribute will send the user back to the main menu.
    }
    // Check if the user enters data into the Form