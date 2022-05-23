const $ = jQuery.noConflict();
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

'use strict';
const Video = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

    if (window.innerWidth < 1024) {
      ScrollTrigger.config({
        autoRefreshEvents: 'DOMContentLoaded,load,visibilitychange',
      });
    }

    $(function(){
      if($('body').is('.page-template-studio')){
          ScrollTrigger.defaults({
            markers:false
        })
          
        let points = gsap.utils.toArray('.point');
        // let indicators = gsap.utils.toArray('.indicator');
        
        let height = 100 * points.length;
    
        gsap.set('.indicators', {display: "flex"});
        
        
          let tl = gsap.timeline({
            duration: points.length,
            scrollTrigger: {
              trigger: ".philosophie",
              start: "top center",
              end: "+="+height+"%",
              scrub: true,
              id: "points",
            }
          })
      
          let philosophie = $(".philosophie");
          if(philosophie.length) {
            let pinner = gsap.timeline({
              scrollTrigger: {
                trigger: ".philosophie .wrapper",
                start: "top top",
                end: "+="+height+"%",
                scrub: true,
                pin: ".philosophie .wrapper",
                pinSpacing: true,
                id: "pinning",
                // markers: true
              }
            })
          }
       
        
        points.forEach(function(elem, i) {
          gsap.set(elem, {position: "absolute", top: 0});
        
          // tl.to(indicators[i], {backgroundColor: "orange", duration: 0.25}, i)
          tl.from(elem.querySelector('img'), {autoAlpha:0}, i)
          tl.from(elem.querySelector('article'), {autoAlpha:0, translateY: 100}, i)
          
          if (i != points.length-1) {
          //   tl.to(indicators[i], {backgroundColor: "#adadad", duration: 0.25}, i+0.75)
            tl.to(elem.querySelector('article'), {autoAlpha:0, translateY: -120}, i + 0.75)
            const contact = $("#philosophie--white")
            if(contact.length) {
              tl.to(elem.querySelector('article'), {autoAlpha:0, translateY: -120}, i + 0.40)
            }
            tl.to(elem.querySelector('img'), {autoAlpha:0}, i + 0.6)
          }
            
        });
      }
    });

    
	}
};

export default Video;
