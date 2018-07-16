

<?php


$this->registerJs("
 var socket = io.connect('http://localhost:3001');
 
 socket.on('new_order', function(data){
    console.log();
 });
", \yii\web\View::POS_END);
?>
