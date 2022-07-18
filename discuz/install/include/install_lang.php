<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', '中文版');
$lang = array(
	'SC_GBK' => 'Simplified Chinese version', //簡體中文版
	'TC_BIG5' => 'Traditional Chinese version', //繁體中文版
	'SC_UTF8' => 'Simplified Chinese UTF8 version', //簡體中文 UTF8 版
	'TC_UTF8' => 'Traditional Chinese UTF8 version', //繁體中文 UTF8 版
	'EN_ISO' => 'ENGLISH ISO8859', //ENGLISH ISO8859
	'EN_UTF8' => 'ENGLIST UTF-8', //ENGLIST UTF-8
	'title_install' => 'SOFT_NAME Setup Wizard', //SOFT_NAME 安裝嚮導
	'agreement_yes' => 'I agree', //我同意
	'agreement_no' => 'I disagree', //我不同意
	'notset' => 'Not limited', //不限制
	'enable' => 'Turn on', //開啟
	'disable' => 'Closure', //關閉
	'message_title' => 'Prompt information', //提示信息
	'error_message' => 'Error message', //錯誤信息
	'message_return' => 'Return', //返回
	'return' => 'Return', //返回
	'install_wizard' => 'Installation guide', //安裝嚮導
	'config_nonexistence' => 'Config file does not exist', //配置文件不存在
	'nodir' => 'Directory does not exist', //目錄不存在
	'redirect' => 'The browser will automatically jump to the page without manual intervention. <br>Click here unless your browser does not automatically redirect', //瀏覽器會自動跳轉頁面，無需人工干預。<br>除非當您的瀏覽器沒有自動跳轉時，請點擊這裡
	'auto_redirect' => 'The browser will automatically jump to the page without manual intervention', //瀏覽器會自動跳轉頁面，無需人工干預
	'database_errno_2003' => 'Unable to connect to the database, please check whether the database is started and whether the database server address is correct', //無法連接數據庫，請檢查數據庫是否啟動，數據庫服務器地址是否正確
	'database_errno_1044' => 'Unable to create a new database, please check whether the database name is correct', //無法創建新的數據庫，請檢查數據庫名稱填寫是否正確
	'database_errno_1045' => 'Unable to connect to the database, please check whether the database user name or password is correct', //無法連接數據庫，請檢查數據庫用戶名或者密碼是否正確
	'database_errno_1064' => 'SQL syntax error', //SQL 語法錯誤
	'dbpriv_createtable' => 'Installation cannot continue without CREATE TABLE privilege', //沒有CREATE TABLE權限，無法繼續安裝
	'dbpriv_insert' => 'Unable to continue installation without INSERT permission', //沒有INSERT權限，無法繼續安裝
	'dbpriv_select' => 'Installation cannot continue without SELECT privilege', //沒有SELECT權限，無法繼續安裝
	'dbpriv_update' => 'Installation cannot continue without UPDATE permission', //沒有UPDATE權限，無法繼續安裝
	'dbpriv_delete' => 'Installation cannot continue without DELETE permission', //沒有DELETE權限，無法繼續安裝
	'dbpriv_droptable' => 'Cannot install without DROP TABLE privilege', //沒有DROP TABLE權限，無法安裝
	'db_not_null' => 'UCenter has been installed in the database, continuing the installation will clear the original data.', //數據庫中已經安裝過 UCenter, 繼續安裝會清空原有數據。
	'db_drop_table_confirm' => 'Continuing the installation will erase all original data, are you sure you want to continue?', //繼續安裝會清空全部原有數據，您確定要繼續嗎?
	'writeable' => 'Writable', //可寫
	'unwriteable' => 'Not writable', //不可寫
	'old_step' => 'Previous', //上一步
	'new_step' => 'Next step', //下一步
	'database_connect_error' => 'Database connection error', //數據庫連接錯誤
	'step_title_1' => 'Check environment', //檢查安裝環境
	'step_title_2' => 'Set up environment', //設置運行環境
	'step_title_3' => 'Create database', //創建數據庫
	'step_title_4' => 'Install', //安裝
	'step_env_check_title' => 'Start installation', //開始安裝
	'step_env_check_desc' => 'Environment and file directory permission checks', //環境以及文件目錄權限檢查
	'step_db_init_title' => 'Install the database', //安裝數據庫
	'step_db_init_desc' => 'Database installation in progress', //正在執行數據庫安裝
	'step1_file' => 'Catalog file', //目錄文件
	'step1_need_status' => 'Desired state', //所需狀態
	'step1_status' => 'Current state', //當前狀態
	'not_continue' => 'Please correct the above red cross and try again', //請將以上紅叉部分修正再試
	'tips_dbinfo' => 'Fill in the database information', //填寫數據庫信息
	'tips_dbinfo_comment' => '', //
	'tips_admininfo' => 'Fill in the administrator information', //填寫管理員信息
	'step_ext_info_title' => 'Successful installation.', //安裝成功。
	'step_ext_info_comment' => 'Click to log in', //點擊進入登錄
	'ext_info_succ' => 'Successful installation.', //安裝成功。
	'install_submit' => 'Submit', //提交
	'install_locked' => 'The installation is locked, it has already been installed, if you are sure to reinstall, please delete it from the server<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'You must resolve the above issues before the installation can continue', //您必須解決以上問題，安裝才可以繼續
	'step_app_reg_title' => 'Set up the operating environment', //設置運行環境
	'step_app_reg_desc' => 'Detect server environment and set up UCenter', //檢測服務器環境以及設置 UCenter
	'tips_ucenter' => 'Please fill in the relevant information of UCenter', //請填寫 UCenter 相關信息
	'tips_ucenter_comment' => 'UCenter is the core service program of Comsenz\'s products, and the installation and operation of Discuz! Board depend on this program. If you have already installed UCenter, please fill in the following information. Otherwise, go to the <a href="http://www.discuz.com/" target="blank">Comsenz Product Center</a> to download and install it before continuing.', //UCenter 是 Comsenz 公司產品的核心服務程序，Discuz! Board 的安裝和運行依賴此程序。如果您已經安裝了 UCenter，請填寫以下信息。否則，請到 <a href="http://www.discuz.com/" target="blank">Comsenz 產品中心</a> 下載並且安裝，然後再繼續。
	'advice_mysql_connect' => 'Please check if the mysql module is loaded correctly', //請檢查 mysql 模塊是否正確加載
	'advice_gethostbyname' => 'Whether the gethostbyname function is disabled in the PHP configuration. Please contact the space provider to make sure this feature is enabled', //是否 PHP 配置中禁止了 gethostbyname 函數。請聯繫空間商，確定開啟了此項功能
	'advice_file_get_contents' => 'This function requires the allow_url_fopen option in php.ini to be enabled. Please contact the space provider to make sure this feature is enabled', //該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能
	'advice_xml_parser_create' => 'This function requires PHP to support XML. Please contact the space provider to make sure this feature is enabled', //該函數需要 PHP 支持 XML。請聯繫空間商，確定開啟了此項功能
	'advice_fsockopen' => 'This function requires the allow_url_fopen option in php.ini to be enabled. Please contact the space provider to make sure this feature is enabled', //該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能
	'advice_pfsockopen' => 'This function requires the allow_url_fopen option in php.ini to be enabled. Please contact the space provider to make sure this feature is enabled', //該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能
	'advice_stream_socket_client' => 'Whether the stream_socket_client function is disabled in the PHP configuration', //是否 PHP 配置中禁止了 stream_socket_client 函數
	'advice_curl_init' => 'Whether the curl_init function is disabled in the PHP configuration', //是否 PHP 配置中禁止了 curl_init 函數
	'ucurl' => 'URL of UCenter', //UCenter 的 URL
	'ucpw' => 'UCenter founder password', //UCenter 創始人密碼
	'ucip' => 'IP address of UCenter', //UCenter 的IP地址
	'ucenter_ucip_invalid' => 'Incorrect format, please fill in the correct IP address', //格式錯誤，請填寫正確的 IP 地址
	'ucip_comment' => 'In most cases you can leave', //絕大多數情況下您可以不填
	'tips_siteinfo' => 'Please fill in the site information', //請填寫站點信息
	'sitename' => 'Site name', //站點名稱
	'siteurl' => 'Site URL', //站點 URL
	'forceinstall' => 'Force install', //強制安裝
	'dbinfo_forceinstall_invalid' => 'The current database already contains data tables with the same table prefix. You can modify the "Table Name Prefix" to avoid deleting old data, or choose to force installation. Forced installation deletes old data and cannot be recovered', //當前數據庫當中已經含有同樣表前綴的數據表，您可以修改「表名前綴」來避免刪除舊的數據，或者選擇強制安裝。強制安裝會刪除舊數據，且無法恢復
	'click_to_back' => 'Click to go back to the previous step', //點擊返回上一步
	'adminemail' => 'System mailbox Email', //系統信箱 Email
	'adminemail_comment' => 'Used to send program error reports', //用於發送程序錯誤報告
	'dbhost_comment' => 'Typically 127.0.0.1 or localhost', //一般為 127.0.0.1 或 localhost
	'dbname_comment' => 'Database for installing Discuz!', //用於安裝 Discuz! 的數據庫
	'dbuser_comment' => 'Your database username', //您的數據庫用戶名
	'dbpw_comment' => 'Your database password', //您的數據庫密碼
	'tablepre_comment' => 'When running multiple forums in the same database, please modify the prefix', //同一數據庫運行多個論壇時，請修改前綴
	'forceinstall_check_label' => 'I want to delete data, force install !!!', //我要刪除數據，強制安裝 !!!
	'uc_url_empty' => 'You did not fill in the URL of UCenter, please return to fill in', //您沒有填寫 UCenter 的 URL，請返回填寫
	'uc_url_invalid' => 'URL is malformed', //URL 格式錯誤
	'uc_url_unreachable' => 'The URL address of UCenter may be incorrectly filled in, please check', //UCenter 的 URL 地址可能填寫錯誤，請檢查
	'uc_ip_invalid' => 'The domain name cannot be resolved, please fill in the IP of the site', //無法解析該域名，請填寫站點的 IP
	'uc_admin_invalid' => 'The UCenter founder password verification failed, the possible reasons are:<br />1. The UCenter founder password is incorrect<br />2. The founder user and IP address are locked due to multiple incorrect password input<br />3 . UCenter background "Add application function via URL" is not enabled', //UCenter 創始人密碼校驗未通過, 可能原因有:<br />1. UCenter 創始人密碼不正確<br />2. 多次錯誤輸入密碼導致創始人用戶和 IP 地址被鎖定<br />3. UCenter 後台 「 通過 URL 添加應用功能 」 未開啟
	'uc_data_invalid' => 'Communication failed, please check whether the URL address of UCenter is correct', //通信失敗，請檢查 UCenter 的URL 地址是否正確 
	'uc_dbcharset_incorrect' => 'The UCenter database character set is inconsistent with the current application character set', //UCenter 數據庫字符集與當前應用字符集不一致
	'uc_api_add_app_error' => 'Add application errors to UCenter', //向 UCenter 添加應用錯誤
	'uc_dns_error' => 'UCenter DNS resolution error, please go back and fill in the IP address of UCenter', //UCenter DNS解析錯誤，請返回填寫一下 UCenter 的 IP地址
	'ucenter_ucurl_invalid' => 'The URL of UCenter is empty, or the format is wrong, please check', //UCenter 的URL為空，或者格式錯誤，請檢查
	'ucenter_ucpw_invalid' => 'The founder password of UCenter is empty, or the format is wrong, please check', //UCenter 的創始人密碼為空，或者格式錯誤，請檢查
	'siteinfo_siteurl_invalid' => 'The site URL is empty, or is malformed, please check', //站點URL為空，或者格式錯誤，請檢查
	'siteinfo_sitename_invalid' => 'The site name is empty, or in the wrong format, please check', //站點名稱為空，或者格式錯誤，請檢查
	'dbinfo_dbhost_invalid' => 'The database server is empty, or the format is wrong, please check', //數據庫服務器為空，或者格式錯誤，請檢查
	'dbinfo_dbname_invalid' => 'The database name is empty, or the format is wrong, please check', //數據庫名為空，或者格式錯誤，請檢查
	'dbinfo_dbuser_invalid' => 'The database username is empty, or the format is incorrect, please check', //數據庫用戶名為空，或者格式錯誤，請檢查
	'dbinfo_dbpw_invalid' => 'The database password is empty, or the format is wrong, please check', //數據庫密碼為空，或者格式錯誤，請檢查
	'dbinfo_adminemail_invalid' => 'The system mailbox is empty, or the format is wrong, please check', //系統郵箱為空，或者格式錯誤，請檢查
	'dbinfo_tablepre_invalid' => 'The data table prefix is empty, or the format is wrong, please check', //數據表前綴為空，或者格式錯誤，請檢查
	'admininfo_username_invalid' => 'The administrator username is empty or in the wrong format, please check', //管理員用戶名為空，或者格式錯誤，請檢查
	'admininfo_email_invalid' => 'The administrator\'s Email is empty, or the format is wrong, please check', //管理員Email為空，或者格式錯誤，請檢查
	'admininfo_password_invalid' => 'Administrator password is empty, please fill in', //管理員密碼為空，請填寫
	'admininfo_password2_invalid' => 'The two passwords do not match, please check', //兩次密碼不一致，請檢查

	'install_dzfull' => '<br><label><input type="radio"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" />Fresh installation of Discuz! X (including UCenter Server)</label>',
	'install_dzonly' => '<br><label><input type="radio"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> Install Discuz! X only (manually specify the installed UCenter Server)</label>',

	'username' => 'Administrator account', //管理員賬號
	'email' => 'Administrator Email', //管理員 Email
	'password' => 'Administrator password', //管理員密碼
	'password_comment' => 'Administrator password cannot be empty', //管理員密碼不能為空
	'password2' => 'Repeat password', //重複密碼
	'admininfo_invalid' => 'The administrator information is incomplete, please check the administrator account, password, email', //管理員信息不完整，請檢查管理員賬號，密碼，郵箱
	'dbname_invalid' => 'The database name is empty, please fill in the database name', //數據庫名為空，請填寫數據庫名稱
	'tablepre_invalid' => 'The data table prefix is empty, or the format is wrong, please check', //數據表前綴為空，或者格式錯誤，請檢查
	'admin_username_invalid' => 'Illegal user name, the length of the user name should not exceed 15 English characters, and cannot contain special characters, usually Chinese, letters or numbers', //非法用戶名，用戶名長度不應當超過 15 個英文字符，且不能包含特殊字符，一般是中文，字母或者數字
	'admin_password_invalid' => 'The password does not match the above, please re-enter', //密碼和上面不一致，請重新輸入
	'admin_email_invalid' => 'Email address is wrong, this email address has already been used or the format is invalid, please change to another address', //Email 地址錯誤，此郵件地址已經被使用或者格式無效，請更換為其他地址
	'admin_invalid' => 'Your information administrator information is incomplete, please fill in each item carefully', //您的信息管理員信息沒有填寫完整，請仔細填寫每個項目
	'admin_exist_password_error' => 'The user already exists, if you want to set this user as the administrator of the forum, please enter the correct password of the user, or please change the name of the forum administrator', //該用戶已經存在，如果您要設置此用戶為論壇的管理員，請正確輸入該用戶的密碼，或者請更換論壇管理員的名字
	'tagtemplates_subject' => 'Title', //標題
	'tagtemplates_uid' => 'User ID', //用戶 ID
	'tagtemplates_username' => 'Posted by', //發帖者
	'tagtemplates_dateline' => 'Date', //日期
	'tagtemplates_url' => 'Subject address', //主題地址
	'uc_version_incorrect' => 'The version of your UCenter server is too low, please upgrade the UCenter server to the latest version, and upgrade, download address: http://www.comsenz.com/ .', //您的 UCenter 服務端版本過低，請升級 UCenter 服務端到最新版本，並且升級，下載地址：http://www.comsenz.com/ 。
	'config_unwriteable' => 'The installation wizard cannot write the configuration file, please set the config.inc.php program property to be writable (777)', //安裝嚮導無法寫入配置文件, 請設置 config.inc.php 程序屬性為可寫狀態(777)
	'install_in_processed' => 'Installing...', //正在安裝...
	'install_succeed' => 'The installation is successful, click to enter', //安裝成功，點擊進入
	'install_cloud' => 'After successful installation, welcome to open Discuz! Cloud Platform<br>Discuz! Cloud Platform is committed to helping webmasters increase website traffic, enhance website operation capabilities, and increase website revenue. <br>Discuz! Cloud platform currently provides free QQ interconnection, Tencent analysis, vertical and horizontal search, roaming application, SOSO expression services. Discuz! cloud platform will provide more high-quality services in succession. <br>Before opening the Discuz! platform, please make sure your website (Discuz!, UCHome or SupeSite) has been upgraded to Discuz! X3.', //安裝成功，歡迎開通Discuz!雲平台<br>Discuz!雲平台致力於幫助站長提高網站流量，增強網站運營能力，增加網站收入。<br>Discuz!雲平台目前免費提供了QQ互聯、騰訊分析、縱橫搜索、漫遊應用、SOSO表情服務。Discuz!雲平台將陸續提供更多優質服務項目。<br>開通Discuz!平台之前，請確保您的網站（Discuz!、UCHome或SupeSite）已經升級到Discuz! X3。
	'to_install_cloud' => 'Open in the background', //到後台開通
	'to_index' => 'Not currently open', //暫不開通
	'init_credits_karma' => 'Prestige', //威望
	'init_credits_money' => 'Money', //金錢
	'init_postno0' => 'Landlord', //樓主
	'init_postno1' => 'Sofa', //沙發
	'init_postno2' => 'Bench', //板凳
	'init_postno3' => 'Floor', //地板
	'init_support' => 'Support', //支持
	'init_opposition' => 'Be opposed to', //反對

	'init_group_0' => 'Member', //會員
	'init_group_1' => 'Administrator', //管理員
	'init_group_2' => 'Super moderators', //超級版主
	'init_group_3' => 'Moderator', //版主
	'init_group_4' => 'No talking', //禁止發言
	'init_group_5' => 'No Access', //禁止訪問
	'init_group_6' => 'Ban IP', //禁止 IP
	'init_group_7' => 'Tourists', //遊客
	'init_group_8' => 'Waiting to verify member', //等待驗證會員
	'init_group_9' => 'Beggar', //乞丐
	'init_group_10' => 'Newbie', //新手上路
	'init_group_11' => 'Registered member', //註冊會員
	'init_group_12' => 'Intermediate member', //中級會員
	'init_group_13' => 'Premium Member', //高級會員
	'init_group_14' => 'Gold membership', //金牌會員
	'init_group_15' => 'Forum veteran', //論壇元老

	'init_rank_1' => 'Freshman Admission', //新生入學
	'init_rank_2' => 'Small scale chopper', //小試牛刀
	'init_rank_3' => 'Intern reporter', //實習記者
	'init_rank_4' => 'Freelance writer', //自由撰稿人
	'init_rank_5' => 'Distinguished Writer', //特聘作家
	'init_cron_1' => 'Clear today\'s posts', //清空今日發帖數
	'init_cron_2' => 'Clear this month\'s online time', //清空本月在線時間
	'init_cron_3' => 'Daily data cleaning', //每日數據清理
	'init_cron_4' => 'Birthday Statistics and Mail Wishes', //生日統計與郵件祝福
	'init_cron_5' => 'Thread reply notification', //主題回復通知
	'init_cron_6' => 'Daily bulletin cleanup', //每日公告清理
	'init_cron_7' => 'Time-limited action cleanup', //限時操作清理
	'init_cron_8' => 'Forum promotion cleanup', //論壇推廣清理
	'init_cron_9' => 'Monthly theme cleanup', //每月主題清理
	'init_cron_10' => 'Daily X-Space update users', //每日 X-Space更新用戶
	'init_cron_11' => 'Weekly theme updates', //每週主題更新
	'init_bbcode_1' => 'Make the content scroll horizontally, this effect is similar to the HTML marquee tag, note: this effect is only valid under the Internet Explorer browser.', //使內容橫向滾動，這個效果類似 HTML 的 marquee 標籤，注意：這個效果只在 Internet Explorer 瀏覽器下有效。
	'init_bbcode_2' => 'Embed Flash animation', //嵌入 Flash 動畫
	'init_bbcode_3' => 'Display QQ online status, click this icon to chat with him (her)', //顯示 QQ 在線狀態，點這個圖標可以和他（她）聊天
	'init_bbcode_4' => 'Superscript', //上標
	'init_bbcode_5' => 'Subscript', //下標
	'init_bbcode_6' => 'Embed Windows media audio', //嵌入 Windows media 音頻
	'init_bbcode_7' => 'Embed Windows media audio or video', //嵌入 Windows media 音頻或視頻
	'init_qihoo_searchboxtxt' => 'Enter keywords to quickly search this forum', //輸入關鍵詞,快速搜索本論壇
	'init_threadsticky' => 'Global top, category top, this version top', //全局置頂,分類置頂,本版置頂
	'init_default_style' => 'Default style', //默認風格
	'init_default_forum' => 'Default section', //默認版塊
	'init_default_template' => 'Default template set', //默認模板套系
	'init_default_template_copyright' => 'Tencent Cloud Computing (Beijing) Co., Ltd.', //騰訊雲計算（北京）有限責任公司
	'init_dataformat' => 'Y-n-j', //Y-n-j
	'init_modreasons' => 'Advertisement/SPAM\r\nMalicious irrigation\r\nIllegal content\r\nThe text is wrong\r\nRepeat post\r\n\r\nI agree with\r\nExcellent article\r\nOriginal content', //廣告/SPAM\r\n惡意灌水\r\n違規內容\r\n文不對題\r\n重複發帖\r\n\r\n我很贊同\r\n精品文章\r\n原創內容
	'init_userreasons' => 'Very powerful!\r\nThe gods and horses are all clouds\r\nLike one!\r\nThe cottage\r\nCalm down', //很給力!\r\n神馬都是浮雲\r\n贊一個!\r\n山寨\r\n淡定
	'init_link' => 'Discuz! Official Forum', //Discuz! 官方論壇
	'init_link_note' => 'Provide the latest Discuz! product news, software downloads and technical exchanges', //提供最新 Discuz! 產品新聞、軟件下載與技術交流
	'init_promotion_task' => 'Website promotion tasks', //網站推廣任務
	'init_gift_task' => 'Red envelope tasks', //紅包類任務
	'init_avatar_task' => 'Avatar tasks', //頭像類任務

	'license' => '
		<div class="license"><h1>Chinese version license agreement for Chinese users</h1>
		<p>Copyright (c) 2001-2022, Tencent Cloud Computing (Beijing) Co., Ltd. (formerly Beijing Kangsheng Xinchuang Technology Co., Ltd.) All rights reserved. </p>

		<p>Thank you for choosing Tencent Cloud products. Hope our efforts can provide you with an efficient, fast, powerful site solution, and a powerful community forum solution. Tencent Cloud\'s website is https://www.qcloud.com, and the official product discussion community website is https://www.dismall.com. The official website of the product application center is: https://addon.dismall.com. The open source code is available at https://code.dismall.com. </p>

		<p>The official application center included in the Discuz! X project of Tencent Cloud products is operated by Hefei Erdao Network Technology Co., Ltd. The Discuz! X open source project is maintained by Hefei Erdao Network Technology Co., Ltd. The Discuz! X open source code is jointly maintained by the project open source management committee and community developers. Except for the above services, all services are provided by Tencent Cloud. </p>

		<p>Notes to users: This agreement is a legal agreement between you and Tencent Cloud Company regarding your use of various software products and services provided by Tencent Cloud Company. Regardless of whether you are an individual or an organization, profit or not, and how you use it (including for the purpose of learning and research), you must read this Agreement carefully, including the disclaimer clauses that exempt or limit Tencent Cloud\'s liability and restrictions on your rights. Please review and accept or not accept these Terms of Service. If you do not agree to these Terms of Service and/or Tencent Cloud\'s modification to them at any time, you should not use or voluntarily cancel the Tencent Cloud products provided by Tencent Cloud. Otherwise, any of your registration, login, download, viewing, etc. of related services in Tencent Cloud products will be deemed as your full acceptance of these Terms of Service, including acceptance of any modification Tencent Cloud makes to the Terms of Service at any time . </p>
		<p>Once the terms of service are changed, Tencent Cloud will publish the revised content on the website. Once the revised terms of service are published on the website management background, they will effectively replace the original terms of service. You can check the latest version of the terms of service at any time by logging in to the open source code website. If you choose to accept these terms, you agree to be bound by the terms of the agreement. IF YOU DO NOT AGREE TO THESE TERMS OF SERVICE, YOU CANNOT GET THE RIGHT TO USE THE SERVICE. If you violate these terms, Tencent Cloud has the right to suspend or terminate your qualification to use Tencent Cloud products at any time and reserves the right to pursue relevant legal responsibilities. </p>
		<p>You can start to use Tencent Cloud products only after you understand, agree to, and comply with all the terms of this agreement. You may enter into another written agreement directly with Tencent Cloud to supplement or replace all or any part of this agreement. </p>

		<p>Tencent Cloud owns all intellectual property rights of this software. THIS SOFTWARE IS FOR LICENSE AGREEMENT ONLY, NOT FOR SALE. Tencent Cloud only allows you to copy, download, install, use or otherwise benefit from the functions or intellectual property rights of this software in compliance with the terms of this agreement. </p>

		<h3>I. Rights Licensed by Agreement</h3>
		<ol>
		<li>You can use the software for non-commercial or commercial use (limited to the licenses adapted to this agreement) on the basis of fully complying with this license agreement, without paying the software copyright license fee. </li>
		<li>You may modify Tencent Cloud product source code (if provided) or interface style to suit your website requirements within the constraints and limitations specified in the agreement. </li>
		<li>You own the ownership of all member data, articles and related information on the website constructed by using this software, and independently undertake the auditing and paying attention to the content of the website constructed by using this software to ensure that it does not infringe on the legitimate rights and interests of anyone. You shall independently assume all responsibilities arising from the use of Tencent Cloud software and services, and you shall make full compensation for any losses caused to Tencent Cloud Company or users. </li>
		<li>If you need to use Tencent Cloud software or service users for commercial purposes, you must abide by the relevant laws of the People\'s Republic of China. If you need to provide technical support methods or technical support content, please provide technical support services to the official application center (https://addon.dismall.com/service.html). </li>
		<li>You can download apps suitable for your website from the app center service provided by Tencent Cloud, but you should pay the app developer/owner accordingly. </li>
		</ol>

		<h3>II. Restrictions and Restrictions under the Agreement</h3>
		<ol>
		<li>The software or commercial licenses associated with it may not be rented, sold, mortgaged or sublicensed. </li>
		<li>In any case, regardless of the purpose, whether it has been modified or beautified, or the degree of modification, as long as the whole or any part of the Tencent Cloud product is used, without written permission, the Tencent Cloud product name and Tencent Cloud company in the footer of the page The affiliated website (http://cloud.tencent.com or https://www.discuz.net) and the link to the official application center in the background of the program (https://addon.dismall.com) must be kept, and cannot be cleared or deleted. Modify, replace. </li>
		<li>It is prohibited to develop any derivative version, modified version or third-party version based on the whole or any part of Tencent Cloud products for redistribution. </li>
		<li>The application you download from the application center shall not be reverse engineered, reverse assembled, decompiled, etc. without the written permission of the application developer/owner, and shall not be copied, modified, linked, Reprint, compile, publish, publish, and develop derivative products and works related to it. </li>
		<li>If you fail to comply with the terms of this agreement, your authorization will be terminated, the licensed rights will be revoked, and you should bear the corresponding legal responsibilities. </li>
		</ol>

		<h3>III. Limited Warranty and Disclaimer</h3>
		<ol>
		<li>THIS SOFTWARE AND THE ACCOMPANYING DOCUMENTS ARE PROVIDED WITHOUT ANY EXPRESS OR IMPLIED INDEMNITY OR WARRANTY. </li>
		<li>Users use this software voluntarily, and you must understand the risks of using this software. We do not promise to provide any form of technical support, use guarantee, and do not assume any responsibility for problems arising from the use of this software. </li>
		<li>Tencent Cloud Company is not responsible for the articles or information in the website or forum built using this software, and you are solely responsible for it. </li>
		<li>The official application center cannot comprehensively monitor the applications uploaded to the application center by third parties, so it does not guarantee the legality, security, integrity, authenticity or quality of the applications; when you download applications from the application center, Agree to judge and bear all risks on your own, without relying on Tencent Cloud and the official application center. However, in any case, the official application center has the right to stop the application center service in accordance with the law and take corresponding actions, including but not limited to uninstalling relevant applications, suspending all or part of the service, saving relevant records, and reporting to relevant authorities. Tencent Cloud and the official application center do not assume any direct, indirect or joint responsibility for the losses that may be caused to you and third parties. </li>
		<li>Tencent Cloud does not guarantee the timeliness, security and accuracy of the software and services provided by Tencent Cloud. Due to force majeure factors and factors beyond Tencent Cloud\'s control (including hacker attacks, power outages, etc.) If the use and services are suspended or terminated, which causes you losses, you agree to waive all rights to pursue the responsibility of Tencent Cloud. </li>
		<li>Tencent Cloud Company specifically draws your attention to the fact that in order to protect the company\'s autonomy in business development and adjustment, Tencent Cloud Company reserves the right to modify the service content, suspend or terminate some or all of the software use and The right to the service, the modification will be announced on the relevant pages of Tencent Cloud\'s website, and the announcement will be regarded as a notification. Tencent Cloud shall not be responsible to you or any third party for losses caused by Tencent Cloud\'s exercise of the right to modify or suspend or terminate some or all of the software and services. </li>
		</ol>

		<p>Details about the Tencent Cloud Product End User License Agreement, commercial authorization and technical services are exclusively provided by Tencent Cloud. Tencent Cloud has the right to revise the license agreement and service price list without prior notice, and the revised agreement or price list will be effective for new authorized users from the date of change. </p>

		<p>Once you start to install Tencent Cloud products, you are deemed to fully understand and accept the terms of this agreement, and you will be subject to relevant constraints and restrictions while enjoying the rights granted by the above terms. Behavior beyond the scope of the agreement will directly violate this license agreement and constitute infringement. We have the right to terminate the authorization at any time, order to stop the damage, and reserve the right to pursue relevant responsibilities. </p>

		<p>The interpretation, validity and dispute resolution of the terms of this license agreement shall be governed by the laws of the People\'s Republic of China. </p>

		<p>If any disputes or disputes arise between you and Tencent Cloud, you should first resolve them through friendly negotiation. If the negotiation fails, you hereby fully agree to submit the dispute or dispute to the People\'s Court of Haidian District, Beijing, where Tencent Cloud is located. Tencent Cloud has the right to interpret and modify the content of the above terms. </p>

		<p>(End of text)</p>

		<p align="right">Tencent Cloud Inc.</p>

		</div>', //	<div class="license"><h1>中文版授權協議 適用於中文用戶</h1>	<p>版權所有 (c) 2001-2022，騰訊雲計算（北京）有限責任公司（原北京康盛新創科技有限責任公司）保留所有權利。</p>		<p>感謝您選擇騰訊雲產品。希望我們的努力能為您提供一個高效快速、強大的站點解決方案，和強大的社區論壇解決方案。騰訊雲公司網址為 https://www.qcloud.com，產品官方討論社區網址為 https://www.dismall.com。產品官方應用中心網址為：https://addon.dismall.com。開源代碼網址為 https://code.dismall.com。</p>		<p>騰訊雲產品的 Discuz! X 項目內所包含的官方應用中心由合肥貳道網絡科技有限公司承接運營。Discuz! X 開源項目由合肥貳道網絡科技有限公司承接維護，Discuz! X 開源代碼由項目開源管理委員會及社區開發者共同維護。除以上服務外，均由騰訊雲提供服務。</p>		<p>用戶須知：本協議是您與騰訊雲公司之間關於您使用騰訊雲公司提供的各種軟件產品及服務的法律協議。無論您是個人或組織、盈利與否、用途如何（包括以學習和研究為目的），均需仔細閱讀本協議，包括免除或者限制騰訊雲責任的免責條款及對您的權利限制。請您審閱並接受或不接受本服務條款。如您不同意本服務條款及/或騰訊雲隨時對其的修改，您應不使用或主動取消騰訊雲公司提供的騰訊雲產品。否則，您的任何對騰訊雲產品中的相關服務的註冊、登陸、下載、查看等使用行為將被視為您對本服務條款全部的完全接受，包括接受騰訊雲對服務條款隨時所做的任何修改。</p>	<p>本服務條款一旦發生變更， 騰訊雲將在網頁上公佈修改內容。修改後的服務條款一旦在網站管理後台上公佈即有效代替原來的服務條款。您可隨時登錄開源代碼網址查閱最新版服務條款。如果您選擇接受本條款，即表示您同意接受協議各項條件的約束。如果您不同意本服務條款，則不能獲得使用本服務的權利。您若有違反本條款規定，騰訊雲公司有權隨時中止或終止您對騰訊雲產品的使用資格並保留追究相關法律責任的權利。</p>	<p>在理解、同意、並遵守本協議的全部條款後，方可開始使用騰訊雲產品。您可能與騰訊雲公司直接簽訂另一書面協議，以補充或者取代本協議的全部或者任何部分。</p>		<p>騰訊雲擁有本軟件的全部知識產權。本軟件只供許可協議，並非出售。騰訊雲只允許您在遵守本協議各項條款的情況下複製、下載、安裝、使用或者以其他方式受益於本軟件的功能或者知識產權。</p>		<h3>I. 協議許可的權利</h3>	<ol>	   <li>您可以在完全遵守本許可協議的基礎上，將本軟件應用於非商業用途或商業用途使用（局限於本協議所適配許可的情況下），而不必支付軟件版權許可費用。</li>	   <li>您可以在協議規定的約束和限制範圍內修改騰訊雲產品源代碼（如果被提供的話）或界面風格以適應您的網站要求。</li>	   <li>您擁有使用本軟件構建的網站中全部會員資料、文章及相關信息的所有權，並獨立承擔與使用本軟件構建的網站內容的審核、注意義務，確保其不侵犯任何人的合法權益，獨立承擔因使用騰訊雲軟件和服務帶來的全部責任，若造成騰訊雲公司或用戶損失的，您應予以全部賠償。</li>	   <li>若您需將騰訊雲軟件或服務用戶商業用途，必須遵守中國人民共和國相關法律。若需提供技術支持方式或技術支持內容，請向官方應用中心（https://addon.dismall.com/service.html）提供技術支持服務。</li>	   <li>您可以從騰訊雲提供的應用中心服務中下載適合您網站的應用程序，但應向應用程序開發者/所有者支付相應的費用。</li>	</ol>		<h3>II. 協議規定的約束和限制</h3>	<ol>	   <li>不得對本軟件或與之關聯的商業授權進行出租、出售、抵押或發放子許可證。</li>	   <li>無論如何，即無論用途如何、是否經過修改或美化、修改程度如何，只要使用騰訊雲產品的整體或任何部分，未經書面許可，頁面頁腳處的騰訊雲產品名稱和騰訊雲公司下屬網站（http://cloud.tencent.com 或 https://www.discuz.net） 及程序後台官方應用中心的鏈接（https://addon.dismall.com）都必須保留，而不能清除或修改、替換。</li>	   <li>禁止在騰訊雲產品的整體或任何部分基礎上以發展任何派生版本、修改版本或第三方版本用於重新分發。</li>	   <li>您從應用中心下載的應用程序，未經應用程序開發者/所有者的書面許可，不得對其進行反向工程、反向彙編、反向編譯等，不得擅自複製、修改、鏈接、轉載、彙編、發表、出版、發展與之有關的衍生產品、作品等。</li>	   <li>如果您未能遵守本協議的條款，您的授權將被終止，所許可的權利將被收回，同時您應承擔相應法律責任。</li>	</ol>		<h3>III. 有限擔保和免責聲明</h3>	<ol>	   <li>本軟件及所附帶的文件是作為不提供任何明確的或隱含的賠償或擔保的形式提供的。</li>	   <li>用戶出於自願而使用本軟件，您必須瞭解使用本軟件的風險，我們不承諾提供任何形式的技術支持、使用擔保，也不承擔任何因使用本軟件而產生問題的相關責任。</li>	   <li>騰訊雲公司不對使用本軟件構建的網站中或者論壇中的文章或信息承擔責任，全部責任由您自行承擔。</li>	   <li>官方應用中心無法全面監控由第三方上傳至應用中心的應用程序，因此不保證應用程序的合法性、安全性、完整性、真實性或品質等；您從應用中心下載應用程序時，同意自行判斷並承擔所有風險，而不依賴於騰訊雲公司及官方應用中心。但在任何情況下，官方應用中心有權依法停止應用中心服務並採取相應行動，包括但不限於對於相關應用程序進行卸載，暫停服務的全部或部分，保存有關記錄，並向有關機關報告。由此對您及第三人可能造成的損失，騰訊雲公司及官方應用中心不承擔任何直接、間接或者連帶的責任。</li>	   <li>騰訊雲公司對騰訊雲提供的軟件和服務之及時性、安全性、準確性不作擔保，由於不可抗力因素、騰訊雲公司無法控制的因素（包括黑客攻擊、停斷電等）等造成軟件使用和服務中止或終止，而給您造成損失的，您同意放棄追究騰訊雲公司責任的全部權利。   </li>	   <li>騰訊雲公司特別提請您注意，騰訊雲公司為了保障公司業務發展和調整的自主權，騰訊雲公司擁有隨時經或未經事先通知而修改服務內容、中止或終止部分或全部軟件使用和服務的權利，修改會公佈於騰訊雲公司網站相關頁面上，一經公佈視為通知。 騰訊雲公司行使修改或中止、終止部分或全部軟件使用和服務的權利而造成損失的，騰訊雲公司不需對您或任何第三方負責。</li>	</ol>		<p>有關騰訊雲產品最終用戶授權協議、商業授權與技術服務的詳細內容，均由騰訊雲公司獨家提供。騰訊雲公司擁有在不事先通知的情況下，修改授權協議和服務價目表的權利，修改後的協議或價目表對自改變之日起的新授權用戶生效。</p>		<p>一旦您開始安裝騰訊雲產品，即被視為完全理解並接受本協議的各項條款，在享有上述條款授予的權利的同時，受到相關的約束和限制。協議許可範圍以外的行為，將直接違反本授權協議並構成侵權，我們有權隨時終止授權，責令停止損害，並保留追究相關責任的權力。</p>		<p>本許可協議條款的解釋，效力及糾紛的解決，適用於中華人民共和國大陸法律。</p>		<p>若您和騰訊雲之間發生任何糾紛或爭議，首先應友好協商解決，協商不成的，您在此完全同意將糾紛或爭議提交騰訊雲所在地北京市海澱區人民法院管轄。騰訊雲公司擁有對以上各項條款內容的解釋權及修改權。</p>		<p>（正文完）</p>		<p align="right">騰訊雲公司</p>		</div>

	'php_version_too_low' => 'Your PHP version is too low, please upgrade to at least PHP'.$env_items['php']['r'].' Try again!',
	'php8_tips' => 'Hello, the current product does not support PHP 8 installation, please downgrade to at least PHP 7.4 and try again!', //您好，當前產品暫不支持 PHP 8 安裝，請降級到至少 PHP 7.4 後再試！
	'no_utf8_tips' => 'Hello, the version you are using is the localized encoding version such as GBK / BIG-5. This version is no longer used as the main version. If you plan to build a new site, it is strongly recommended that you use the latest official UTF-8 version to install.', //您好，您使用的版本為 GBK / BIG-5 等本地化編碼版本，此版本已經不作為主推版本，如果您計劃建設新站點【強烈】建議您使用最新正式 UTF-8 版本安裝。
	'no_latest_tips' => 'Hello, the version you are using is old, there may be bugs and security risks, if there are no special circumstances, it is recommended that you use the latest official UTF-8 version to install.', //您好，您使用的版本較老，可能存在 Bug 以及安全隱患，如無特殊情況建議您改用最新正式 UTF-8 版本安裝。
	'unstable_tips' => 'Hello, the version you are using is an unofficial version, and there may be unknown bugs or defects. If you plan to formally build a website or purchase a plug-in, it is recommended that you use the latest official UTF-8 version to install.', //您好，您使用的版本為非正式版本，可能存在未知的 Bug 或缺陷，如果您計劃正式建站或購買插件建議您使用最新正式 UTF-8 版本安裝。
	'next_tips' => '\r\nClick [OK] to jump to the latest official UTF-8 version download page, click [Cancel] to continue the installation (not recommended)', //\r\n點擊【確定】跳轉到最新正式 UTF-8 版本下載頁面，點擊【取消】繼續安裝（不推薦）
	'uc_installed' => 'You have already installed UCenter, if you need to reinstall, please delete the data/install.lock file', //您已經安裝過 UCenter，如果需要重新安裝，請刪除 data/install.lock 文件
	'i_agree' => 'I have read it carefully and agree to everything in the above terms', //我已仔細閱讀，並同意上述條款中的所有內容
	'supportted' => 'Support', //支持
	'unsupportted' => 'Not support', //不支持
	'max_size' => 'Support/Maximum Size', //支持/最大尺寸
	'project' => 'Project', //項目
	'ucenter_required' => 'Discuz! Required configuration', //Discuz! 所需配置
	'ucenter_best' => 'Discuz! Best', //Discuz! 最佳
	'curr_server' => 'Current server', //當前服務器
	'env_check' => 'Environmental inspection', //環境檢查
	'os' => 'Operating system', //操作系統
	'php' => 'PHP version', //PHP 版本
	'attachmentupload' => 'Updating files', //附件上傳
	'unlimit' => 'Not limited', //不限制
	'version' => 'Version', //版本
	'gdversion' => 'GD library', //GD 庫
	'allow' => 'Allow ', //允許 
	'unix' => 'Unix-like', //類Unix
	'diskspace' => 'Disk space', //磁盤空間
	'opcache' => 'OPcache', //OPcache
	'curl' => 'CURL library', //cURL 庫
	'priv_check' => 'Directory and file permission check', //目錄、文件權限檢查
	'func_depend' => 'Functional dependency check', //函數依賴性檢查
	'func_name' => 'Function name', //函數名稱
	'check_result' => 'Test result', //檢查結果
	'suggestion' => 'Suggest', //建議
	'advice_mysql' => 'Please check if the mysql module is loaded correctly', //請檢查 mysql 模塊是否正確加載
	'advice_fopen' => 'This function requires the allow_url_fopen option in php.ini to be enabled. Please contact the space provider to make sure this feature is enabled', //該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能
	'advice_file_get_contents' => 'This function requires the allow_url_fopen option in php.ini to be enabled. Please contact the space provider to make sure this feature is enabled', //該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能
	'advice_xml' => 'This function requires PHP to support XML. Please contact the space provider to make sure this feature is enabled', //該函數需要 PHP 支持 XML。請聯繫空間商，確定開啟了此項功能
	'none' => 'None', //無
	'dbhost' => 'Database server address', //數據庫服務器地址
	'dbuser' => 'Database username', //數據庫用戶名
	'dbpw' => 'Database password', //數據庫密碼
	'dbname' => 'Data storage name', //數據庫名
	'tablepre' => 'Data table prefix', //數據表前綴
	'ucfounderpw' => 'Founder\'s password', //創始人密碼
	'ucfounderpw2' => 'Repeat founder password', //重複創始人密碼
	'init_log' => 'Initialize record', //初始化記錄
	'clear_dir' => 'Empty directory', //清空目錄
	'select_db' => 'Select database', //選擇數據庫
	'create_table' => 'Build data table', //建立數據表
	'succeed' => 'Success ', //成功 
	'install_data' => 'Installing data', //正在安裝數據
	'install_test_data' => 'Installing additional data', //正在安裝附加數據
	'method_undefined' => 'Undefined method', //未定義方法
	'database_nonexistence' => 'Database operation object does not exist', //數據庫操作對像不存在
	'skip_current' => 'Skip this step', //跳過本步
	'topic' => 'Topic', //專題
	'install_finish' => 'Your forum has been installed, click here to visit', //您的論壇已完成安裝，點此訪問

);

$msglang = array(
	'config_nonexistence' => 'Your config.inc.php does not exist, the installation cannot continue, please upload the file using FTP and try again. ',
);

?>