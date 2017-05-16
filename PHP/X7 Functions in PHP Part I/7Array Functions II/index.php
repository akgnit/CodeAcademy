<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
    $the_array = array(2, 4, 3, 6, 1);
    sort($the_array);
    print join(",", $the_array);
	
	
	$the_array = array(2, 5, 3, 6, 1);
	rsort($the_array);
	print join(":", $the_array);
	// Reverse sort your array and print the joined elements to the screen

	?>
	</p>
</html>
