<?php 

$r=new Redis();
// $r->connect("127.0.0.1", 6379);
$r->connect("172.17.0.2", 6379);

$r->set("test",'success');
print( $r->get('test'));
