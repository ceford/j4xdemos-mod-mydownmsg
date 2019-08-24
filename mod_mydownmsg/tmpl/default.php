<?php
/**
 * @package     J4xdemos.Module
 * @subpackage  mod_mydownmsg
 *
 * @copyright   Copyright (C) 2019 Clifford E Ford. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// the $msg string contains a %s placeholder to be replaced in a sprintf statement
$msg = Text::_('MOD_MYDOWNMSG_MSG_' . strtoupper($params->get('msg_id')));

$tod = $params->get('hour') . ':' . $params->get('minute');
$tz = $params->get('tz');

if ($tz > 0 )
{
	$tz = '(+' . $tz . ')';
}
else if ($tz < 0)
{
	$tz = '(-' . $tz . ')';
}
else {
	$tz = '';
}

$tod .= ' GMT ' . $tz;

?>

<div class="alert alert-warning" role="alert">
	<?php echo sprintf ($msg, $tod); ?>
</div>
