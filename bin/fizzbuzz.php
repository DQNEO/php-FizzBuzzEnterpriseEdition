#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use DQNEO\FizzBuzzEnterpriseEdition\CLI;

$status = CLI::main($argc, $argv);
exit($status);
