<?php

$url = include 'config.php';

$url = 'https://stag.api.com';

class API {
    protected $baseUrl = '';

    public function __construct ($url) {
        $this->baseUrl = $url;
    }
}

$client = new API($url);
