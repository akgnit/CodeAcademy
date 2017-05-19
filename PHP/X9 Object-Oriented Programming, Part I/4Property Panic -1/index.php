<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php 
            class Person(){
                $teacher = new Person();
                $student= new Person();
                public $isAlive = "true";
                public $firstname;
                public $lastname;
                public $age;
            }
            echo $teacher -> isAlive;    
        ?>
      </p>
    </body>
</html>
