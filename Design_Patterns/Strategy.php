<?php

 interface Payment
 {
     public function pay($sum);
 }

 class Robokassa implements Payment 
 {
     public function pay($sum)
     {
         echo "Оплата через Robokassa суммы: ". $sum . "<br>";
     }
 }

 class Card implements Payment
 {
    public function pay($sum) 
    {
        echo "Оплата картой суммы: ". $sum . "<br>";
    }
 }

 class Shop 
 {
     public function Buy($sum)
     {
         if($sum >= 5000)
         {
             $payment = new Card();
         }

         else
         {
             $payment = new Robokassa();
         }

         $payment->pay($sum);
     }
 }

 $shop = new Shop();
 $shop->Buy(5000);
 $shop->Buy(1000);