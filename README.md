# Inline Styles Email

This module swaps the default mailer with a copy that converts email styles to inline.

http://classes.verkoyen.eu/css_to_inline_styles
http://www.pelagodesign.com/sidecar/emogrifier/
http://www.xavierfrenette.com/articles/css-support-in-webmail/#properties
http://www.email-standards.org/

## Troubleshooting / known issues:

 * if you get strange characters, you might need to encode or decode to utf-8
 * apparently you can't have multiple selectors of native html elements eg: h1{} .. later ... h1{} the second will get ignored.
 
## Enhancements

 * allow modifying styles into Content
 * get css from files
 