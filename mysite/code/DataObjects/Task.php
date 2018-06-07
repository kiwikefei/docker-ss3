<?php

class Task extends DataObject
{
    private static $db = [
        'Title' => 'Varchar',
        'Description'   => 'Text'
    ];
}