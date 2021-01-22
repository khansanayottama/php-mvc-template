<?php

class About
{
   public function index()
   {
      $data['title'] = 'About';
      Controller::view('templates/header', $data);
      Controller::view('about/index');
      Controller::view('templates/footer');
   }
}
