<?php

class ArticleHolder extends Page
{
    // in mysite/_config/config.yml
    // ArticleHolder:
    //   allowed_children: ArticlePage
    //   can_be_root: true
    // private static variable is identical to yml, however yml has higher priority.
    private static $allowed_children = [ 'ArticlePage' ];

}

class ArticleHolder_Controller extends Page_Controller
{


}