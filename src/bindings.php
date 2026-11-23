<?php

use JsLocalization\Caching\ConfigCachingService;
use JsLocalization\Caching\MessageCachingService;
use JsLocalization\Utils\Helper;

$this->app->singleton('JsLocalizationHelper', function()
{
    return new Helper;
});

$this->app->singleton('JsLocalizationMessageCachingService', function()
{
    return new MessageCachingService;
});

$this->app->singleton('JsLocalizationConfigCachingService', function()
{
    return new ConfigCachingService();
});
