jQuery(document).ready(function($) {  
	var blog = $(".blog_slider");
		blog.owlCarousel({
		autoPlay : true ,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots : false,	

		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:2,
			},
			1200:{
				items:2,
			}
		}
	}); 
	checkClasses();
    blog.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses(){
		var total = $('.home_blog_post_inner .blog_slider  .owl-stage .owl-item.active').length;
        $('.home_blog_post_inner ').each(function(){
		$(this).find('.owl-item').removeClass('firstActiveItem');
		$(this).find('.owl-item').removeClass('lastActiveItem');
		$(this).find('.owl-item.active').each(function(index){
		if (index === 0) { $(this).addClass('firstActiveItem'); }
		if (index === total - 1 && total>1) {
		$(this).addClass('lastActiveItem');
		}
		})  
        });
    }
});