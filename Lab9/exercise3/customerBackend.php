<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    $numCookies = $_GET['cookies'];
    $priceCookies = 1 * $numCookies;
    $numPies = $_GET['pies'];
    $pricePies = 2 * $numPies;
    $numCakes = $_GET['cakes'];
    $priceCakes = 3 * $numCakes;

    $shipChoice = $_GET['ship'];
    if($shipChoice == 'a')
    {
        $shipping = "Free 7 day";
        $shipPrice = 0;
    }
    if($shipChoice == 'b')
    {
        $shipping = "$50.00 over night";
        $shipPrice = 50;
    }
    if($shipChoice == 'c')
    {
        $shipping = "$5.00 three day";
        $shipPrice = 5;
    }

    $totalPrice = $shipPrice + $priceCookies + $pricePies + $priceCakes;

    echo '<h1>Bakery Receipt</h1>';
    echo 'Welcome, '.$username.'!<br>';
    echo 'Your password is: '.$password.'<br><br>';
    echo '<table>';
        echo '<tr>';
            echo '<td>Name</td>';
            echo '<td>Quantity</td>';
            echo '<td>CostPerItem</td>';
            echo '<td>Subtotal</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Cookies</td>';
            echo '<td>'.$numCookies.'</td>';
            echo '<td>$1.00</td>';
            echo '<td>$'.$priceCookies.'.00</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Pies</td>';
            echo '<td>'.$numPies.'</td>';
            echo '<td>$2.00</td>';
            echo '<td>$'.$pricePies.'.00</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Cakes</td>';
            echo '<td>'.$numCakes.'</td>';
            echo '<td>$3.00</td>';
            echo '<td>$'.$priceCakes.'.00</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Shipping</td>';
            echo '<td>'.$shipping.'</td>';
            echo '<td></td>';
            echo '<td>$'.$shipPrice.'.00</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Total Price</td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td>$'.$totalPrice.'.00</td>';
        echo '</tr>';
    echo '</table>';
?>