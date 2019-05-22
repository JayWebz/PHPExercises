<?php include('includes/header.inc.php'); ?>
    <div id="content">
        <!-- ----- Section ----- -->
        <section>
            <article>
                <header>
                    <h1>Server-Side and Client-Side Scripting Languages Research</h1>
                    <h2 id="script-q1">What is a server-side scripting language, and how does it differ from a client-side scripting language?
</h2>
                </header>
                <h3>&#183; Server-Side Scripting Language &#183;</h3>
                <ul>
                    <li>Defined as a language that loads before any content or formatting is loaded</li>
                    <li>This software is what connects the browser to the website database</li>
                    <li>Used by back-end web developers to build back-end software a website </li>
                    <li>Create the communication channel between user, server, and database</li>
                    <li>Run on the server and interact with the database to populate content for the user.</li>
                </ul>
                <h3>&#183; client-side scripting language &#183;</h3>
                <ul>
                    <li>Typically process on the end-users computer, usually in a browser</li>
                    <li>Needs to be enabled on the user's computer to function</li>
                </ul>
                <header><h2 id="script-q2">What are the advantages and disadvantages of both types?</h2></header>
                <h3>&#183; Server-Side Scripting Language Advantages &#183;</h3>
                <ol>
                	<li>It's ability to "highly customize the [web page being returned to the user] based on the user's requirements, access rights, or queries into data stores" (<a href="www.sqa.org.uk/e-learning/ClientSide01CD/page_18.htm">Scottish Qualifications Authority</a>). This can be done as many times as the user wants and on the fly as users refine/update their queries.</li>
                    <li>It reduces the load on the user's computer since it doesn't require the use of plug-ins like Java or Flash or reliance on the scripting capabilities of the end-users computer.</li>
                    <li>It creates an environment where "website owners can create their own applications or use content management systems to maintain their websites without needing to edit code" (<a href="www.serverschool.com/server-software/benefits-and-disadvantages-of-server-side-scripting/">Dedicated Server School</a>)</li>
                </ol>
                <h3>&#183; Server-Side Scripting Language Disadvantages &#183;</h3>
                <ol>
                	<li>Have requirements such as scripting software be installed on the web server and have accessible databases established in order to store the dynamic data that gets compiled based on a user's web page/content request.</li>
                    <li>Due to dynamic scripts, concerns arise in relation to security. In some instances, it becomes easier for hackers to gain access to servers and be able to expose and exploit flaws within the code. </li>
                </ol>
                <header><h2 id="script-q3">Give examples of commonly used server-side and client-side scripting languages.</h2></header>
                <h3>&#183; Common Server-side scripting languages &#183;</h3>
                <ol>
                	<li>Perl</li>
                    <li>PHP</li>
                    <li>ASP.NET</li>
                    <li>Ruby</li>
                    <li>Python</li>
                </ol>
                <h3>&#183; Common Client-side scripting languages &#183;</h3>
                <ol>
                	<li>Javascript</li>
                    <li>Flash/ActionScript</li>
                    <li>Various Javascript frameworks like JQuery, AngularJS, and Node.js</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ol>
				<header><h2>Fashionable Scripting Imagery</h2></header>
                <?php displayImages('galleries', 'scripting', 'lightbox'); ?>
            </article>
        </section>
        <!-- ----- End section ----- -->
	<?php include('includes/footer.inc.php'); ?>