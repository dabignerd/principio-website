<?php 
    // connect to the database 
    $db = new mysqli("aws.connect.psdb.cloud", "0zyfzvk2boag4sjwxdyj", "pscale_pw_vOfuBPnEqP6yucjxCKr79HDYTA0xS8Bcy3iJK6rvUgC", "reviews"); 
 
    // get the form data 
    $name = $db->real_escape_string($_POST["name"]); 
    $email = $db->real_escape_string($_POST["email"]); 
    $review = $db->real_escape_string($_POST["review"]); 
 
    // insert the review into the database 
    $query = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')"; 
    $db->query($query); 
 
    // redirect the user to the review page 
    header("Location: reviews.php"); 
    exit()
?> 