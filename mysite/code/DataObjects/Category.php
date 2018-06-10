<?php

class Category extends DataObject
{
    private static $db = [
        'Title' => 'Text'
    ];
    private static $has_many = [
        'Products'  => 'Product'
    ];
}