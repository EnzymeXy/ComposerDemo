<?php namespace core;

class view {
    protected $file;

    protected $vars = [ ];

    public function make ( $file ) {
        $this->file = 'view/' . $file . '.html';
        return $this;
    }

    public function with ( $name , $value ) {
        $this->vars[$name] = $value;
        return $this;
    }

    public function __toString () {
        extract ( $this->vars );
        include $this->file;
        return '';
    }
}
