Up to this point, we've used CSS to select an HTML element by its tag name only. However, we can use class selectors to target classes of HTML elements.

Consider the HTML below:

<div class="header">
  <h2>Heading</h2>
  <p>Paragraph</p>
</div>
Here, the div is the parent element and the h2 and p are children. CSS styles applied to the header class selector will automatically apply to the h2 and the p.

Here's a refresher on parent and child elements.

In CSS, class selectors can be identified by a dot . followed by the class name, as seen below:

.header {
  color: #ffffff; 
}
As a result of this code, child elements of divs with the header class will have a font color of #ffffff (white).

Below, we will use a CSS class selector to style more than one HTML element at once.
1.
Websites often use more than one font family.

In index.html, the h2 heading and paragraph elements are contained inside a div with a class of hero.

In main.css, add properties for the .hero class selector that change the font-family to 'Trebuchet MS', with fallbacks of Helvetica and sans-serif. You can use the code below as a guide:

.hero {
  font-family: 'Trebuchet MS', Helvetica, sans-serif;
}
IMPORTANT: in main.css, two properties, padding and margin, are seen with the .hero selector. We will cover these in unit III, CSS Boundaries and Spacing.

Click Run to view your changes in the web browser.

Notice how child elements of the div with class hero now appear in the Trebuchet MS font.
