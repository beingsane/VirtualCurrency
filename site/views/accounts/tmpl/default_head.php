<?php
/**
 * @package      ITPrism Components
 * @subpackage   Virtual Currency
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Virtual Currency is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined('_JEXEC') or die;
?>
<tr>
	<th>
	    <?php echo JHtml::_('grid.sort',  'COM_VIRTUALCURRENCY_CURRENCY', 'b.title', $this->listDirn, $this->listOrder); ?>
    </th>
	<th>
		<?php echo JHtml::_('grid.sort',  'COM_VIRTUALCURRENCY_AMOUNT', 'a.amount', $this->listDirn, $this->listOrder); ?>
	</th>
</tr>
	  