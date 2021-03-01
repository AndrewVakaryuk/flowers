<?php

add_action('wp_enqueue_scripts', 'flowers_scripts');

function flowers_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
  wp_enqueue_style('flowers', get_template_directory_uri() . '/css/style.css');

  wp_deregister_script('jquery-core');
  wp_register_script('jquery-core', '//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('swiper',  '//unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0.0', true);
  wp_enqueue_script('fancybox',  '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri()  . '/js/main.js', array('fancybox'), '1.0.0', true);
}

add_theme_support('post-thumbnails');

add_action('init', 'flowers_init');
function flowers_init()
{
  register_post_type('reviews', array(
    'labels'             => array(
      'name'               => 'Отзывы', // Основное название типа записи
      'singular_name'      => 'Отзыв', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый отзыв',
      'edit_item'          => 'Редактировать отзыв',
      'new_item'           => 'Новый отзыв',
      'view_item'          => 'Посмотреть отзыв',
      'search_items'       => 'Найти отзыв',
      'not_found'          => 'Отзыва не найдено',
      'not_found_in_trash' => 'Отзывов не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Отзывы'

    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-welcome-view-site',
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
  ));

  register_post_type('flowers', array(
    'labels'             => array(
      'name'               => 'Букеты', // Основное название типа записи
      'singular_name'      => 'Букет', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый букет',
      'edit_item'          => 'Редактировать букет',
      'new_item'           => 'Новый букет',
      'view_item'          => 'Посмотреть букет',
      'search_items'       => 'Найти букет',
      'not_found'          => 'Букета не найдено',
      'not_found_in_trash' => 'Букетов не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Букеты'

    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-store',
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
  ));
}

add_action('wp_ajax_form', 'submit_form');
add_action('wp_ajax_nopriv_form', 'submit_form');

function submit_form() 
{
  $data = file_get_contents('php://input');
  $data_str = parse_str($data, $output);
  foreach ($output as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
  }
}