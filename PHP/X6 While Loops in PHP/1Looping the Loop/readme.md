Looping the Loop
A loop is a structure that tells a computer to execute a set of statements multiple times. If you have a process that you want repeated hundreds of times, it pays to put it in a loop so you don't need to write hundreds of lines of code.

If you are working on these courses in order, you have already seen how a for loop can allow for a set number of loop iterations. But what about a situation where (due to randomness, perhaps) you don't know how many times the loop should repeat? In that case, you can use a while loop.

A while loop will execute as long as a certain condition is true. For example, the loop in the editor will simulate coin flips as long as the number of consecutive heads is less than 3.

Instructions
Take a look at the code in the editor and see if you understand how it will work. Once you think you know (or if you're stumped, no pressure!) click Save & Submit Code and see what happens. Check the hint if you would like an explanation.

?
Hint
Get live, fast support from Codecademy Advisors when you get stuck.
Learn more.
Before the loop, variables are defined to count the number of consecutive heads, $headCount, and the total number of flips, $flipCount.

The loop executes as long as $headCount is less than 3. Inside the loop rand(0,1) randomly outputs either a 0 or 1 representing tails and heads respectively, and $flipCount increases by one. If the result is heads (1 evaluates as true) $headCount increases by one and the heads <div> is echoed to the page. If not, $headCount becomes 0 and the tails <div> is echoed to the page.

When the loop is done, $flipCount is echoed to the page within a paragraph.