The new font looks great! However, black is not your only option when it comes to font color.

In CSS, the color property sets the color of a CSS selector's font:

h1 {
  color: red;
}
CSS comes equipped with 140 named colors, such as red, used above. For many situations, these named colors will suffice. However, web developers who want to get even more exact with their color choices can use hexadecimal and RGB color values.

Hexadecimal color (#RRGGBB): Hexadecimal values that represent mixtures of red, green and blue. For example, red can be expressed with the hexadecimal value of #FF0000: the value ff represents red, 00 represents green, and 00 represents blue.

RGB (Red, Green, Blue) colors: Color created by three numbers representing red, green, and blue. When mixed together, the three values create a specific color. For example: purple can be represented as rgb(128,0,128).

Instructions:

1.
h1 heading elements on the Mystwood Publishing website are colored black by default. Let's change them to red.

In main.css locate the h1 selector. Directly underneath the line of code where you added the font-family property, add:

color: red;
Click Run to view the color change in the web browser.
2.
Replace red with a different named color. Here are some options:

AntiqueWhite
Chocolate
DarkOliveGreen
DeepSkyBlue
3.
HEX color provide millions of different shades of colors.

Try replacing the named color with one of the HEX colors below.

#2e69a3
#d8dabe
#dabece
#799575

Click Run to see the result in the web browser.
4.
The HEX colors listed in the previous step can also be created using RGB values. Try this out by swapping out the HEX color value on the left for the RGB value on the right. See the result in the browser.

HEX	RGB
#2e69a3	rgb(46,105,163)
#d8dabe	rgb(216,218,190)
#dabece	rgb(218,190,206)
#799575	rgb(121,149,117)
