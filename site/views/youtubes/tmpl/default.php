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
					<iframe class="<?php echo $this->escape($this->items[0]->link); ?>" width="980" height="460" src="//www.youtube.com/embed/<?php echo $this->escape($this->items[0]->link); ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<?php if (count($this->items) > 1): ?>
					<div class="jcarousel-wrapper" style="width:<?php echo (count($this->items) < 3) ? '446px;' : '604px;' ?>">

						<div class="jcarousel" style="width:<?php echo (count($this->items) < 3) ? '316px;' : '474px;' ?>">
							<ul>
								<?php foreach ($this->items as $key => $item): ?>
									<li>
										<a class="thumb" id="<?php echo $this->escape($item->link); ?>" href="http://www.youtube.com/watch?v=<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->escape($item->link); ?>/mqdefault.jpg' />
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
	<?php if (count($this->items) > 1): ?>
		<script type="text/javascript">

			(function($) {
				$(function() {

					var thumb_id, main_id, iframe_src, new_src;

					$('.you .jcarousel a.thumb').click(function() {

						thumb_id = $(this).attr('id');
						main_id = $('.you .carousel iframe').attr('class');
						iframe_src = $('.you .carousel iframe').attr('src');
						new_src = iframe_src.replace(main_id, thumb_id);

						$('.you .carousel iframe').attr('src', new_src);
						$('.you .carousel iframe').attr('class', thumb_id);

						return false;
					});

					$('.jcarousel').jcarousel({
						wrap: 'circular'
					});

					$('.jcarousel-control-prev')
							.jcarouselControl({
								target: '-=1'
							});

					$('.jcarousel-control-next')
							.jcarouselControl({
								target: '+=1'
							});

				});
			})(jQuery);

		</script>
	<?php
	endif;
 endif;