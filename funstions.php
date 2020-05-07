<?php
add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
add_action('wp_footer', 'scripts_theme');

function send_mail() {
     $name = $_POST['name'];
     $phone = $_POST['phone'];
    // подразумевается что $to, $subject, $message уже определены...
 $to = get_bloginfo('admin_email');
 $subject = 'Новый клиент';
 $headers = array(
     'From: cabirmg.ru <me@example.net>',
     'content-type: text/html',
     'Cc: John Q Codex <jqc@wordpress.org>',
     'Cc: iluvwp@wordpress.org',
 // тут можно использовать только простой email адрес
 );
// удалим фильтры, которые могут изменять заголовок $headers
remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );

$message = '' .$name . ' оставил заявку, его телефон ' .$phone;

wp_mail( $to, $subject, $message, $headers );
    wp_die();
 }

function scripts_theme() {
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], null, true );
}
?>
