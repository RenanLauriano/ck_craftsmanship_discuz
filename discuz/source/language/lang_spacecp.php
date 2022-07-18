<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_spacecp.php 32426 2013-01-15 10:00:21Z liulanbo $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(

	'by' => 'Pass', //通過
	'tab_space' => ' ', // 
	'share' => 'Share', //分享
	'share_action' => 'Share', //分享了
	'pm_comment' => 'Reply to Reviews', //答覆點評
	'pm_thread_about' => 'About your post on "{subject}"', //關於您在「{subject}」的帖子
	'wall_pm_subject' => 'Hello, I have left a message for you', //您好，我給您留言了
	'wall_pm_message' => 'I left a message for you on your message board, [url=\1]Click here to go to the message board and have a look[/url]', //我在您的留言板給您留言了，[url=\1]點擊這裡去留言板看看吧[/url]
	'reward' => 'Bounty', //懸賞
	'reward_info' => 'Participate in voting to get \1 point', //參與投票可獲得  \1 積分
	'poll_separator' => '","', //"、"
	'pm_report_content' => '<a href="home.php?mod=space&uid={reporterid}" target="_blank">{reportername}</a>Report SMS:<br>From <a href="home.php?mod=space&uid ={uid}" target="_blank">{username}</a>\'s short message<br>Content: {message}', //<a href="home.php?mod=space&uid={reporterid}" target="_blank">{reportername}</a>舉報短消息：<br>來自<a href="home.php?mod=space&uid={uid}" target="_blank">{username}</a>的短消息<br>內容：{message}
	'message_can_not_send_1' => 'Failed to send, you currently exceed the limit of two-person conversations in 24 hours', //發送失敗，您當前超出了24小時內兩人會話的上限
	'message_can_not_send_2' => 'Sending SMS twice is too fast, please try again later', //兩次發送短消息太快，請稍候再發送
	'message_can_not_send_3' => 'Sorry, you can\'t send bulk SMS to non-friends', //抱歉，您不能給非好友批量發送短消息
	'message_can_not_send_4' => 'Sorry, you can\'t use the sending SMS function yet', //抱歉，您目前還不能使用發送短消息功能
	'message_can_not_send_5' => 'You have exceeded the limit of group chat sessions in 24 hours', //您超出了24小時內群聊會話的上限
	'message_can_not_send_6' => 'The other party blocked your SMS', //對方屏蔽了您的短消息
	'message_can_not_send_7' => 'Group chat limit exceeded', //超過了群聊人數上限
	'message_can_not_send_8' => 'Sorry, you can\'t text yourself', //抱歉，您不能給自己發短消息
	'message_can_not_send_9' => 'The recipient is empty or the other party has blocked your SMS', //收件人為空或對方屏蔽了您的短消息
	'message_can_not_send_10' => 'The number of people who initiate a group chat cannot be less than two', //發起群聊人數不能小於兩人
	'message_can_not_send_11' => 'The session does not exist', //該會話不存在
	'message_can_not_send_12' => 'Sorry, you do not have permission to operate', //抱歉，您沒有權限操作
	'message_can_not_send_13' => 'This is not a group chat message', //這不是群聊消息
	'message_can_not_send_14' => 'This is not a private message', //這不是私人消息
	'message_can_not_send_15' => 'Wrong data', //數據有誤
	'message_can_not_send_16' => 'You have exceeded the maximum number of text messages in 24 hours', //您超出了24小時內發短消息數量的上限
	'message_can_not_send_onlyfriend' => 'This user only receives short messages from friends', //該用戶只接收好友發送的短消息
	'friend_subject' => '<a href="{url}" target="_blank">{username} has requested to add you as a friend</a>', //<a href="{url}" target="_blank">{username} 請求加您為好友</a>
	'friend_request_note' => ', P.S.: {note}', //，附言：{note}
	'comment_friend' => '<a href="\2" target="_blank">\1 left you a message</a>', //<a href="\2" target="_blank">\1 給您留言了</a>
	'photo_comment' => '<a href="\2" target="_blank">\1 commented on your photo</a>', //<a href="\2" target="_blank">\1 評論了您的照片</a>
	'blog_comment' => '<a href="\2" target="_blank">\1 commented on your blog</a>', //<a href="\2" target="_blank">\1 評論了您的日誌</a>
	'poll_comment' => '<a href="\2" target="_blank">\1 commented on your vote</a>', //<a href="\2" target="_blank">\1 評論了您的投票</a>
	'share_comment' => '<a href="\2" target="_blank">\1 commented on your share</a>', //<a href="\2" target="_blank">\1 評論了您的分享</a>
	'friend_pm' => '<a href="\2" target="_blank">\1 has sent you a private message</a>', //<a href="\2" target="_blank">\1 給您發私信了</a>
	'poke_subject' => '<a href="\2" target="_blank">\1 greets you</a>', //<a href="\2" target="_blank">\1 向您打招呼</a>
	'mtag_reply' => '<a href="\2" target="_blank">\1 replied to your thread</a>', //<a href="\2" target="_blank">\1 回復了您的話題</a>
	'event_comment' => '<a href="\2" target="_blank">\1 commented on your event</a>', //<a href="\2" target="_blank">\1 評論了您的活動</a>
	'friend_pm_reply' => '\1 replied to your private message', //\1 回復了您的私信
	'comment_friend_reply' => '\1 replied to your message', //\1 回復了您的留言
	'blog_comment_reply' => '\1 replied to your post comment', //\1 回復了您的日誌評論
	'photo_comment_reply' => '\1 replied to your photo comment', //\1 回復了您的照片評論
	'poll_comment_reply' => '\1 replied to your poll comment', //\1 回復了您的投票評論
	'share_comment_reply' => '\1 replied to your shared comment', //\1 回復了您的分享評論
	'event_comment_reply' => '\1 replied to your event comment', //\1 回復了您的活動評論
	'mail_my' => 'Friend\'s interaction reminder with me', //好友與我的互動提醒
	'mail_system' => 'System reminder', //系統提醒

	'invite_subject' => '{username} invited you to join {sitename} and become friends',
	'invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Hi, I\'m {username} and I invite you to join {sitename} and be my friend</h3><br>
		Please join my friends, you can know my current situation, communicate with me, and keep in touch with me at any time. <br>
		<br>
		Invitation post: <br>{saymsg}
		<br><br>
		<strong>Please click the link below to accept the friend invitation:</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>If you have an account on {sitename}, please click the link below to view my profile:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'app_invite_subject' => '{username} invites you to join {sitename} and play {appname}',
	'app_invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Hi, I\'m {username}, playing {appname} on {sitename}, and I invite you to join us</h3><br>
		<br>
		Invitation post: <br>
		{saymsg}
		<br><br>
		<strong>Please click the link below to accept a friend invitation to play with {appname}:</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>If you have an account on {sitename}, please click the link below to view my profile:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'person' => 'People', //人
	'delete' => 'Delete', //刪除
	'space_update' => '{actor} was shown', //{actor} 被SHOW了一下
	'active_email_subject' => 'Your email activation email', //您的郵箱激活郵件
	'active_email_msg' => 'Please copy the activation link below into your browser for access to activate your email. <br>Email activation link:<br><a href="{url}" target="_blank">{url}</a>', //請複製下面的激活鏈接到瀏覽器進行訪問，以便激活您的郵箱。<br>郵箱激活鏈接:<br><a href="{url}" target="_blank">{url}</a>
	'share_space' => 'Shared a user', //分享了一個用戶
	'share_blog' => 'Shared a log', //分享了一篇日誌
	'share_album' => 'Shared an album', //分享了一個相冊
	'default_albumname' => 'Default gallery', //默認相冊
	'share_image' => 'Shared a picture', //分享了一張圖片
	'share_article' => 'Shared an article', //分享了一篇文章
	'album' => 'Photo album', //相冊
	'share_thread' => 'Shared a post', //分享了一個帖子
	'mtag' => '{$_G[setting][navs][3][navname]}', //{$_G[setting][navs][3][navname]}
	'share_mtag' => 'Shared a {$_G[setting][navs][3][navname]}', //分享了一個{$_G[setting][navs][3][navname]}
	'share_mtag_membernum' => 'Existing {membernum} members', //現有 {membernum} 名成員
	'share_tag' => 'Shared a tag', //分享了一個標籤
	'share_tag_blognum' => 'Existing {blognum} blogs', //現有 {blognum} 篇日誌
	'share_link' => 'Shared a URL', //分享了一個網址
	'share_video' => 'Shared a video', //分享了一個視頻
	'share_music' => 'Shared a piece of music', //分享了一個音樂
	'share_flash' => 'Shared a flash', //分享了一個 Flash
	'share_event' => 'Shared an event', //分享了一個活動
	'share_poll' => 'Shared a \1 vote', //分享了一個\1投票
	'event_time' => 'Activity time', //活動時間
	'event_location' => 'Event Location', //活動地點
	'event_creator' => 'Sponsor', //發起人
	'the_default_style' => 'Default style', //默認風格
	'the_diy_style' => 'Custom style', //自定義風格
	'thread_edit_trail' => '<ins class="modify">[This topic was edited by \1 at \2]</ins>', //<ins class="modify">[本話題由 \1 於 \2 編輯]</ins>
	'create_a_new_album' => 'Created a new album', //創建了新相冊
	'not_allow_upload' => 'You do not have permission to upload images now', //您現在沒有權限上傳圖片
	'not_allow_upload_extend' => 'Uploading images of type {extend} is not allowed', //不允許上傳{extend}類型的圖片
	'files_can_not_exceed_size' => '{extend} class files cannot exceed {size}', //{extend}類文件不能超過{size}
	'get_passwd_subject' => 'Retrieve password email', //取回密碼郵件
	'get_passwd_message' => 'All you have to do is reset your password within three days of submitting your request by clicking the link below:<br />\1<br />(If the above is not in the form of a link, please manually paste the address into your browser After the above page is opened, enter the new password and submit it, then you can log in with the new password.', //您只需在提交請求後的三天之內，通過點擊下面的鏈接重置您的密碼：<br />\1<br />(如果上面不是鏈接形式，請將地址手工粘帖到瀏覽器地址欄再訪問)<br />上面的頁面打開後，輸入新的密碼後提交，之後您即可使用新的密碼登錄了。
	'file_is_too_big' => 'File too large', //文件過大
	'take_part_in_the_voting' => '{actor} participated in {touser}\'s {reward} vote <a href="{url}" target="_blank">{subject}</a>', //{actor} 參與了 {touser} 的{reward}投票 <a href="{url}" target="_blank">{subject}</a>
	'lack_of_access_to_upload_file_size' => 'Unable to get upload file size', //無法獲取上傳文件大小
	'only_allows_upload_file_types' => 'Only images in jpg, jpeg, gif, png standard formats are allowed to be uploaded', //只允許上傳jpg、jpeg、gif、png標準格式的圖片
	'unable_to_create_upload_directory_server' => 'The server could not create the upload directory', //服務器無法創建上傳目錄
	'inadequate_capacity_space' => 'Insufficient space capacity to upload new attachments', //空間容量不足，不能上傳新附件
	'mobile_picture_temporary_failure' => 'Unable to transfer temporary files to the specified directory on the server', //無法轉移臨時文件到服務器指定目錄
	'ftp_upload_file_size' => 'Failed to upload image remotely', //遠程上傳圖片失敗
	'comment' => 'Comment', //評論
	'upload_a_new_picture' => 'New image uploaded', //上傳了新圖片
	'upload_album' => 'Updated album', //更新了相冊
	'the_total_picture' => 'Total \1 pictures', //共 \1 張圖片
	'space_open_subject' => 'Come and take care of your personal homepage', //快來打理一下您的個人主頁吧
	'space_open_message' => 'Hi, I went to visit your personal homepage today and found that you haven\'t taken care of it yourself. Come check it out. The address is: \1space.php', //hi，我今天去拜訪了一下您的個人主頁，發現您自己還沒有打理過呢。趕快來看看吧。地址是：\1space.php
	'apply_mtag_manager' => 'I want to apply to be a group owner of <a href="\1" target="_blank">\2</a> for the following reasons:\3. <a href="\1" target="_blank">(Click here to enter management)</a>', //想申請成為 <a href="\1" target="_blank">\2</a> 的群主，理由如下:\3。<a href="\1" target="_blank">(點擊這裡進入管理)</a>
	'magicunit' => 'Indivual', //個
	'magic_note_wall' => '{actor} leaves you a <a href="{url}" target="_blank">message</a> on the message board', //{actor}在留言板上給您<a href="{url}" target="_blank">留言</a>
	'magic_call' => 'Clicked your name in the log, <a href="{url}" target="_blank">go and have a look</a>', //在日誌中點了您的名，<a href="{url}" target="_blank">快去看看吧</a>
	'present_user_magics' => 'You have received a prop from the administrator:\1', //您收到了管理員贈送的道具：\1
	'has_not_more_doodle' => 'You don\'t have a doodle board', //您沒有塗鴉板了

	'do_stat_login' => 'Visiting users', //來訪用戶
	'do_stat_mobilelogin' => 'Mobile access', //手機訪問
	'do_stat_connectlogin' => 'QQ login access', //QQ登錄訪問
	'do_stat_register' => 'New registered user', //新註冊用戶
	'do_stat_invite' => 'Friend invitation', //好友邀請
	'do_stat_appinvite' => 'Application invitation', //應用邀請
	'do_stat_add' => 'Information Release', //信息發佈
	'do_stat_comment' => 'Information interaction', //信息互動
	'do_stat_space' => 'Interactive', //互動
	'do_stat_doing' => 'Record', //記錄
	'do_stat_blog' => 'Log', //日誌
	'do_stat_activity' => 'Activity', //活動
	'do_stat_reward' => 'Bounty', //懸賞
	'do_stat_debate' => 'Debate', //辯論
	'do_stat_trade' => 'Commodity', //商品
	'do_stat_group' => "Create{$_G[setting][navs][3][navname]}",
	'do_stat_tgroup' => "{$_G[setting][navs][3][navname]}",
	'do_stat_home' => "{$_G[setting][navs][4][navname]}",
	'do_stat_forum' => "{$_G[setting][navs][2][navname]}",
	'do_stat_groupthread' => 'Group topic', //群組主題
	'do_stat_post' => 'Topic reply', //主題回帖
	'do_stat_grouppost' => 'Group reply', //群組回復
	'do_stat_pic' => 'Picture', //圖片
	'do_stat_poll' => 'Vote', //投票
	'do_stat_event' => 'Activity', //活動
	'do_stat_share' => 'Share', //分享
	'do_stat_thread' => 'Theme', //主題
	'do_stat_docomment' => 'Record reply', //記錄回復
	'do_stat_blogcomment' => 'Log comments', //日誌評論
	'do_stat_piccomment' => 'Image Reviews', //圖片評論
	'do_stat_pollcomment' => 'Vote for comments', //投票評論
	'do_stat_pollvote' => 'Vote', //參與投票
	'do_stat_eventcomment' => 'Event Reviews', //活動評論
	'do_stat_eventjoin' => 'Participate in activities', //參加活動
	'do_stat_sharecomment' => 'Share a comment', //分享評論
	'do_stat_click' => 'Statement', //表態
	'do_stat_wall' => 'Message', //留言
	'do_stat_poke' => 'Greet', //打招呼
	'do_stat_sendpm' => 'Send a message', //發短消息
	'do_stat_addfriend' => 'Friend request', //好友請求
	'do_stat_friend' => 'Become friends', //成為好友
	'do_stat_post_number' => 'Post volume', //發帖量
	'do_stat_statistic' => 'Consolidated Statistics', //合併統計
	'logs_credit_update_INDEX' => array('TRC','RTC','RAC','MRC','BMC','TFR','RCV','CEC','ECU','SAC','BAC','PRC','RSC','STC','BTC','AFD','UGP','RPC','ACC','RCT','RCA','RCB','CDC','RGC','BGC','AGC','RKC','BME','RPR','RPZ','FCP','BGR'),
	'logs_credit_update_TRC' => 'Mission rewards', //任務獎勵
	'logs_credit_update_RTC' => 'Bounty theme', //懸賞主題
	'logs_credit_update_RAC' => 'Best answer', //最佳答案
	'logs_credit_update_MRC' => 'Items are randomly obtained', //道具隨機獲取
	'logs_credit_update_BMC' => 'Buy props', //購買道具
	'logs_credit_update_TFR' => 'Transfer out', //轉賬轉出
	'logs_credit_update_RCV' => 'Transfer receipt', //轉賬接收
	'logs_credit_update_CEC' => 'Redeem', //積分兌換
	'logs_credit_update_ECU' => 'UCenter Points Redemption Expenses', //UCenter積分兌換支出
	'logs_credit_update_SAC' => 'Accessories for sale', //出售附件
	'logs_credit_update_BAC' => 'Buy accessories', //購買附件
	'logs_credit_update_PRC' => 'Post is rated', //帖子被評分
	'logs_credit_update_RSC' => 'Post rating', //帖子評分
	'logs_credit_update_STC' => 'Sell themes', //出售主題
	'logs_credit_update_BTC' => 'Buy themes', //購買主題
	'logs_credit_update_AFD' => 'Buy points', //購買積分
	'logs_credit_update_UGP' => 'Purchase an extended user group', //購買擴展用戶組
	'logs_credit_update_RPC' => 'Reporting rewards and punishments', //舉報獎懲
	'logs_credit_update_ACC' => 'Participate', //參與活動
	'logs_credit_update_RCT' => 'Reply reward', //回帖獎勵
	'logs_credit_update_RCA' => 'Reply to the prize', //回帖中獎
	'logs_credit_update_RCB' => 'Return Reply Rewards Points', //返還回帖獎勵積分
	'logs_credit_update_CDC' => 'Card password recharge', //卡密充值
	'logs_credit_update_RGC' => 'Recycle red packets', //回收紅包
	'logs_credit_update_BGC' => 'Bury the red envelope', //埋下紅包
	'logs_credit_update_AGC' => 'Get red envelopes', //獲得紅包
	'logs_credit_update_RKC' => 'Ranking of bidding', //競價排名
	'logs_credit_update_BME' => 'Buy medals', //購買勳章
	'logs_credit_update_RPR' => 'Backstage reward and punishment', //後台積分獎懲
	'logs_credit_update_RPZ' => 'Rewards and punishments of background points are cleared to zero', //後台積分獎懲清零
	'logs_credit_update_FCP' => 'Paid section', //付費版塊
	'logs_credit_update_BGR' => 'Create a group', //創建群組
	'buildgroup' => 'View created groups', //查看已創建的群組
	'logs_credit_update_reward_clean' => 'Clear', //清零
	'logs_select_operation' => 'Please select an action type', //請選擇操作類型
	'task_credit' => 'Mission reward points', //任務獎勵積分
	'special_3_credit' => 'Bounty theme deduction points', //懸賞主題扣除積分
	'special_3_best_answer' => 'Best answer earns bounty points', //最佳答案獲取懸賞積分
	'magic_credit' => 'Items get points randomly', //道具隨機獲取積分
	'magic_space_gift' => 'Bury red envelopes on the homepage of your own space', //在自已空間首頁埋下紅包
	'magic_space_re_gift' => 'Recycle the red envelopes that have not been used up', //回收還沒有用完的紅包
	'magic_space_get_gift' => 'Red envelopes received by visiting the space', //訪問空間領取的紅包
	'credit_transfer' => 'Make a point transfer', //進行積分轉賬
	'credit_transfer_tips' => 'Of transfer income', //的轉賬收入
	'credit_exchange_tips_1' => 'Execute the point-to-redemption operation, the', //執行積分對兌換操作,將 
	'credit_exchange_to' => 'Convert to', //兌換成
	'credit_exchange_center' => 'Redeem points through UCenter', //通過UCenter兌換積分
	'attach_sell' => 'Sell', //出售
	'attach_sell_tips' => 'Attachments to earn points', //的附件獲得積分
	'attach_buy' => 'Buy', //購買
	'attach_buy_tips' => 'Attachment spending credits of', //的附件支出積分
	'grade_credit' => 'Points earned by scoring', //被評分獲得的積分
	'grade_credit2' => 'Points deducted from post ratings', //帖子評分扣除的積分
	'thread_credit' => 'Topic earns points', //主題獲得積分
	'thread_credit2' => 'Topic Spend Points', //主題支出積分
	'buy_credit' => 'Recharge points', //對積分充值
	'buy_usergroup' => 'Purchase Extended User Group Spending Credits', //購買擴展用戶組支出積分
	'buy_medal' => 'Buy medals', //購買勳章
	'buy_forum' => 'Buy access to paid sections', //購買付費版塊的訪問權限
	'report_credit' => 'Rewards and punishments in the reporting function', //舉報功能中的獎懲
	'join' => 'Participate', //參與
	'activity_credit' => 'Activity deduction points', //活動扣除積分
	'thread_send' => 'Deduction published', //扣除發表
	'replycredit' => 'Distributed points', //散發的積分
	'add_credit' => 'Bonus points', //獎勵積分
	'recovery' => 'Recycle', //回收
	'replycredit_post' => 'Reply reward', //回帖獎勵
	'replycredit_thread' => 'Posted post', //散發的帖子
	'card_credit' => 'Points earned by card recharge', //卡密充值獲得的積分
	'ranklist_top' => 'Participate in PPC to consume points', //參加競價排名消費積分
	'admincp_op_credit' => 'Background reward and punishment operation', //後台積分獎懲操作
	'credit_update_reward_clean' => 'Clear', //清零
	'profile_unchangeable' => 'This information cannot be modified after submission', //此項資料提交後不可修改
	'profile_is_verifying' => 'This information is under review', //此項資料正在審核中
	'profile_mypost' => 'My submission', //我提交的內容
	'profile_need_verifying' => 'This information needs to be reviewed after submission', //此項資料提交後需要審核
	'profile_edit' => 'Revise', //修改
	'profile_censor' => '(contains sensitive words)', //(含有敏感詞彙)
	'profile_verify_modify_error' => '{verify} has been authenticated and cannot be modified', //{verify}已經認證通過不允許修改
	'profile_verify_verifying' => 'Your {verify} information has been submitted, please be patient for verification.', //您的{verify}信息已提交，請耐心等待核查。
	'district_level_1' => '-province-', //-省份-
	'district_level_2' => '-City-', //-城市-
	'district_level_3' => '-State and County-', //-州縣-
	'district_level_4' => '-township-', //-鄉鎮-
	'invite_you_to_visit' => '{user} invited you to visit {bbname}', //{user}邀請您訪問{bbname}
	'portal' => 'Portal', //門戶
	'group' => 'Group', //群組
	'follow' => 'Broadcast', //廣播
	'collection' => 'Taotie', //淘帖
	'guide' => 'Guided reading', //導讀
	'feed' => 'Dynamic', //動態
	'blog' => 'Log', //日誌
	'doing' => 'Record', //記錄
	'wall' => 'Message board', //留言板
	'homepage' => 'Homepage', //個人主頁
	'ranklist' => 'Leaderboard', //排行榜
	'select_the_navigation_position' => 'Select {type} navigation location', //選擇{type}導航位置
	'close_module' => 'Disable {type} function', //關閉{type}功能
	'follow_add_remark' => 'Add notes', //添加備註
	'follow_modify_remark' => 'Edit remarks', //修改備註
	'follow_specified_group' => 'Radio zone', //廣播專區
	'follow_specified_forum' => 'Broadcast Special Edition', //廣播專版
	'filesize_lessthan' => 'File size should be less than', //文件大小應該小於
	'spacecp_message_prompt' => '(supports {msg} codes, up to 1000 characters)', //(支持 {msg} 代碼,最大 1000 字)
	'card_update_doing' => ' <a class="xi2" href="###">[Update History]</a>', // <a class="xi2" href="###">[更新記錄]</a>
	'email_acitve_message' => '<img src="{imgdir}/mail_inactive.png" alt="Not verified" class="vm" /> <span class="xi1">The new mailbox ({newemail}) is waiting for verification...</span ><br />
	The system has sent a verification and activation email to this mailbox, please check the email for verification and activation. <br>
	If you do not receive the verification email, you can change your email address, or <a href="home.php?mod=spacecp&ac=profile&op=password&resend=1&formhash={formhash}" class="xi2">receive the verification email</a >', //<img src="{imgdir}/mail_inactive.png" alt="未驗證" class="vm" /> <span class="xi1">新郵箱({newemail})等待驗證中...</span><br />								系統已經向該郵箱發送了一封驗證激活郵件，請查收郵件，進行驗證激活。<br>								如果沒有收到驗證郵件，您可以更換一個郵箱，或者<a href="home.php?mod=spacecp&ac=profile&op=password&resend=1&formhash={formhash}" class="xi2">重新接收驗證郵件</a>
	'qq_set_status' => 'Set my QQ online status', //設置我的QQ在線狀態
	'qq_dialog' => 'Start a QQ chat', //發起QQ聊天

);

?>