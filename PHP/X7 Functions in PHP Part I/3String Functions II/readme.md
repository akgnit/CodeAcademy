String Functions II
strpos() find the position of the first occurrence of a substring in a string.

strpos("emily", "e");   // 0
strpos("emily", "i");   // 2
strpos("emily", "ily"); // 2
strpos("emily", "zxc"); // false
The parameters passed to strpos() are the haystack and the needle. The function tries to find the needle in the haystack.

It returns either the index of the first character, or false if the needle cannot be found.

if (strpos("david","h") === false) {
  print "Sorry, no 'h' in 'david'";
}
// prints the "Sorry" message
Use the editor to create your own haystack and needle combinations. You can use variables for both haystack and needle.

Instructions
On line 6, use strpos() passing in your name as the haystack and a letter from your name as the needle.
On line 13, test if strpos() === false where the needle is not in the haystack. Print out an error message inside your if block.
