<?php

$nameErr = "";
$emailErr = "";
$subjectErr = "";

// Validation Steps
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $nameErr = "You must enter a name in this field."
    }
    else{
        $contact_sender = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $emailErr = "You must enter an Email in this field.";
    }
    else{
        $contact_email = test_input($_POST["email"]);
    }
    
    if(empty($_POST["subject"])){
        $subjectErr = "You must enter a message in this field.";
    }
    else{
        $subject_body = test_input($_POST["subject"]);
    }
    

    $contact_alt_type = test_input($_POST["alt_contact"]);
    $contact_alt_val = test_input($_POST["alt_contact_val"]);
    
}


// Test input data for html
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>