<?php

// Регистрация CSS

function register_styles() {
         
    wp_register_style( 'bootstrapmin', get_template_directory_uri() . '/bootstrap.min.css');
    wp_enqueue_style( 'bootstrapmin' );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap.css');
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'style' );

	  
}

add_action( 'wp_enqueue_scripts', 'register_styles' );

// Регистрация скриптов

function register_scripts() {

	wp_deregister_script('jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script( 'jquery' );

 	wp_register_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'bootstrapmin' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
    wp_enqueue_script( 'bootstrap' );

    

}

add_action( 'wp_enqueue_scripts', 'register_scripts' );

// Регистрация фона

add_theme_support( 'custom-background' );

// Миниатюра поста 

add_theme_support( 'post-thumbnails' );

// Регистрация меню;

function theme_register_nav_menu() {

    register_nav_menu( 'menu', 'Топ меню' );
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Виджет header

register_sidebar( array(
    'name' => __( 'Текст в шапке', '' ),
    'id' => 'text',
    'description' => __( 'Наполнение текста в шапке', '' ),
    'class' => '',
    'before_widget' => '<div class="address-bar">',
    'after_widget' => '</div>\n',
    'before_title' => '<div class="brand">',
    'after_title' => '</div>',
    ) );

register_sidebar( array(
    'name' => __( 'Текст в контейнере', '' ),
    'id' => 'text2',
    'description' => __( 'Наполнение текста', '' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<hr><h2 class="intro-text text-center">',
    'after_title' => "</h2><hr>\n",
    ) );

register_sidebar( array(
    'name' => __( 'Текст в контейнере 2', '' ),
    'id' => 'text3',
    'description' => __( 'Наполнение текста', '' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<hr><h2 class="intro-text text-center">',
    'after_title' => "</h2><hr>\n",
    ) );

register_sidebar( array(
    'name' => __( 'Текст под слайдером', '' ),
    'id' => 'text1',
    'description' => __( 'Наполнение текста под слайдером', '' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="brand-before"><small>',
    'after_title' => "</h2></small>\n",
    ) );
    
register_sidebar( array(
    'name' => __( 'Копирайт', '' ),
    'id' => 'text4',
    'description' => __( 'Текст', '' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<p>',
    'after_title' => "</p>\n",
    ) );

register_sidebar( array(
    'name' => __( 'Контактная форма', '' ),
    'id' => 'text5',
    'description' => __( 'Заголовок', '' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<hr><h2 class="intro-text text-center">',
    'after_title' => "</h2><hr>\n",
    ) );






































?>