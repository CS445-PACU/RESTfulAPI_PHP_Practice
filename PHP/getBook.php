<html>
  <title>BOOKS!</title>
  <body>


<?php
  require_once('basicErrorHandling.php');
  require_once('displayResults.php');

  function printLink($link, $text, $tail='')
  {
    print("<a href=");
    print($link);
    print(">" . $text . "</a>". $tail);
  }

  if (isset($_POST['ISBN']))
  {
    $ISBN = $_POST['ISBN'];
  }
  elseif (isset($_GET['ISBN']))
  {
    $ISBN = $_GET['ISBN'];
  }
  else
  {
    header('Location: chooseBook.html');
  }

  // build the URL
	$URL = ;

  // fetch the URL (get json document)
	$result = ;

  // decode the json document to an array	
	$parsed_result = ;

  // see what we received
  // print_r($parsed_result);

  // find the book data in the first position in the array
  $bookData = ;

  // print a link to the book's URL with the title displayed

  // if there is a small cover, display that cover

  // for each author, print a link to that author's page with the name displayed
 
?>

</body>
</html>