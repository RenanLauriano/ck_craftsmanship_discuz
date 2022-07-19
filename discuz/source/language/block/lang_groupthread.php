<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids' => 'Group ID', //群組ID
	'groupthread_fids_comment' => 'Specify group ID, use , to separate multiple IDs', //指定群組ID，多個ID之間用 , 分割
	'groupthread_gtids' => 'Group classification', //群組分類
	'groupthread_gtids_comment' => 'Select group category', //選擇群組分類
	'groupthread_uids' => 'Landlord UID', //樓主UID
	'groupthread_uids_comment' => 'Specify the topic author ID, and separate multiple IDs with ,', //指定主題作者ID，多個ID之間用 , 分割
	'groupthread_keyword' => 'Title keyword', //標題關鍵字
	'groupthread_keyword_comment' => 'Set keywords to include in the title. Note: Leave blank for no filtering; Wildcards * can be used in keywords; To match all keywords, spaces or AND can be used to connect. Such as win32 AND unix; to match parts of multiple keywords, use | or OR to connect. Such as win32 OR unix', //設置標題包含的關鍵字。注意: 留空為不進行任何過濾； 關鍵字中可使用通配符 *； 匹配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 匹配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix
	'groupthread_startrow' => 'Number of starting data lines', //起始數據行數
	'groupthread_startrow_comment' => 'If you need to set the number of starting data lines, please enter a specific value, 0 means starting from the first line, and so on', //如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推
	'groupthread_items' => 'Display the number of data', //顯示數據條數
	'groupthread_items_comment' => 'Set the number of topic entries to display at one time, please set to an integer greater than 0', //設置一次顯示的主題條目數，請設置為大於 0 的整數
	'groupthread_titlelength' => 'Title max bytes', //標題最大字節數
	'groupthread_maxlength_comment' => 'Set whether to automatically reduce the title to the number of bytes in this setting when the title length exceeds this setting, 0 means no automatic reduction', //設置當標題長度超過本設定時，是否將標題自動縮減到本設定中的字節數，0 為不自動縮減
	'groupthread_fnamelength' => 'Title max bytes including section name', //標題最大字節數包含版塊名稱
	'groupthread_fnamelength_comment' => 'Set whether the length of the title will be included in the length of the section name', //設置標題長度是否將所在版塊名稱的長度一同計算在內
	'groupthread_summarylength' => 'Topic Brief Text Count', //主題簡短內容文字數
	'groupthread_summarylength_comment' => 'Set the number of text in the short content of the subject, 0 is to use the default value of 255', //設置主題簡短內容的文字數，0 為使用默認值 255
	'groupthread_picpre' => 'Prefix icon', //前綴圖標
	'groupthread_picpre_comment' => 'Set whether to add an icon in the form of a picture before the theme, enter the URL (absolute or relative) address of the picture, leave it blank to not display the prefix icon', //設置是否在主題前加入圖片形式的圖標，輸入圖片的 URL (絕對或相對)地址即可，留空為不顯示前綴圖標
	'groupthread_tids' => 'Specified subject', //指定主題
	'groupthread_tids_comment' => 'Set the topic tid to be displayed. Multiple tids should be separated by a comma ",". Note: Leave blank to do no filtering', //設置要指定顯示的主題 tid ，多個 tid 請用半角逗號「,」隔開。注意: 留空為不進行任何過濾
	'groupthread_typeids' => 'Topic classification', //主題分類
	'groupthread_typeids_comment' => 'Set a topic for a specific category. Note: Select all or unselect all means no filtering', //設置特定分類的主題。注意: 全選或全不選均為不進行任何過濾
	'groupthread_typeids_all' => 'All subject categories', //全部的主題分類
	'groupthread_sortids' => 'Classified information', //分類信息
	'groupthread_sortids_comment' => 'Sets the subject of a specific category of information. Note: Select all or unselect all means no filtering', //設置特定分類信息的主題。注意: 全選或全不選均為不進行任何過濾
	'groupthread_sortids_all' => 'All classification information', //全部的分類信息
	'groupthread_threadtype' => 'Show topic category prefixes', //顯示主題分類前綴
	'groupthread_threadtype_comment' => 'Set whether to be in the topic list, and add the category name to the topic of the category', //設置是否在主題列表中，給分類的主題前加上分類名稱
	'groupthread_groupthreadort' => 'Display category information prefix', //顯示分類信息前綴
	'groupthread_groupthreadort_comment' => 'Set whether to be in the topic list, add the category information name before the topic of the category information', //設置是否在主題列表中，給分類信息的主題前加上分類信息名稱
	'groupthread_highlight' => 'Get highlight value', //獲得高亮值
	'groupthread_highlight_comment' => 'Set whether to display the highlight feature of the theme', //設置是否顯示主題的高亮特性
	'groupthread_digest' => 'Essence theme filter', //精華主題過濾
	'groupthread_digest_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'groupthread_digest_0' => 'Common theme', //普通主題
	'groupthread_digest_1' => 'Essence I', //精華 I
	'groupthread_digest_2' => 'Essence II', //精華 II
	'groupthread_digest_3' => 'Essence III', //精華 III
	'groupthread_stick' => 'Sticky topic filter', //置頂主題過濾
	'groupthread_stick_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'groupthread_stick_0' => 'Common theme', //普通主題
	'groupthread_stick_1' => 'Top I', //置頂 I
	'groupthread_stick_2' => 'Top II', //置頂 II
	'groupthread_stick_3' => 'Sticky III', //置頂 III
	'groupthread_special' => 'Filter by special topic', //特殊主題過濾
	'groupthread_special_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'groupthread_special_1' => 'Poll topic', //投票主題
	'groupthread_special_2' => 'Product theme', //商品主題
	'groupthread_special_3' => 'Bounty theme', //懸賞主題
	'groupthread_special_4' => 'Activity theme', //活動主題
	'groupthread_special_5' => 'Debate topic', //辯論主題
	'groupthread_special_0' => 'Common theme', //普通主題
	'groupthread_special_reward' => 'Bounty topic filtering', //懸賞主題過濾
	'groupthread_special_reward_comment' => 'Set a specific type of bounty theme', //設置特定類型的懸賞主題
	'groupthread_picrequired' => 'Must include image attachments', //必須含圖片附件
	'groupthread_picrequired_comment' => 'Set whether to show only topics with image attachments', //設置是否只顯示含有圖片附件的主題
	'groupthread_special_reward_0' => 'All', //全部
	'groupthread_special_reward_1' => 'Solved', //已解決
	'groupthread_special_reward_2' => 'Unsolved', //未解決
	'groupthread_recommend' => 'Recommended topic filtering', //推薦主題過濾
	'groupthread_recommend_comment' => 'Set whether to show only recommended themes', //設置是否只顯示推薦的主題
	'groupthread_orderby' => 'Sort topics by', //主題排序方式
	'groupthread_orderby_comment' => 'Set the field or method by which topics are sorted', //設置以哪一字段或方式對主題進行排序
	'groupthread_orderby_lastpost' => 'Sort by last reply time in reverse order', //按最後回復時間倒序排序
	'groupthread_orderby_dateline' => 'Sort by publication date in reverse order', //按發佈時間倒序排序
	'groupthread_orderby_replies' => 'Sort by replies in reverse order', //按回複數倒序排序
	'groupthread_orderby_views' => 'Sort by number of views in reverse order', //按瀏覽次數倒序排序
	'groupthread_orderby_heats' => 'Sort by popularity in reverse order', //按熱度倒序排序
	'groupthread_orderby_recommends' => 'Sort by topic in reverse order', //按主題評價倒序排序
	'groupthread_orderby_hourviews' => 'Sort by the number of views within the hour in reverse order', //按小時內瀏覽次數倒序排序
	'groupthread_orderby_todayviews' => 'Sort by the number of views of the day in reverse order', //按當天瀏覽次數倒序排序
	'groupthread_orderby_weekviews' => 'Sort by the number of visits this week in reverse order', //按本周瀏覽次數倒序排序
	'groupthread_orderby_monthviews' => 'Sort by monthly pageviews in reverse order', //按當月瀏覽次數倒序排序
	'groupthread_postdateline' => 'Topic release time', //主題發佈時間
	'groupthread_postdateline_nolimit' => 'Not limited', //不限制
	'groupthread_postdateline_hour' => 'Within 1 hour', //1小時內
	'groupthread_postdateline_day' => 'Within 24 hours', //24小時內
	'groupthread_postdateline_week' => 'Within 7 days', //7天內
	'groupthread_postdateline_month' => 'Within 1 month', //1個月內
	'groupthread_lastpost' => 'Last update time', //最後更新時間
	'groupthread_lastpost_nolimit' => 'Not limited', //不限制
	'groupthread_lastpost_hour' => 'Within 1 hour', //1小時內
	'groupthread_lastpost_day' => 'Within 24 hours', //24小時內
	'groupthread_lastpost_week' => 'Within 7 days', //7天內
	'groupthread_lastpost_month' => 'Within 1 month', //1個月內
	'groupthread_orderby_displayorder' => 'By default', //按默認順序
	'groupthread_gviewperm' => 'Group browsing permissions', //群組瀏覽權限
	'groupthread_gviewperm_nolimit' => 'Not limited', //不限制
	'groupthread_gviewperm_only_member' => 'Members only', //僅成員
	'groupthread_gviewperm_all_member' => 'Everyone', //所有人
);

?>