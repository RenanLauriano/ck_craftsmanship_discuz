<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupattachment.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupattachment_name' => 'Forum attachment list', //論壇附件列表
	'groupattachment_desc' => 'Forum attachment list call', //論壇附件列表調用
	'groupattachment_fids' => 'Designated group', //指定群組
	'groupattachment_fids_comment' => 'Specify a group. Separate multiple IDs with a comma ",".', //指定群組，多個ID之間請用半角逗號「,」隔開。
	'groupattachment_tids' => 'Specified subject', //指定主題
	'groupattachment_tids_comment' => 'Specify the topic ID, separate multiple IDs with commas', //指定主題ID，多個ID之間用逗號分隔
	'groupattachment_gtids' => 'Group classification', //群組分類
	'groupattachment_gtids_comment' => 'Set the category of the group, you can hold down CTRL to select multiple, select all or not select all without restriction', //設置群組所在分類，可以按住 CTRL 多選，全選或全不選均為不做限制
	'groupattachment_startrow' => 'Number of starting data lines', //起始數據行數
	'groupattachment_startrow_comment' => 'If you need to set the number of starting data lines, please enter a specific value, 0 means starting from the first line, and so on', //如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推
	'groupattachment_items' => 'Display the number of data', //顯示數據條數
	'groupattachment_items_comment' => 'Set the number of image theme items to display at one time, please set it as an integer greater than 0', //設置一次顯示的圖片主題條目數，請設置為大於 0 的整數
	'groupattachment_titlelength' => 'Title length', //標題長度
	'groupattachment_titlelength_comment' => 'Set the maximum length when attachment name/post title is displayed', //設置當附件名稱/帖子標題顯示的最大長度
	'groupattachment_summarylength' => 'Content length', //內容長度
	'groupattachment_summarylength_comment' => 'Set the maximum length of attachment introduction/post content display', //設置附件介紹/帖子內容顯示的最大長度
	'groupattachment_maxwidth' => 'Image maximum width (pixels)', //圖片最大寬度(像素)
	'groupattachment_maxwidth_comment' => 'Set whether to automatically reduce or enlarge the size of the picture to the width of this setting, 0 means no automatic scaling', //設置是否自動縮小或放大圖片的尺寸到本設定的寬度，0 為不自動縮放
	'groupattachment_maxheight' => 'Image maximum height (pixels)', //圖片最大高度(像素)
	'groupattachment_maxheight_comment' => 'Set whether to automatically reduce or enlarge the size of the picture to the height of this setting, 0 means no automatic scaling', //設置是否自動縮小或放大圖片的尺寸到本設定的高度，0 為不自動縮放
	'groupattachment_threadmethod' => 'Topic call', //主題方式調用
	'groupattachment_threadmethod_comment' => 'Selecting "Yes" will call the attachments according to the theme, and one theme will display one attachment; selecting "No" will call the attachments according to the attachments.', //選擇「是」將按照主題方式調用附件，一個主題顯示一個附件；選擇「否」將按照附件方式調用
	'groupattachment_digest' => 'Essence filter', //精華帖過濾
	'groupattachment_digest_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'groupattachment_digest_0' => 'Common theme', //普通主題
	'groupattachment_digest_1' => 'Essence I', //精華 I
	'groupattachment_digest_2' => 'Essence II', //精華 II
	'groupattachment_digest_3' => 'Essence III', //精華 III
	'groupattachment_special' => 'Filter by special topic', //特殊主題過濾
	'groupattachment_special_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'groupattachment_special_1' => 'Poll topic', //投票主題
	'groupattachment_special_2' => 'Product theme', //商品主題
	'groupattachment_special_3' => 'Bounty theme', //懸賞主題
	'groupattachment_special_4' => 'Activity theme', //活動主題
	'groupattachment_special_5' => 'Debate topic', //辯論主題
	'groupattachment_special_0' => 'Common theme', //普通主題
	'groupattachment_special_reward' => 'Bounty topic filtering', //懸賞主題過濾
	'groupattachment_special_reward_comment' => 'Set a specific type of bounty theme', //設置特定類型的懸賞主題
	'groupattachment_special_reward_0' => 'All', //全部
	'groupattachment_special_reward_1' => 'Solved', //已解決
	'groupattachment_special_reward_2' => 'Unsolved', //未解決
	'groupattachment_dateline' => 'Attachment upload time', //附件上傳時間
	'groupattachment_dateline_nolimit' => 'Not limited', //不限制
	'groupattachment_dateline_hour' => 'Last hour', //最近1小時
	'groupattachment_dateline_day' => 'Last 24 hours', //最近24小時
	'groupattachment_dateline_week' => 'Last week', //最近1周
	'groupattachment_dateline_month' => 'Last 1 month', //最近1月
	'groupattachment_gviewperm' => 'Group browsing permissions', //群組瀏覽權限
	'groupattachment_gviewperm_nolimit' => 'Not limited', //不限制
	'groupattachment_gviewperm_only_member' => 'Members only', //僅成員
	'groupattachment_gviewperm_all_member' => 'Everyone', //所有人
	'groupattachment_highlight' => 'Get highlight value', //獲得高亮值
);

?>