<?php
class Test
{
   public function index()
   {
      $data['title'] = 'Test';
      $data['css'] = Controller::model('set_model')->setCSS('test');
      $data['js'] = Controller::model('set_model')->setJS('test');

      Controller::view('templates/header', $data);
      Controller::view('test/index', $data);
      Controller::view('templates/footer', $data);
   }
}
