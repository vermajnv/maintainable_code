<?php

require('./vendor/autoload.php');

use pages\{HomePage, ContactPage};

function printWebPage($page) {
    $pageContent = $page->buildWebPage();
    echo $pageContent;
}

echo "-----------Printing Home Page---------" . PHP_EOL;

printWebPage(new HomePage(
    [
        'title' => 'New Home Page',
        'header' => 'This is page Header',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus rerum exercitationem consequatur quia, alias dolores modi. Aperiam ab ipsa maxime consequuntur quo voluptatem perspiciatis! Voluptatum consequuntur ab accusantium. Eius, ad!',
        'footer' => 'This is footer'
    ]
));

printWebPage(new ContactPage(
    [
        'title' => 'New Contact Page',
        'header' => 'This is page Header',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus rerum exercitationem consequatur quia, alias dolores modi. Aperiam ab ipsa maxime consequuntur quo voluptatem perspiciatis! Voluptatum consequuntur ab accusantium. Eius, ad!',
        'footer' => 'This is footer'
    ]
));