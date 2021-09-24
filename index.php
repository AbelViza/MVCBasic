
<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=vraemorg', 'root', '');
    foreach($mbd->query('SELECT * from organizacion') as $fila) {
        var_dump($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
