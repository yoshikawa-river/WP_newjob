<?php
/*カスタム投稿追加*/
function create_post_type() {
    $datalist = [  // datalist　のパラメータを設定する配列
      'title',  // 記事タイトル
      'revisions'  // リビジョン
    ];
    register_post_type( 'datalist',  // カスタム投稿名
      array(
        'label' => '案件一覧',  // 管理画面の左メニューに表示されるテキスト
        'public' => true,  // 投稿タイプをパブリックにするか否か
        'has_archive' => false,  // アーカイブを有効にするか否か
        'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      )
    );
  }
  add_action( 'init', 'create_post_type' );