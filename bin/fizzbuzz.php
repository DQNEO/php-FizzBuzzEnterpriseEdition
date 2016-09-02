#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use DQNEO\FizzBuzzEnterpriseEdition\Console\Command;

$status = Command::main($argc, $argv);
exit($status);
