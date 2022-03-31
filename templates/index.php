<?php
require 'lotsData.php';
function format_price($price):string{
$price =   ceil($price);
$price =   number_format($price,'0', ' ', ' ');
$price =  $price . " ";
print_r($price);
return $price;
}
?>
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
            </li>
            <li class="promo__item promo__item--attachment">
                <a class="promo__link" href="all-lots.html">Крепления</a>
            </li>
            <li class="promo__item promo__item--boots">
                <a class="promo__link" href="all-lots.html">Ботинки</a>
            </li>
            <li class="promo__item promo__item--clothing">
                <a class="promo__link" href="all-lots.html">Одежда</a>
            </li>
            <li class="promo__item promo__item--tools">
                <a class="promo__link" href="all-lots.html">Инструменты</a>
            </li>
            <li class="promo__item promo__item--other">
                <a class="promo__link" href="all-lots.html">Разное</a>
            </li>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php $lots_number = count($lot_list);
            $lots_count = 0; ?>
            <?php while ($lots_count<$lots_number):?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=$lot_list[$lots_count]['url'];?>" width="350" height="260"
                             alt="<?=$lot_list[$lots_count]['categories'];?>">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?=$lot_list[$lots_count]['categories'];?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.php?lot=<?=$lots_count?>"><?=$lot_list[$lots_count]['name'];?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <!--<span class="lot__cost"><?=$lot_list[$lots_count]['price'];?><b class="rub">р</b></span>-->
                                <span class="lot__cost">
                                <?php
                                $price = $lot_list[$lots_count]['price'];
                                format_price($price);?><b class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                            <?php
                            date_default_timezone_set('Europe/Moscow');
                            $currentTime = time();
                            $currentFullTime = getdate($currentTime);
                            $currentDayForYear = $currentFullTime['yday'];
                            $nextDayForYear = $currentDayForYear + 1;
                            $nextDayTime =strtotime('+1 day 00:00:00');
                            $difSec = $nextDayTime - $currentTime;
                            $hours = floor($difSec/3600);
                            $minutes = floor(($difSec - $hours*3600)/60);
                            print ("Осталось {$hours}:{$minutes}");
                            ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php $lots_count = $lots_count + 1;?>
            <?php endwhile;?>
        </ul>
    </section>
</main>
