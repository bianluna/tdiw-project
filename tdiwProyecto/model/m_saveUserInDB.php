<?php
function saveUserInDB($connexio, $name, $email, $password, $address,  $city,  $postalcode, $telephone)
{
  $sql_user = "
        INSERT INTO users (name, email, password, address, city, postalcode, telephone)
        VALUES ($1, $2, $3, $4, $5, $6, $7)
    ";

  // Hash the password securely before storing
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Execute the prepared statement
  $params = [$name, $email, $hashedPassword, $address,  $city,  strval($postalcode), $telephone];
  $result = pg_query_params($connexio, $sql_user, $params);


  if ($result) {
    return true; // Successfully inserted
  } else {
    // Log the error for debugging purposes
    error_log("Database insert error: " . pg_last_error($connexio));
    echo pg_last_error($connexio);
    return false; // Failed to insert
  }
}
?>