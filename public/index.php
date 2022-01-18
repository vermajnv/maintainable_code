<?php

require('../vendor/autoload.php');

use App\pages\HomePage as HomePage;
use App\pages\ContactPage;
use App\contract\WebPage;
use App\validator\{RequiredValidator, NumericValidator, StringValidator};
function printWebPage(WebPage $page) {
    $pageContent = $page->buildWebPage();
    echo $pageContent;
}

echo "-----------Printing Home Page---------" . PHP_EOL;

// printWebPage(new HomePage(
//     [
//         'title' => 'This is title',
//         'header' => 'This is page Header',
//         'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus rerum exercitationem consequatur quia, alias dolores modi. Aperiam ab ipsa maxime consequuntur quo voluptatem perspiciatis! Voluptatum consequuntur ab accusantium. Eius, ad!',
//         'footer' => 'This is footer'
//     ]
// ));

// printWebPage(new ContactPage(
//     [
//         'title' => 'New Contact Page',
//         'header' => 'This is page Header',
//         'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus rerum exercitationem consequatur quia, alias dolores modi. Aperiam ab ipsa maxime consequuntur quo voluptatem perspiciatis! Voluptatum consequuntur ab accusantium. Eius, ad!',
//         'footer' => 'This is footer'
//     ]
// ));

try {
    $validationResult = new RequiredValidator(
        new NumericValidator(
            new StringValidator()
        )
    );

    $result = $validationResult->validate(32);
    echo '<pre>';
    print_r($result);
} catch (\Throwable $th) {
    echo '<pre>';
    print_r($th);
}