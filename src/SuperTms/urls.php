<?php
$paths = array(
);

$api = array();

foreach ($paths as $path) {
    $myApi = include $path;
    $api = array_merge($api, $myApi);
}

return $api;

