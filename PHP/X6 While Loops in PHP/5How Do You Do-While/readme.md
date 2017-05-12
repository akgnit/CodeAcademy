How Do You Do-While?
You may have noticed that a while loop checks the loop condition before each iteration of the code inside. A logical alternative is to check the condition after each iteration before looping back. A do/while loop does just that. One consequence of this difference is that the code inside a while loop can be bypassed entirely whereas the code inside a do/while loop will execute at least once.

This means that the loop condition can depend exclusively on code within the loop's body. This is the case for the code in the editor where each iteration represents a coin flip, and any time the result of the coin flip is tails, the loop stops.

Instructions
Inspect the code within the editor to see if you understand how it will work. If you don't, no worries! Click Save & Submit Code and see what happens.

?
Hint
The do/while loop sytax, which will be discussed in the next exercise, looks like this:

do {
   // looped statements go here
} while (cond); 
In this example, $flip is either 1 or 0, which means it works as a boolean true or false variable as well. (When used as a condition, 1 means true and 0 means false to PHP.)

The syntax "StringStuff {$var} MoreStringStuff" is an efficient way to add a variable $var into a string.
