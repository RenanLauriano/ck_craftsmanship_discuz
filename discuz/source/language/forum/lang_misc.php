<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php 33974 2013-09-10 09:30:47Z nemohou $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang' => 'Misc', //misc
	'contact' => 'Contact details:', //聯繫方式:
	'anonymous' => 'Anonymous', //匿名
	'anonymoususer' => 'Anonymous', //匿名者
	'guestuser' => 'Tourists', //遊客
	'has_expired' => 'This information has expired', //該信息已經過期
	'click_view' => 'Click to view', //點擊查看
	'never_expired' => 'Never expires', //永不過期
	'sort_update' => 'Renew', //更新
	'sort_upload' => 'Upload', //上傳
	'view_noperm' => 'Hidden content', //隱藏內容
	'post_hidden' => '**** This content is hidden by the author ****', //**** 本內容被作者隱藏 ****
	'post_banned' => '**** Author banned or removed Content automatically blocked ****', //**** 作者被禁止或刪除 內容自動屏蔽 ****
	'post_single_banned' => '**** This post is blocked ****', //**** 該帖被屏蔽 ****
	'message_ishidden_hiddenreplies' => 'Only the author can see this post', //此帖僅作者可見
	'post_reply_quote' => 'Posted by {author} at {time}', //{author} 發表於 {time}
	'post_edit' => '[i=s]This post was last edited by {editor} at {edittime}[/i]
	
	', //[i=s] 本帖最後由 {editor} 於 {edittime} 編輯 [/i]
	'post_edit_regexp' => '/^\[i=s\] This post was last edited by .*? on .*? \[\/i\]\n\n/s', ///^\[i=s\] 本帖最後由 .*? 於 .*? 編輯 \[\/i\]\n\n/s
	'post_edithtml' => '[i=s]This post was last edited by {editor} at {edittime}[/i]<br /><br />', //[i=s] 本帖最後由 {editor} 於 {edittime} 編輯 [/i]<br /><br />
	'post_edithtml_regexp' => '/^\[i=s\] This post was last edited by .*? on .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s', ///^\[i=s\] 本帖最後由 .*? 於 .*? 編輯 \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s
	'post_editnobbcode' => '[This post was last edited by {editor} at {edittime}]\n\n', //[ 本帖最後由 {editor} 於 {edittime} 編輯 ]\n\n
	'post_editnobbcode_regexp' => '/^\[This post was last edited by .*? on .*? \]\n\n/s', ///^\[ 本帖最後由 .*? 於 .*? 編輯 \]\n\n/s
	'post_reply' => 'Reply', //回復
	'post_thread' => 'S post', //的帖子
	'price' => 'Selling price', //售價
	'pay_view' => 'Record', //記錄
	'attachment_buy' => 'Buy', //購買
	'post_trade_yuan' => 'Yuan', //元
	'post_trade_seller' => 'Seller', //賣家
	'post_trade_name' => 'Product name', //商品名稱
	'post_trade_price' => 'Commodity price', //商品價格
	'post_trade_quality' => 'Commodity Condition', //商品成色
	'post_trade_locus' => 'Location', //所在地點
	'post_trade_transport_type' => 'Shipping methods', //物流方式
	'post_trade_transport_seller' => 'Seller pays shipping', //賣家承擔運費
	'post_trade_transport_buyer' => 'Buyer pays shipping', //買家承擔運費
	'post_trade_transport_mail' => 'Surface mail', //平郵
	'post_trade_transport_express' => 'Express delivery', //快遞
	'post_trade_transport_virtual' => 'Virtual items or no postage required', //虛擬物品或無需郵遞
	'post_trade_transport_physical' => 'The buyer pays directly to the logistics company after receiving the goods', //買家收到貨物後直接支付給物流公司
	'post_trade_description' => 'Product description', //商品描述
	'post_trade_pm_subject' => '[bargain]', //[議價]
	'post_trade_pm_buynum' => 'Purchase quantity', //購買數量
	'post_trade_pm_wishprice' => 'The price I expect is', //我期望的價格是
	'post_trade_pm_reason' => 'My reason for bargaining is', //我議價的理由是
	'postappend_content' => 'To add on', //補充內容
	'payment_unit' => 'Yuan', //元
	'attach' => 'Appendix', //附件
	'attach_pay' => 'Toll accessories', //收費附件
	'attach_credits_policy' => 'View Points Policy Description', //查看積分策略說明
	'attach_img' => 'Picture attachment', //圖片附件
	'attach_readperm' => 'Read permission', //閱讀權限
	'attach_img_zoom' => 'Click to view full image in new window\nCTRL+mouse wheel to zoom in or out', //點擊在新窗口查看全圖\nCTRL+鼠標滾輪放大或縮小
	'attach_img_thumb' => 'Click to view full image in new window', //點擊在新窗口查看全圖
	'attach_downloads' => 'Download times', //下載次數
	'post_trade_transport' => 'Postage', //郵費
	'post_trade_quality_new' => 'Brand new', //全新
	'post_trade_quality_secondhand' => 'Second hand', //二手
	'trade_unstart' => '<font color="gray">Inactive Transactions</font>', //<font color="gray">未生效的交易</font>
	'trade_waitbuyerpay' => 'Waiting for buyers payment', //等待買家付款
	'trade_waitsellerconfirm' => 'Transaction created, waiting for seller confirmation', //交易已創建，等待賣家確認
	'trade_sysconfirmpay' => 'Confirm that the buyer is paying, please do not ship the goods for the time being', //確認買家付款中，暫勿發貨
	'trade_waitsellersend' => 'Buyer has paid, waiting for seller to ship', //買家已付款，等待賣家發貨
	'trade_waitbuyerconfirm' => 'The seller has shipped, the buyer is confirming', //賣家已發貨，買家確認中
	'trade_syspayseller' => 'The buyer confirms receipt of the goods and waits for Alipay to make payment to the seller', //買家確認收到貨，等待支付寶打款給賣家
	'trade_finished' => '<font color="green">Transaction ended successfully</font>', //<font color="green">交易成功結束</font>
	'trade_closed' => '<font color="gray">Transaction closed midway (incomplete)</font>', //<font color="gray">交易中途關閉(未完成)</font>
	'trade_waitselleragree' => 'Waiting for seller to agree to refund', //等待賣家同意退款
	'trade_sellerrefusebuyer' => 'The seller rejects the buyer\'s conditions and waits for the buyer to modify the conditions', //賣家拒絕買家條件，等待買家修改條件
	'trade_waitbuyerreturn' => 'Seller agrees to refund, waiting for buyer to return', //賣家同意退款，等待買家退貨
	'trade_waitsellerconfirmgoods' => 'Waiting for the seller to receive the goods', //等待賣家收貨
	'trade_waitalipayrefund' => 'Both parties have agreed, waiting for Alipay refund', //雙方已經一致，等待支付寶退款
	'trade_alipaycheck' => 'Alipay processing', //支付寶處理中
	'trade_overedrefund' => 'End of refund', //結束的退款
	'trade_refundsuccess' => '<font color="green">Refund successful</font>', //<font color="green">退款成功</font>
	'trade_refundclosed' => '<font color="green">Refund closed</font>', //<font color="green">退款關閉</font>
	'trade_offline_1' => 'The transaction order takes effect', //交易單生效
	'trade_offline_4' => 'I have paid and waiting for the seller to ship', //我已付款，等待賣家發貨
	'trade_offline_5' => 'I have shipped', //我已發貨
	'trade_offline_7' => 'I received the goods, the transaction ended successfully', //我收到貨，交易成功結束
	'trade_offline_8' => 'Cancel this transaction', //取消此次交易
	'trade_offline_10' => 'I want to return the item, waiting for the seller to agree to a refund', //我要退貨，等待賣家同意退款
	'trade_offline_11' => 'Seller refuses to refund', //賣家拒絕退款
	'trade_offline_12' => 'Seller agrees to refund', //賣家同意退款
	'trade_offline_13' => 'I have returned the item and I am waiting for the seller to receive the item', //我已退貨，等待賣家收貨
	'trade_offline_17' => 'Seller received return, refunded', //賣家收到退貨，已退款
	'trade_message_4' => 'You can enter payment method, bank account number, etc.', //可輸入付款方式、銀行賬號等信息
	'trade_message_5' => 'You can enter information such as the shipping company, invoice number, etc.', //可輸入發貨公司、發貨單號等信息
	'trade_message_13' => 'You can enter information such as the shipping company, invoice number, etc.', //可輸入發貨公司、發貨單號等信息
	'credit_payment' => 'Points recharge', //積分充值
	'credit_forum_payment' => 'Forum points recharge', //論壇積分充值
	'credit_forum_royalty' => 'Transaction Fees', //交易手續費
	'credit_total' => 'Total points', //總積分
	'invite_payment' => 'Buy invitation code', //購買邀請碼
	'invite_forum_payment' => 'Buy invitation code', //購買邀請碼
	'invite_forum_payment_unit' => 'Indivual', //個
	'invite_forum_royalty' => 'Transaction Fees', //交易手續費
	'formulaperm_regdate' => 'Registration time', //註冊時間
	'formulaperm_regday' => 'Registration days', //註冊天數
	'formulaperm_regip' => 'Register IP', //註冊 IP
	'formulaperm_lastip' => 'Last login IP', //最後登錄 IP
	'formulaperm_buyercredit' => 'Buyer credit evaluation', //買家信用評價
	'formulaperm_sellercredit' => 'Seller\'s credit rating', //賣家信用評價
	'formulaperm_digestposts' => 'Essence post count', //精華帖數
	'formulaperm_posts' => 'Number of posts', //發帖數
	'formulaperm_threads' => 'Number of topics', //主題數
	'formulaperm_oltime' => 'Online time (hours)', //在線時間(小時)
	'formulaperm_pageviews' => 'Page views', //頁面瀏覽量
	'formulaperm_and' => 'And', //並且
	'formulaperm_or' => 'Or', //或者
	'formulaperm_extcredits' => 'Custom points', //自定義積分
	'login_normal_mode' => 'Online', //在線
	'login_switch_invisible_mode' => 'Switch online status', //切換在線狀態
	'login_switch_normal_mode' => 'I\'m going online', //我要上線
	'login_invisible_mode' => 'Stealth', //隱身
	'eccredit_explain' => 'Explain', //解釋
	'modcp_logs_action_home' => 'Internal message', //內部留言
	'modcp_logs_action_moderate' => 'Audit', //審核
	'modcp_logs_action_member' => 'User Management', //用戶管理
	'modcp_logs_action_forumaccess' => 'User rights', //用戶權限
	'modcp_logs_action_thread' => 'Topic management', //主題管理
	'modcp_logs_action_forum' => 'Section management', //版塊管理
	'modcp_logs_action_announcement' => 'Announcement', //公告
	'modcp_logs_action_log' => 'Manage logs', //管理日誌
	'modcp_logs_action_stat' => 'Management Statistics', //管理統計
	'modcp_logs_action_login' => 'Log in', //登錄
	'uch_selectalbum' => 'Please select an album', //請選擇相冊
	'uch_noalbum' => 'Sorry, you don\'t have an album yet,', //抱歉，您還沒有相冊，
	'click_here' => 'Click here', //點擊這裡
	'uch_createalbum' => 'Create your own photo album!', //創建自己的相冊吧！
	'pm_from' => 'Sender', //發件人
	'pm_to' => 'Recipient', //收件人
	'pm_date' => 'Date', //日期
	'share_message' => 'Hello! I saw this post on {$_G[setting][bbname]} and thought it was very valuable and would recommend it to you. \n\n$thread[subject]\nAddress [url={$threadurl}]{$threadurl}[/url]\n\nHope you like it', //您好！我在 {$_G[setting][bbname]} 看到了這篇帖子，認為很有價值，特推薦給您。\n\n$thread[subject]\n地址 [url={$threadurl}]{$threadurl}[/url]\n\n希望您能喜歡
	'week_0' => 'Sunday', //星期日
	'week_1' => 'Monday', //星期一
	'week_2' => 'Tuesday', //星期二
	'week_3' => 'Wednesday', //星期三
	'week_4' => 'Thursday', //星期四
	'week_5' => 'Friday', //星期五
	'week_6' => 'Saturday', //星期六
	'y_m_d' => 'Y year m month d day', //Y年m月d日
	'notice_actor' => 'Wait for $actorcount people', //等 $actorcount 人
	'perms_allowvisit' => 'Visit the forum', //訪問論壇
	'perms_readaccess' => 'Read permission', //閱讀權限
	'perms_allowviewpro' => 'View User Profile', //查看用戶資料
	'perms_allowinvisible' => 'Stealth', //隱身
	'perms_allowsearch' => 'Use search', //使用搜索
	'perms_allownickname' => 'Use a nickname', //使用暱稱
	'perms_allowcstatus' => 'Self-name', //自定義頭銜
	'perms_allowpost' => 'New topic', //發新話題
	'perms_allowreply' => 'Post Reply', //發表回復
	'perms_allowpostpoll' => 'Poll', //發起投票
	'perms_allowvote' => 'Vote', //參與投票
	'perms_allowpostreward' => 'Post a bounty', //發表懸賞
	'perms_allowpostactivity' => 'Post an event', //發表活動
	'perms_allowpostdebate' => 'Post a debate', //發表辯論
	'perms_allowposttrade' => 'Post transaction', //發表交易
	'perms_maxsigsize' => 'Maximum signature length', //最大簽名長度
	'perms_allowsigbbcode' => 'Use editor code in signature', //簽名中使用編輯器代碼
	'perms_allowsigimgcode' => 'Use [img] code in signature', //簽名中使用 [img] 代碼
	'perms_maxbiosize' => 'Self-introduction maximum length', //自我介紹最大長度
	'perms_allowrecommend' => 'Topic Evaluation Impact Value', //主題評價影響值
	'perms_allowbiobbcode' => 'Using editor code in self-introduction', //自我介紹中使用編輯器代碼
	'perms_allowbioimgcode' => 'Use [img] code in self-introduction', //自我介紹中使用 [img] 代碼
	'perms_allowgetattach' => 'Download attachments', //下載附件
	'perms_allowgetimage' => 'View image', //查看圖片
	'perms_allowpostattach' => 'Upload Attachment', //上傳附件
	'perms_allowpostimage' => 'Upload image', //上傳圖片
	'perms_allowsetattachperm' => 'Allows to set attachment permissions', //允許設置附件權限
	'perms_maxspacesize' => 'Size of space', //空間大小
	'perms_maxattachsize' => 'Single Maximum Attachment Size', //單個最大附件尺寸
	'perms_maxsizeperday' => 'Maximum attachment total size per day', //每天最大附件總尺寸
	'perms_maxattachnum' => 'Maximum number of attachments per day', //每天最大附件數量
	'perms_attachextensions' => 'Attachment Type', //附件類型
	'perms_allowstickthread' => 'Top of the topic', //主題置頂
	'perms_allowdigestthread' => 'Theme Essence', //主題精華
	'perms_allowstickthread_value' => 'Top', //置頂
	'perms_allowdigestthread_value' => 'Essence', //精華
	'perms_allowbumpthread' => 'Boost themes', //提升主題
	'perms_allowhighlightthread' => 'Theme highlighting', //主題高亮
	'perms_allowrecommendthread' => 'Theme recommendation', //主題推薦
	'perms_allowstampthread' => 'Subject identification', //主題鑒定
	'perms_allowclosethread' => 'Topic closed', //主題關閉
	'perms_allowmovethread' => 'Topic move', //主題移動
	'perms_allowedittypethread' => 'Edit topic categories', //編輯主題分類
	'perms_allowcopythread' => 'Topic copy', //主題複製
	'perms_allowmergethread' => 'Topic merge', //主題合併
	'perms_allowsplitthread' => 'Topic segmentation', //主題分割
	'perms_allowrepairthread' => 'Theme fix', //主題修復
	'perms_allowrefund' => 'Mandatory refund', //強制退款
	'perms_alloweditpoll' => 'Edit poll', //編輯投票
	'perms_allowremovereward' => 'Remove bounty', //移除懸賞
	'perms_alloweditactivity' => 'Management activities', //管理活動
	'perms_allowedittrade' => 'Manage merchandise', //管理商品
	'perms_alloweditpost' => 'Edit post', //編輯帖子
	'perms_allowwarnpost' => 'Warning post', //警告帖子
	'perms_allowbanpost' => 'Block post', //屏蔽帖子
	'perms_allowdelpost' => 'Delete post', //刪除帖子
	'perms_allowviewreport' => 'View user reports', //查看用戶報告
	'perms_allowmodpost' => 'Moderate Posts', //審核帖子
	'perms_allowmoduser' => 'Moderate users', //審核用戶
	'perms_allowbanuser' => 'Ban user', //禁止用戶
	'perms_allowbanip' => 'Ban IP', //禁止 IP
	'perms_allowedituser' => 'Edit user', //編輯用戶
	'perms_allowmassprune' => 'Delete posts in bulk', //批量刪帖
	'perms_allowpostannounce' => 'Annouce', //發佈公告
	'perms_disablepostctrl' => 'Unrestricted posting', //發帖不受限制
	'perms_allowviewip' => 'Allow viewing of IP', //允許查看 IP
	'perms_viewperm' => 'Browse Sections', //瀏覽版塊
	'perms_postperm' => 'New topic', //發新話題
	'perms_replyperm' => 'Post Reply', //發表回復
	'perms_getattachperm' => 'Download attachments', //下載附件
	'perms_postattachperm' => 'Upload Attachment', //上傳附件
	'perms_postimageperm' => 'Upload image', //上傳圖片
	'perms_allowblog' => 'Post log', //發表日誌
	'perms_allowdoing' => 'Published record', //發表記錄
	'perms_allowupload' => 'Upload image', //上傳圖片
	'perms_allowshare' => 'Post share', //發佈分享
	'perms_allowpoke' => 'Allowed to say hello', //允許打招呼
	'perms_allowfriend' => 'Allow adding friends', //允許加好友
	'perms_allowclick' => 'Allowed to express', //允許表態
	'perms_allowmyop' => 'Allow apps', //允許使用應用
	'perms_allowcomment' => 'Leave a message/comment', //發表留言/評論
	'perms_allowstatdata' => 'View Statistics Report', //查看統計數據報表
	'perms_allowstat' => 'Allows viewing trend statistics', //允許查看趨勢統計
	'perms_allowpostarticle' => 'Publish an article', //發表文章
	'perms_raterange' => 'Allow participation in grading', //允許參與評分
	'perms_allowcommentpost' => 'Allow to participate in reviews', //允許參與點評
	'perms_allowat' => 'Number of people allowed @', //允許 @ 的人數
	'perms_allowreplycredit' => 'Allows to set Reply Rewards', //允許設置回帖獎勵
	'perms_allowposttag' => 'Tags are allowed', //允許使用標籤
	'perms_allowcreatecollection' => 'The number of Tao albums allowed to be created', //允許創建淘專輯的數量
	'perms_allowsendpm' => 'Allow texting', //允許發短消息
	'perms_maximagesize' => 'Maximum size of a single image', //單張圖片最大尺寸
	'perms_allowmediacode' => 'Allow use of multimedia codes', //允許使用多媒體代碼
	'join_topic' => 'Participate in the topic', //參與話題
	'join_poll' => 'Vote', //參與投票
	'buy_trade' => 'Buy goods', //購買商品
	'join_reward' => 'Participate in the bounty', //參與懸賞
	'join_activity' => 'Participate', //參與活動
	'join_debate' => 'Participate in the debate', //參與辯論
	'at_invite' => '@my good friend', //@我的好友
	'lower' => 'Lower than', //低於
	'higher' => 'Higher than', //高於
	'report_msg_your' => 'Your ', //您的 
	'report_noreward' => 'No reward or punishment', //不獎懲
	'activity_viewimg' => 'Click to view', //點擊查看
	'crime_postreason' => '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">View Details</a>', //{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">查看詳情</a>
	'crime_reason' => '{reason}', //{reason}
	'connectguest_message_search' => array('Not logged in yet', 'Log in first'),
	'connectguest_message_replace' => array('Have not <a href="member.php?mod=connect" class="xi2">complete account information</a> or <a href="member.php?mod=connect&ac=bind" class="xi2"> Bind an existing account</a> ', 'First <a href="member.php?mod=connect" class="xi2">complete account information</a> or <a href="member.php?mod=connect&ac=bind" class="xi2">bind Make sure you have an account</a>'),
	'connectguest_message_mobile_search' => array('Not logged in', 'Login first'),
	'connectguest_message_mobile_replace' => 'Complete the information on the computer version or bind an existing account,', //在電腦版完善資料或綁定已有賬號，
	'avatar' => 'Avatar', //頭像
	'signature' => 'Sign', //簽名
	'custom_title' => 'Self-name', //自定義頭銜
	'forum_guide' => 'Guided reading', //導讀
	'patch_site_have' => 'Your website has', //您的網站有
	'patch_is_fixed' => 'Security holes, fixed', //個安全漏洞，已修復
	'patch_need_fix' => 'Security vulnerability, please fix it as soon as possible', //個安全漏洞，請盡快修復
	'patch_fixed_status' => 'Already fixed', //已修復
	'patch_unfix_status' => 'Not repaired', //未修復
	'patch_fix_failed_status' => 'Repair failed', //修復失敗
	'patch_fix_right_now' => 'Fix it now', //立即修復
	'patch_view_fix_detail' => 'Check the details', //查看詳情
	'patch_name' => 'Vulnerability name', //漏洞名稱
	'patch_dateline' => 'Release date', //發佈日期
	'patch_status' => 'Current state', //當前狀態
	'patch_close' => 'Closure', //關閉
	'plugin_title' => 'App update reminder', //應用更新提醒
	'plugin_memo' => 'You have <span class="xi1">{number}</span> apps with updates available', //您有 <span class="xi1">{number}</span> 款應用有可用更新
	'plugin_link' => 'Update now', //現在更新
	'seccode' => 'Verification code', //驗證碼
	'seccode_update' => 'Another', //換一個
	'seccode_player' => '<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" id="seccodeplay_{idhash}">Play verification code</a></span>', //<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" id="seccodeplay_{idhash}">播放驗證碼</a></span>
	'secqaa' => 'Verify Answers', //驗證問答
	'mobileoem_creditrule' => 'Pocket Forum Sign In', //掌上論壇簽到

);

?>