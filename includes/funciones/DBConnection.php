<pre>
<?php

try{
    $conn= new pdo('mysql:dbname=gdlwebcamp;host=localhost;charset=utf8', 'root', '');
    $conn->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo 'error al conectar ' + $e->getmessage();
}
?>
</pre>