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

  if (isset($_POST['Title']))
  {
    $title = $_POST['Title'];

  }
  else
  {
    header('Location: chooseBook.html');
  }

  // to search for a title, str_replace
  // spaces with +
  $title = ;

  // build the URL
	$URL = ;

  // fetch the URL (get json document)
	$result = ;

  // decode the json document to an array	
	$parsed_result = ;

  // see what we received
  // print_r($parsed_result);


  // get the bookData out of the JSON object
  $bookData ;


  // for each book, print a link (key) to the book's page and display the title.
  //    if the isbn exists, display a link to getBook.php passing the ISBN 
  //    as a parameter.
 
?>



</body>
</html>