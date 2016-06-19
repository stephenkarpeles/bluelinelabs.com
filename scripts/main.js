/*$(function() {

  // Slideshow on homepage
  $("#slideshow > div:gt(0)").hide();

  setInterval(function() { 
  $('#slideshow > div:first')
    .animate({ left: '+=999', opacity: 0 }, { duration: 1000, easing: 'easeOutQuad'}).fadeOut(0).animate({ left: '-=999' }, 0 )
    .next()
    .animate({ left: '+=999', opacity: 0 }, 0 ).fadeIn(0).animate({ left: '-=999', opacity: 1}, { duration: 1000, easing: 'easeInSine'} )
    .end()
    .appendTo('#slideshow');
  },  3000);

});

$(function(){

  var $slides = $(".slide");
  var currentSlide = 0;
                
  TweenLite.set($slides.filter(":gt(0)"), {opacity:0});  
  TweenLite.delayedCall(3, nextSlide);        

  function nextSlide(){         
      TweenLite.to( $slides.eq(currentSlide), 1, {bezier:{type:"soft", curviness: 1, values:[{x:75, y:25}, {x:150, y:50}, {x:225, y:55}, {x:300, y:60}, {x:375, y:60}, {x:450, y:60}, {x:525, y:70}, {x:600, y:60}, {x:675, y:40}, {x:750, y:0}, {x:1299, y:0}]}, opacity: 0, scale: .6, ease:Power1.easeInOut});  
      
      if (currentSlide < $slides.length - 1) {
        currentSlide++;
      }
      else {
        currentSlide = 0;
      }
                        
      TweenLite.fromTo( $slides.eq(currentSlide), 1, {left: "1299px", opacity: 0, scale: .6, ease:Power4.easeIn}, {left:"0", scale: 1, opacity: 1} );
      TweenLite.delayedCall(4, nextSlide);                
  }
  
  
}); */

$(function(){

  var $slides = $(".slide");
  var currentSlide = 0;
                
  TweenLite.set($slides.filter(":gt(0)"), {opacity:0});  
  TweenLite.delayedCall(3, nextSlide);        

  function nextSlide(){         
      TweenLite.to( $slides.eq(currentSlide), 1, {bezier:{type:"soft", curviness: 1, values:[{x:70, y:30}, {x:450, y:95}, {x:1050, y:30}]}, opacity: 0, scale: .55, ease:Power1.easeOut});   /*{left:"1299px", opacity: 0, scale: .6, ease:Power1.easeOut} );*/    
      
      if (currentSlide < $slides.length - 1) {
        currentSlide++;
      }
      else {
        currentSlide = 0;
      }
                        
      TweenLite.fromTo( $slides.eq(currentSlide), 1, {opacity:0, scale: 0}, {bezier:{type:"soft", curviness: 1, values:[{x:1050, y:-250}, {x:450, y:-135}, {x:0, y:0}]}, opacity: 1, scale: 1, ease:Power1.easeOut});
      TweenLite.delayedCall(5, nextSlide);                
  }
  
  
});