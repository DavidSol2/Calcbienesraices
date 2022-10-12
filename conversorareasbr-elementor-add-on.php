<?php
/*
Plugin Name: Conversor Áreas Bienes Raices Widget Elementor
Plugin URI: https://daviidsosa.com
Description: Conversor de áreas para uso en bienes raices.
Author: David Sosa
Version: 1.0
Author URI: https://daviidsosa.com
*/
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
 
//final class Artisansweb_Elementor_Extension {
final class ConversorAreasBienesRaices_Elementor_Extension { 
    const VERSION = '1.0';
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';
    const MINIMUM_PHP_VERSION = '7.0';
 
    private static $_instance = null;
 
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
 
    public function __construct() {
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ], 11 );
    }
 
    public function init() {
        // Check if Elementor installed and activated
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
            return;
        }
         
        // Check for required Elementor version
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
            return;
        }
         
        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
            return;
        }
 
        // Add Plugin actions
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
    }
     
    public function i18n() {
        load_plugin_textdomain( 'conversor-areas-br-elementor-add-on' );
    }
     
    public function admin_notice_missing_main_plugin() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
 
        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__( '"%1$s" requiere "%2$s" para ser instalado y activado.', 'conversor-areas-br-elementor-add-on' ),
            '<strong>' . esc_html__( 'Elementor', 'conversor-areas-br-elementor-add-on' ) . '</strong>'
        );
 
        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }
     
    public function admin_notice_minimum_elementor_version() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
 
        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__( '"%1$s" requiere "%2$s" version %3$s o superior.', 'conversor-areas-br-elementor-add-on' ),
            '<strong>' . esc_html__( 'Elementor', 'conversor-areas-br-elementor-add-on' ) . '</strong>',
             self::MINIMUM_ELEMENTOR_VERSION
        );
 
        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }
     
    public function admin_notice_minimum_php_version() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
 
        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__( '"%1$s" requiere "%2$s" version %3$s o superior.', 'conversor-areas-br-elementor-add-on' ),
            '<strong>' . esc_html__( 'PHP 7.0', 'conversor-areas-br-elementor-add-on' ) . '</strong>',
             self::MINIMUM_PHP_VERSION
        );
 
        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }
     
    public function init_widgets() {
 
        // Include Widget files
        require_once( __DIR__ . '/widgets/conversor-areas-br-widget.php' );
 
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Conversor_Areas_Br_Widget() );
 
    }
 
    public function enqueue_scripts() {
        wp_register_style( "bootstrap-css", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css", array(), false, "all" );
        wp_enqueue_style( "bootstrap-css" );
		
		wp_register_style( "conversora-elementor-addon-css", plugin_dir_url( __FILE__ ) . 'assets/css/styles-convers.css', array(), false, "all" );
        wp_enqueue_style( "conversora-elementor-addon-css" );		
 
        wp_register_script("bootstrap-js", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array(), false, true);
        wp_enqueue_script("bootstrap-js");
		
		wp_register_script("conversorarea-elementor-adon-js", plugin_dir_url( __FILE__ ) . 'assets/js/conversor-areas-addon-elementor.js', array(), false, true);
        wp_enqueue_script("conversorarea-elementor-adon-js");
    }
}
ConversorAreasBienesRaices_Elementor_Extension::instance();