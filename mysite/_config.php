<?php

global $project;
$project = 'mysite';

require_once 'conf/ConfigureFromEnv.php';

// Set the site locale
i18n::set_locale('en_US');

HtmlEditorConfig::get('article-page')
    ->setOptions([
        'friendly_name' => 'Default CMS',
        'priority' => '50',
        'body_class' => 'typography',
        'document_base_url' => isset($_SERVER['HTTP_HOST']) ? Director::absoluteBaseURL() : null,
        'cleanup_callback' => "sapphiremce_cleanup",
    ])
    ->disablePlugins('contextmenu','table','emotions')
    ->removeButtons(
        'bold', 'italic', 'underline', 'strikethrough', 'separator',
        'justifyleft', 'justifycenter', 'justifyright', 'justifyfull',
        'formatselect', 'separator', 'bullist', 'numlist', 'outdent',
        'indent', 'blockquote', 'hr', 'charmap', 'undo', 'redo', ',separator',
        'cut', 'copy', 'paste', 'pastetext', 'pasteword', 'separator',
        'advcode', 'search', 'replace', 'selectall', 'visualaid', 'separator', 'tablecontrols'
    );
