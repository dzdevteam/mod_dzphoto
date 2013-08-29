<?php
/**
 * @version     1.0.0
 * @package     mod_dzphoto
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined('_JEXEC') or die;
?>
<div class="dzphoto-module<?php echo $moduleclass_sfx; ?>">
<ul>
    <?php foreach ($items as $item) : ?>
    <li><a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a></li>
    <?php endforeach; ?>
</ul>
</div>