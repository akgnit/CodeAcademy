<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    $myname = "ATUL";
    $position = strpos ($myname , "U" );
    print $position;
    
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos($myname ,"h") === false) {
  print "Sorry, no 'h' in $myname";
}
    
    ?>
    </p>
</html>
