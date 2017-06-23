One of the most effective ways to enhance the look and feel of a website is by changing the font. In CSS, font is managed using the font-family property:

h1 {
  font-family: Georgia, serif;
}
Above, the font-family property of the h1 selector is set to the value of Georgia, with serif as a fallback font. Fallback fonts are included in case a visitor's web browser does not support the first font. Sometimes, more than one fallback font is included.
1.
The Mystwood Publishers website could be improved with a more stylish font.

Instructions:

In main.css, locate the h1 selector.

Inside of the { } brackets, add:

font-family: Palatino, 'Palatino Linotype', serif;
Click Run and notice the change to the words "Mystwood Publishers Ltd". Palatino is now the font.
