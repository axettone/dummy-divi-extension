<?php

class DUDE_HelloWorld extends ET_Builder_Module {

	public $slug       = 'dude_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://www.itestense.it',
		'author'     => 'Paolo Niccolò Giubelli <paoloniccolo.giubelli@itestense.it>',
		'author_uri' => 'https://www.itestense.it',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'dude-dummy-divi-extension' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'dude-dummy-divi-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dude-dummy-divi-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DUDE_HelloWorld;
