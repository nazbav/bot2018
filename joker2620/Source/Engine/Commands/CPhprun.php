<?php

/**
 * Проект: joker2620/bot2018
 * Author: Joker2620;
 * Date: 12.01.2018;
 * Time: 7:55;
 * PHP version 5.6;
 *
 * @category Commands
 * @package  Joker2620SourceEngineCommands
 * @author   Joker2620 <joker2000joker@list.ru>
 * @license  https://github.com/joker2620/bot2018/blob/master/LICENSE MIT
 * @link     https://github.com/joker2620/bot2018 #VKCHATBOT
 */
namespace joker2620\Source\Engine\Commands;

use joker2620\Source\Engine\Interfaces\CommandIntefce;
use joker2620\Source\Engine\ModuleCommand\CommandsTemplate;

/**
 * Class CPhprun
 *
 * @category Commands
 * @package  Joker2620SourceEngineCommands
 * @author   Joker2620 <joker2000joker@list.ru>
 * @license  https://github.com/joker2620/bot2018/blob/master/LICENSE MIT
 * @link     https://github.com/joker2620/bot2018 #VKCHATBOT
 */
final class CPhprun extends CommandsTemplate implements CommandIntefce
{
    /**
     * CPhprun constructor.
     */
    public function __construct()
    {
    }

    /**
     * Функция для запуска выполнения комманды
     *
     * @param array $item Данные пользователя.
     *
     * @return mixed
     */
    public function runCom($item)
    {
        ob_start();
        eval($item['matches'][2][0]);
        $message = ob_get_clean();
        return $message;
    }
}