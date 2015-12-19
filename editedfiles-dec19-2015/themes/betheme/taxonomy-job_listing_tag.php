<?php
get_header();
 global $post; ?>
<div id="Content">
	<div class="content_wrapper clearfix">
	
		<!-- .sections_group -->
		<div class="sections_group">
		<?php $queried_obj = get_queried_object(); ?>
			<div itemprop="mainContentOfPage" class="entry-content">
				<div class="section the_content has_content"><div class="section_wrapper">
					<div class="the_content_wrapper">
						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="wpb_wrapper">
									<div class="fancy_heading fancy_heading_line">
										<h2 class="title"><span><?php echo $queried_obj->name; ?> jobs</span></h2>
										<div class="inside">Browse our live jobs below and apply directly or using Linkedin.</div>
									</div>
								
									<div class="wpb_text_column wpb_content_element ">
										<?php echo do_shortcode('[jobs]'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>			
			</div>
			
				
		</div>
		<!-- .four-columns - sidebar -->
		
	</div>
</div>
<?php get_footer(); ?>