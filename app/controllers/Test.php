<?php
class Test
{
   public function index()
   {
      $data['title'] = 'Test';
      $data['css'] = Controller::model('set_model')->setCSS('test', '1', '2');
      $data['js'] = Controller::model('set_model')->setJS('test', '1', '2');

      Controller::view('templates/header', $data);
      Controller::view('test/index', $data);
      Controller::view('templates/footer', $data);
   }
}
