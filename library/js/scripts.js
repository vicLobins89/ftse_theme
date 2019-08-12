/*
 * Scripts File
 * Author: Vic Lobins
 *
*/

/*
 * Get Viewport Dimensions
*/
function updateViewportDimensions() {
	"use strict";
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

jQuery(document).ready(function($) {
	
	"use strict";
	
	viewport = updateViewportDimensions();
	
	// Menu
	$('.menu-button').on('click', function(){
		$('.primary-nav').toggleClass('active');
		$(this).toggleClass('active');
	});
	
	$('.open-overlay').click(function(e){
		e.preventDefault();
		$('.overlay-wrapper').addClass('active');
	});
	
	$('.close-overlay').on('click', function(e){
		e.preventDefault();
		$('.overlay-wrapper').removeClass('active');
	});
	
	$('.TwitterTweets h2').wrapInner('<a href="https://twitter.com/ha_review?lang=en" target="_blank"></a>');
	
	$(window).on('resize load', function(){
		var headerHeight = $('.header').outerHeight();
		
		$('#content').css('margin-top', headerHeight);
		//$('.primary-nav').css('top', headerHeight);
		
		if( viewport.width < 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('body').addClass('is-mobile');
			
			$('.primary-nav > li.menu-item-has-children').click(function(){
				$('.primary-nav > li').not(this).removeClass('active');
				$(this).addClass('active');
			});
		} else {
			$('body').removeClass('is-mobile');
			
			$('.primary-nav > li.menu-item-has-children').on('click', function(e){
				e.preventDefault();
				e.stopPropagation();
			});
			
			$('.primary-nav > li.menu-item-has-children li').on('click', function(e){
				e.stopPropagation();
			});
		}
	});
	
	$(window).on('scroll', function(){
		if( $(this).scrollTop() >= 100 ) {
			$('.header').addClass('scrolled');
		} else {
			$('.header').removeClass('scrolled');
		}
	});
});