<?php 
    require_once __DIR__ . '/classes/Guest.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

    <?php 
    
        $guest = new Guest;
        $pippo = new RegisteredUser("Pippo", "pippo@mail.it", "topolino");

        var_dump($guest);
        var_dump($pippo);
    
    ?>
    
</body>
</html>

<!-- 

    L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.

    Modelli:

    Guest
    RegisteredUser

    CreditCard (da aggiungere alle proprietà dell'utente)

    Product
    
 -->