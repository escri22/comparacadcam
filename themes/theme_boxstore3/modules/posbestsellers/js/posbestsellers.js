
jQuery(document).ready(function($) {  
	if(POS_HOME_SELLER_PAGINATION==null || POS_HOME_SELLER_PAGINATION =="") {POS_HOME_SELLER_PAGINATION = false} else { POS_HOME_SELLER_PAGINATION = true}
	if(POS_HOME_SELLER_NAV==null || POS_HOME_SELLER_NAV =="") {POS_HOME_SELLER_NAV = false} else {POS_HOME_SELLER_NAV = true}
	var owl = $(".bestsellerSlide");
		owl.owlCarousel({
		autoPlay : false ,
		smartSpeed: POS_HOME_SELLER_SPEED,
		autoplayHoverPause: true,
		nav: POS_HOME_SELLER_NAV,
		dots : POS_HOME_SELLER_PAGINATION,
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},
			676:{
				items:1,
			},
			768:{
				items:2,
				nav:false,
			},
			992:{
				items:2,
			},
			1200:{
				items:2,
			}
		}
	});
});