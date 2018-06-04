<?php

class ArticleHolder extends Page
{
    // in mysite/_config/config.yml
    // ArticleHolder:
    //   allowed_children: ArticlePage
    //   can_be_root: true
    // private static variable is identical to yml, however yml has higher priority.
    private static $allowed_children = [ 'ArticlePage' ];

    private static $has_many = ['Categories' => 'ArticleCategory'];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab(
            'Root.Categories',
            GridField::create(
                'Categories',
                'Article Categories',
                $this->Categories(),
                GridFieldConfig_RecordEditor::create()
            )
        );
        return $fields;
    }

}

class ArticleHolder_Controller extends Page_Controller
{


}