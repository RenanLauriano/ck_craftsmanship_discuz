<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_credit_log');
0
|| checktplrefresh('./template/default/home/spacecp_credit_log.htm', './template/default/home/spacecp_header.htm', 1658249040, '1', './data/template/1_1_home_spacecp_credit_log.tpl.php', './template/default', 'home/spacecp_credit_log')
|| checktplrefresh('./template/default/home/spacecp_credit_log.htm', './template/default/home/spacecp_credit_header.htm', 1658249040, '1', './data/template/1_1_home_spacecp_credit_log.tpl.php', './template/default', 'home/spacecp_credit_log')
|| checktplrefresh('./template/default/home/spacecp_credit_log.htm', './template/default/home/spacecp_footer.htm', 1658249040, '1', './data/template/1_1_home_spacecp_credit_log.tpl.php', './template/default', 'home/spacecp_credit_log')
|| checktplrefresh('./template/default/home/spacecp_credit_log.htm', './template/default/home/spacecp_header_name.htm', 1658249040, '1', './data/template/1_1_home_spacecp_credit_log.tpl.php', './template/default', 'home/spacecp_credit_log')
|| checktplrefresh('./template/default/home/spacecp_credit_log.htm', './template/default/home/spacecp_header_name.htm', 1658249040, '1', './data/template/1_1_home_spacecp_credit_log.tpl.php', './template/default', 'home/spacecp_credit_log')
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
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_credit_top'])) echo $_G['setting']['pluginhooks']['spacecp_credit_top'];?><ul class="tb cl">
<li <?php echo $opactives['base'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=base">My scores</a></li>
<?php if($_G['setting']['ec_ratio'] && ($_G['setting']['ec_account'] || $_G['setting']['ec_tenpay_opentrans_chnid'] || $_G['setting']['ec_tenpay_bargainor']) || $_G['setting']['card']['open']) { ?>
<li <?php echo $opactives['buy'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=buy">Recharge</a></li>
<?php } if($_G['setting']['transferstatus'] && $_G['group']['allowtransfer']) { ?>
<li <?php echo $opactives['transfer'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=transfer">Transfer</a></li>
<?php } if($_G['setting']['exchangestatus']) { ?>
<li <?php echo $opactives['exchange'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=exchange">Exchange</a></li>
<?php } ?>
<li <?php echo $opactives['log'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=log">Points record</a></li>
<li <?php echo $opactives['rule'];?>><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule">Points rules</a></li>
<?php if(!empty($_G['setting']['plugins']['spacecp_credit'])) { if(is_array($_G['setting']['plugins']['spacecp_credit'])) foreach($_G['setting']['plugins']['spacecp_credit'] as $id => $module) { if(in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;op=credit&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } if($op == 'rule') { ?>
<li class="y">
<select onchange="location.href='home.php?mod=spacecp&ac=credit&op=rule&fid='+this.value"><option value="">Global rules</option><?php echo $select;?></select>
</li>
<?php } ?>
</ul><p class="tbmu bw0">
<a<?php if($_GET['suboperation'] != 'creditrulelog') { ?> class="a"<?php } ?> href="home.php?mod=spacecp&amp;ac=credit&amp;op=log" hidefocus="true">Points Earnings</a><span class="pipe">|</span>
<a<?php if($_GET['suboperation'] == 'creditrulelog') { ?> class="a"<?php } ?> href="home.php?mod=spacecp&amp;ac=credit&amp;op=log&amp;suboperation=creditrulelog" hidefocus="true">System reward</a>
</p>
<?php if($_GET['suboperation'] != 'creditrulelog') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>calendar.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form method="post" action="home.php?mod=spacecp&amp;ac=credit&amp;op=log">
<div class="exfm" style="margin-top: 0;">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Points:</th>
<td>
<span class="ftid">
<select id="exttype" name="exttype" class="ps" width="168">
<option value="0">Unlimited</option><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $id => $credit) { ?><option value="<?php echo $id;?>"<?php if($_GET['exttype']==$id) { ?> selected="selected"<?php } ?>><?php echo $credit['title'];?></option>
<?php } ?>
</select>
</span>
</td>
<th>Time limit:</th>
<td>
<input type="text" name="starttime" class="px" size="11" value="<?php echo $_GET['starttime'];?>" onclick="showcalendar(event, this)" readonly="readonly" /> To <input type="text" name="endtime" class="px" size="11" value="<?php echo $_GET['endtime'];?>" readonly="readonly" onclick="showcalendar(event, this)" />
</td>
</tr>
<tr>
<th>Income and expenditure:</th>
<td>
<span class="ftid">
<select id="income" name="income" class="ps" width="168">
<option value="0"<?php echo $incomeactives['0'];?>>Unlimited</option>
<option value="-1"<?php echo $incomeactives['-1'];?>>Expenditure</option>
<option value="1"<?php echo $incomeactives['1'];?>>Income</option>
</select>
</span>
</td>
<th>Operate:</th>
<td><span class="ftid"><?php echo $optypehtml;?></span></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" class="pn" name="search" value="true"><strong>Inquire</strong></button></td>
</tr>
</table>
<script type="text/javascript">
simulateSelect('exttype');
simulateSelect('income');
simulateSelect('optype');
</script>
</div>
<table summary="Theme payment" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th width="80">Operate</th>
<th width="80">Points change</th>
<th>Details</th>
<th width="100">Change time</th>
</tr><?php if(is_array($loglist)) foreach($loglist as $value) { $value = makecreditlog($value, $otherinfo);?><tr>
<td><?php if($value['operation']) { ?><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=log&amp;optype=<?php echo $value['operation'];?>"><?php echo $value['optype'];?></a><?php } else { ?><?php echo $value['title'];?><?php } ?></td>
<td><?php echo $value['credit'];?></td>
<td><?php if($value['operation']) { ?><?php echo $value['opinfo'];?><?php } else { ?><?php echo $value['text'];?><?php } ?></td>
<td><?php echo $value['dateline'];?></td>
</tr>
<?php } ?>
</table>
<input type="hidden" name="op" value="log" />
<input type="hidden" name="ac" value="credit" />
<input type="hidden" name="mod" value="spacecp" />
</form>
<?php } elseif($_GET['suboperation'] == 'creditrulelog') { ?>
<table summary="Points Earning History" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th class="xw1" width="80">Action name</th>
<th class="xw1" width="60">Total</th>
<th class="xw1" width="60">Number of cycles</th><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $value) { ?><th class="xw1"><?php echo $value['title'];?></th>
<?php } ?>
<th class="xw1" width="100">Last reward time</th>
</tr><?php $i = 0;?><?php if(is_array($list)) foreach($list as $key => $log) { $i++;?><tr<?php if($i % 2 == 0) { ?> class="alt"<?php } ?>>
<td><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;rid=<?php echo $log['rid'];?>"><?php echo $log['rulename'];?></a></td>
<td><?php echo $log['total'];?></td>
<td><?php echo $log['cyclenum'];?></td><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $value) { $creditkey = 'extcredits'.$key;?><td><?php echo $log[$creditkey];?></td>
<?php } ?>
<td><?php echo dgmdate($log[dateline], 'Y-m-d H:i');?></td>
</tr>
<?php } ?>
</table>
<?php } if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_credit_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_credit_bottom'];?>
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
</div><?php include template('common/footer'); ?>