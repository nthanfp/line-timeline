<?php
/**
* code by axec0de
*/
class lineTimeline {

   private $cookies;
  
   public function __construct($cookies) {
     $this->cookies = $cookies;
   }

   public function validCookies(){
      $mid    = '_deWM9skYE28Sz1lFybZ1fZcSRCnrliYb_sWBujQ';
      $postid = '1152664482610048542';
      $react  = '2';
      $share  = 'false';
      $data = '{"contentId":"'.$postid.'","actorId":"'.$mid.'","likeType":"100'.$react.'","sharable":'.$share.'}';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://timeline.line.me/api/like/create.json?sourceType=TIMELINE&homeId=".$mid);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
      $headers = array();
      $headers[] = "Host: timeline.line.me";
      $headers[] = "Origin: https://timeline.line.me";
      $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; LG-K350 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36";
      $headers[] = "Content-Type: application/json;charset=UTF-8";
      $headers[] = "Accept: application/json, text/plain, */*";
      $headers[] = "X-Timeline-Webversion: 1.10.3";
      $headers[] = "X-Line-Acceptlanguage: en";
      $headers[] = "Save-Data: on";
      $headers[] = "Referer: https://timeline.line.me/";
      $headers[] = "Accept-Language: en-US,en;q=0.8,id;q=0.6";
      $headers[] = "Cookie: ".$this->cookies."";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);
      return json_decode($result);
   }

   public function getTimeline(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://timeline.line.me/");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
      $headers = array();
      $headers[] = "Host: timeline.line.me";
      $headers[] = "Origin: https://timeline.line.me";
      $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; LG-K350 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36";
      $headers[] = "Content-Type: application/json;charset=UTF-8";
      $headers[] = "Accept: application/json, text/plain, */*";
      $headers[] = "X-Timeline-Webversion: 1.10.3";
      $headers[] = "X-Line-Acceptlanguage: en";
      $headers[] = "Save-Data: on";
      $headers[] = "Referer: https://timeline.line.me/";
      $headers[] = "Accept-Language: en-US,en;q=0.8,id;q=0.6";
      $headers[] = "Cookie: ".$this->cookies."";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);
      return $result;
   }

   public function getUserTimeline($mid){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://timeline.line.me/user/".$mid);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
      $headers = array();
      $headers[] = "Host: timeline.line.me";
      $headers[] = "Origin: https://timeline.line.me";
      $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; LG-K350 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36";
      $headers[] = "Content-Type: application/json;charset=UTF-8";
      $headers[] = "Accept: application/json, text/plain, */*";
      $headers[] = "X-Timeline-Webversion: 1.10.3";
      $headers[] = "X-Line-Acceptlanguage: en";
      $headers[] = "Save-Data: on";
      $headers[] = "Referer: https://timeline.line.me/";
      $headers[] = "Accept-Language: en-US,en;q=0.8,id;q=0.6";
      $headers[] = "Cookie: ".$this->cookies."";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);
      return $result;
   }
   
   public function likePost($mid, $postid, $react = 0, $share){

      if ($react == 0) {
        $react = mt_rand(1, 6);
    }

      $data = '{"contentId":"'.$postid.'","actorId":"'.$mid.'","likeType":"100'.$react.'","sharable":'.$share.'}';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://timeline.line.me/api/like/create.json?sourceType=TIMELINE&homeId=".$mid);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
      $headers = array();
      $headers[] = "Host: timeline.line.me";
      $headers[] = "Origin: https://timeline.line.me";
      $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0; LG-K350 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36";
      $headers[] = "Content-Type: application/json;charset=UTF-8";
      $headers[] = "Accept: application/json, text/plain, */*";
      $headers[] = "X-Timeline-Webversion: 1.10.3";
      $headers[] = "X-Line-Acceptlanguage: en";
      $headers[] = "Save-Data: on";
      $headers[] = "Referer: https://timeline.line.me/";
      $headers[] = "Accept-Language: en-US,en;q=0.8,id;q=0.6";
      $headers[] = "Cookie: ".$this->cookies."";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);
      return json_decode($result);
   }
}