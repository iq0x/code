<?php
function getBalance($address) {
    return file_get_contents('https://blockchain.info/q/addressbalance/'. $address);
}

echo getBalance('bc1q427d9xy8t00dnnum2e0udaxhyyatx2tfr2dmkt') . ' btc';
?>
