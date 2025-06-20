<?php

namespace App\Config\Cache;

class LocalizationCache
{
    const BASE = "LOCALIZATION";

    const GET_KEY = self::BASE."_FIRST";
    const GET_EXPIRY = 60 * 60 * 24;

    const GET_ALL_KEY = self::BASE."_GET";
    const GET_ALL_EXPIRY = 60 * 60 * 24;

}
