<?php
/**
 * Contains the closing of the #content div and all content after
 *
 */
?>
	</div><!-- #content -->
 
	<footer class="footer" role="contentinfo">
          <div class="footer-inner-wrap">
            <div class="footer-span3 footer-primary">
              <div class="footer-chunk">
                <h3 class="footer-headline">Contact Us</h3>
                <div id="" class="vcard">
                  <a class="url fn n org" href="http://www.rushmechanical.net">Rush Mechanical</a>
                  <div class="tel">(916) 486-0517</div>
                  <div class="adr">
                     <div class="street-address">3421 Windsor Drive</div>
                     <span class="locality">Sacramento</span>, <span class="region">CA</span> <span class="postal-code">95864</span>
                     </div>
                  </div>
              </div>
              <div class="footer-chunk">
                <h3 class="footer-headline">License #</h3>
                <p># 441882 </p>
              </div>
              <div class="footer-chunk">
                <p>Serving the Sacramento area, including Roseville, Rancho Cordova, West Sacramento, and Elk Grove.</p>
              </div>
            </div>
            <div class="footer-span3 footer-secondary">
              <div class="footer-chunk">
                <h3 class="footer-headline">We Proudly Carry the Following Brands:</h3>
                <img src="/wp-content/uploads/2014/01/brands-cluster4.png" alt="Brands We Carry" />
              </div>
              <div class="footer-chunk">
                <h3 class="footer-headline">Links</h3>
                <?php wp_nav_menu( array('menu' => 'Footer Links' )); ?>
              </div>
            </div>
            <div class="footer-span3 footer-tertiary">
              <div class="footer-chunk">
                <h3 class="footer-headline">Social</h3>
                <ul class="footer-social">
                  <li class="yelp"><a href="http://www.yelp.com/biz/rush-mechanical-sacramento" target="_blank">Review Us on Yelp</a></li>
                  <li class="googleplus"><a href="https://plus.google.com/105509247278754388327/about?hl=en" target="_blank">Follow Us on Google+</a></li>
                </ul>
              </div>
              <div class="footer-chunk footer-badges">
                <img src="/wp-content/uploads/2014/01/BBB-web.png" alt="Better Business Bureau Accredited Business" />
              </div>
              <div class="footer-chunk">
                <h3 class="footer-headline">Cash and Credit Cards Accepted</h3>
                 <img src="/wp-content/uploads/2014/01/creditcards.png" alt="We Accept Cash and Credit Cards" class="accepted-payment" />
              </div>
             </div>
	     <div class="site-info">
                <p class="copyright">Copyright &#169; 2010&#8211;<?php echo date("Y"); ?> Rush Mechanical</p>
	        <p class="design-by"><a href="http://www.lockedowndesign.com" rel="designer nofollow">Website by Lockedown Design</a></p>
	     </div><!-- .site-info -->
            
          </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  // MOBILE MENU TOGGLE
  jQuery('#mobile-toggle').toggle(function() {
  	jQuery('#site-navigation').slideDown(500);
  	jQuery(this).addClass('active');
  },
  function() {
  	jQuery('#site-navigation').slideUp(400);
  	jQuery(this).removeClass('active');
  });

  jQuery(window).resize(function() {
  	var viewport_width = jQuery(window).width();
  	if(viewport_width > 768) {
	  	jQuery('#site-navigation').show();
  	}
  });
</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47181438-1', 'rushmechanical.net');
  ga('send', 'pageview');

</script>
</body>
</html>