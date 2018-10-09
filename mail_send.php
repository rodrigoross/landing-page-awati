<?php

$to = 'rodrigo@awati.com.br';
$subject= 'Teste';
$message = 'Deu certo';
$headers = array(
    'From' => 'computadorporassinatura@awati.com.br', 
    'Reply-To' => 'computadorporassinatura@awati.com.br',
    'X-Mailer' => 'PHP/'.phpversion()
);
mail($to, $subject, $message, $headers);


if(true)
{
    //print_r($to);
};



?>