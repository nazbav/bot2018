<?php
/*
 * TODO: ТЫ НАХОЙ УДАЛИЛ КОНФИГИ, ЗАМЕНИЛ ИХ НА CONFIG, ДАЛЕЕ ТЕБЕ НАДА ПОВЕРИТЬ КОД, изаебато все сделать, помни еще че ты должен в кассе сигны картинки нормально сохранять в папку синг, еше доки проверь, весь код проверь, все, короче ты знаешь что делать.
 */
declare(strict_types = 1);

setlocale(LC_CTYPE, "ru_RU");
ini_set('date.timezone', 'Europe/Moscow');

use joker2620\Source\Engine\DataFlow;
use joker2620\Source\Engine\Loger;
use joker2620\Source\Exception\BotError;

if (!file_exists('vendor/autoload.php'))
    throw new Exception('Composer not installed.');
else
    require 'vendor/autoload.php';

$data_flow = new DataFlow();
try {
    $handler = new \joker2620\Source\Engine\Core();
    $handler->parse(
        $data_flow->readData(
//            [
//                'type' => 'message_new', 'object' =>
//                [
//                    'id' => 4520,
//                    'date' => 1521303747,
//                    'out' => 0,
//                    'user_id' => 211984675,
//                    'read_state' => 0,
//                    'title' => '',
//                    'body' => 'команды 2'
//                ], 'group_id' => \joker2620\Source\Setting\Config::getConfig()['GROUP_ID'], 'secret' => \joker2620\Source\Setting\Config::getConfig()['SECRET_KEY']
//            ]
        )
    );
} catch (BotError $exception) {
    $loger = new Loger();
    $loger->logger($exception);
    $data_flow->putData();
}