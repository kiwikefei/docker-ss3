<?php

class TestController extends Controller
{
    private static $allowed_actions = [
        'test'  => true,
        'index' => '->canView',
    ];

    public function index()
    {
        return 'hello world';
    }
    public function canView()
    {
        return true;
    }

}
