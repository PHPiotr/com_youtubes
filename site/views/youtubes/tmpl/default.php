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
				<div class="visible-desktop">
					<iframe class="<?php echo $this->getIdFromLink($this->escape($this->items[0]->link)); ?>" width="700" height="394" src="//www.youtube.com/embed/<?php print_r($this->getIdFromLink($this->escape($this->items[0]->link))) ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<div class="visible-tablet">
					<iframe class="<?php echo $this->getIdFromLink($this->escape($this->items[0]->link)); ?>" width="539" height="303" src="//www.youtube.com/embed/<?php print_r($this->getIdFromLink($this->escape($this->items[0]->link))) ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<div class="max767">
					<iframe class="<?php echo $this->getIdFromLink($this->escape($this->items[0]->link)); ?>" width="450" height="253" src="//www.youtube.com/embed/<?php print_r($this->getIdFromLink($this->escape($this->items[0]->link))) ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<div class="max480">
					<iframe class="<?php echo $this->getIdFromLink($this->escape($this->items[0]->link)); ?>" width="237" height="133" src="//www.youtube.com/embed/<?php print_r($this->getIdFromLink($this->escape($this->items[0]->link))) ?>?wmode=opaque" frameborder="0" allowfullscreen="allowfullscreen"></iframe>							 				
				</div>
				<?php if (count($this->items) > 1): ?>
					<div class="visible-desktop jcarousel-wrapper" style="width:<?php echo (count($this->items) < 3) ? '446px;' : '604px;' ?>">

						<div class="jcarousel" style="width:<?php echo (count($this->items) < 3) ? '316px;' : '474px;' ?>">
							<ul>
								<?php foreach ($this->items as $key => $item): ?>
									<li>
										<a class="thumb" id="<?php echo $this->getIdFromLink($this->escape($item->link)) ?>" href="<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->getIdFromLink($this->escape($item->link)) ?>/mqdefault.jpg' />
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

					<div class="visible-tablet jcarousel-wrapper" style="width:<?php echo (count($this->items) < 3) ? '446px;' : '539px;' ?>">
						<div class="jcarousel" style="width:<?php echo (count($this->items) < 3) ? '316px;' : '474px;' ?>">
							<ul>
								<?php foreach ($this->items as $key => $item): ?>
									<li>
										<a class="thumb" id="<?php echo $this->getIdFromLink($this->escape($item->link)) ?>" href="<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->getIdFromLink($this->escape($item->link)) ?>/mqdefault.jpg' />
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
							<div style="clear: both"></div>
						</div>
						<a class="jcarousel-control-prev" href="#"><span class="nav arrow-left"<?php if (count($this->items) > 2): ?> style="border-right-width: 32px"<?php endif; ?>></span></a>
						<a class="jcarousel-control-next" href="#"><span class="nav arrow-right"<?php if (count($this->items) > 2): ?> style="border-left-width: 32px"<?php endif; ?>></span></a>
						<div class="clearfix"></div>
					</div>

					<div class="max767 jcarousel-wrapper" style="width: 380px;">
						<div class="jcarousel" style="width: 316px;">
							<ul>
								<?php foreach ($this->items as $key => $item): ?>
									<li>
										<a class="thumb" id="<?php echo $this->getIdFromLink($this->escape($item->link)) ?>" href="<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->getIdFromLink($this->escape($item->link)) ?>/mqdefault.jpg' />
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<a class="jcarousel-control-prev" href="#"><span class="nav arrow-left"<?php if (count($this->items) > 2): ?> style="border-right-width: 32px"<?php endif; ?>></span></a>
						<a class="jcarousel-control-next" href="#"><span class="nav arrow-right"<?php if (count($this->items) > 2): ?> style="border-left-width: 32px"<?php endif; ?>></span></a>
						<div class="clearfix"></div>
					</div>

					<div class="max480 jcarousel-wrapper" style="width: 224px;">
						<div class="jcarousel" style="width: 158px;">
							<ul>
								<?php foreach ($this->items as $key => $item): ?>
									<li>
										<a class="thumb" id="<?php echo $this->getIdFromLink($this->escape($item->link)) ?>" href="<?php echo $this->escape($item->link); ?>" title="<?php echo $item->title; ?>">
											<img title="<?php echo $item->title ?>" alt="<?php echo $item->title ?>" width="156" height="86" src='http://i1.ytimg.com/vi/<?php echo $this->getIdFromLink($this->escape($item->link)) ?>/mqdefault.jpg' />
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<a class="jcarousel-control-prev" href="#"><span class="nav arrow-left"<?php if (count($this->items) > 2): ?> style="border-right-width: 32px"<?php endif; ?>></span></a>
						<a class="jcarousel-control-next" href="#"><span class="nav arrow-right"<?php if (count($this->items) > 2): ?> style="border-left-width: 32px"<?php endif; ?>></span></a>
						<div class="clearfix"></div>
					</div>

				<?php endif; ?>
			</div>
			<div style="clear: both"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php if (count($this->items) > 1): ?>
		<script type="text/javascript">				
													
			(function($) {
				$(function() {
													
					var thumb_id, main_id, iframe_src, new_src;
																													
					$('.you .jcarousel a.thumb').click(function(){
																														
						thumb_id = $(this).attr('id');
						main_id = $('.you .carousel iframe').attr('class');
						iframe_src = $('.you .carousel iframe').attr('src');
						new_src = iframe_src.replace(main_id,thumb_id);
																														
						$('.you .carousel iframe').attr('src',new_src);
						$('.you .carousel iframe').attr('class',thumb_id);
																													
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
	<?php endif; ?>
<?php endif; ?>