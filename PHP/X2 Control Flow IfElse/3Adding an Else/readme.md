Adding an Else
Great! We used an if statement to do something if the answer to the condition was yes, or true as we say in PHP.

In addition to doing something when the condition is true, we can do something else if the condition is false. We can do this using an if / else statement:

<?php
  $name = "Edgar";

  if ($name == "Simon") {
    print "I know you!";
  }
  else {
    print "Who are you?";
  }
?>
Just like before, if the condition is true, then only the code inside the first pair of curly braces will run. Otherwise, the condition is false, so only the code inside the second pair of curly braces after the else keyword will run.

In the example above the condition $name == "Simon" evaluates to false since $name is Edgar. Since the condition is false, only the code inside the curly braces after the else keyword runs, and prints out Who are you?

Instructions

Under your if statement on line 12, write an else statement to capture the people who are only buying 5 items or fewer. In their case, use echo to output "You get a 5% discount!"
