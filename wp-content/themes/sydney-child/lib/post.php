<?php
/*カスタム投稿追加*/
function create_post_type() {
    $datalist = [
      'title',
      'revisions'
    ];
    register_post_type( 'datalist',
      array(
        'label' => '案件一覧',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
      )
    );
  }
  add_action( 'init', 'create_post_type' );
