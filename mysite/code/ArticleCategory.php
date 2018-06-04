<?php
class ArticleCategory extends DataObject
{

    private static $db = [
       'Title'      => 'Varchar',
    ];
    private static $has_one = ['ArticleHolder' => 'ArticleHolder'];

    private static $belongs_many_many = [
        'Articles'  => 'ArticlePage'
    ];
    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title')
        );
        return $fields;
    }
}