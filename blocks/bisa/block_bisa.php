<?php
require_once ('bisa_lib.php');

class block_bisa extends block_base {

	function init() {
		$this->title = get_string ( 'pluginname', 'block_bisa' );
	}

	function get_content() {
		if ($this->content !== null) {
			return $this->content;
		}

		if (empty ( $this->instance )) {
			$this->content = '';
			return $this->content;
		}

		$this->content = new stdClass ();
		$this->content->text = '';
		$this->content->footer = '';

		$this->content->text = get_contenido_bisa ( $this->page->course->idnumber . $this->page->course->shortname . '' );
		if ($this->content->text == '') {
			$this->content = NULL;
		}
		return $this->content;
	}

	public function applicable_formats() {
		return array (
				'course' => true
		);
	}

}
