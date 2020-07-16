<?php

interface TipoPagoInterface{
    public function pagarAhora(): String;
    public function procedimientoPago(): void;
}

class Visa implements TipoPagoInterface{
    public function pagarAhora(): String{
        return "Pago con Visa";
    }
    public function procedimientoPago(): void{
        echo $this->pagarAhora();
    }
}

class Paypal implements TipoPagoInterface{
    public function login(): String{
        return "tienes que loguearte";
    }
    public function pagarAhora(): String{
        return "Pago con Paypal";
    }
    public function procedimientoPago(): void{
        echo $this->login();
        echo '<br>';
        echo $this->pagarAhora();
    }
}

class CuentaBancaria implements TipoPagoInterface{
    public function loginBanco(): String{
        return "Bienvenido al Banco";
    }
    public function pagarAhora():String{
        return "Pago con transferencia";
    }
    public function procedimientoPago(): void{
        echo $this->loginBanco();
        echo "<br>";
        echo $this->pagarAhora();
    }
}

class Efectivo implements TipoPagoInterface{
    public function pagarAhora(): String{
        return "Pago con Efectivo";
    }
    public function procedimientoPago(): void{
        echo $this->pagarAhora();
    }
}

class ComprarProducto{
    public function pagar(TipoPagoInterface $tipoDePago){
        return $tipoDePago->procedimientoPago();
    }
}

$tipoDePago = new CuentaBancaria();
$comprarProducto = new ComprarProducto();
$comprarProducto->pagar($tipoDePago);