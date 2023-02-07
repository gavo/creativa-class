<?php

class block_textosdigitales extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_textosdigitales');
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        if ($this->page->course != NULL && ($this->page->course->idnumber != NULL || $this->page->course->shortname != NULL)) {
            $data = file_get_contents('https://creativaclass.com/libros/filedir.php?code=' . $this->page->course->idnumber . $this->page->course->shortname);
            $this->content->text = $data;
        }
        if ($this->content->text == "") {
            $this->content = NULL;
        }
        return $this->content;
    }

    public function applicable_formats() {
        return array('course' => true);
    }

}
