<?php


namespace App;


class Output
{
    protected $formatter = null;

    public function __construct($formatter)
    {
        $this->formatter = $formatter;
    }

    public function setStrategy($formatter)
    {
        $this->formatter = $formatter;
    }

    public function display()
    {

        return $this->formatter;
    }
}