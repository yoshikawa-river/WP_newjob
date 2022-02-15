<?php
function translate_wpmem_default_text($text)
{
    $current_user = wp_get_current_user();
    $text['remember_me'] = "ログイン情報を記憶";
    $text['register_link'] = "新規会員登録";
    $text['forgot_link_before'] = "";
    $text['forgot_link'] = "パスワードを忘れた場合";
    $text['login_heading'] = "";
    $text['login_welcome'] = "ようこそ $current_user->nickname さん";
    $text['login_button'] = "ログイン";
    $text['login_username'] = "メールアドレス";
    $text['login_password'] = "パスワード";
    $text['pwdchg_heading'] = "";
    $text['pwdreset_button'] = "リセット";
    $text['username_link_before'] = "";
    $text['username_link'] = "";
    $text['pwdchg_password1'] = "新しいパスワード";
    $text['pwdchg_password2'] = "確認";
    $text['pwdchg_button'] = "変更";
    $text['pwdreset_heading'] = "";
    $text['pwdreset_username'] = "";
    $text['register_heading'] = "";
    $text['register_email'] = "メールアドレス";
    $text['register_status'] = "%s でログインしています";
    $text['register_logout'] = "ログアウト";
    $text['register_continue'] = "プロフィールを編集する";
    $text['privacy_policy'] = "プライバシーポリシー";
    $text['register_submit'] = "登録";
    $text['register_required'] = '<span style="color:red;">*</span>' . '必須項目';
    $text['login_logout'] = "ログアウト";
    $text['register_link_before'] = "";
    return $text;
}
add_filter('wpmem_default_text', 'translate_wpmem_default_text');

function delete_register_username($rows)
{
    if (isset($rows['username'])) {
        unset($rows['username']);
    }
    return $rows;
}
add_filter('wpmem_register_form_rows', 'delete_register_username');

function convert_username_to_register_email($fields)
{
    if (!isset($fields['username']) || $fields['username'] == '') {
        $fields['username'] = $fields['user_email'];
    }
    return $fields;
}
add_filter('wpmem_pre_validate_form', 'convert_username_to_register_email');

function is_show_admin_bar($content)
{
    if (current_user_can('administrator')) {
        return $content;
    }
}
add_filter('show_admin_bar', 'is_show_admin_bar');

function add_password_validate($fields)
{
    if (!preg_match('/\A[a-z\d]{8,}+\z/i', $fields['password'])) {
        global $wpmem_themsg;
        $wpmem_themsg = "パスワードは英数字8文字以上で入力してください。";
        return;
    }
}
add_action('wpmem_pre_register_data', 'add_password_validate', 1);
add_action('wpmem_pre_update_data', 'add_password_validate', 1);

