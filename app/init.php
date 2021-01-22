<?php

// RUN AUTOLOAD REGISTER CORE CLASS
spl_autoload_register(function ($class) 
{
   if(file_exists('app/core/' . $class . '.php')) {
      require_once 'app/core/' . $class . '.php';
   }
});

require_once 'app/config/config.php';
