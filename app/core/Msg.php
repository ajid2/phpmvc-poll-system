<?php

class Msg{

  public static function setMSG($pesan, $tipe){

    $_SESSION['msg'] = [
      'pesan' => $pesan,
      'tipe'  => $tipe
    ];
  }

  public static function show(){
    if(isset($_SESSION['msg'])){
      echo '<div id="msg" class="msg">
              <div class="'. $_SESSION['msg']['tipe'] .'">
                '. $_SESSION['msg']['pesan'] .'
              </div>
            </div>';

      unset($_SESSION['msg']);
    }
  }

}
