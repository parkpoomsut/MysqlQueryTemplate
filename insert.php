<?php

    // Create connection e.g. 1

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    // Create connection e.g. 2
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    $sql = "INSERT INTO table_name (col1, col2, col3, col4, col5, col6) 
            VALUES ('".$_POST["col1"]."','".$_POST["col2"]."','".$_POST["col3"]."'
            ,'".$_POST["col4"]."','".$_POST["col5"]."','".$_POST["col6"]."')";

    $query = mysqli_query($conn,$sql);

    if($query) {
        echo "Record add successfully";
    }

    mysqli_close($conn);

?>