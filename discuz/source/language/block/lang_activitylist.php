<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'activitylist_fids' => 'The section', //所在版塊
	'activitylist_fids_comment' => 'Set the forums that are allowed to participate in the call of new posts, you can hold down CTRL to select multiple, select all or not select all without restriction', //設置允許參與新帖調用的版塊，可以按住 CTRL 多選，全選或全不選均為不做限制
	'activitylist_uids' => 'Initiator UID', //發起者UID
	'activitylist_uids_comment' => 'Set the UID of the event initiator. Please separate multiple UIDs with a comma ",".', //設置活動發起者UID，多個UID請用半角逗號「,」隔開。
	'activitylist_startrow' => 'Number of starting data lines', //起始數據行數
	'activitylist_startrow_comment' => 'If you need to set the number of starting data lines, please enter a specific value, 0 means starting from the first line, and so on', //如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推
	'activitylist_items' => 'Display the number of data', //顯示數據條數
	'activitylist_items_comment' => 'Set the number of topic entries to display at one time, please set to an integer greater than 0', //設置一次顯示的主題條目數，請設置為大於 0 的整數
	'activitylist_titlelength' => 'Title max bytes', //標題最大字節數
	'activitylist_titlelength_comment' => 'Set whether to automatically reduce the title to the number of bytes in this setting when the title length exceeds this setting, 0 means no automatic reduction', //設置當標題長度超過本設定時，是否將標題自動縮減到本設定中的字節數，0 為不自動縮減
	'activitylist_fnamelength' => 'Title max bytes including section name', //標題最大字節數包含版塊名稱
	'activitylist_fnamelength_comment' => 'Set whether the length of the title will be included in the length of the section name', //設置標題長度是否將所在版塊名稱的長度一同計算在內
	'activitylist_summarylength' => 'Topic Brief Text Count', //主題簡短內容文字數
	'activitylist_summarylength_comment' => 'Set the number of words in the short content of the subject, 0 is to use the default value of 255', //設置主題簡短內容的文字數，0 為使用默認值 255
	'activitylist_tids' => 'Specified subject', //指定主題
	'activitylist_tids_comment' => 'Set the topic tid to be displayed. Multiple tids should be separated by a comma ",". Note: Leave blank to do no filtering', //設置要指定顯示的主題 tid ，多個 tid 請用半角逗號「,」隔開。注意: 留空為不進行任何過濾
	'activitylist_keyword' => 'Title keyword', //標題關鍵字
	'activitylist_keyword_comment' => 'Set keywords to include in the title. Note: Leave blank for no filtering; Wildcards * can be used in keywords; To match all keywords, spaces or AND can be used to connect. Such as win32 AND unix; to match parts of multiple keywords, use | or OR to connect. Such as win32 OR unix', //設置標題包含的關鍵字。注意: 留空為不進行任何過濾； 關鍵字中可使用通配符 *； 匹配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 匹配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix
	'activitylist_typeids' => 'Topic classification', //主題分類
	'activitylist_typeids_comment' => 'Set a topic for a specific category. Note: Select all or unselect all means no filtering', //設置特定分類的主題。注意: 全選或全不選均為不進行任何過濾
	'activitylist_typeids_all' => 'All subject categories', //全部的主題分類
	'activitylist_sortids' => 'Classified information', //分類信息
	'activitylist_sortids_comment' => 'Sets the subject of a specific category of information. Note: Select all or unselect all means no filtering', //設置特定分類信息的主題。注意: 全選或全不選均為不進行任何過濾
	'activitylist_sortids_all' => 'All classification information', //全部的分類信息
	'activitylist_digest' => 'Essence theme filter', //精華主題過濾
	'activitylist_digest_comment' => 'Set a specific subject area. Note: Selecting all or not selecting all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'activitylist_digest_0' => 'Common theme', //普通主題
	'activitylist_digest_1' => 'Essence I', //精華 I
	'activitylist_digest_2' => 'Essence II', //精華 II
	'activitylist_digest_3' => 'Essence III', //精華 III
	'activitylist_stick' => 'Sticky topic filter', //置頂主題過濾
	'activitylist_stick_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'activitylist_stick_0' => 'Common theme', //普通主題
	'activitylist_stick_1' => 'Top I', //置頂 I
	'activitylist_stick_2' => 'Top II', //置頂 II
	'activitylist_stick_3' => 'Sticky III', //置頂 III
	'activitylist_special' => 'Filter by special topic', //特殊主題過濾
	'activitylist_special_comment' => 'Set a specific subject area. Note: Select all or unselect all means no filtering', //設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾
	'activitylist_special_1' => 'Poll topic', //投票主題
	'activitylist_special_2' => 'Product theme', //商品主題
	'activitylist_special_3' => 'Bounty theme', //懸賞主題
	'activitylist_special_4' => 'Activity theme', //活動主題
	'activitylist_special_5' => 'Debate topic', //辯論主題
	'activitylist_special_0' => 'Common theme', //普通主題
	'activitylist_special_reward' => 'Bounty topic filtering', //懸賞主題過濾
	'activitylist_special_reward_comment' => 'Set a specific type of bounty theme', //設置特定類型的懸賞主題
	'activitylist_special_reward_0' => 'All', //全部
	'activitylist_special_reward_1' => 'Solved', //已解決
	'activitylist_special_reward_2' => 'Unsolved', //未解決
	'activitylist_recommend' => 'Recommended topic filtering', //推薦主題過濾
	'activitylist_recommend_comment' => 'Set whether to show only recommended themes', //設置是否只顯示推薦的主題
	'activitylist_orderby' => 'Sort topics by', //主題排序方式
	'activitylist_orderby_comment' => 'Set the field or method by which topics are sorted', //設置以哪一字段或方式對主題進行排序
	'activitylist_orderby_lastpost' => 'Sort by last reply time in reverse order', //按最後回復時間倒序排序
	'activitylist_orderby_dateline' => 'Sort by publication date in reverse order', //按發佈時間倒序排序
	'activitylist_orderby_replies' => 'Sort by replies in reverse order', //按回複數倒序排序
	'activitylist_orderby_views' => 'Sort by number of views in reverse order', //按瀏覽次數倒序排序
	'activitylist_orderby_heats' => 'Sort by popularity in reverse order', //按熱度倒序排序
	'activitylist_orderby_recommends' => 'Sort by topic in reverse order', //按主題評價倒序排序
	'activitylist_orderby_hourviews' => 'Sort by the number of views in the specified time in reverse order', //按指定時間內瀏覽次數倒序排序
	'activitylist_orderby_todayviews' => 'Sort by the number of views of the day in reverse order', //按當天瀏覽次數倒序排序
	'activitylist_orderby_weekviews' => 'Sort by the number of visits this week in reverse order', //按本周瀏覽次數倒序排序
	'activitylist_orderby_monthviews' => 'Sort by monthly pageviews in reverse order', //按當月瀏覽次數倒序排序
	'activitylist_orderby_hours' => 'Specified time (hours)', //指定時間(小時)
	'activitylist_orderby_hours_comment' => 'The time value of the number of views sorted in reverse order within the specified time', //指定時間內瀏覽次數倒序排序的時間值
	'activitylist_orderby_todayhots' => 'Sorted in reverse order by the cumulative number of sales on the day', //按當天累計售出數倒序排序
	'activitylist_orderby_weekhots' => 'Sort by the cumulative number of sales this week in reverse order', //按本周累計售出數倒序排序
	'activitylist_orderby_monthhots' => 'Sort by the current month\'s cumulative number of sales in reverse order', //按當月累計售出數倒序排序
	'activitylist_price_add' => ' additional', // 附加 
	'activitylist_place' => 'Event Location', //活動地點
	'activitylist_class' => 'Type of activity', //活動類型
	'activitylist_class_all' => 'All types', //所有類型
	'activitylist_gender' => 'Gender requirement', //性別要求
	'activitylist_gender_0' => 'Unlimited', //不限
	'activitylist_gender_1' => 'Male', //男
	'activitylist_gender_2' => 'Female', //女
	'activitylist_orderby_weekstart' => 'Sort by activity start time within the week', //按一周內活動開始時間排序
	'activitylist_orderby_monthstart' => 'Sort by activity start time within a month', //按一月內活動開始時間排序
	'activitylist_orderby_weekexp' => 'Sort by registration deadline within a week', //按一周內報名截止時間排序
	'activitylist_orderby_monthexp' => 'Sort by registration deadline in January', //按一月內報名截止時間排序
	'activitylist_orderby_weekhot' => 'Sort by the number of people who have attended within a week', //按一周內已參加人數排序
	'activitylist_orderby_monthhot' => 'Sort by the number of participants in January', //按一月內已參加人數排序
	'activitylist_orderby_alltimehot' => 'Sort by the number of people who have attended all open events', //按所有未結束活動已參加人數排序
	'activitylist_highlight' => 'Get highlight value', //獲得高亮值
);

?>