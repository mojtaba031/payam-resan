<?php

namespace PayamResan\Package;

use PayamResan\Package\GatewayInterface;

class PayamResan implements GatewayInterface
{
    private $webservice;
    private $username;
    private $password;

    public function __construct() {
        $defaultGateway = config('payamresan.webservice');
        $username = config('payamresan.username');
        $password = config('payamresan.password');
    }

    public function salams(){

    }

    public function sendMessageUrl(array $numbers, $text, $sender ){

    }


    public function sendMessage( array $numbers, $text, $sender, $type = 1, $alloweddelay = 0 ){

    }


    public function sendMessageMultiple(array $numbers, array $text, array $sender, array $allowedDelay = [ 0 ] ){

    }

    public function getMessages(){

    }


    public function getMessagesStatus( array $messagesId ){

    }


    public function getAllMessages( $destnumber, $numberofmessages = 1 ){

    }


    public function getCredit(){

    }
}
