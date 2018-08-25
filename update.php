<?php

    // Create connection EXAMPLE 1
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);


    // Create connection EXAMPLE 2
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    $sql = "UPDATE customer SET 
                col1 = '".$_POST["col1"]."' ,
                col2 = '".$_POST["col2"]."' ,
                col3 = '".$_POST["col3"]."' ,
                col4 = '".$_POST["col4"]."' ,
                col5 = '".$_POST["col5"]."'
                WHERE col_id = '".$_POST["col_id"]."' ";

    $query = mysqli_query($conn,$sql);

    if($query) {
        echo "Record update successfully";
    }

    mysqli_close($conn);

?>