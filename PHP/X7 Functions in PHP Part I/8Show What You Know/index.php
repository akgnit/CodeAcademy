<html>
    <p>
    <?php
// Create an array and push on the names
// of your closest family and friends

    $close = array("AKG");
    array_push($close, "Deepak");
    array_push($close, "Amit");
    array_push($close, "Niraj");
    array_push($close, "Shivam");


// Sort the list

    $sort = sort($close);


// Randomly select a winner!

    $random = count(rand(0,$sort)-1);


// Print the winner's name in ALL CAPS

    print strtoupper($close[$random]);

    ?>

	</p>
</html>
