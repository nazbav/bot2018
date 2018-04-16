<?php
declare(strict_types = 1);
/**
 * Проект: joker2620/bot2018
 * Author: Joker2620;
 * PHP version 7.1;
 */

/**
 * Конфигурация
 */
return [
    /**
     * Адрес генератора голосовых сообщений
     *
     * Данный адрес используется для генерации голосовых сообщений
     */
    'YA_ENDPOINT' => 'https://tts.voicetech.yandex.net/generate',

    /**
     * База стандартных ответов
     *
     * В этой переменной храниться стандартные ответы, используемые ботом.
     */
    'MESSAGE' => [
        'cameEmptyRequest' => 'пришел пустой запрос',
        'DefaultMessage' => 'Чтоб посмотреть список доступных команд  напишите: "команды".',
        'noAnswer' => 'Крякнула уточка, крякнул и бот :)',
        'IDontKnowWhatToAnswer' => 'Не знаю что и ответить...',
        'IDontKnowHelpMe' => 'Подскажи, что нужно ответить на вопрос: "%s", 
             или напиши "Нет", напиши "!мусор" и сообщение будет удалено.',
        'tooShotAnswer' => 'Я не принимаю ответы менее 6 символ, попробуй еще разок!',
        'NoAnswer' => 'Нет ответа на вопрос "%s", спроси что-нибудь другое.',
        'ThanksForAnswer' => 'Спасибо за ответ, ты помогаешь мне стать умнее)',
        /*
         * Кто дал ответ.
         * '[Ответ дал(а) %s]' или '[Ответ добавил %s %s]'
         * первое %s - имя, второе фамилия
         */
        'PrefixAnswer' => ' ',//[Ответ дал(а) %s]
        'AnswerNotGiven' => 'Ну и зря, я ведь так становлюсь умнее... :(',
        'HelpAnswer' => 'Кто-то спросил: "%s", что мне ответить в следующий раз? Дай ответ, напиши "нет", или "!мусор"',
        'HereIsEmpty' => 'Пока ничего нет',
        'MessageDeleted' => 'Сообщение удалено',
        'toLearn' => '!наобучение',
        'not' => 'нет',
        'yes' => 'да',
        'Clear' => '!мусор',
        'AccessDenied' => 'у вас нет прав на исполнение команд администраторов',
        'FunctionDisabled' => 'Извините, но данная функция отключена администратором.',
        'PageNotFound' => 'Страница не существует'
    ],
    /**
     * Переменные каждого пользователя
     *
     * Устанавливаться только если пользователя нет в базе.
     */
    'DEFAULT_USER_VARS' => [
        'date' => time(),
        'balance' => '',
        'var0' => '',
        'var1' => '',
        'var2' => '',
        'var3' => '',
        'var4' => '',
        'var5' => '',
        'var6' => '',
        'var7' => '',
        'var8' => '',
        'var9' => '',
        'varA' => '',
        'varB' => '',
        'varC' => '',
        'varD' => '',
        'varE' => '',
        'varF' => '',
    ],
    /**
     * Версия бота
     *
     * Версия бота, указывается вручную разработчиком бота
     */
    'VERSION' => '0.2.1-alpha2',//Версия бота
    /**
     * Сборка бота
     *
     * Сборка бота, указывается вручную разработчиком бота
     */
    'BUILD' => '17.04.18'
];