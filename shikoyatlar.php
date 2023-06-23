<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
   
  
    // Perform any desired processing or validation on the form data
  
    // Example: Display the submitted data
    echo "<h2>Submitted Information:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Surname: $surname</p>";
   
  }
