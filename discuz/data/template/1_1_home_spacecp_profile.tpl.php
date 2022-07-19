<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_profile');
0
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/seccheck.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_profile_nav.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/seditor.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1658249028, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="Front page"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">Settings</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
Personal information
<?php } elseif($actives['verify']) { ?>
Certification
<?php } elseif($actives['avatar']) { ?>
Modify avatar
<?php } elseif($actives['credit']) { ?>
Points
<?php } elseif($actives['usergroup']) { ?>
User group
<?php } elseif($actives['privacy']) { ?>
Privacy Screening
<?php } elseif($actives['sendmail']) { ?>
Email alert
<?php } elseif($actives['password']) { ?>
Password security
<?php } elseif($actives['promotion']) { ?>
Visit Promotion
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
Personal information
<?php } elseif($actives['verify']) { ?>
Certification
<?php } elseif($actives['avatar']) { ?>
Modify avatar
<?php } elseif($actives['credit']) { ?>
Points
<?php } elseif($actives['usergroup']) { ?>
User group
<?php } elseif($actives['privacy']) { ?>
Privacy Screening
<?php } elseif($actives['sendmail']) { ?>
Email alert
<?php } elseif($actives['password']) { ?>
Password security
<?php } elseif($actives['promotion']) { ?>
Visit Promotion
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if($validate) { ?>
<p class="tbmu mbm">The administrator has rejected your registration application, please complete the registration reason and resubmit the application</p>
<form action="member.php?mod=regverify" method="post" autocomplete="off">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table summary="Personal information" cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>Reason for rejection</th>
<td><?php echo $validate['remark'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>Sign reason</th>
<td><input type="text" class="px" name="regmessagenew" value="" /></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<button type="submit" name="verifysubmit" value="true" class="pn pnc" /><strong>Resubmit application</strong></button>
</td>
</tr>
</table>
</div></div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">Settings</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">Modify avatar</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">Personal information</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify()) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">Certification</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">Points</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">User group</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">Privacy Screening</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">Email alert</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">Password security</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">Visit Promotion</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
<?php } else { if($operation == 'password') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>register.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<p class="bbda pbm mbm">
<?php if(!$_G['member']['freeze']) { if(!$_G['setting']['connect']['allow'] || !$conisregister) { ?>You must fill in the original password to modify the information below<?php } elseif($wechatuser) { ?>You are currently using a WeChat account to bind this site. You can set an independent password here. Only after the independent password is set, the corresponding function of this site that needs to fill in the password can be used.<?php } else { ?>You are currently using a QQ account to bind this site. You can set an independent password here. Only after the independent password is set, the corresponding function of this site that needs to fill in the password can be used.<?php } } elseif($_G['member']['freeze'] == 1) { ?>
<strong class="xi1">Your current account has been frozen, please change the password to release the frozen status</strong>
<?php } elseif($_G['member']['freeze'] == 2) { ?>
<strong class="xi1">Your current account has been frozen, and you must verify your email address to unfreeze the status <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;resend=1&amp;formhash=<?php echo FORMHASH;?>" class="xi2">receive verification emails< /a></strong>
<?php } elseif($_G['member']['freeze'] == -1) { ?>
<strong class="xi1">Your current account has been frozen, you must fill in the reason for appeal on this page, and the frozen status can be lifted only after it has been reviewed and approved by the management center</strong>
<?php } ?>
</p>
<form action="home.php?mod=spacecp&amp;ac=profile" method="post" autocomplete="off">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table summary="Personal information" cellspacing="0" cellpadding="0" class="tfm">
<?php if(!$_G['setting']['connect']['allow'] || !$conisregister) { ?>
<tr>
<th><span class="rq" title="Required">*</span>Old Password</th>
<td><input type="password" name="oldpassword" id="oldpassword" class="px" /></td>
</tr>
<?php } ?>
<tr>
<th>New password</th>
<td>
<input type="password" name="newpassword" id="newpassword" class="px" />
<p class="d" id="chk_newpassword">If you do not need to change your password, please leave it blank</p>
</td>
</tr>
<tr>
<th>Confirm the new password</th>
<td>
<input type="password" name="newpassword2" id="newpassword2"class="px" />
<p class="d" id="chk_newpassword2">If you do not need to change your password, please leave it blank</p>
</td>
</tr>
<tr id="contact"<?php if($_GET['from'] == 'contact') { ?> style="background-color: <?php echo $_G['style']['specialbg'];?>;"<?php } ?>>
<th>Email</th>
<td>
<input type="text" name="emailnew" id="emailnew" value="<?php echo $space['email'];?>" class="px" />
<p class="d">
<?php if($_G['member']['freeze'] == 2) { ?>
<p class="xi1">Your current account has been frozen, and you must verify your email address to unfreeze the status <a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;resend=1&amp;formhash=<?php echo FORMHASH;?>" class="xi2">receive verification emails< /a></p>
<?php } elseif(empty($space['newemail'])) { ?>
<img src="<?php echo IMGDIR;?>/mail_active.png" alt="Verified" class="vm" /> <span class="xi1">The current mailbox has been verified and activated</span>
<?php } else { ?>
<?php echo $acitvemessage;?>
<?php } ?>
</p>
<?php if($_G['setting']['regverify'] == 1 && (($_G['group']['grouptype'] == 'member' && in_array($_G['adminid'], array(0, -1))) || $_G['groupid'] == 8) || $_G['member']['freeze']) { ?><p class="d">!If you change the address, the system will modify your password and re-verify its validity, please use it with caution</p><?php } ?>
</td>
</tr>

<?php if($_G['member']['freeze'] == 2 || $_G['member']['freeze'] == -1) { ?>
<tr>
<th>Grounds for appeal</th>
<td>
<textarea rows="3" cols="80" name="freezereson" class="pt"><?php echo $space['freezereson'];?></textarea>
<?php if($_G['member']['freeze'] == 2) { ?><p class="d" id="chk_newpassword2">If you cannot verify by email, please fill in the reason for appeal</p><?php } if($_G['member']['freeze'] == -1) { ?><p class="d" id="chk_newpassword2">If you think your account should not be frozen, please fill in the reason for the appeal</p><?php } ?>
</td>
</tr>
<?php } if(($_G['member']['freeze'] == 2 || $_G['member']['freeze'] == -1) && !empty($space['freezemodremark'])) { ?>
<tr>
<th>Audit results</th>
<td>
<textarea rows="3" cols="80" name="freezemodremark" class="pt" disabled="disabled"><?php echo $space['freezemodremark'];?></textarea>
<p class="d" id="chk_newpassword2">You have submitted <?php echo $space['freezemodsubmittimes'];?> reviews, last review by <?php echo $space['freezemodadmin'];?> on <?php echo $space['freezemoddate'];?></p>
</td>
</tr>
<?php } ?>

<tr>
<th>Security Question</th>
<td>
<select name="questionidnew" id="questionidnew">
<option value="" selected>Keep the original security questions and answers</option>
<option value="0">No security questions</option>
<option value="1">Mother's name</option>
<option value="2">Grandpa's name</option>
<option value="3">City where father was born</option>
<option value="4">The name of one of your teachers</option>
<option value="5">The model of your personal computer</option>
<option value="6">Your favorite restaurant name</option>
<option value="7">Last four digits of driver's license</option>
</select>
<p class="d">If you enable security questions, you need to fill in the corresponding items when logging in to log in</p>
</td>
</tr>

<tr>
<th>Reply</th>
<td>
<input type="text" name="answernew" id="answernew" class="px" />
<p class="d">If you set up a new security question, please enter the answer here</p>
</td>
</tr>
<?php if($secqaacheck || $seccodecheck) { ?>
</table><?php $sectpl = '<table cellspacing="0" cellpadding="0" class="tfm"><tr><th><sec></th><td><sec><p class="d"><sec></p></td></tr></table>';?><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A'.random(3) : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?><table summary="Personal information" cellspacing="0" cellpadding="0" class="tfm">
<?php } ?>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="pwdsubmit" value="true" class="pn pnc" /><strong>Save</strong></button></td>
</tr>
</table>
<input type="hidden" name="passwordsubmit" value="true" />
</form>
<script type="text/javascript">
var strongpw = new Array();
<?php if($_G['setting']['strongpw']) { if(is_array($_G['setting']['strongpw'])) foreach($_G['setting']['strongpw'] as $key => $val) { ?>strongpw[<?php echo $key;?>] = <?php echo $val;?>;
<?php } } ?>
var pwlength = <?php if($_G['setting']['pwlength']) { ?><?php echo $_G['setting']['pwlength'];?><?php } else { ?>0<?php } ?>;
checkPwdComplexity($('newpassword'), $('newpassword2'), true);
</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_top'])) echo $_G['setting']['pluginhooks']['spacecp_profile_top'];?><ul class="tb cl">
<?php if($operation != 'verify') { if(is_array($profilegroup)) foreach($profilegroup as $key => $value) { if($value['available']) { ?>
<li <?php echo $opactives[$key];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=<?php echo $key;?>"><?php echo $value['title'];?></a></li>
<?php } } if($_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength')) { ?>
<li <?php echo $opactives['domain'];?>><a href="home.php?mod=spacecp&amp;ac=domain">My domain name</a></li>
<?php } } else { if($_G['setting']['verify']) { if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available'] && (empty($verify['groupid']) || in_array($_G['groupid'], $verify['groupid']))) { if($vid != 7) { ?>
<li <?php echo $opactives['verify'.$vid];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>"><?php echo $verify['title'];?></a></li>					
<?php } } } } } if($op != 'verify' && !empty($_G['setting']['plugins']['spacecp_profile'])) { if(is_array($_G['setting']['plugins']['spacecp_profile'])) foreach($_G['setting']['plugins']['spacecp_profile'] as $id => $module) { if(in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;op=profile&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul><?php if($vid) { ?>
<p class="tbms mtm <?php if(!$showbtn) { ?>tbms_r<?php } ?>"><?php if($showbtn) { ?>The following information cannot be modified again after being reviewed. Please wait patiently for verification after submission.<?php } else { ?>Congratulations, your certification audit has passed, and the following information items are no longer allowed to be modified<?php } ?></p>
<?php } ?>
<iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
<form action="<?php if($operation != 'plugin') { ?>home.php?mod=spacecp&ac=profile&op=<?php echo $operation;?><?php } else { ?>home.php?mod=spacecp&ac=plugin&op=profile&id=<?php echo $_GET['id'];?><?php } ?>" method="post" enctype="multipart/form-data" autocomplete="off"<?php if($operation != 'plugin') { ?> target="frame_profile"<?php } ?> onsubmit="clearErrorInfo();">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<?php if($_GET['vid']) { ?>
<input type="hidden" value="<?php echo $_GET['vid'];?>" name="vid" />
<?php } ?>
<table cellspacing="0" cellpadding="0" class="tfm" id="profilelist">
<tr>
<th>User</th>
<td><?php echo $_G['member']['username'];?></td>
<td>&nbsp;</td>
</tr><?php if(is_array($settings)) foreach($settings as $key => $value) { if($value['available']) { ?>
<tr id="tr_<?php echo $key;?>">
<th id="th_<?php echo $key;?>"><?php if($value['required']) { ?><span class="rq" title="Required">*</span><?php } ?><?php echo $value['title'];?></th>
<td id="td_<?php echo $key;?>">
<?php echo $htmls[$key];?>
</td>
<td class="p">
<?php if($vid) { ?>
<input type="hidden" name="privacy[<?php echo $key;?>]" value="3" />
<?php } else { ?>
<select name="privacy[<?php echo $key;?>]">
<option value="0"<?php if($privacy[$key] == "0") { ?> selected="selected"<?php } ?>>Public</option>
<option value="1"<?php if($privacy[$key] == "1") { ?> selected="selected"<?php } ?>>Friends can see</option>
<option value="3"<?php if($privacy[$key] == "3") { ?> selected="selected"<?php } ?>>Keep secret</option>
</select>
<?php } ?>
</td>
</tr>
<?php } } if($allowcstatus && in_array('customstatus', $allowitems)) { ?>
<tr>
<th id="th_customstatus">Self-name</th>
<td id="td_customstatus">
<input type="text" value="<?php echo $space['customstatus'];?>" name="customstatus" id="customstatus" class="px" />
<div class="rq mtn" id="showerror_customstatus"></div>
</td>
<td>&nbsp;</td>
</tr>
<?php } if($_G['group']['maxsigsize'] && in_array('sightml', $allowitems)) { ?>
<tr>
<th id="th_sightml">Personal signature</th>
<td id="td_sightml">
<div class="tedt">
<div class="bar">
<span class="y"><a href="javascript:;" onclick="$('signhtmlpreview').innerHTML = bbcode2html($('sightmlmessage').value)">Preview</a></span>
<?php if($_G['group']['allowsigbbcode']) { if($_G['group']['allowsigimgcode']) { $seditor = array('sightml', array('bold', 'color', 'img', 'link', 'smilies'));?><?php } else { $seditor = array('sightml', array('bold', 'color', 'link', 'smilies'));?><?php } ?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="Bold text" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="Set text color" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="Picture" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="Add a link" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="Quote" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="Code" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@friend" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@friend</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div><?php } ?>
</div>
<div class="area">
<textarea rows="3" cols="80" name="sightml" id="sightmlmessage" class="pt" onkeydown="ctrlEnter(event, 'profilesubmitbtn');"><?php echo $space['sightml'];?></textarea>
</div>
</div>
<div id="signhtmlpreview"></div>
<div id="showerror_sightml" class="rq mtn"></div>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">var forumallowhtml = 0,allowhtml = 0,allowsmilies = 0,allowbbcode = parseInt('<?php echo $_G['group']['allowsigbbcode'];?>'),allowimgcode = parseInt('<?php echo $_G['group']['allowsigimgcode'];?>');var DISCUZCODE = [];DISCUZCODE['num'] = '-1';DISCUZCODE['html'] = [];</script>
</td>
<td>&nbsp;</td>
</tr>
<?php } if(in_array('timeoffset', $allowitems)) { ?>
<tr>
<th id="th_timeoffset">Time zone</th>
<td id="td_timeoffset"><?php $timeoffset = array(
            '9999' => 'Use system default',
            '-12' => '(GMT -12:00) Enewetok Island, Kwajalein Atoll',
            '-11' => '(GMT -11:00) Midway, Samoa',
            '-10' => '(GMT -10:00) Hawaii',
            '-9' => '(GMT -09:00) Alaska',
            '-8' => '(GMT -08:00) Pacific Time (US and Canada), Tijuana',
            '-7' => '(GMT -07:00) Mountain Time (US and Canada), Arizona',
            '-6' => '(GMT -06:00) Central Time (US and Canada), Mexico City',
            '-5' => '(GMT -05:00) Eastern Time (US and Canada), Bogota, Lima, Quito',
            '-4' => '(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz',
            '-3.5' => '(GMT -03:30) Newfoundland',
            '-3' => '(GMT -03:00) Brasilia, Buenos Aires, Georgetown, Falkland Islands',
            '-2' => '(GMT -02:00) Mid-Atlantic, Ascension, St. Helena',
            '-1' => '(GMT -01:00) Azores, Cape Verde [GMT] Dublin, London, Lisbon, Casablanca',
            '0' => '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
            '1' => '(GMT +01:00) Berlin, Brussels, Copenhagen, Madrid, Paris, Rome',
            '2' => '(GMT +02:00) Helsinki, Kaliningrad, South Africa, Warsaw',
            '3' => '(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi',
            '3.5' => '(GMT +03:30) Tehran',
            '4' => '(GMT +04:00) Abu Dhabi, Baku, Muscat, Tebilis',
            '4.5' => '(GMT +04:30) Campbell',
            '5' => '(GMT +05:00) Yekaterinburg, Islamabad, Karachi, Tashkent',
            '5.5' => '(GMT +05:30) Mumbai, Kolkata, Madras, New Delhi',
            '5.75' => '(GMT +05:45) Kathmandu',
            '6' => '(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk',
            '6.5' => '(GMT +06:30) Yangon',
            '7' => '(GMT +07:00) Bangkok, Hanoi, Jakarta',
            '8' => '(GMT +08:00) Beijing, Hong Kong, Perth, Singapore, Taipei',
            '9' => '(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
            '9.5' => '(GMT +09:30) Adelaide, Darwin',
            '10' => '(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok',
            '11' => '(GMT +11:00) Magadan, New Caledonia, Solomon Islands',
            '12' => '(GMT +12:00) Auckland, Wellington, Fiji, Marshall Islands');?><select name="timeoffset"><?php if(is_array($timeoffset)) foreach($timeoffset as $key => $desc) { ?><option value="<?php echo $key;?>"<?php if($key==$space['timeoffset']) { ?> selected="selected"<?php } ?>><?php echo $desc;?></option>
<?php } ?>
</select>
<p class="mtn">Current time : <?php echo dgmdate($_G[timestamp]);?></p>
<p class="d">If you find that the current time displayed is a few hours away from your local time, you will need to change your time zone settings</p>
</td>
<td>&nbsp;</td>
</tr>
<?php } if($operation == 'contact') { ?>
<tr>
<th id="th_sightml">Email</th>
<td id="td_sightml"><?php echo $space['email'];?>&nbsp;(<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;from=contact#contact">Revise</a>)</td>
<td>&nbsp;</td>
</tr>
<?php } if($operation == 'plugin') { include(template($_GET['id']));?><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_extra'])) echo $_G['setting']['pluginhooks']['spacecp_profile_extra'];?>
<?php if($showbtn) { ?>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<input type="hidden" name="profilesubmit" value="true" />
<button type="submit" name="profilesubmitbtn" id="profilesubmitbtn" value="true" class="pn pnc" /><strong>Save</strong></button>
<span id="submit_result" class="rq"></span>
</td>
</tr>
<?php } ?>
</table>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_profile_bottom'];?>
</form>
<script type="text/javascript">
function show_error(fieldid, extrainfo) {
var elem = $('th_'+fieldid);
if(elem) {
elem.className = "rq";
fieldname = elem.innerHTML;
extrainfo = (typeof extrainfo == "string") ? extrainfo : "";
$('showerror_'+fieldid).innerHTML = "Please check this item " + extrainfo;
$(fieldid).focus();
}
}
function show_success(message) {
message = message == '' ? 'Data updated successfully' : message;
showDialog(message, 'right', 'Prompt information', function(){
top.window.location.href = top.window.location.href;
}, 0, null, '', '', '', '', 3);
}
function clearErrorInfo() {
var spanObj = $('profilelist').getElementsByTagName("div");
for(var i in spanObj) {
if(typeof spanObj[i].id != "undefined" && spanObj[i].id.indexOf("_")) {
var ids = explode('_', spanObj[i].id);
if(ids[0] == "showerror") {
spanObj[i].innerHTML = '';
$('th_'+ids[1]).className = '';
}
}
}
}
</script>
<?php } ?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">Settings</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">Modify avatar</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">Personal information</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify()) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">Certification</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">Points</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">User group</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">Privacy Screening</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">Email alert</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">Password security</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">Visit Promotion</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
<?php } ?>
</div><?php include template('common/footer'); ?>