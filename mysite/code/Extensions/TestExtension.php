<?php
class TestExtension extends Extension
{
    private static $allowed_actions = [
        'index' => '->canView',
        'foo'   => false,
        'bar'
    ];
}