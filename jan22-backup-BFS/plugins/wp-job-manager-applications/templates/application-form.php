<?php global $post; ?>
<form class="job-manager-application-form job-manager-form" method="post" enctype="multipart/form-data" action="<?php echo esc_url( get_permalink() );?>">
	<?php do_action( 'job_application_form_fields_start' ); ?>

	<?php foreach ( $application_fields as $key => $field ) : ?>
		<?php if ( 'output-content' === $field['type'] ) : ?>
			<div class="form-content">
				<h3><?php esc_html_e( $field['label'] ); ?></h3>
				<?php if ( ! empty( $field['description'] ) ) : ?><?php echo wpautop( wp_kses_post( $field['description'] ) ); ?><?php endif; ?>
			</div>
		<?php else : ?>
			<fieldset class="fieldset-<?php esc_attr_e( $key ); ?>">
				<label for="<?php esc_attr_e( $key ); ?>"><?php echo __( $field['label'] ) . apply_filters( 'submit_job_form_required_label', $field['required'] ? '' : ' <small>' . __( '(optional)', 'wp-job-manager' ) . '</small>', $field ); ?></label>
				<div class="field <?php echo $field['required'] ? 'required-field' : ''; ?>">
					<?php $class->get_field_template( $key, $field ); ?>
				</div>
			</fieldset>
		<?php endif; ?>
	<?php endforeach; ?>
	<fieldset class="fieldset-mailchim-integration">
		<label for="mailchim-integration">Job Updates Newsletter</label>
		<div class="field">
			<input type="checkbox" name="mc4wp-subscribe" value="1" />
			<small class="description">(Tick if you want to receive relevant job updates by email. We won't spam you!)</small>
		</div>
	</fieldset>
	

	<?php do_action( 'job_application_form_fields_end' ); ?>

	<p>
		<input type="hidden" name="mc4wp-candidate-applymailid" id="mc4wp-candidate-applymailid" value="" />
		<input type="submit" name="wp_job_manager_send_application" value="<?php esc_attr_e( 'Send application', 'wp-job-manager-applications' ); ?>" />
		<input type="hidden" name="job_id" value="<?php echo absint( $post->ID ); ?>" />
	</p>
</form>
