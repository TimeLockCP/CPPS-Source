<?php
class WhirlCP{
  public function handleCreateSocket(){
    try {
      $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

  public function handleBind(){
    socket_bind($sock, '0.0.0.0', 6112);
}
?>
