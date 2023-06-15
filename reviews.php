<?php 
    // connect to the database 
    $db = new mysqli("aws.connect.psdb.cloud", "0zyfzvk2boag4sjwxdyj", "pscale_pw_vOfuBPnEqP6yucjxCKr79HDYTA0xS8Bcy3iJK6rvUgC", "reviews"); 
 
    // get the reviews from the database 
    $query = "SELECT * FROM reviews ORDER BY id DESC"; 
    $result = $db->query($query); 
 
    // display the reviews 
    while ($row = $result->fetch_assoc()) { 
        echo "<div class='review'>"; 
        echo "<h3>" . $row["name"] . "</h3>"; 
        echo "<p>" . $row["review"] . "</p>"; 
        echo "</div>"; 
    } 
?>