<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'pagetitle' => 'Pay Individual Registration',
  'description' => "Payment portal for individuals registering for Hopu 2012.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player, payment, paypal',
  'content' => '
				<hgroup class="grid_12">
						<h1>
								Hopu Ka Lewa 14 Individual Registration Payment
						</h1>
				</hgroup>
				<section id="individual_pay" class="grid_12">
						To pay your individual registration fee online, please use PayPal:
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="7S88AZ9YXMTH2">

								<table>
								<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
										<option value="Early Bird fee prior to September 30th">Early Bird fee prior to September 30th : $120.00 USD - monthly</option>
										<option value="Regular fee October 1 to October 28r 30th">Regular fee October 1 to October 28r 30th : $142.00 USD - monthly</option>
										<option value="Late Fee">Late Fee : $159.00 USD - monthly</option>
										<option value="Weekend Guest Fee">Weekend Guest Fee : $70.00 USD - monthly</option>
										</select> </td></tr>
								</table>
								<input type="hidden" name="currency_code" value="USD">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
				</section>
'
		);
$template->display($params);
?>