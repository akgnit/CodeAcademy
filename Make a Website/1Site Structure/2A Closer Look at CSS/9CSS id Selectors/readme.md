The background image makes a big difference. Nice work!

A previous exercise introduced CSS class selectors to style HTML elements of specific classes. What if a webpage design calls for an individual page element to be styled uniquely, but all other elements of that kind to be styled a different way?

For example, to style one anchor element differently than all the others on a webpage, you could use the HTML id attribute:

<a id="learn-code" href="https://www.codecademy.com">Click here to learn to code!</a>
Then in the CSS file, you would create a rule for the id selector, using a # symbol:

#learn-code {
  color: #2e69a3;  
}
About using id:

An id attribute can only be used once because the id is unique to the element it is assigned to.

Ids have greater specificity than classes. If an HTML element is using both id and class attributes, the CSS rule for the id will take precedence over that of the class.
Below we will use an id selector to style a single HTML element differently than others of that kind on the webpage.


1.
In the exercise titled 6.font-size, we enlarged the font-size property for paragraph elements. This unintentionally increased the size of the paragraph which reads, © 2016 Mystwood Publishers Limited at the bottom of the webpage. We can use an id attribute to fix this effect.

In index.html, locate the paragraph element mentioned above. Set its id to "footer":

<p id="footer">&copy; Mystwood Publishers Limited</p>
Click Run to continue.
2.
In main.css, add a new id selector. Use #footer as the name of the id selector.

#footer {
}
Click Run to continue.
3.
Give #footer a font-size property of 0.75rem.

Click Run to see what changed in the web browser: the "footer" paragraph is now sized 0.75rem.
