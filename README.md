## Sobre
Classe de conexão com API do GalaxPay, faz requisições via GET, POST, PUT e DELETE
## Instalação via Composer
`composer require aactary/inter-galax`

## Uso
```php
<?php
  use Aactary\InterGalax\GalaxPay;

  $id = "5473";
  $hash = "83Mw5u8988Qj6fZqS4Z8K7LzOo1j28S706R0BeFe";
  $apiGalax = new GalaxPay($id, $hash);

  //retorna um array de clientes - GET
  $clientes = $obGalax->sendRequest('/customers',[
       "startAt"   =>  0,
       "status"    =>  "active",
       "limit"     =>  50
  ]);

  echo '<pre>'.$clientes.'</pre>';
?>
```
