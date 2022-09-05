<?php 
    require_once __DIR__ . '/classes/Guest.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/Card.php';
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
        
        $card1 = new Card("1111222233334444", "Guest", 10, 24, "545");
        $card2 = new Card("5555666677778888", "Pippo", 12, 26, "808");

        $guest = new Guest($card1);
        $pippo = new RegisteredUser("Pippo", "pippo@mail.it", "topolino", $card2);

        var_dump($guest);
        var_dump($pippo);
    
    ?>

    <h2><?php echo $guest->getUserName(); ?></h2>
        <ul>
            <li>No info</li>
        </ul>

    <h2><?php echo $pippo->getUserName(); ?></h2>
        <ul>
            <li><?php echo $pippo->getUserEmail(); ?></li>
            <li><?php echo $pippo->getUserPassword(); ?></li>
        </ul>
    
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