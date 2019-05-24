<?php

namespace BasicLaravel\Services;

class TwitterConnection
{
    protected $apiKey;

    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}

