Take a look at the web browser. Technically, this is the same site you saw in the previous exercise. It contains the exact same HTML elements and content as before. What's missing? The CSS that was used to previously style the site has been unlinked.

The HTML link element links a CSS file to an HTML file so that CSS styling can be applied. Here's an example of the link element:

<link rel="stylesheet" type="text/css" href="main.css"/>
About link:

The link element uses three attributes:

-rel: Specifies the relationship between the current file and the file being linked to: in this case, the rel attribute is "stylesheet".

-type: Specifies the type of file linked to.

-href: Provides the URL of the file being linked to.

Like the HTML image element, link is self-closing. It does not need a closing tag. 

In the example above, main.css is an external style sheet. Using external stylesheets is one of the most popular ways to write CSS. Inline CSS is another method.

Instructions

1. Let's use the link element to connect index.html and main.css.

Inside the head element of index.html, insert a link element that connects index.html and main.css. Use the code snippet above as a guide.

Click Run and notice the effect in the browser:

main.css is now linked to index.html.
The CSS from main.css is now applied to the HTML elements in index.html.
