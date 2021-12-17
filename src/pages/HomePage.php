<?php

namespace pages;

use contract\WebPage;

class HomePage implements WebPage 
{
    private $title, $header, $content, $footer;

    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->header = $data['header'];
        $this->content = $data['content'];
        $this->footer = $data['footer'];
    }

    public function buildWebPage()
    {
        $page = $this->homePageHeader() . PHP_EOL;
        $page .= $this->homePageContent(). PHP_EOL;
    }

    private function homePageHeader()
    {
        return "<h1> $this->header";
    }

    private function homePageContent()
    {
        return "<h1> $this->content";
    }
}
