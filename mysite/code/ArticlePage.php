<?php
class ArticlePage extends Page
{
    private static $db = [
        'Date'      => 'Date',
        'Teaser'    => 'Text',
        'Author'    => 'Varchar'
    ];
    private static $can_be_root = false;

    public function getCMSFields()
    {
        $fields =  parent::getCMSFields(); // TODO: Change the autogenerated stub
        $fields->addFieldToTab(
            'Root.Main',
            DateField::create('Date', 'Date of article')
                ->setConfig('showcalendar', true),
            'Content'
        );
        $fields->addFieldToTab(
            'Root.Main',
            TextareaField::create('Teaser'),
            'Content'
        );
        $fields->addFieldToTab(
            'Root.Main',
            TextField::create('Author', 'Author of article')
                ->setDescription('If multiple authors, separate with commas')
                ->setMaxLength(50),
            'Content'
        );
        return $fields;
    }
}

class ArticlePage_Controller extends Page_Controller
{

}