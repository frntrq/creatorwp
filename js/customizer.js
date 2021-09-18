/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
	// Header BG Color
	wp.customize( 'creator_header_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#masthead' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	// Header Border Color
	wp.customize( 'creator_header_border_color', function( value ) {
		value.bind( function( to ) {
			$( '#masthead' ).css( {
				borderColor: to,
			} );
		} );
	  } );

	// Search Text Field Color
	wp.customize( 'search_form_field_color', function( value ) {
		value.bind( function( to ) {
			$( 'input[type="search"]' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	// Search Field Text Color
	wp.customize( 'search_form_field_text_color', function( value ) {
		value.bind( function( to ) {
			$( 'input[type="search"]' ).css( {
				color: to,
			} );
		} );
	  } );

	// Search Field Border Color
	wp.customize( 'search_form_field_border_color', function( value ) {
		value.bind( function( to ) {
			$( 'input[type="search"]' ).css( {
				borderColor: to,
			} );
		} );
	  } );

	//   Navigation Color
	wp.customize( 'creator_nav_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#primary-menu' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	//   Navigation Text Color
	wp.customize( 'creator_nav_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#primary-menu li a' ).css( {
				color: to,
			} );
		} );
	  } );

	//   Navigation current menu color
	wp.customize( 'creator_nav_current_menu_item_color', function( value ) {
		value.bind( function( to ) {
			$( '#primary-menu .current-menu-item' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	//   Post title color
	wp.customize( 'creator_post_title_color', function( value ) {
		value.bind( function( to ) {
			$( 'h2.entry-title a' ).css( {
				color: to,
			} );
		} );
	  } );

	//   Post metadata text color
	wp.customize( 'creator_post_metadata_text_color', function( value ) {
		value.bind( function( to ) {
			$( 'div.entry-meta' ).css( {
				color: to,
			} );
		} );
	  } );

	//   Post metadata link color
	wp.customize( 'creator_post_metadata_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.blog-post a' ).css( {
				color: to,
			} );
		} );
	  } );

	//   Pagination text color
	wp.customize( 'creator_pagination_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.pagination' ).css( {
				color: to,
			} );
			$( '.pagination a' ).css( {
				color: to,
			} );
		} );
	  } );

	//   Pagination current item bg color
	wp.customize( 'creator_pagination_current_item_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.pagination .current' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	// Pagination current item text color
	wp.customize( 'creator_pagination_current_item_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.pagination .current' ).css( {
				color: to,
			} );
		} );
	  } );

	// Footer bg color
	wp.customize( 'creator_footer_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				backgroundColor: to,
			} );
		} );
	  } );

	// Footer text color
	wp.customize( 'creator_footer_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				color: to,
			} );
		} );
	  } );

	// Footer link color
	wp.customize( 'creator_footer_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-info a' ).css( {
				color: to,
			} );
		} );
	  } );

	// Body text color
	wp.customize( 'creator_body_text_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( {
				color: to,
			} );
		} );
	  } );
}( jQuery ) );
