<?php
function update_meta_posts($Mail_admin, $Data) {

    // 登録フォームから入力データを取得
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
        'post_type'   => 'datalist', 
        'post_title' => $form_data->get('title'),
        'post_status' => 'publish',
        'post_content' => $content,
    );
    $post_id = wp_insert_post($post, true);
}
// アクションフックを追加
//   第1引数：末尾の数字は、登録フォーム作成時のショートコードを設定
//   第2引数：フック実行時の処理
//   第3・4引数：説明がないので用途は不明（固定値？？）
add_action('mwform_before_send_admin_mail_mw-wp-form-120', 'update_meta_posts', 10, 2);