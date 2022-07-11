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

            <div class="banner-head banner-head--text">
                <div class="wrapper wrapper--sm">
                    <div class="banner-head__animation">
                        <div class="banner-head__animation-left">
                                <span class="section-head__pretitle">Get Started</span>
                                <h1 class="banner-head__title banner-head__title-change">If your website is in desperate need of a polish.</h1>
                                <span class="banner-head__subtitle banner-head__subtitle--sm">Whatever the reason, we’re here to help.</span>
                        </div>
                        <div class="banner-head__animation-right">
                            <video class="video-getStarted" muted width="309px" height="539px" autoplay loop playsinline style="pointer-events: none;">
                                <source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/contact2.mp4" type="video/mp4">
                                <source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/contact2.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <div class="wrapper wrapper--s">
                    <form class="contact-form__wrap">
                        <span>You usually go by</span>
                        <div class="contact-text2">
                            <p> You usually go by</p>
                        </div>
                        <input class="name-field" placeholder="(name)" type="text">
                        <span> and you're not mad when</span>
                        <span>someone emails you at</span>
                        <div class="contact-text2">
                            <p> and you're not mad when someone emails you at</p>
                        </div>
                        <input class="email-field" placeholder="(email)" type="text">
                        <div class="contact-text3">
                            <p>Your business is awesome but you need a bit of help with</p>
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

            <div class="cta">
				<div class="wrapper">
					<div class="cta__container">
						<div class="cta__wrap">
							<div class="cta__left">
								<h2 class="cta__title">Your brand’s evolution starts <a href="javascript:;">here.</a></h2>
							</div>
						</div>
						<div class="cta__right">
						<video class="video-p" muted width="100%" height="auto" autoplay loop playsinline style="pointer-events: none;">
							<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/footervideo.mp4" type="video/mp4">
							<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/footervideo.ogg" type="video/ogg">
							Your browser does not support the video tag.
						</video>
						</div>
					</div>
				</div>
			</div>
            
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

//////////////////////////////////////////////////////////////////////////
