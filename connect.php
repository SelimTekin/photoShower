<?php
class connect{
   public $url = "";
   function __construct($url=null) {
      if(isset($url)){
         $this->url = $url;
      }else{
         throw new Exception("Database bulunamadı");
      }
   }

   public function grab($url, $method, $par=null){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      if(isset($par)){
         curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
      }
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 120);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      $html = curl_exec($ch);
      return $html;
      curl_close($ch);
   }

   public function get($dbPath){
      $path = $this->url."/$dbPath.json";
      $grab = $this->grab($path, "GET");
      return $grab;
   }

   public function insert($table, $data){
      $path = $this->url."/$table.json";
      $grab = $this->grab($path, "POST", json_encode($data));
      return $grab;
   }

   public function update($table, $uniqueID, $data){
      $path = $this->url."/$table/$uniqueID.json";
      $grab = $this->grab($path, "PATCH", json_encode($data));
      return $grab;
   }

   public function delete($table, $uniqueID){
      $path = $this->url."/$table/$uniqueID.json";
      $grab = $this->grab($path, "DELETE");
      return $grab;
   }

}
