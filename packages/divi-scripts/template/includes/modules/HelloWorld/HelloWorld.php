<?php

class __PREFIX_HelloWorld extends ET_Builder_Module {

	public $slug       = '__prefix_hello_world';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Hello World', '<GETTEXT_DOMAIN>' );
	}

	public function get_fields() {
		return array(
			'content_new' => array(
				'label'           => esc_html__( 'Content', '<GETTEXT_DOMAIN>' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', '<GETTEXT_DOMAIN>' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props->content_new );
	}
}

new __PREFIX_HelloWorld;
