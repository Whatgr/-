<?php
// Подключаем стили
function my_tour_theme_enqueue_styles() {
    wp_enqueue_style(
        'main-style', // Имя стиля
        get_template_directory_uri() . '/style.css', // Путь к файлу
        array(), // Зависимости (если есть)
        '1.0' // Версия (для кэширования)
    );
}
add_action('wp_enqueue_scripts', 'my_tour_theme_enqueue_styles');