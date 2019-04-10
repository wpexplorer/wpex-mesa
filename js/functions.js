 /**
 * Theme functions
 * Initialize all scripts and adds custom js
 *
 * @since 1.0.0
 *
 */

( function( $ ) {

	'use strict';

	var wpexFunctions = {

		/**
		 * Define cache var
		 *
		 * @since 1.0.0
		 */
		cache: {},

		/**
		 * Main Function
		 *
		 * @since 1.0.0
		 */
		init: function() {
			this.cacheElements();
			this.bindEvents();
		},

		/**
		 * Cache Elements
		 *
		 * @since 1.0.0
		 */
		cacheElements: function() {
			this.cache = {
				$window   : $( window ),
				$document : $( document )
			};
		},

		/**
		 * Bind Events
		 *
		 * @since 1.0.0
		 */
		bindEvents: function() {

			// Get sef
			var self = this;

			// Run on document ready
			self.cache.$document.on( 'ready', function() {
				self.coreFunctions();
				self.dropdownMenu();
				self.scrollTop();
				if ( $.fn.slicknav!=undefined ) {
					self.slickNav();
				}
			} );

			// Run on window load
			self.cache.$window.load( function() {
				if ( $.fn.masonry!=undefined ) {
					self.masonry();
				}
			} );

		},

		/**
		 * Main theme functions
		 *
		 * @since 1.0.0
		 */
		coreFunctions: function() {

			var self = this;

			// Add class to last pingback for styling purposes
			$( ".commentlist li.pingback" ).last().addClass( 'last' );

			// Touch event for dropdowns
			$( '.wpex-dropdown-menu li.menu-item-has-children' ).on( 'touchstart', function( event ) {
				$( this ).toggleClass( 'wpex-touched' );
			} );

			// Responsive videos
			$( '.wpex-responsive-embed' ).fitVids( {
				ignore: '.wpex-fitvids-ignore'
			} );
			$( '.wpex-responsive-embed' ).addClass( 'wpex-show' );

			// Social share scroll to
			$( '.wpex-post-share .wpex-comment a, .single .comments-link' ).click( function() {
				var $target = $( '#comments' );
				if ( $target.length ) {
					$( 'html,body' ).animate({
						scrollTop: $target.offset().top - 30
					}, 1000 );
			      }
				return false;
			} );

		},

		/**
		 * Dropdown menu accessibility
		 *
		 * @since 1.1
		 */
		dropdownMenu: function() {

			var menu, menuLis, menuAs, i, len;

			menu = $( '.wpex-dropdown-menu' );
			if ( ! menu ) {
				return;
			}

			menuLis = menu.find( 'li' );
			menuAs  = menu.find( 'li > a' );

			function toggleFocus() {
				var link    = $( this );
				var parents = link.parentsUntil( '.wpex-dropdown-menu' );
				parents.each( function() {
					var $this = $( this );
					if ( $this.is( 'li' ) ) {
						$this.toggleClass( 'focus' );
					}
				} );
			}

			for ( i = 0, len = menuAs.length; i < len; i++ ) {
				$( menuAs[i] ).on( 'focus', toggleFocus );
				$( menuAs[i] ).on( 'blur', toggleFocus );
			}

		},

		/**
		 * Scroll top function
		 *
		 * @since 1.0.0
		 */
		scrollTop: function() {

			var $scrollTopLink = $( 'a.wpex-site-scroll-top' );

			this.cache.$window.scroll(function () {
				if ( $( this ).scrollTop() > 100 ) {
					$scrollTopLink.addClass( 'show' );
				} else {
					$scrollTopLink.removeClass( 'show' );
				}
			} );

			$scrollTopLink.on( 'click', function() {
				$( 'html, body' ).animate( {
					scrollTop : 0
				}, 400 );
				return false;
			} );

		},

		/**
		 * Masonry layout
		 *
		 * @since 1.0.0
		 */
		masonry: function() {
			$( '.wpex-entries' ).masonry( {
				itemSelector : '.wpex-loop-entry'
			} );
		},

		/**
		 * Mobile Menu
		 *
		 * @since 1.0.0
		 */
		slickNav: function() {
			var $nav = $( '.wpex-site-nav .wpex-dropdown-menu' );
			if ( $nav.length ) {
				$nav.slicknav( {
					appendTo         : '.wpex-site-nav',
					label            : wpexvars.mobileMenuLabel,
					allowParentLinks : true
				} );
			}
		},

	}; // END wpexFunctions

	// Get things going
	wpexFunctions.init();

} ) ( jQuery );