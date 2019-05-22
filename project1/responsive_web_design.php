<?php include('includes/header.inc.php'); ?>
    <?php displayImages('galleries', 'responsive_design', 'background'); ?>
    <div id="content">
        <!-- ----- Section ----- -->
        <section>
            <article>
                <header>
                    <h1>Responsive Web Design Research</h1>
                    <h2 id="rwd-q1">What is responsive web design and who first coined the term?</h2>
                </header>
                		<p>Responsive design is a design philosophy for websites that does not take the specific width of the viewing device into consideration during the building process.</p>
                		<blockquote>
                    "allowing desktop webpages to be viewed in response to the size of the device one is viewing with."<br><a href="alistapart.com/article/responsive-web-design">A list Apart</a>
                		</blockquote>
                		<p>Instead, the webpage is built using a fluid grid layout that is adaptive to all device widths, and can morph content to fit into any particular device based on it's width as necessary. Ethan Marcotte first coined the term Responsive Web Design defined as, "allowing desktop webpages to be viewed in response to the size of the device one is viewing with." (<a href="alistapart.com/article/responsive-web-design">A list Apart</a>) which was identified in a book he released in 2011.</p>
                	<header>
                    <h2>Why use responsive web design principles and methods in your work?</h2>
                    </header>
                    <p>Using responsive web design principles in websites allows for those sites to not 'age' as quickly as other websites. As the trend for mobile-friendly websites becomes more widespread, so does the desire for websites to be adaptable to different device sizes. Currently, many websites do not accommodate for mobile devices, despite how many users browse the internet via a mobile/tablet device over a desktop device.</p>
                    <blockquote>
                    	"As people increasingly search on their mobile devices, we want to make sure they can find content that’s not only relevant and timely, but also easy to read and interact with on smaller mobile screens" <br><a href="www.wsj.com/articles/google-gives-boost-to-mobile-friendly-sites-1429660022">Wall Street Journal</a>
                    </blockquote>
                    <p>Google states, "As people increasingly search on their mobile devices, we want to make sure they can find content that's not only relevant and timely, but also easy to read and interact with on smaller mobile screens" (<a href="www.wsj.com/articles/google-gives-boost-to-mobile-friendly-sites-1429660022">Wall Street Journal</a>). Sites that do not adapt to mobile devices will age much quicker than those that can display themselves on both mobile and desktop devices and so long as google remains a primary search engine, we will see favoritism in websites that can adapt to the latest technology that is used to browse the internet.</p>
                    	<header><h2 id="rwd-q2">What are some techniques and practices used in creating responsive web layouts?
</h2></header>
						<p>According to Google, there are a few established patterns for creating responsive layouts that can conform to any screen size. </p>
                        <blockquote>
                        	"mostly fluid, column drop, layout shifter, tiny tweaks and off canvas" <br><a href="https://developers.google.com/web/fundamentals/design-and-ui/responsive/patterns/?hl=en">Google Developers</a>
                        </blockquote>
                        <p>Those patterns are, "mostly fluid, column drop, layout shifter, tiny tweaks and off canvas" (<a href="https://developers.google.com/web/fundamentals/design-and-ui/responsive/patterns/?hl=en">Google Developers</a>). Mostly fluid contains a grid that remains more or less the same on larger devices and then breaks down content by section and stacks vertically. Column Drop stacks columns vertically as the content viewport breaks down. Layout Shifter utilizes multiple breakpoints that is usually custom to each page type. The Tiny Tweaks technique uses a single-column layout that just adjusts to screen sizes primarily only through font changes and resizing of images. Lastly, Off Canvas is an approach that removes less utilized content as the screen size diminishes, though remains accessible through the navigation.</p>
                        <header><h2 id="rwd-q3">How does responsive web design relate to "universal design?"
</h2></header>
						<p>Universal design refers to the ability for general-use products, buildings, and environments that can be used by all, despite any handicaps or disabilities. Responsive web design relates closely to this concept in that a major handicap that currently exists in a web environment is many users in lesser-developed countries are limited to the use of smart phones as their sole means of exploring web content to due the relative cost of smart phones compared to desktop computers. It is important for web design to match this principle to allow for the flow of information to be accessible by all who seek it out.</p>       
             </article>
        </section>
          <!--End section-->
	<?php include('includes/footer.inc.php'); ?>