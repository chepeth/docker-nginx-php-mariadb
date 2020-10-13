# Mod Rewrite Index ( Wordpress )
<pre>
  location / {
    try_files $uri $uri/ /index.php?$args;
  }
</pre>
