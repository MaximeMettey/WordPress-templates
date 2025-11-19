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

    // Hero Section
    wp.customize( 'hero_title', function( value ) {
        value.bind( function( to ) {
            $( '.hero-title' ).text( to );
        } );
    } );

    wp.customize( 'hero_subtitle', function( value ) {
        value.bind( function( to ) {
            $( '.hero-subtitle' ).text( to );
        } );
    } );

    wp.customize( 'hero_button_text', function( value ) {
        value.bind( function( to ) {
            $( '.hero-content .btn-primary' ).text( to );
        } );
    } );

    // Primary Color
    wp.customize( 'primary_color', function( value ) {
        value.bind( function( to ) {
            $( ':root' ).css( '--primary-color', to );
        } );
    } );

    // Secondary Color
    wp.customize( 'secondary_color', function( value ) {
        value.bind( function( to ) {
            $( ':root' ).css( '--secondary-color', to );
        } );
    } );
}( jQuery ) );
