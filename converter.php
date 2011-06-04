<?php
/***************************************************************************
 *   copyright				: (C) 2008, 2009 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/
 
include 'includes/common.inc.php';

$template->assign_vars(array(
		'SITENAME' => $system->SETTINGS['sitename'],
		'THEME' => $system->SETTINGS['theme'],
		'ERROR' => (!isset($errormsg)) ? '' : $errormsg,
		'CONVERSION' => $conversion,
		'AMOUNT' => (isset($_POST['amount'])) ? $_POST['amount'] : ((isset($_GET['AMOUNT'])) ? $_GET['AMOUNT'] : 0),

		'B_CONVERSION' => (isset($_POST['action']) && $_POST['action'] == 'convert')
		));

$template->set_filenames(array(
		'body' => 'converter.tpl'
		));
$template->display('body');
?>