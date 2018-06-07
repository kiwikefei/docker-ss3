<?php

class TestController extends Controller
{
    public function index()
    {
        return 'hello world';
    }
    public function canView()
    {
        return false;
    }
    public function foo()
    {
        return 'foo';
    }
    public function bar()
    {
        return 'bar';
    }
    public function baz()
    {
        return 'baz';
    }
}
