<?php 
    require_once __DIR__ . '/classes/Guest.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/Card.php';
    require_once __DIR__ . '/classes/Product.php';
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
        
        $productBasic = new Product("Best Cat", "Food", 22.99);

        $card1 = new Card("1111222233334444", "Guest", 10, 24, "545");
        $card2 = new Card("5555666677778888", "Pippo", 12, 26, "808");

        $guest = new Guest($card1);
        $pippo = new RegisteredUser("Pippo", "pippo@mail.it", "topolino", $card2);

        var_dump($guest);
        var_dump($pippo);
        var_dump($productBasic);
    
    ?>

    <h2><?php echo $guest->getUserName(); ?></h2>
        <ul>
            <h4>Payment Card:</h4>
            <li>
                <strong>Number: </strong>
                <?php echo $card1->getCardNumber(); ?>
            </li>
            <li>
                <strong>Owner: </strong>
                <?php echo $card1->getOwnerName(); ?>
            </li>
            <li>
                <strong>Expiration month: </strong>
                <?php echo $card1->getExpirationMonth(); ?>
            </li>
            <li>
                <strong>Expiration year: </strong>
                <?php echo $card1->getExpirationYear(); ?>
            </li>
            <li>
                <strong>CVV: </strong>
                <?php echo $card1->getCvv(); ?>
            </li>
        </ul>

    <h2><?php echo $pippo->getUserName(); ?></h2>
        <ul>
            <li>Email: <?php echo $pippo->getUserEmail(); ?></li>
            <li>Password: <?php echo $pippo->getUserPassword(); ?></li>

            <h4>Payment Card:</h4>
            <li>
                <strong>Number: </strong>
                <?php echo $card2->getCardNumber(); ?>
            </li>
            <li>
                <strong>Owner: </strong>
                <?php echo $card2->getOwnerName(); ?>
            </li>
            <li>
                <strong>Expiration month: </strong>
                <?php echo $card2->getExpirationMonth(); ?>
            </li>
            <li>
                <strong>Expiration year: </strong>
                <?php echo $card2->getExpirationYear(); ?>
            </li>
            <li>
                <strong>CVV: </strong>
                <?php echo $card2->getCvv(); ?>
            </li>

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