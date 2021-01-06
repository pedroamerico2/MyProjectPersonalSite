<?php
    
    $headers = array (
        'Authorization: fc58c37c8aaeee4a72db0dbaa5a0a91a2ae6e150',
        'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
        'X-Requested-With: XMLHttpRequest'
    );
    
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, 'https://api.desk.ms/Login/autenticar' );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, '{"PublicKey":"4f6296741c74a9271ea426b66fab9df0c11d2f9d"}' );
    $result = curl_exec ( $ch );
    define('DESK_API_KEY','$result');
    curl_close ( $ch );
?>
