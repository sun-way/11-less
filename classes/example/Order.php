<?php
namespace example;
class Order extends Basket
{
    public function __construct ($a)
    {
        $this->productInBasket=$a;
    }

    public function getOrder()
    {
        foreach ($this->productInBasket as $i=>$val)
        {
            if ($val!=0)
            {
                if ($this->productInBasket[$i]["quantity"]>0)
                  {
                    echo'<br>---------------------------<br>';
                    echo "Вы заказали " . $this->productInBasket[$i]["product"]->getName();
                    echo " в количестве " . $this->productInBasket[$i]["quantity"] . " единиц.<br>";
                  }
                else
                  //  if ($this->productInBasket[$i]["quantity"]<=0)
                        {
                            echo " плохая сумма заказа. мы не  сделаем заказ<br>";
                            die();
                        }
            }
            echo " итого ".$i. ' товара','<br>';
            $this->getPriceFromBasket();
        }
        echo'<br>---------------------------<br>';
        echo ' Результат:<br>';
        $this->getPriceFromBasket();
        echo '<br><br>!!!!!Ожидайте, с вами свяжется наш менеджер чуть позже для уточнения деталей заказа!!!!!<hr>';
    }
}
