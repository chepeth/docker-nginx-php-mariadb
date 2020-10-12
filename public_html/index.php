Index Rewrite: <a href="./">Home</a> | <a href="about">About</a> | <a href="contact">Contact</a>
<hr>
<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
$url = array(
  'about' => "<h2>about page</h2>",
  'contact' => "<h2>contact page</h2>"
);
echo isset($url[$uri[1]]) ? $url[$uri[1]] : "<h2>homepage</h2>";
