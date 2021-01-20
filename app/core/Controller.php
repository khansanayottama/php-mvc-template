<?php

class Controller
{
   public static function view($view, $data = [])
   {
      require_once 'app/views/' . $view . '.php';
   }

   public static function model($model)
   {
      require_once 'app/models/' . $model . '.php';
   }
}
