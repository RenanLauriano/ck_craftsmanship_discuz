<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php 30107 2012-05-11 02:10:58Z svn_project_zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview' => '<p>The content of this module contains js code, which cannot be previewed immediately, please click Save to view it</p>', //<p>此模塊內容包含js代碼，不能立即預覽，請點擊保存後查看</p>
	'block_diy_summary_html_tag' => 'Custom content error, HTML tag:', //自定義內容錯誤，HTML標籤：
	'block_diy_summary_not_closed' => ' Mismatch', // 不匹配
	'block_all_category' => 'All Categories', //全部分類
	'block_first_category' => 'Top classification', //頂級分類
	'block_all_forum' => 'All sections', //全部版塊
	'block_all_group' => 'All user groups', //全部用戶組
	'block_all_type' => 'All Categories', //全部分類
	'file_size_limit' => 'File cannot be larger than {size} KB, please return.', //文件不能大於 {size} KB，請返回．
	'set_to_conver' => 'Set as cover', //設為封面
	'small_image' => 'Thumbnail', //小圖
	'insert_small_image' => 'Insert thumbnail', //插入小圖
	'insert_large_image' => 'Insert large image', //插入大圖
	'insert_file' => 'Insert file', //插入文件
	'delete' => 'Delete', //刪除
	'upload_error' => 'Upload failed', //上傳失敗
	'upload_remote_failed' => 'Remote upload failed', //遠程上傳失敗
	'article_noexist' => 'The specified article does not exist, please check', //指定的文章不存在，請檢查
	'article_noallowed' => 'You do not have permission to operate on the specified article', //您沒有權限對指定的文章進行操作
	'article_publish_noallowed' => 'You do not have permission to publish articles', //您沒有權限進行文章發佈操作
	'article_category_empty' => 'Sorry, the column cannot be empty', //抱歉，欄目不能為空
	'article_edit_nopermission' => 'Sorry, you do not have permission to operate the current article', //抱歉，您沒有權限進行當前文章操作
	'article_publish' => 'Post article', //發佈文章
	'article_manage' => 'Article management', //文章管理
	'article_tag' => 'Label', //標籤
	'select_category' => 'Choose category', //選擇分類
	'blockstyle_diy' => 'Custom template', //自定義模板
	'article_pushplus_info' => '<p><center><i><a href="{url}" class="xg1 xs1">Contributed by {author}</a></i></center></p>', //<p><center><i><a href="{url}" class="xg1 xs1">本文內容由 {author} 提供</a></i></center></p>
	'diytemplate_name_null' => '[unfilled]', //[未填寫]
	'portal_view_name' => ' Article View Page', // 文章查看頁
	'forum_viewthread_name' => ' Post View Page', // 帖子查看頁
	'portal/index' => 'Portal Home', //門戶首頁
	'portal/list' => 'Article List Page (Public)', //文章列表頁(公共)
	'portal/view' => 'Article View Page (Public)', //文章查看頁(公共)
	'portal/comment' => 'Article comment page', //文章評論頁
	'forum/discuz' => 'Forum Home', //論壇首頁
	'forum/viewthread' => 'Post View Page (Public)', //帖子查看頁(公共)
	'forum/forumdisplay' => 'Forum List Page (Public)', //版塊列表頁(公共)
	'group/index' => $_G['setting']['navs'][3]['navname'].'Front page', //首頁
	'group/group_my' => 'My '.$_G['setting']['navs'][3]['navname'].' home page', //我的首頁
	'group/group' => $_G['setting']['navs'][3]['navname'].'Content page', //內容頁
	'home/space_home' => 'Space Home', //空間首頁
	'home/space_trade' => 'Space product page', //空間商品頁
	'home/space_top' => 'Space Leaderboard', //空間排行榜
	'home/space_thread' => 'Space post page', //空間帖子頁
	'home/space_reward' => 'Space Bounty Page', //空間懸賞頁
	'home/space_share_list' => 'Space sharing list page', //空間分享列表頁
	'home/space_share_view' => 'Space Sharing View Page', //空間分享查看頁
	'space_share_view' => 'Space Sharing View Page', //空間分享查看頁
	'home/space_poll' => 'Space voting page', //空間投票頁
	'home/space_pm' => 'Space short message page', //空間短消息頁
	'home/space_notice' => 'Space reminder page', //空間提醒頁
	'home/space_group' => 'Space'.$_G['setting']['navs'][3]['navname'].'page', //空間頁
	'home/space_friend' => 'Space friend page', //空間好友頁
	'home/space_favorite' => 'Space Favorites', //空間收藏頁
	'home/space_doing' => 'Space log page', //空間記錄頁
	'home/space_debate' => 'Space debate page', //空間辯論頁
	'home/space_blog_view' => 'Space Log View Page', //空間日誌查看頁
	'home/space_blog_list' => 'Space Log List Page', //空間日誌列表頁
	'home/space_album_view' => 'Space Album View Page', //空間相冊查看頁
	'home/space_album_pic' => 'Space image viewing page', //空間圖片查看頁
	'home/space_album_list' => 'Space Album List Page', //空間相冊列表頁
	'home/space_activity' => 'Space Activities Page', //空間活動頁
	'ranklist/ranklist' => 'All leaderboard pages', //全部排行榜頁
	'ranklist/blog' => 'Log leaderboard page', //日誌排行榜頁
	'ranklist/poll' => 'Voting Leaderboard Page', //投票排行榜頁
	'ranklist/activity' => 'Activity Leaderboard Page', //活動排行榜頁
	'ranklist/forum' => 'Section Leaderboard Page', //版塊排行榜頁
	'ranklist/picture' => 'Image Leaderboard Page', //圖片排行榜頁
	'ranklist/group' => 'Group leaderboard page', //群組排行榜頁
	'ranklist/thread' => 'Post leaderboard page', //帖子排行榜頁
	'ranklist/member' => 'User leaderboard page', //用戶排行榜頁
	'other_page' => 'Non-DIY modules', //非DIY模塊
	'upload' => 'Upload', //上傳
	'remote' => 'Remotely', //遠程
	'portal_index' => 'Portal Home', //門戶首頁
	'portal_topic_blue' => 'Blue tones', //藍色調專題
	'portal_topic_green' => 'Green Tone Topics', //綠色調專題
	'portal_topic_grey' => 'Grey Tone Topic', //灰色調專題
	'portal_topic_red' => 'Red tones', //紅色調專題
	'itemtypename0' => 'Automatic', //自動
	'itemtypename1' => '<span style="color: #FF0000">Fixed</span>', //<span style="color: #FF0000">固定</span>
	'itemtypename2' => '<span style="color: #00BFFF">Edit</span>', //<span style="color: #00BFFF">編輯</span>
	'itemtypename3' => '<span style="color: #0000FF">Push</span>', //<span style="color: #0000FF">推送</span>
);