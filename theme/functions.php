<?php

/*--------------------------------------------------------
  管理バーを非表示
--------------------------------------------------------*/
function my_function_admin_bar(){
  return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/*--------------------------------------------------------
  フォームの検索値の保持
--------------------------------------------------------*/
function keep_search_value($inputtype = 'text',$name = 's',$value = '') {
	$name = isset($_GET[$name]) ? esc_html($_GET[$name]) : null;
	switch ($inputtype) {
		case 'text':
			return $name;
			break;
		case 'select':
			return ($name === $value) ? 'selected' : '';
			break;
		case 'radio':
		case 'checkbox':
			if ($name === $value || is_array($name)) {
				$name = implode(',',$name);
				$name = strpos($name,$value);
				return ($name === false) ? '' : 'checked';
			} else {
				return '';
			}
			break;
	}
}

/*--------------------------------------------------------
  pre_get_posts
--------------------------------------------------------*/
function myPreGetPosts( $query ) {
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}
	if ( $query->is_main_query() ) {
		$query->set('post_type', array('book'));
		$query->set('posts_per_page', 6);
	}
	if ( $query->is_search() ) {
		$status = isset($_GET['status']) ? esc_html($_GET['status']) : null;
		$genre  = isset($_GET['genre']) ? esc_html($_GET['genre']) : null;
		$label  = isset($_GET['label']) ? esc_html($_GET['label']) : null;
		$size   = isset($_GET['size']) ? esc_html($_GET['size']) : null;
		if(!empty($status)) {
			$metaquerysp[] = array(
				'key'   =>'book_status',
				'value' => $status,
			);
		}
		if(!empty($genre)) {
			$metaquerysp[] = array(
				'key'   =>'book_genre',
				'value' => $genre,
			);
		}
		if(!empty($label)) {
			$metaquerysp[] = array(
				'key'   =>'book_label',
				'value' => $label,
			);
		}
		if(!empty($size)) {
			$metaquerysp[] = array(
				'key'   =>'book_size',
				'value' => $size,
			);
		}
		//=============================
		$query->set('post_type', array('book'));
		$metaquerysp['relation'] = 'AND';
		$query->set('meta_query',$metaquerysp);
	}
}
add_action('pre_get_posts','myPreGetPosts');

/*--------------------------------------------------------
  カスタム投稿タイプ
--------------------------------------------------------*/
add_action('init','add_book_post_type');
function add_book_post_type() {
	$param = array(
		'labels' => array(
			'name'               => '書籍',
			'singular_name'      => '書籍',
			'add_new'            => '新規追加',
			'add_new_item'       => '記事を新規追加',
			'edit_item'          => '記事を編集する',
			'new_item'           => '新規追加',
			'all_items'          => '記事一覧',
			'view_item'          => '記事を表示',
			'search_items'       => '検索する',
			'not_found'          => '記事が見つかりませんでした。',
			'not_found_in_trash' => 'ゴミ箱の中に記事が見つかりませんでした。'
		),
		'public'        => true,
		'has_archive'   => true,
		'menu_position' => 5,
		'supports'      => array('title'),
		// 'rewrite'    => true,
		'taxonomies'    => array('label'),
		'rewrite'       => array('with_front' => false)
	);
	register_post_type('book',$param);
}
