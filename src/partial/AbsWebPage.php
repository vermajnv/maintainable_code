<?php

namespace App\partial;

use App\contract\WebPage;

// Partial class
abstract class AbsWebPage implements WebPage {
    
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    final public function buildWebPage()
    {
        $page = $this->pageHeader() . PHP_EOL;
        $page .= $this->pageContent(). PHP_EOL;
        $page .= $this->pageTitle(). PHP_EOL;
        $page .= $this->pageFooter(). PHP_EOL;
        return $page;
    }

    protected function pageHeader()
    {
        return "<h1> $this->header";
    }

    protected function pageTitle()
    {
		return "<h1> $this->title";
    }

	protected function pageFooter() {
		return "<h1> $this->footer";
	}

    abstract protected function pageContent();
}