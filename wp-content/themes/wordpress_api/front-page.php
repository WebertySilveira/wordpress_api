<?php 
$request = wp_remote_get('http://127.0.0.1:8000/api/messages');

$body = wp_remote_retrieve_body( $request );
$datas = json_decode($body);
?>
<pre>
<?php
foreach ($datas as $data) : 
    echo 'name -> ' . $data->name . '<br>';
    echo 'message -> ' . $data->message;
    echo '<br><br>';
endforeach;    
?>
</pre>
