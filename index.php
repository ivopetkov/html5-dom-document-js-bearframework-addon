<?php

/*
 * HTML5 DOM Document JS addon for Bear Framework
 * https://github.com/ivopetkov/html5-dom-document-js-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

use \BearFramework\App;

$app = App::get();
$context = $app->contexts->get(__DIR__);

$app->clientPackages
    ->add('html5DOMDocument', function (IvoPetkov\BearFrameworkAddons\ClientPackage $package) use ($context) {
        $package->addJSCode(require_once __DIR__ . '/assets/html5DOMDocument.min.js.php');
        $package->get = 'return html5DOMDocument;';
    });
