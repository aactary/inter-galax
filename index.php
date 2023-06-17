<?php
    require 'vendor/autoload.php';

    use App\GalaxPay\GalaxPay;

    $obGalax = new GalaxPay('5473','83Mw5u8988Qj6fZqS4Z8K7LzOo1j28S706R0BeFe');

    //retorna um array de clientes
    // $clientes = $obGalax->sendRequest('/customers',[
    //     "startAt"   =>  0,
    //     "status"    =>  "active",
    //     "limit"     =>  50
    // ]);

    $customer = [
            "myId"      => "ID-CLI-2",
            "name"      => "João Cleber de Sousa",
            "document"  => "45199319086",
            "emails"    => [
                "joao_cleber@gmail.com"
            ],
            "Address"   => [
                "zipCode"       => "62500000",
                "street"        => "Rua 22",
                "number"        => "30",
                "neighborhood"  => "Bairro das Rosas",
                "city"          => "ItaCity",
                "state"         => "CE"
            ]
        ];

    //cria um novo cliente
    // $novoCliente = $obGalax->sendRequest('/customers',$customer,'POST');

    //editacliente
    // $editaCliente = $obGalax->sendRequest('/customers/ID-CLI-1/myId',$customer,'PUT');

    //deleta cliente
    // $excluiCliente = $obGalax->sendRequest('/customers/ID-CLI-1/myId',[],'DELETE');

    $newSubscription = [
        "myId"                  => "SUB-1",
        "value"                 => 3000,
        "quantity"              => 10,
        "periodicity"           => "monthly",
        "firstPayDayDate"       => "2023-06-18",
        "additionalInfo"        => "Assinatura de plano canal codigos e projetos",
        "mainPaymentMethodId"   => "boleto",
        "Customer"              =>  $customer
    ];

    $newSubscriptionRequest = $obGalax->sendRequest('/subscriptions',$newSubscription,'POST');

    echo '<pre>';print_r($newSubscriptionRequest);echo '</pre>';exit;

?>