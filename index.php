<?php

require_once 'car.php';
require_once 'pen.php';
require_once 'tv.php';
require_once 'bird.php';
require_once 'product.php';

$pen = new BallPen();
$pencil = new Pencil('белого', 'Красным');

$pen->write('Мне не повезло я родился уродом');
echo 'а потом я дописал карандашом ' . $pencil->getColor() . ' цвета с ' . $pencil->getWriteColor() . ' грифилем <br><br>';

$pencil->write('Говорят, что толстая крикливая повитуха из соседней деревни, принимавшая роды у моей измученной матери, в страхе выронила пискливого младенца, пухлую ручку которого окольцовывало Девять браслетов – от тоненького ломкого запястья до плеча. И лишь густой мех валявшейся на полу шкуры спас Живущего в последний раз; но ни разу не испытывал я благодарности к зверю, носившему некогда эту шкуру.');

echo '<br><br>';

$myCar = new Tank('Защитного', 'T34');

echo '<br><br>';

echo 'Моя машина '. $myCar->getModel() . ' и у меня ' . $myCar->getWheels() . ' колеса';
echo '<br>';
$myCar->throttle(60);

echo 'Я вдавил тапку на 60 км.ч и теперь моя скорость ' . $myCar->getSpeed();

echo '<br><br>';

$tvInBigRoom = new SmartTv();
$tvInSmallRoom = new Tv();
$tvInKitchen = new SmartTv();

// Выключены все телевизоры, не будем с ними ничего делать ))

$bird = new Bird('серая', 'Чик чирик');

echo 'Птица '. $bird->getSound() . ' ' . $bird->fly();
echo '<br><br>';

$chicken = new Chicken('white', 'Кукареку'); 

echo 'курица '. $chicken->getSound() . ' ' . $chicken->fly();
echo '<br><br>';


// Попробуем что ли с товарами поиграться 



$powerSupplyHiper = new PowerSupply('M600', 'black', 3200, '100x100x50', 5,'блоки питания', 'china', 10, 'hiper');
$powerSupplyHiper->setPower('600watt')
        ->setSataCablesCount(6)
        ->setFormFactor('ATX');



$powerSupplyThermaltake = new PowerSupply('W0431RE', 'black', 21999, '220x150x86', 15,'блоки питания', 'china', 10, 'Thermaltake');
$powerSupplyThermaltake->setPower('1500watt')
        ->setSataCablesCount(16)
        ->setFormFactor('ATX');


    
   echo 'Цена блока питания HIPER ' . $powerSupplyHiper->CalculateFinalPrice() . ' Скидка составила ' . $powerSupplyHiper->getDiscountPrice() . ' Стоимость доставки '
           . $powerSupplyHiper->getDeliveryPrice();
   echo '<br>';
   echo 'Цена блока питания Thermaltake ' . $powerSupplyThermaltake->CalculateFinalPrice() . ' Скидка составила ' . $powerSupplyThermaltake->getDiscountPrice() . ' Стоимость доставки '
           . $powerSupplyThermaltake->getDeliveryPrice();
   echo '<br>';


   $coolerMaster = new CpuCooler('DKM-00001-A1-GP', 'silver', 210, '50x50x50', 0.2, 'cpu cooler', 'china', 10, 'cooler master');
   
   $coolerMaster->setSocket('AM1')
           ->setSpeed(4800);
   
   //Посмотрим на цифры в корзине в котором кулер
   
   echo 'Цена кулера ' . $coolerMaster->CalculateFinalPrice() . ' Скидка составила ' . $coolerMaster->getDiscountPrice() . ' Стоимость доставки '
           . $coolerMaster->getDeliveryPrice();
   
   echo '<br>';
   
   $mySmartphone = new SmartPhone('redmi note 2', 'white', 8500, '120x70x10', 0.4, 'смартфоны', 'china', 10, 'xiaomi');
   
   $mySmartphone->setClockSpeed('2ггц')
           ->setRam('2Гб')
           ->setRom('16Гб')
           ->setScreenDimension('5.5 дюйма');
   
   echo 'Цена смартфона ' . $mySmartphone->CalculateFinalPrice() . ' Скидка составила ' . $mySmartphone->getDiscountPrice() . ' Стоимость доставки '
           . $mySmartphone->getDeliveryPrice();