<?php
  function displayResults($parsed_result, $tabs=1)
	{
		foreach ( $parsed_result as $key => $value)
		{
      if ( is_array($value) || is_object($value))
      {
  		  print(str_repeat("\t", $tabs) . $key . " -> \n");
        displayResults($value, $tabs + 1);
      }
      else
      {
          
			  print(str_repeat("\t", $tabs) . $key . " -> " . $value . "\n");
       }

			echo "";
		}
	}
?>