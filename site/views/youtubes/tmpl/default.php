<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_youtubes
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
if (count($this->items) > 0):
	?>
	<div class="youtubes<?php echo $this->pageclass_sfx; ?>">
		<div class="you">
			<div class="carousel">
				<div>
					<iframe class="<?php echo $this->escape($this->items[0]->link); ?>" width="<?php echo $this->desktop_iframe_width; ?>" height="<?php echo $this->desktop_iframe_height; ?>" src="//www.youtube.com/embed/<?php print_r($this->escape($this->items[0]->link)) ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<?php if (count($this->items) > 1): ?>

					<div class="jcarousel-wrapper" style="width:<?php echo (count($this->items) === 2) ? '290px;' : ((count($this->items) === 3) ? '446px;' : '604px;'); ?>">

						<div class="jcarousel" style="width:<?php echo (count($this->items) === 2) ? '158px;' : ((count($this->items) === 3) ? '316px;' : '474px;') ?>">
							<ul>
								<?php
								foreach ($this->items as $key => $item):
									$youtubeUrl = "http://gdata.youtube.com/feeds/api/videos/" . $this->escape($item->link);

									$youtubeXml = simplexml_load_file($youtubeUrl);
									$youtubeTitle = $youtubeXml->title[0];
									$youtubeDuration = (int) $youtubeXml->children('media', true)->group[0]->children('yt', true)->duration[0]->attributes('', true)->seconds;
									$youtubeHour = '';
									$youtubeMin = (int) ($youtubeDuration / 60);
									if ($youtubeMin > 59) {
										$youtubeHour = (int) ($youtubeMin / 60) . ':';
										$youtubeMin = $youtubeMin % 60;
									}
									$youtubeSeconds = $youtubeDuration % 60;
									$youtubeSeconds = $youtubeSeconds < 9 ? "0" . $youtubeSeconds : $youtubeSeconds;
									?>
									<li>
										<a class="thumb" id="<?php echo $this->escape($item->link); ?>" href="http://www.youtube.com/watch?v=<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->escape($item->link); ?>/mqdefault.jpg' />
											<span class="video title"><?php echo JHTML::_('string.truncate', ($item->title), 25); ?></span>
											<span class="video time"><?php echo $youtubeHour . $youtubeMin . ':' . $youtubeSeconds; ?></span>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
							<div style="clear: both"></div>
						</div>
						<a class="jcarousel-control-prev" href="#"><span class="nav arrow-left"></span></a>
						<a class="jcarousel-control-next" href="#"><span class="nav arrow-right"></span></a>
						<div class="clearfix"></div>
					</div>

				<?php endif; ?>
			</div>

			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php

 endif;