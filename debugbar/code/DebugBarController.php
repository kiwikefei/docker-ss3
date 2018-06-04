<?php

/**
 * A open handler controller for DebugBar
 *
 * @author Koala
 */
class DebugBarController extends Controller
{

    public function index(SS_HTTPRequest $request)
    {
        if (!DebugBar::config()->get('enable_storage')) {
            return $this->httpError(404, 'Storage not enabled');
        }
        $debugbar = DebugBar::getDebugBar();
        if (!$debugbar) {
            return $this->httpError(404, 'DebugBar not enabled');
        }
        $openHandler = new DebugBar\OpenHandler($debugbar);
        $openHandler->handle();
        exit(); // Handle will echo and set headers
    }
}
