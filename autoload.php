<?php
spl_autoload_register(function ($class) {
                          $elememts = explode('\\', $class);
                          array_shift($elememts);
                          array_shift($elememts);
                          require_once __DIR__ . '/src/' . join('/', $elememts) . '.php';
                      });
