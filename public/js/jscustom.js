jQuery.noConflict();
jQuery.fn.backtotop=function(settings){settings=jQuery.extend({min:110,fadeSpeed:250,ieOffset:0,scrollto:0,srcollSpeed:600},settings);return this.each(function(){var el=jQuery(this);el.css('display','none');jQuery(window).scroll(function(){if(!jQuery.support.hrefNormalized){el.css({'position':'absolute','top':jQuery(window).scrollTop()+jQuery(window).height()-settings.ieOffset})}if(jQuery(window).scrollTop()>=settings.min){el.fadeIn(settings.fadeSpeed)}else{el.fadeOut(settings.fadeSpeed)}});el.click(function(){jQuery('html, body').animate({scrollTop:settings.scrollto},settings.srcollSpeed);return false;})})};

/* JS Custom */
jQuery(document).ready(function($) {
    /* ----------------
    ** DEFINE FUNCTIONS
    ** ----------------*/
    var UIhead = $('#UIhead');
    var UIheadH = $(UIhead).outerHeight();
    var bpLg = 1200; // Breakpoint
    var bpMd = 992; // Breakpoint
    var bpSm = 768; // Breakpoint
    var bpXs = 767; // Breakpoint

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var documentWidth = $(document).width();
	var documentHeight = $(document).height();
	var mainArea = $('#main-area');
	var mainHeader = $('#main-header');
	var siteHeader = $('#site-header');
	var siteMenu = $('#site-menu');
	var mainHeaderHeight = mainHeader.innerHeight();
	var siteHeaderHeight = siteHeader.outerHeight();

    // Custom Layout
    function initLayout() {
        windowWidth = $(window).width();
        windowHeight = $(window).height();
		documentWidth = $(document).width();
        documentHeight = $(document).height();
		//var sidebarWidth = $('.site-sidebar').outerWidth();
		//var contentWidth = documentWidth - sidebarWidth;
		//var sidebarHeight = windowHeight;
		//var sidebarHeadHeight = $('.site-sidebar .sidebar-head').outerHeight();
		//var sidebarFootHeight = $('.site-sidebar .sidebar-foot').outerHeight();

		if ( documentWidth >= 768 ) {
			siteMenu.removeAttr('style');
		} else {
			siteMenu.css({'display':'none'});

			siteHeader.on('click', '.menu-icon', function(e){
				e.preventDefault();

				if (!siteMenu.is(':visible')) {
					siteMenu.slideDown();
				}
				else {
					siteMenu.slideUp();
				}
			});
		}
		
		//var sidebarBodyHeight = sidebarHeight - (sidebarHeadHeight + sidebarFootHeight);
		
		//$('.site-sidebar .sidebar-body').css({'height': sidebarBodyHeight});
		
		//toggleSidebar();
        
        //initNano();

		fixedHeader();
    }

	function fixedHeader() {
		documentWidth = $(document).width();
		mainHeaderHeight = mainHeader.innerHeight();
		siteHeaderHeight = siteHeader.outerHeight();

		if ( documentWidth >= 768 ) {
			mainArea.addClass('fixed-header').css({'padding-top': mainHeaderHeight});

			$(window).scroll(function() {
				var windowScrollTop = $(this).scrollTop();

				if ( windowScrollTop < siteHeaderHeight ) {
					mainHeader.css({'top': - windowScrollTop});
					mainArea.removeClass('only-site-menu');
				} else {
					mainHeader.css({'top': - siteHeaderHeight});
					mainArea.addClass('only-site-menu');
				}

			});

		} else {
			mainArea.removeClass('fixed-header').removeAttr('style');
		}
	}
	
	function toggleSidebar() {
		var documentWidth = $(document).width();
		var sidebarWidth = $('.site-sidebar').outerWidth();
		var contentWidth = documentWidth - sidebarWidth;
		
		if ($('.site-body').hasClass('hide-sidebar')) {
			$('.site-sidebar').css({'left': -sidebarWidth});
			$('.site-wrapper').css({'padding-left': 0, 'width': 'auto'});
		}
		else {
			$('.site-sidebar').css({'left': 0});
			$('.site-wrapper').css({'padding-left': sidebarWidth, 'width': documentWidth});
		}
	}
	
	// nanoscroller
    function initNano() {
		var $nano = $('.nano');
		$nano.each(function() {
			$(this).nanoScroller();
		});
		$nano.on("update", function(event, values) {
			return false;
		});
	}
	
    // When resize window browsers
    function resizeWindow(e) {
		initLayout();
		initNano();
    }


    // ----------------
    // RUN FUNCTIONS
    // ----------------
    resizeWindow(null);
    $(window).on("resize", resizeWindow);
	
	// ----------------
    // MORE JS
    // ----------------
	// Bootstrap File Input
	//$('input[type="file"]').fileinput({'showUpload':false, 'previewFileType':'text'});
	$('input[type="file"]').each(function( index ) {
		var placeholder = $(this).data('placeholder');
		$(this).closest('.file-caption-main').find('>.file-caption .file-caption-name').html(placeholder);
	});
    
    /* Back to Top */
    $('.backToTop').backtotop();
	
	// Sidebar
	$('.site-sidebar .toggle-sidebar').on('click', function(e) {
		e.preventDefault();
		
		if ($('.site-body').hasClass('hide-sidebar')) {
			$('.site-body').removeClass('hide-sidebar');
		}
		else {
			
			$('.site-body').addClass('hide-sidebar');
		}
		
		toggleSidebar();
	});
	
	// Site Nav
	$('#main-menu').smartmenus({
		mainMenuSubOffsetX: -1,
		subMenusSubOffsetX: 10,
		subMenusSubOffsetY: 0
	});

	// Gallery Photos
	/*$('.gallery').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			}
		});
	});*/

	/* Play video: youtube, vimeo, dailymotion, *.mp4 */
	var videos = 'a[href*="youtube.com"], a[href*="vimeo.com"], a[href*="wistia.com"], a[href*="wistia.net"], a[href*="dailymotion.com"], a[href$=".mp4"]';
	$(videos).magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	// Owl Carousel
	$('.main-slider').owlCarousel({
		margin: 0,
		items: 1,
		loop: true,
		nav: false,
		navText: ['<em class="fa fa-chevron-left" title="Prev"></em>','<em class="fa fa-chevron-right" title="Next"></em>'],
		dots: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true
	});
	$('.recently-tours').owlCarousel({
		margin: 30,
		items: 2,
		loop: true,
		nav: false,
		navText: ['<em class="fa fa-chevron-left" title="Prev"></em>','<em class="fa fa-chevron-right" title="Next"></em>'],
		dots: true,
		autoplay: true,
		autoplayTimeout: 3500,
		autoplayHoverPause: true,
		responsive: {
			0 : {
				items: 1
			},
			640 : {
				items: 1
			},
			768 : {
				items: 2
			}
		}
	});

	/* Change color Option of Select */
	var $select = $('select');
	$select.not('.languages').bind('change', function() {
		if ( $(this).children('option:selected').index() == 0 ) {
			$(this).removeAttr('style');
		} else {
			$(this).css({'color': '#202121'});
		}
	});

	// Gallery
	$('.media-gallery .photo .name a').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});

	// Tabs
	$('.le-tabs').LeTabs({
		//autoOrder : false,
		initialTab : 0,
		//tabSelector : "a.enabled"
		//onEvent : null
	});

	// Popovers
	//$('[data-toggle="popover"]').popover();
	$('[data-toggle="popover"]').popover({
		trigger: 'hover',
		html: 'true',
		placement: 'right'
	});

	// Toggle Comment Write Form
	$('.comment-write .comment-toggle-button').on('click', '.btn', function(e){
		e.preventDefault();

		var commentForm = $(this).closest('.comment-write').find('.comment-form');
		if (!commentForm.is(':visible')) {
			commentForm.slideDown();
		}
		else {
			commentForm.slideUp();
		}
	});

	// change language
	$('#langSelector').change(function (e) {
		$(e.currentTarget).find("option:selected").each(function() {
			window.location.href = ($( this ).data('url'));
		});
	});

	// Attach a submit handler to the form
	$( "#tourfinderform" ).submit(function( event ) {

		// Stop form from submitting normally
		event.preventDefault();

		// Get some values from elements on the page:
		var $form = $( this ),
			formdata = $form.serializeArray(),
			url = $form.attr( "action" );

		// Send the data using post
		var posting = $.post( url, formdata );

		// Put the results in a div
		posting.done(function( resultcontent ) {
			var desTxt = $form.find("select[name='destination'] option:selected").first().text();
			var motorcycleTxt = $form.find("select[name='motorcycle'] option:selected").first().text();
			var dateTxt = $form.find("select[name='date'] option:selected").first().text();

			$( "#pg-resultfor" ).empty().append( desTxt + ' & ' + motorcycleTxt + ' & ' +  dateTxt);
			$( "#pg-resultcontent" ).empty().append( resultcontent );
		});
	});
});