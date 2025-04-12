<?php include 'includes/header.php'; ?>



<form method="POST" action="">
        <input type="text" name="text" required placeholder="Enter something">
        <input type="submit" value="Submit">
    </form>

<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $text = $_POST ["text"];
  echo "You searched for $text";
} else {
 echo "";

}; 


/* Write PHP Code here  
Overall idea here is to check if a form has been submitted


Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST, 
and a message should be displayed like this:
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form



*/
?>

<?php include 'includes/footer.php'; ?>