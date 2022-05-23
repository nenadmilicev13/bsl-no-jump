<?php
/**
 * Template name: Get Started
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package  nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!-- <section id="philosophie--white" class="philosophie">
				<div class="wrapper">
					<div class="indicators">
						<div class="indicator"></div>
						<div class="indicator"></div>
						<div class="indicator"></div>
						<div class="indicator"></div>
						<!-- <div class="indicator"></div>
					</div> -->
					<!-- <div id="point-text-left" class="point p">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/started.png" alt="" width= "628" height="428">
						<article>
							<p>If your website is in desperate need of a polish.</p>
						</article>
					</div>
					<div id="point-text-left" class="point">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/started.png" alt="" width= "628" height="428">
						<article>
							<p>If your branding is anything but consistent and -on brand-</p>
						</article>
					</div>

					<div id="point-text-left" class="point">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/started.png" alt="" width= "628" height="428">
						<article>
							<p>If your logo is outdated, non-existent or you are often asked the question “What is this supposed to be?”</p>
						</article>
					</div>
				</div>
			</section> -->

            <div class="contact-content">
                <div class="contact-content__text">
                    <div class="entry-content">
                        <p>Whatever the reason, we’re here to help.</p>
                        <span class="contact-cta">So let's get started!</span>
                    </div>
                    <video class="video-p" muted width="309px" height="539px" autoplay loop playsinline style="pointer-events: none;">
                        <source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/contact2.mp4" type="video/mp4">
                        <source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/contact2.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="contact-form">
                <div class="wrapper wrapper--s">
                    <form action="">
                        <span>You usually go by</span>
                        <div class="contact-text2">
                            <p> You usually go by</p>
                        </div>
                        <input class="name-field" placeholder="(name)" type="text">
                        <!-- <sup>(name)</sup> -->
                        <span> and you're not mad when</span>
                        <span>someone emails you at</span>
                        <div class="contact-text2">
                            <p> and you're not mad when someone emails you at</p>
                            <!-- <p></p> -->
                        </div>
                        <input class="email-field" placeholder="(email)" type="text">
                        <!-- <sup>(e-mail)</sup> -->
                        <div class="contact-text3">
                            <p>Your business is awesome but you need a bit of help with</p>
                            <!-- <p></p> -->
                        </div>
                        <span>Your business is</span>
                        <span>awesome but you need a bit of help with</span>
                        <select id="services" name="services">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        <div class="contact-text2">
                            <p>and you've decided to have it done by</p>
                            <!-- <p></p> -->
                        </div>
                        <span>and you've</span>
                        <span>decided to have it done by</span>
                        <input class="deadline-field" placeholder="(deadline)" type="text">
                        <!-- <sup>(deadline)</sup> -->
                        <span>You have a limited budget</span>
                        <div class="contact-text2">
                            <p>.You have a limited budget</p>
                        </div>
                        <span>which is around</span>
                            <select id="price" name="price">
                                <option value="value1">100.000$</option>
                                <option value="value2">200.000$</option>
                                <option value="value3">300.000$</option>
                                <option value="value4">400.000$</option>
                            </select></br>
                        
                        <span class="textarea">Space for free flowing ideas you might have (or we can come up with them together):</span> 
                        <textarea id="textarea" placeholder="(Message...)" name="textarea"></textarea>
                        <div class="contact-btn">
                            <button type="submit" form="form1" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contact-cta-bottom">
                <div class="wrapper">
                    <div class="section-head">
                        <h2 class="section-head__title">Thanks for trusting us with your project! We’ll get back to you ASAP.</h2>
                        <p>Or you can email us directly at <a href="mailto:contact@wearebaselinecom">contact@wearebaseline.com</a></p>
                    </div>
                </div>
            </div>
            
		</main><!-- #main -->
		<div class="cursor">
			<div class="cursor-media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/view.svg" alt="" id="view"></img>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/drag.svg" alt=""id="drag"></img>
			</div>	
		</div>
        <script src="https://unpkg.com/regenerator-runtime@0.13.1/runtime.js"></script>
	</div><!-- #primary -->
<?php
get_footer();

//////////////////////////////////////////////////////////////////////////
