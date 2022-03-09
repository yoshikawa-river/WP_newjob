<?php
function create_new_posts($Mail_admin, $Data) {
    $form_data = $Data->getInstance();

    $overview = $form_data->get('overview');
    $detail = $form_data->get('detail');
    $price = $form_data->get('price');
    $email = $form_data->get('email');
    $phone = $form_data->get('phone');

    $content = <<< EOD
概要
$overview

詳細
$detail

希望価格
$price 円

連絡先
メールアドレス：$email
電話番号：$phone

EOD;

    $post = array(
        'post_type'   => 'post', 
        'post_title' => $form_data->get('title'),
        'post_status' => 'publish',
        'post_content' => $content,
        'post_excerpt' => '希望価格：'.$price.'円'.'<br />'.$overview
    );
    $post_id = wp_insert_post($post, true);
}
add_action('mwform_before_send_admin_mail_mw-wp-form-120', 'create_new_posts', 10, 2);