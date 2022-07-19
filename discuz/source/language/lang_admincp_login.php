<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title' => 'Login to the management center', //登錄管理中心
	'login_username' => 'Username', //用戶名
	'login_password' => 'Password', //密　碼
	'submit' => 'Submit', //提交
	'forcesecques' => 'Required fields', //必填項
	'security_question' => 'Ask questions', //提　問
	'security_answer' => 'Reply', //回　答
	'security_question_0' => 'No security questions', //無安全提問
	'security_question_1' => 'Mother\'s name', //母親的名字
	'security_question_2' => 'Grandpa\'s name', //爺爺的名字
	'security_question_3' => 'City where father was born', //父親出生的城市
	'security_question_4' => 'The name of one of your teachers', //您其中一位老師的名字
	'security_question_5' => 'The model of your personal computer', //您個人計算機的型號
	'security_question_6' => 'Your favorite restaurant name', //您最喜歡的餐館名稱
	'security_question_7' => 'Last four digits of driver\'s license', //駕駛執照最後四位數字
	'login_tips' => 'Discuz! is a community-based professional website building platform launched by <a href="http://cloud.tencent.com" target="_blank">Tencent Cloud</a> to help websites achieve one-stop service.', //Discuz! 是 <a href="http://cloud.tencent.com" target="_blank">騰訊雲</a>推出的以社區為基礎的專業建站平台，幫助網站實現一站式服務。
	'login_nosecques' => 'You have not used the security login, please set your security question in the personal center, and then visit the management center. You can <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">click here</a> to enter the security question settings.', //您還沒有使用安全登錄，請在個人中心設置您的安全提問後，再訪問管理中心。您可以 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">點擊這裡</a> 進入安全提問的設置。
	'login_cp_guest' => '<b>This request has been denied because you are not logged in.</b><br><br>Please <a href="member.php?mod=logging&action=login">login</a> and try again', //<b>由於您尚未登錄,本次請求已經被拒絕.</b><br><br>請 <a href="member.php?mod=logging&action=login">登錄</a> 後再試
	'login_cplock' => 'Your admin panel is locked! <br>Please revisit the admin center in <b>{ltime}</b> seconds', //您的管理面板已經鎖定! <br>請在<b> {ltime} </b>秒以後重新訪問管理中心
	'login_user_lock' => 'This login request has been rejected due to too many incorrect login passwords. Please try again in 15 minutes', //由於您的登錄密碼錯誤次數過多,本次登錄請求已經被拒絕. 請 15 分鐘後重新嘗試
	'login_cp_noaccess' => '<b>The management center (or this operation) has not been opened to you yet</b><br><br>Your operation has been recorded, please do not try illegally', //<b>管理中心(或此項操作)尚未對您開放</b><br><br>您的此次操作已經記錄, 請勿非法嘗試
	'noaccess' => 'The background management authority (or this operation) has not been opened to you, please contact the site administrator', //後台管理權限(或此項操作)尚未對您開放, 請聯繫站點管理員


);

?>