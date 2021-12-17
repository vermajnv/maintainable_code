<?php

namespace pages;

class ContactPage 
{
    private $title, $header, $content, $footer;

    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->header = $data['header'];
        $this->content = $data['content'];
        $this->footer = $data['footer'];
    }

    public function buildContactPage()
    {
        $page = $this->contactPageHeader() . PHP_EOL;
        $page .= $this->contactPageContent(). PHP_EOL;
    }

    private function contactPageHeader()
    {
        return "<h1> $this->header";
    }

    private function contactPageContent()
    {
        return "<h1> $this->content";
    }
}
