<?php

class Home extends Controller
{
   public function index()
   {
      // OPTIONS
      $data['title'] = 'Home';

      // PAGE VIEW
      $this->view('templates/header', $data);
      $this->view('home/index');
      $this->view('templates/footer');
   }
}
