<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 31607 2012-09-13 08:38:40Z monkey $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'hour' => 'Hour', //小時
	'before' => 'ago', //前
	'minute' => 'Minute', //分鐘
	'second' => 'Second', //秒
	'now' => 'Now', //現在
	'dot' => ', ', //、
	'poll' => 'Vote', //投票
	'blog' => 'Log', //日誌
	'friend_group_default' => 'Other', //其他
	'friend_group_1' => 'Get acquainted with this site', //通過本站認識
	'friend_group_2' => 'Know through activities', //通過活動認識
	'friend_group_3' => 'Met through friends', //通過朋友認識
	'friend_group_4' => 'Relatives', //親人
	'friend_group_5' => 'Colleague', //同事
	'friend_group_6' => 'Classmate', //同學
	'friend_group_7' => 'Do not know', //不認識
	'friend_group' => 'Customize', //自定義
	'wall' => 'Message', //留言
	'pic_comment' => 'Image Reviews', //圖片評論
	'blog_comment' => 'Log comments', //日誌評論
	'clickblog' => 'Log statement', //日誌表態
	'clickpic' => 'Picture statement', //圖片表態
	'clickthread' => 'Topic statement', //話題表態
	'share_comment' => 'Share a comment', //分享評論
	'share_notice' => 'Share', //分享
	'doing_comment' => 'Record reply', //記錄回復
	'friend_notice' => 'Friend', //好友
	'poll_comment' => 'Vote for comments', //投票評論
	'poll_invite' => 'Invitation to vote', //投票邀請
	'default_albumname' => 'Default gallery', //默認相冊
	'credit' => 'Points', //積分
	'credit_unit' => 'Indivual', //個
	'man' => 'Male', //男
	'woman' => 'Female', //女
	'gender_0' => 'Keep secret', //保密
	'gender_1' => 'Male', //男
	'gender_2' => 'Female', //女
	'year' => 'Year', //年
	'month' => 'Moon', //月
	'day' => 'Day', //日
	'unmarried' => 'Single', //單身
	'married' => 'Not single', //非單身
	'hidden_username' => 'Anonymous', //匿名
	'gender' => 'Gender', //性別
	'age' => 'Age', //歲
	'comment' => 'Comment', //評論
	'reply' => 'Reply', //回復
	'from' => 'From', //來自
	'anonymity' => 'Anonymous', //匿名
	'viewmore' => 'See more', //查看更多
	'constellation_1' => 'Aquarius', //水瓶座
	'constellation_2' => 'Pisces', //雙魚座
	'constellation_3' => 'Aries', //白羊座
	'constellation_4' => 'Taurus', //金牛座
	'constellation_5' => 'Gemini', //雙子座
	'constellation_6' => 'Cancer', //巨蟹座
	'constellation_7' => 'Leo', //獅子座
	'constellation_8' => 'Virgo', //處女座
	'constellation_9' => 'Libra', //天秤座
	'constellation_10' => 'Scorpio', //天蠍座
	'constellation_11' => 'Sagittarius', //射手座
	'constellation_12' => 'Capricornus', //摩羯座
	'zodiac_1' => 'Mouse', //鼠
	'zodiac_2' => 'Cattle', //牛
	'zodiac_3' => 'Tiger', //虎
	'zodiac_4' => 'Rabbit', //兔
	'zodiac_5' => 'Dragon', //龍
	'zodiac_6' => 'Snake', //蛇
	'zodiac_7' => 'Horse', //馬
	'zodiac_8' => 'Sheep', //羊
	'zodiac_9' => 'Monkey', //猴
	'zodiac_10' => 'Chicken', //雞
	'zodiac_11' => 'Dog', //狗
	'zodiac_12' => 'Pig', //豬
	'credits' => 'Points', //積分
	'usergroup' => 'User group', //用戶組
	'friends' => 'Friend', //好友
	'blogs' => 'Log', //日誌
	'threads' => 'Theme', //主題
	'albums' => 'Photo album', //相冊
	'sharings' => 'Share', //分享
	'space_views' => '<strong class="xi1">{views}</strong> people have visited', //已有 <strong class="xi1">{views}</strong> 人來訪過
	'views' => 'Space Views', //空間查看數
	'block1' => 'Custom module 1', //自定義模塊1
	'block2' => 'Custom module 2', //自定義模塊2
	'block3' => 'Custom module 3', //自定義模塊3
	'block4' => 'Custom module 4', //自定義模塊4
	'block5' => 'Custom module 5', //自定義模塊5
	
	'blockdata' => array('personalinfo' => '個人資料', 'profile' => '頭像', 'doing' => '記錄', 'feed' => '動態',
				'blog' => '日誌', 'stickblog' => '置頂日誌', 'album' => '相冊', 'friend' => '好友',
				'visitor' => '最近訪客', 'wall' => '留言板', 'share' => '分享',
				'thread' => '主題', 'group'=>$_G[setting][navs][3][navname],'music'=>'音樂盒',
				'statistic' => '統計信息','myapp' => '應用',
				'block1'=>'自由模塊1', 'block2'=>'自由模塊2', 'block3'=>'自由模塊3',
				'block4'=>'自由模塊4','block5'=>'自由模塊5'),

		
	'block_title' => '<div class="blocktitle title"><span>{bname}</span>{more}</div>', //<div class="blocktitle title"><span>{bname}</span>{more}</div>
	'blog_li' => '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a>< span class="xg2 xw0"> {date}</span></dt>', //<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>
	'blog_li_img' => '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class=" summaryimg" /></a></dd>', //<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>
	'blog_li_ext' => '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum}) times read</a>< span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum}) Comments</a></dd>', //<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum})次閱讀</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum})個評論</a></dd>
	'album_li' => '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title=" {albumname}, update {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p>< a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, update {date}">{albumname}</a></ p><span>Number of pictures: {picnum}</span></li>', //<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}">{albumname}</a></p><span>圖片數: {picnum}</span></li>
	'doing_li' => '<li>{message}</li><br />{date} {from} Reply ({replynum})', //<li>{message}</li><br />{date} {from} 回復({replynum})
	'visitor_anonymity' => '<div class="avatar48"><img src="image/magic/hidden.gif" alt="anonymous"></div><p>anonymous</p>', //<div class="avatar48"><img src="image/magic/hidden.gif" alt="匿名"></div><p>匿名</p>
	'visitor_list' => '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em><em class="{self} " onclick="javascript:removeVisitor(event, {cuid});" title="Remove Visit Footprint"></em>{avatar}</a><p><a href="home.php?mod=space&uid ={uid}" title="{username}">{username}</a></p>', //<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em><em class="{self}" onclick="javascript:removeVisitor(event, {cuid});" title="刪除訪問足跡"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>
	'wall_form' => '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />' : ($_G['connectguest'] ? '<div class="pt hm">You can only reply after <a href="member.php ?mod=connect" class="xi2">complete account information</a> or <a href="member.php?mod=connect&ac=bind" class="xi2"> bind an existing account</a> </div>' : '<div class="pt hm">You need to log in before you can leave a message<a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">Login</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" class=" xi2">'.$_G['setting']['reglinkname'].'</a></div>')).'
							<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>message</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>'.
						($_G['uid'] ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>' : '').'
					</div>',
	'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
	'wall_more' => '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">View all</a></span><dt></dl>',
	'wall_edit' => '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">Edit</a> ',
	'wall_del' => '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">Delete</a> ',
	'wall_reply' => '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">Reply</a>',
	'group_li' => '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li' => '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">Release time: {dateline}</div></div>',
	'music_no_content' => 'The content of the music box has not been set', //還沒有設置音樂盒的內容
	'block_profile_diy' => 'Dress up space', //裝扮空間
	'block_profile_wall' => 'View Message', //查看留言
	'block_profile_avatar' => 'Edit Avatar', //編輯頭像
	'block_profile_update' => 'Updates', //更新資料
	'block_profile_follow' => 'View the broadcast', //查看廣播
	'block_profile_wall_to_me' => 'Leave me a message', //給我留言
	'block_profile_friend_add' => 'Add to friends', //加為好友
	'block_profile_friend_ignore' => 'Unfriend', //解除好友
	'block_profile_poke' => 'Say hi', //打個招呼
	'block_profile_sendmessage' => 'Send a message', //發送消息
	'block_doing_reply' => 'Reply', //回復
	'block_doing_no_content' => 'There is no record', //現在還沒有記錄
	'block_doing_no_content_publish' => ', <a href="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">update record</a>', //，<a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">更新記錄</a>
	'block_blog_no_content' => 'No logs yet', //現在還沒有日誌
	'block_blog_no_content_publish' => ', <a href="home.php?mod=spacecp&ac=blog">release log</a>', //，<a href ="home.php?mod=spacecp&ac=blog">發佈日誌</a>
	'block_album_no_content' => 'No album yet', //現在還沒有相冊
	'block_album_no_content_publish' => ', <a href="home.php?mod=spacecp&ac=upload">upload image</a>', //，<a href ="home.php?mod=spacecp&ac=upload">上傳圖片</a>
	'block_feed_no_content' => 'No news yet', //現在還沒有動態
	'block_thread_no_content' => 'No topic yet', //現在還沒有主題
	'block_thread_no_content_publish' => ', <a href="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">publish topic</a>', //，<a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">發佈主題</a>
	'block_friend_no_content' => 'No friends yet', //現在還沒有好友
	'block_friend_no_content_publish' => ', <a href ="home.php?mod=spacecp&ac=search">find friends</a> or <a href ="home.php?mod=spacecp&ac=invite">invite friends</a>', //，<a href ="home.php?mod=spacecp&ac=search">查找好友</a> 或 <a href ="home.php?mod=spacecp&ac=invite">邀請好友</a>
	'block_visitor_no_content' => 'No visitors yet', //現在還沒有訪客
	'block_visitor_no_content_publish' => ', <a href="home.php?mod=space&do=friend&view=online&type=member">to drop by</a>', //，<a href ="home.php?mod=space&do=friend&view=online&type=member">去串串門</a>
	'block_share_no_content' => 'Not shared yet', //現在還沒有分享
	'block_wall_no_content' => 'No message yet', //現在還沒有留言
	'block_group_no_content' => 'No group yet', //現在還沒有群組
	'block_group_no_content_publish' => ', <a href ="forum.php?mod=group&action=create">create your own group</a> or <a href ="group.php?mod=index">join a group</a>', //，<a href ="forum.php?mod=group&action=create">創建自己的群組</a> 或 <a href ="group.php?mod=index">加入群組</a>
	'block_group_no_content_join' => ', <a href="group.php?mod=index">join group</a>', //，<a href ="group.php?mod=index">加入群組</a>
	'block_myapp_no_content' => 'No application yet', //現在還沒有應用
	'block_myapp_no_content_publish' => ', <a href="userapp.php?mod=manage&my_suffix=/app/list">I want to play the app</a>', //，<a href ="userapp.php?mod=manage&my_suffix=/app/list">我要玩應用</a>
	'block_view_noperm' => 'Not authorized to view', //無權查看
	'block_view_profileinfo_noperm' => 'No data item or no right to view', //暫無資料項或無權查看
	'click_play' => 'Click to play', //點擊播放
	'click_view' => 'Click to view', //點擊查看
	'feed_view_only' => 'Just watch this kind of dynamic', //只看此類動態
	'export_pm' => 'Export SMS', //導出短消息
	'pm_export_header' => 'Discuz! X short message record (this message record does not support re-import)', //Discuz! X 短消息記錄(此消息記錄不支持重新導入)
	'pm_export_touser' => 'Message object: {touser}', //消息對像: {touser}
	'pm_export_subject' => 'Group chat topic: {subject}', //群聊話題: {subject}
	'all' => 'All', //全部
	'manage_post' => 'Manage posts', //管理帖子
	'manage_album' => 'Manage albums', //管理相冊
	'manage_blog' => 'Manage logs', //管理日誌
	'manage_comment' => 'Manage Reviews', //管理評論
	'manage_doing' => 'Manage records', //管理記錄
	'manage_feed' => 'Management dynamics', //管理動態
	'manage_group_prune' => 'Group post', //群組帖子
	'manage_group_threads' => 'Group topic', //群組主題
	'manage_share' => 'Manage sharing', //管理分享
	'manage_pic' => 'Manage pictures', //管理圖片
	'sb_blog' => '{who}\'s log', //{who}的日誌
	'sb_album' => '{who}\'s album', //{who}的相冊
	'sb_space' => 'Space for {who}', //{who}的空間
	'sb_feed' => 'Activity of {who}', //{who}的動態
	'sb_doing' => '{who}\'s record', //{who}的記錄
	'sb_sharing' => '{who}\'s share', //{who}的分享
	'sb_friend' => 'Friends of {who}', //{who}的好友
	'sb_wall' => '{who}\'s message board', //{who}的留言板
	'sb_profile' => 'Profile of {who}', //{who}的個人資料
	'sb_thread' => '{who}\'s post', //{who}的帖子
	'doing_you_can' => 'You can update your records to let your friends know what you\'re doing...', //您可以更新記錄, 讓好友們知道您在做什麼...
	'block_profile_all' => '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">View full profile</a></p>', //<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">查看全部個人資料</a></p>
	'block_profile_edit' => '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">Edit my profile</a></span>', //<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">編輯我的資料</a></span>
	'sb_follow' => 'Broadcast by {who}', //{who}的廣播
	'viewthread_userinfo_hour' => 'Hour', //小時
	'viewthread_userinfo_uid' => 'UID', //UID
	'viewthread_userinfo_posts' => 'Post', //帖子
	'viewthread_userinfo_threads' => 'Theme', //主題
	'viewthread_userinfo_doings' => 'Record', //記錄
	'viewthread_userinfo_blogs' => 'Log', //日誌
	'viewthread_userinfo_albums' => 'Photo album', //相冊
	'viewthread_userinfo_sharings' => 'Share', //分享
	'viewthread_userinfo_friends' => 'Friend', //好友
	'viewthread_userinfo_digest' => 'Essence', //精華
	'viewthread_userinfo_digestposts' => 'Essence', //精華
	'viewthread_userinfo_credits' => 'Points', //積分
	'viewthread_userinfo_readperm' => 'Read permission', //閱讀權限
	'viewthread_userinfo_regtime' => 'Registration time', //註冊時間
	'viewthread_userinfo_lastdate' => 'Last login', //最後登錄
	'viewthread_userinfo_oltime' => 'Online time', //在線時間
	'viewthread_userinfo_sellercredit' => 'Seller\'s credit', //賣家信用
	'viewthread_userinfo_buyercredit' => 'Buyer\'s credit', //買家信用
	'viewthread_userinfo_follower' => 'Audience', //聽眾
	'viewthread_userinfo_following' => 'Listen', //收聽
	'viewthread_userinfo_feeds' => 'Broadcast', //廣播
	'viewthread_userinfo_privacy' => 'Keep secret', //保密
	'follow_view_follow' => 'I am concerned', //我關注的
	'follow_view_special' => 'Special attention', //特別關注
	'follow_view_other' => 'Broadcast hall', //廣播大廳
	'follow_view_feed' => 'Broadcast by {who}', //{who}的廣播
	'follow_view_thread' => '{who}\'s subject', //{who}的主題
	'follow_view_reply' => 'Reply from {who}', //{who}的回復
	'follow_view_profile' => 'Profile of {who}', //{who}的個人資料
	'follow_view_type_feed' => 'Broadcast', //廣播
	'follow_view_type_thread' => 'Theme', //主題
	'follow_view_type_reply' => 'Reply', //回帖
	'follow_view_type_profile' => 'Personal information', //個人資料
	'follow_view_type_follower' => 'Audience list', //聽眾列表
	'follow_view_type_following' => 'Listen to users', //收聽用戶
	'follow_view_my_follower' => 'My audience', //我的聽眾
	'follow_view_my_following' => 'People i listen to', //我收聽的人
	'follow_view_do_follower' => 'His audience', //他的聽眾
	'follow_view_do_following' => 'Who he listens to', //他收聽的人
	'follow_view_fulltext' => '... view full text', //...查看全文
	'follow_retract' => 'Put away', //收起
	'follow_click_play' => 'Click to play', //點擊播放
	'follow_cancle_follow' => 'Cancel listening', //取消收聽
	'follow_follow_ta' => 'Listen to TA', //收聽TA
);

?>