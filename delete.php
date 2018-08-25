<?php

    // http://www.thaicreate.com/php/php-mysql-mysqli-delete.html

    // Create connection Ex 1
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);


    // Create connection Ex 1
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    $strCustomerID = $_GET["CustomerID"];
    $sql = "DELETE FROM customer
                WHERE CustomerID = '".$strCustomerID."' ";

    $query = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)) {
        echo "Record delete successfully";
    }

    mysqli_close($conn);

?>

<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?
Col_id=<?php echo $result["Coldata"];?>';}">Delete</a></td>

