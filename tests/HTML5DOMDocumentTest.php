<?php

/*
 * HTML5 DOM Document JS addon for Bear Framework
 * https://github.com/ivopetkov/html5-dom-document-js-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class HTML5DOMDocumentTest extends BearFramework\AddonTests\PHPUnitTestCase
{

    /**
     * 
     */
    public function testOutput()
    {
        $app = $this->getApp();

        $html = '<html><head><link rel="client-packages-embed" name="html5DOMDocument"></head></html>';
        $result = $app->clientPackages->process($html);

        $this->assertTrue(strpos($result, '<script>var html5DOMDocument=') !== false);
    }
}
