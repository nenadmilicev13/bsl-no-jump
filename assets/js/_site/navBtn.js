const $ = jQuery.noConflict();
import { gsap } from "gsap";

'use strict';
const NavBtn = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const menuBtn = document.querySelector('.js-menu-btn');
        const mainNav = document.querySelector('.js-main-nav');
        const header = document.querySelector('.js-header');
        const body = document.querySelector('body');
        const headerLogo = document.querySelector('.header__logo');

        if (window.innerWidth < 767) {
            let isHidden = true;
            gsap.set(mainNav,{opacity: 0});
            gsap.set(header,{backgroundColor: '#f9f9f9',});
            // gsap.set(body,{ overflow: 'none',});
           
     
            // Add listeners
            menuBtn.addEventListener("click", toggle);
            // window.addEventListener('scroll', scrollHidden);
            
     
            function toggle() {
            isHidden = !isHidden;
                if (!isHidden) {
                    mainNav.classList.remove("hidden");
                }
                gsap.to(mainNav, {
                    opacity: isHidden ? 0 : 1,
                    height: isHidden ? '0' : '100%',
                    // visibility: 'visible',
                    duration: .7,
                    y: -25,
                    // ease: "back.out(1.7)",
                    overwrite: true, // kill other tweens of this element (don't stack up or conflict)
                    onComplete: () => isHidden && mainNav.classList.add("hidden"),
                });

                gsap.to(header,{
                    backgroundColor: isHidden ? '#f9f9f9' : '#000',
                    height: isHidden ? '0' : '100vh',
                    overwrite: true,
                    duration: .8,
                    // ease: "back.out(1.7)",
                })

               body.classList.toggle('overflow');
               menuBtn.classList.toggle('open');
               headerLogo.classList.toggle('header__logo-open');
               header.classList.toggle('header-scroll');
            }
        }
      
    }
};

export default NavBtn;
