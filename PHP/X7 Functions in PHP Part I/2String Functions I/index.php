<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myname = " ATUL " ; 
    $partial = substr($myname, 0 , 3);
    print $partial ;
    ?>
  </p>
  <p>
    <?php
    $uppercase = strtoupper ($myname);
    print $uppercase;
    // Make your name upper case and print it to the screen:
    
    ?>
  </p>
  <p>
    <?php
    $lowercase=strtolower($myname);
    print $lowercase;
    // Make your name lower case and print it to the screen:
    
    ?>
  </p>
</html>
