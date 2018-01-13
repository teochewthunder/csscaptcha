# CSS-based CAPTCHA

## PHP
What we are doing here is using CSS to draw the strokes of th numbers 0 to 9. The CSS properties of each stroke are stored in a PHP array. There are three sets of character styles, and this is implemented by a multiple-dimensional array.

To generate the CSS for the CAPTCHA, first a random string of numbers is generated and stored as a session variable. Each character of the string is then converted to a graphical representation in CSS by looking up the styles in the multi-dimensional array.

## HTML
Just a textbox, a label, a button and a placeholder for the CAPTCHA image.

## JavaScript
On load, an AJAX call is triggered to *tt_getcaptcha.php* to generate the CAPTCHA. The CSS for the CAPTCHA is returned and displayed in the CAPTCHA placeholder.

If the button is clicked to send the CAPTCHA text, another AJAX call is triggered to *tt_comparecaptcha.php* to compare the input against the session variable.
