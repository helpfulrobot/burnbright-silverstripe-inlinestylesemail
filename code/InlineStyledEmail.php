<?php

class InlineStyledEmail extends Email
{

    protected $css = null;

    protected function parseVariables($isPlain = false)
    {
        parent::parseVariables($isPlain);
        $this->body = InlineStyler::convert($this->body, $this->css);
    }

    public function setCSS($css)
    {
        $this->css = $css;
    }
}
