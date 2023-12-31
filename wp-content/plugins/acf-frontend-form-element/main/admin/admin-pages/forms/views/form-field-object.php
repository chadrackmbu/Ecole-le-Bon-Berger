<?php

global $fea_instance;
// Define input name prefix using unique identifier.
$input_prefix = 'acf_fields[' . $field['ID'] . ']';
$input_id     = acf_idify( $input_prefix );


// Update field props.
$field['prefix'] = $input_prefix;

// Elements.
$div_attrs = array(
	'class'     => 'acf-field-object acf-field-object-' . acf_slugify( $field['type'] ),
	'data-id'   => $field['ID'],
	'data-key'  => $field['key'],
	'data-type' => $field['type'],
);

if( $field['type'] == 'form_step' ) $div_attrs['data-step'] = $step;

// Misc template vars.
$field_label      = acf_get_field_label( $field, 'admin' );
if( $field['type'] == 'loading' ){
	$field_type_label = 'loading...';
}else{
	$field_type_label = acf_get_field_type_label( $field['type'] );
}

$short_key = str_replace( 'field_', '', $field['key'] );

?>
<div <?php echo acf_esc_attr( $div_attrs ); ?>>
	
	<div class="meta">
		<?php
		$meta_inputs = array(
			'ID'         => $field['ID'],
			'key'        => $field['key'],
			'parent'     => $field['parent'],
			'menu_order' => $i,
			'save'       => '',
		);
		foreach ( $meta_inputs as $k => $v ) :
			acf_hidden_input(
				array(
					'name'  => $input_prefix . '[' . $k . ']',
					'value' => $v,
					'id'    => $input_id . '-' . $k,
				)
			);
		endforeach;
		?>
	</div>
	
	<div class="handle">
		<ul class="acf-hl acf-tbody">
			<li class="li-field-order">
				<span class="acf-icon<?php echo ' acf-sortable-handle'; ?>" title="<?php _e( 'Drag to reorder', 'acf' ); ?>"><?php echo ( $i + 1 ); ?></span>
			</li>
			<li class="li-field-label">
				<strong>
					<a class="edit-field" title="<?php _e( 'Edit field', 'acf' ); ?>" href="#"><?php echo acf_esc_html( $field_label ); ?></a>
				</strong>
				<div class="row-options">
					<a class="edit-field" title="<?php _e( 'Edit field', 'acf' ); ?>" href="#"><?php _e( 'Edit', 'acf' ); ?></a>
					<a class="duplicate-field" title="<?php _e( 'Duplicate field', 'acf' ); ?>" href="#"><?php _e( 'Duplicate', 'acf' ); ?></a>
					<a class="move-field" title="<?php _e( 'Move field to another group', 'acf' ); ?>" href="#"><?php _e( 'Move', 'acf' ); ?></a>
					<a class="delete-field" title="<?php _e( 'Delete field', 'acf' ); ?>" href="#"><?php _e( 'Delete', 'acf' ); ?></a>
				</div>
			</li>
			<?php // whitespace before field name looks odd but fixes chrome bug selecting all text in row ?>
			<li class="li-field-name"> <?php echo esc_html( $field['name'] ); ?></li>
			<li class="li-field-type"> <?php echo esc_html( $field_type_label ); ?></li>
		</ul>
	</div>

	<div class="settings">
		<div class="acf-field-editor">
			<div class="acf-field-settings acf-fields">

				<ul class="acf-field-settings-tab-bar">

				<?php
					$tabs = [
						'general', 'validation', 'presentation', 'conditional-logic'
					];
					foreach( $tabs as $i => $tab ){
						if( $i == 0 ){
							$tab_name = $tab . ' active';
						}else{
							$tab_name = $tab;
						}
						?>
						<li class="acf-settings-type-<?php echo $tab_name; ?>">
							<a href="#" class="acf-tab-button acf-settings-type-<?php echo $tab; ?>" data-placement="top" data-endpoint="0" data-tab="<?php echo $tab; ?>"><?php echo __( ucwords( $tab ), FEA_NS ) ?></a>
						</li>
						<?php
					}
				?>

					
				</ul>

				<div class="acf-field-settings-main acf-field-settings-main-general active">
				<?php

				$types = acf_get_grouped_field_types();
				unset($types[__('Layout',FEA_NS)]['repeater']);
				unset($types[__('Layout',FEA_NS)]['flexible_content']);
				$icon_path = '<span class="dashicons dashicons-admin-page"></span>';
				// type
				acf_render_field_setting(
					$field,
					array(
						'label'        => __( 'Field Shortcode', FEA_NS ),
						'instructions' => '',
						'message'	   => '<code>[frontend_admin field='.$short_key.' edit=false]</code>'. sprintf( 
							'<button type="button" class="copy-shortcode" data-prefix="frontend_admin field" data-value="%1$s">%2$s %3$s</button>',
							$short_key,
							$icon_path,
							__( 'Copy Code', FEA_NS )
						),	
						'type'         => 'message',
						'name'         => 'shortcode_message',
					),
					true
				);
				// type
				acf_render_field_setting(
					$field,
					array(
						'label'        => __( 'Field Type', 'acf' ),
						'instructions' => '',
						'ui' 		   => 1,
						'type'         => 'select',
						'name'         => 'type',
						'choices'      => $types,
						'class'        => 'field-type',
					),
					true
				);

				// label
				acf_render_field_setting(
					$field,
					array(
						'label'        => __( 'Field Label', 'acf' ),
						'instructions' => __( 'This is the name which will appear on the EDIT page', 'acf' ),
						'name'         => 'label',
						'type'         => 'text',
						'class'        => 'field-label',
					),
					true
				);
				acf_render_field_setting( 
					$field, array(
						'label'			=> __( 'Hide Field Label', FEA_NS ),
						'instructions'	=> __( 'Lets you hide the field\'s label including HTML markup.', FEA_NS ),
						'name'			=> 'field_label_hide',
						'type'			=> 'true_false',
						'ui'			=> 1,
					),
					true 
				);

				// name
				acf_render_field_setting(
					$field,
					array(
						'label'        => __( 'Field Name', 'acf' ),
						'instructions' => __( 'Single word, no spaces. Underscores and dashes allowed', 'acf' ),
						'name'         => 'name',
						'type'         => 'text',
						'class'        => 'field-name',
					),
					true
				);

				
				$data_types = array(
					'none' => __( 'Submission Only', FEA_NS ),
					'post' => __( 'Post', FEA_NS ),
					'user' => __( 'User', FEA_NS ),
					'term' => __( 'Term', FEA_NS ),
					'options' => __( 'Site Options', FEA_NS ),
				);
				if ( class_exists( 'woocommerce' ) ){
					$data_types['product'] = __( 'Product', FEA_NS );
				}
				acf_render_field_setting(
					$field,
					array(
						'name' => 'custom_fields_save',
						'label' => __( 'Save Custom Fields to...', FEA_NS ),
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'choices' => $data_types,
						'allow_null' => 1,	
						'placeholder' => __( 'Form Default', FEA_NS ),
					),
					true
				);

				// 3rd party settings
				do_action( 'acf/render_field_settings', $field );

				// type specific settings
				?>
					<div class="acf-field-type-settings" data-parent-tab="general">
						<?php
						do_action( "acf/render_field_settings/type={$field['type']}", $field );
						do_action( "acf/render_field_general_settings/type={$field['type']}", $field );
						?>
					</div>
				</div><!-- /.acf-field-settings-main-general -->

			
				<div class="acf-field-settings-main acf-field-settings-main-validation">
					<?php
					// required
					acf_render_field_setting(
						$field,
						array(
							'label'        => __( 'Required', 'acf' ),
							'instructions' => '',
							'type'         => 'true_false',
							'name'         => 'required',
							'ui'           => 1,
							'class'        => 'field-required',
						),
						true
					);
					?>

					<div class="acf-field-type-settings" data-parent-tab="validation">
						<?php do_action( "acf/render_field_validation_settings/type={$field['type']}", $field ); ?>
					</div>
				</div><!-- /.acf-field-settings-main-validation -->

		
				<div class="acf-field-settings-main acf-field-settings-main-presentation">
					<?php
					acf_render_field_setting(
						$field,
						array(
							'label'        => __( 'Instructions', 'acf' ),
							'instructions' => __( 'Instructions for authors. Shown when submitting data', 'acf' ),
							'type'         => 'textarea',
							'name'         => 'instructions',
							'rows'         => 5,
						),
						true
					);

				
					?>
					<div class="acf-field-type-settings" data-parent-tab="presentation">
						<?php do_action( "acf/render_field_presentation_settings/type={$field['type']}", $field ); ?>
					</div>
					<div class="acf-label">
						<label><?php _e( 'Wrapper Attributes', 'acf' ); ?></label>
					</div>
					<?php
					
					acf_render_field_wrap(
						array(
							'label'        => '',
							'instructions' => '',
							'type'         => 'number',
							'name'         => 'width',
							'prefix'       => $field['prefix'] . '[wrapper]',
							'value'        => $field['wrapper']['width'],
							'prepend'      => __( 'width', 'acf' ),
							'append'       => '%',
							'wrapper'      => array(
								'width' => '33%',
							),
						),
						'div'
					);
					acf_render_field_wrap(
						array(
							'label'        => '',
							'instructions' => '',
							'type'         => 'text',
							'name'         => 'class',
							'prefix'       => $field['prefix'] . '[wrapper]',
							'value'        => $field['wrapper']['class'],
							'prepend'      => __( 'class', 'acf' ),
							'wrapper'      => array(
								'width' => '33%',
							),
						),
						'div'
					);

					acf_render_field_wrap(
						array(
							'label'        => '',
							'instructions' => '',
							'type'         => 'text',
							'name'         => 'id',
							'prefix'       => $field['prefix'] . '[wrapper]',
							'value'        => $field['wrapper']['id'],
							'prepend'      => __( 'id', 'acf' ),
							'wrapper'      => array(
								'width' => '33%',
							),
						),
						'div'
					);
					?>
				</div><!-- /.acf-field-settings-main-presentation -->

				<?php

				$conditional_logic_class = $conditional_logic_text = '';
				if ( isset( $field['conditional_logic'] ) && is_array( $field['conditional_logic'] ) && count( $field['conditional_logic'] ) > 0 ) {
					$conditional_logic_class = ' is-enabled';
					$conditional_logic_text  = __( 'Active', 'acf' );
				}

				?>
				<div class="acf-field-settings-main acf-field-settings-main-conditional-logic">
					<?php $fea_instance->form_builder->get_view( 'field-conditional-logic', array( 'field' => $field ) ); ?>
				
					<?php do_action( "acf/render_field_conditional_logic_settings/type={$field['type']}", $field ); ?>
				</div><!-- /.acf-field-settings-main-conditional-logic -->

				<div class="acf-field-settings-footer">
					<a class="button close-field edit-field" title="<?php _e( 'Close Field', 'acf' ); ?>" href="#"><?php _e( 'Close Field', 'acf' ); ?></a>
				</div>
			</div>
		</div>
	</div>
	

	
</div>
