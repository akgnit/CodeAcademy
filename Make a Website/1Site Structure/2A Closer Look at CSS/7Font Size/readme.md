The size of text has an impact on how users experience a website. The font-size property sets the size of an HTML element's text.

h1 {
  font-size: 60px; 
}
In the CSS above, font-size is set to 60px. In CSS, size can be assigned in pixels (px), rems, or ems.

pixel (px): Standard unit of measurement for sizing fonts and other HTML elements.

rem: Represents the default font size for the web browser. Rems can be used to ensure that HTML elements scale in proportion to each other on various web browsers and screen sizes. On most web browsers, 1rem is equivalent to 16px, 2rem is equivalent to 32px (a doubling), 3rem is equivalent to 48px (a tripling) and so on.

em: A relative value that changes in proportion to the size of the parent element. For example, if a parent element has font-size: 20px;, child elements with font-size: 1em; would be equivalent to 20px. Child elements with font-size: 0.5em; would be equivalent to 10px (a halving) and so on.
We will primarily explore px and rem values since these are the most commonly used today.


1.
The h2 heading for the Mystwood Publishing website would be more impressive if its font size were larger.

In main.css, locate the h2 selector and set font-size to 48px.

Click Run and notice how the size of the heading increases in the web browser.
2.
48px may still be too small for a heading. Change the font-size value of the h2 selector to 56px.

Click Run and notice the font size increase in the web browser.
3.
Now, let's get some experience using rem values.

In main.css, for the p selector, add:

font-size: 2rem;
Click Run to see the result in the web browser.

The paragraph element on the webpage should double in size.

Note: The paragraph element at the bottom of the page has also increased in size. We will fix this effect later on in the lesson.
4.
Now let's resize anchor elements that are children of elements with the "hero" class using em values.

In main.css locate the .hero a selector. Change the font-size property to 1.25em;.

Click Run to see the anchor element's size decrease.
