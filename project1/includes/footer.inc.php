<?php
	copyright();
?>
<footer>
        <div class="footer-content">
            <article>
                <header><h1>Scripting</h1></header>
                 <ul>
                    <li><a href="scripting.php#script-q1">Server-side Scripting</a></li>
                    <li><a href="scripting.php#script-q2">Advantages &amp; Disadvantages</a></li>
                    <li><a href="scripting.php#script-q3">Common Scripting Languages</a></li>
                </ul>
            </article>
            
            <article>
                <header><h1>Responsive Design</h1></header>
                 <ul>
                    <li><a href="responsive_web_design.php#rwd-q1">Origin &amp; Importance</a></li>
                    <li><a href="responsive_web_design.php#rwd-q2">Techniques</a></li>
                    <li><a href="responsive_web_design.php#rwd-q3">Universal Design</a></li>
                </ul>
            </article>
            
            <article>
                <header><h1>Web CMS</h1></header>
                 <ul>
                    <li><a href="web_CMS.php#cms-q1">Definition</a></li>
                    <li><a href="web_CMS.php#cms-q2">Advantages</a></li>
                    <li><a href="web_CMS.php#cms-q3">Common WebCMS'</a></li>
                </ul>
            </article>
        </div>
      </footer>
      <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script type="text/javascript">
	  	$(document).ready(function() {
			$("#menu").click(function() {
				$("nav#globalnav").toggleClass("nav_open");	
			});	
		});
	  </script>
      <noscript>
        <nav id="navigate">
            <ul>
                <li><a href="index.php">About</a></li>
                <li><a href="scripting.php">Scripting</a></li>
                <li><a href="responsive_web_design.php">Responsive Design</a></li>
                <li><a href="web_CMS.php">WebCMS</a></li>
            </ul>
        </nav>
      </noscript>
      <div id="copyright">
        	<p>&copy;<?php echo $copyright; ?> Project1</p>
      </div>
</body>
</html>