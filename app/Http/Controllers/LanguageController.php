<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function show($locale)
    {
        // $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        $files   = glob(resource_path('lang/' . $locale . '/*.php'));
        $strings = [];

        foreach ($files as $file) {
            $name = basename($file, '.php');
            $strings[$name] = require $file;
        }

        $contents = 'window.i18n = ' . json_encode($strings, config('app.debug', false) ? JSON_PRETTY_PRINT : 0) . ';';
        $response = \Response::make($contents, 200);
        $response->header('Content-Type', 'application/javascript');

        return $response;
    }
}
