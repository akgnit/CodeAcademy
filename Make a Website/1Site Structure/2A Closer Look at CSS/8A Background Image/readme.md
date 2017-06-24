In CSS, the background-image property sets a background image of your choice for a given selector, as seen below.

.hero {
  background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
}
The CSS rule above assigns the image hosted at

https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg
to elements that have a class attribute set to hero.

To control the size of the chosen background image, use the property background-size as seen below:

.hero {
  background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
  background-size: cover;
}
Here, we have specified that we want the image to completely cover elements with the .hero class.


1.
Let's add a background image to the Mystwood Publishing homepage.

In main.css, locate the .hero class selector. Inside the rule, insert a background image. Here is a URL for a great photo to use:

https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg
Remember, in order for the background image to work, you will need to include url and parenthesis in the property's value:

background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
And, the image URL must be contained within quotation marks.

Click Run and notice the background image assigned to the .hero div in the web browser.
2.
In the web browser, you may notice that the background image seems rather "close up". We can make it so that more of the image is seen by using the background-size property.

In main.css, in the .hero selector below the background-image property, add background-size: cover;.

Click Run and notice the change in the web browser: much more of the original photo is viewable within the .hero div.
3.
Finally, now that a background-image covers the .hero div, the black font color makes it difficult to read the text of the h2 and p.

In main.css, give the .hero selector a color property of #ffffff, which is the HEX code for white.
