<?php
//require_once __DIR__ . '/Acme/FizzBuzz.php';
//require_once __DIR__ . '/Acme/Writer.php';

spl_autoload_register(function($class){
                          $slashed = strtr($class, '\\', '/');
                          require_once __DIR__ . '/' . $slashed . '.php';
                      });
