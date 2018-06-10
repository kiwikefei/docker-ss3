<?php
class Product extends DataObject
{
    private static $db = [
        'Name'  => 'Varchar',
        'ProductCode'   => 'Varchar',
        'Price' => 'Currency'
    ];
    private static $has_one = [
        'Category'  => 'Category'
    ];

    private static $summary_fields = [
        'Name'  => 'Name',
        'Price' => 'Price',
        'Category.Title'    => 'Category Title'
    ];



}