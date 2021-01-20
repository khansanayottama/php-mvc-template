<?php

class App
{
   private $controller = 'Home';
   private $method = 'index';
   private $params = [];

   public function __construct()
   {
      $url = $this->parseURL();

      // ===== CONTROLLER =====
      // jika url tidak dimasukkan maka akan ke halaman default(index)
      if (!$url) {
         $url = [$this->controller];
      }

      // jika classnya ada maka isi property controller sesuai request
      if (file_exists('app/controllers/' . $url[0] . '.php')) {
         $this->controller = $url[0];
         unset($url[0]);
      }

      // meminta contoller sesuai dengan property controller
      require_once 'app/controllers/' . $this->controller . '.php';
      // instansiasi class controller
      $this->controller = new $this->controller;

      // ===== METHOD =====
      // jika methodnya ada maka isi property controller sesuai request
      if (isset($url[1])) {
         if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
         }
      }

      // ===== PARAMS =====
      // jika params ada maka isi property params sesuai dengan request
      if (!empty($url)) {
         $this->params = array_values($url);
      }

      // menjalankan method controller dan mengirimkan parameter jika ada
      call_user_func_array([$this->controller, $this->method], $this->params);
   }

   private function parseURL()
   {
      if (isset($_GET['url'])) {
         // menghapus '/' diakhir url
         $url = rtrim($_GET['url'], '/');
         // filter dasar
         $url = filter_var($url, FILTER_SANITIZE_URL);
         // memecah url request menjadi array
         $url = explode('/', $url);
         return $url;
      }
   }
}
