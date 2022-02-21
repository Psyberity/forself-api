<?php

$config = require_once('../webhooks/config.php');

if (isValid($config['email'], $config['secret'])) {
    exec('cd ../webhooks/ && php main.php');
}

function isValid(string $email, string $secret): bool
{
    if (!isset($_SERVER['HTTP_X_GITHUB_EVENT'])) return false;
    if ($_SERVER['HTTP_X_GITHUB_EVENT'] !== 'push') return false;
    if (!isset($_SERVER['CONTENT_TYPE'])) return false;
    if ($_SERVER['CONTENT_TYPE'] !== 'application/json') return false;

    $content = file_get_contents('php://input');
    if(empty($content)) return false;

    $data = json_decode($content, true);
    if (empty($data['repository']['owner']['email'])) return false;
    if ($data['repository']['owner']['email'] !== $email) return false;

    $hashData = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE']);
    if (count($hashData) !== 2) return false;
    $algo = $hashData[0];
    $hash = $hashData[1];
    if (!in_array($algo, hash_algos(), true)) return false;
    if (!hash_equals($hash, hash_hmac($algo, $content, $secret))) return false;

    return true;
}
