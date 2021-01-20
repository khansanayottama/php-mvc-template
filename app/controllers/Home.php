<?php

class Home
{
   public function index()
   {
      // OPTIONS
      $data['title'] = 'Home';

      // PAGE VIEW
      Controller::view('templates/header', $data);
      Controller::view('home/index');
      Controller::view('templates/footer');
   }
}
