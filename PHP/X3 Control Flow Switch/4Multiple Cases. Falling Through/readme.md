Multiple Cases. Falling Through!
You sometimes want to make multiple expressions, all of which have the same result. Consider the following if statement:

if ($i == 1 ||
    $i == 2 ||
    $i == 3) {
 echo '$i is somewhere between 1 and 3.';
}
With a switch statement, you can do this by adding cases right after another without a break. This is called falling through. The following code works exactly like the above if statement:

case 1:
case 2:
case 3:
    echo '$i is somewhere between 1 and 3.';
    break;
    
Instructions

Replace the two underscores to make the switch also check for 3 and 4.
