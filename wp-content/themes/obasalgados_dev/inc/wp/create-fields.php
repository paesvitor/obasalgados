<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5983c19e89305',
	'title' => 'Slider',
	'fields' => array (
		array (
			'key' => 'field_5983c1adacdd6',
			'label' => 'Imagem do slider',
			'name' => 'slider_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5983e11fd4896',
			'label' => 'Usar texto em HTML',
			'name' => 'html_text',
			'type' => 'true_false',
			'instructions' => 'Defina se o slider terá texto em HTML',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_5983c1dcacdd7',
			'label' => 'Titulo do slider',
			'name' => 'slider_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5983e11fd4896',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5983c1f1acdd8',
			'label' => 'Texto do slider',
			'name' => 'slider_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5983e11fd4896',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
		),
		array (
			'key' => 'field_5983c21dacdd9',
			'label' => 'Exibir botão no slider',
			'name' => 'show_button',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Exibir botão no slider?',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_5983c279acdda',
			'label' => 'Botão do slider',
			'name' => 'slider_button',
			'type' => 'text',
			'instructions' => 'Insira o texto que será exibido no slider',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5983c21dacdd9',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Botão',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 30,
		),
		array (
			'key' => 'field_5983c2f3acddb',
			'label' => 'URL do botão',
			'name' => 'button_url',
			'type' => 'url',
			'instructions' => 'Insira a URL do botão',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5983c21dacdd9',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;