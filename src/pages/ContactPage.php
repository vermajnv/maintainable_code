<?php

namespace App\pages;

use App\partial\AbsWebPage;

class ContactPage extends AbsWebPage
{
    private $content;

    public function __construct($data)
    {
        parent::__construct($data['title']);
        $this->header = $data['header'];
        $this->content = $data['content'];
        $this->footer = $data['footer'];
    }

    protected function pageContent()
    {
        return "<h1> $this->content";
    }

}
