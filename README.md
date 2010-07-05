# CSRF

*CSRF Helper for Kohana 3.x (Cross Site Request Forgery)*

- **Module Version:** 1.0.1-isieo-1
- **Module URL:** <http://github.com/isieo/kohana-csrf>
- **Module Forked From:** <http://github.com/synapsestudios/kohana-csrf>
- **Tested on Kohana Version(s):** 3.0

## Description
The CSRF class will generate a token to use in forms, and provides a validation 
method to use as a rule CSRF::valid

To use jquery to automatically add csrf token in form,
include the following in your header

<script type="text/javascript" src="/csrf/javascript/jquery.js"></script>

to generate token use: getCSRFToken() javascript function (useful for ajax calls)

