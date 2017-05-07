<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        // Write the code to modify
        $languages{1} = "C++";
        // the $languages array!
        echo $languages{1};
        
      ?>
    </p>
  </body>
</html>
