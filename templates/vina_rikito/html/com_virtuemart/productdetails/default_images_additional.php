<?php
/**
 *
 * Show the product details page
 *
 * @package	VirtueMart
 * @subpackage
 * @author Max Milbers, Valerie Isaksen

 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default_images.php 7784 2014-03-25 00:18:44Z Milbo $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
?>
<div class="additional-images">
	<div class="row-fluid">
		<?php
		$k = 0;
		$start_image = VmConfig::get('add_img_main', 1) ? 0 : 1;
		for ($i = $start_image; $i < count($this->product->images); $i++) {
			$image = $this->product->images[$i];
			?>		
				<?php 
				if(count($this->product->images) < 7) { ?>
					<div class="additional-images-inner span3">
						<?php 
						if(VmConfig::get('add_img_main', 1)) {
							echo $image->displayMediaThumb('class="product-image" style="cursor: pointer"',false,"");
							echo '<a href="'. $image->file_url .'"  class="product-image image-'. $i .'" style="display:none;" title="'. $image->file_meta .'" ></a>';
						} else {
							echo $image->displayMediaThumb("",true,"rel='vm-additional-images'");
						} 
						?>
					</div> 
				<?php	
				} else {
					if($k%6 == 0 ){
						print '<div class="row">';
						$k = 0;								
					} ?>
					<div class="additional-images-inner span3">
						<?php 
						if(VmConfig::get('add_img_main', 1)) {
							echo $image->displayMediaThumb('class="product-image" style="cursor: pointer"',false,"");
							echo '<a href="'. $image->file_url .'"  class="product-image image-'. $i .'" style="display:none;" title="'. $image->file_meta .'" ></a>';
						} else {
							echo $image->displayMediaThumb("",true,"rel='vm-additional-images'");
						} 
						?>
					</div>
					<?php
					if ($k%6== 5){
						print '</div>';
					}
				}
				$k++;
				?>		
		<?php
		}
		if ($k%6 != 5 && count($this->product->images) > 6) print "</div>";
		?>
	</div>
</div>

