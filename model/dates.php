<?php
$dates = array(
  // Team dates:
  'bid_deadline_online' => mktime(23,59,59,8,11,2014),
  'invites_out' => mktime(23,59,59,8,25,2014),
  'accept_deadline' => mktime(23,59,59,9,5,2014),
  'forfeiture' => mktime(23,59,59,10,1,2014),
  'skeleton' => mktime(23,59,59,9,22,2014),
  'tournament_start' => mktime(00,00,01,11,8,2014),
  'tournament_end' => mktime(23,23,59,11,10,2014),
  // Individ dates:
  'indiv_reg_start' => mktime(0,0,0,8,31,2013),
  'indiv_reg_end' => mktime(23,59,59,10,1,2013),
  'indiv_late_start' => mktime(0,0,0,10,2,2013),
  'indiv_late_end' => mktime(23,59,59,10,29,2013),
  'indiv_shame_start' => mktime(0,0,0,10,30,2013),
  'indiv_shame_end' => mktime(23,59,59,11,8,2013),
  'full_player_refund' => mktime(23,59,59,10,15,2013),
  //'partial_player_refund' => mktime(23,59,59,11,2,2013),
  'online_payment' => mktime(23,59,59,11,3,2013),
  //'guest_list' => mktime(23,59,59,11,6,2013),
);
// Derived dates:
$dates['bid_deadline_snailmail'] = $dates['bid_deadline_online'] - (4*24*60*60);
$dates['team_refund'] = $dates['skeleton'];

$Md = array();
$MdY = array();
foreach( $dates as $name => $time ) {
  $Md[$name] = date('M j',$time);
  $MdY[$name] = date('M j, Y',$time);
};
?>
