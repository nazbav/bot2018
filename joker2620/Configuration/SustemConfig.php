<?php
declare(strict_types = 1);
/**
 * Проект: joker2620/bot2018
 * Author: Joker2620;
 * PHP version 7.1;
 */

/**
 * Конфиурация
 */
return [
    /**
     * Адрес генератора голосовых сообщений
     *
     * Данный адрес используеться для генерации голосовых сообщений
     */
    'YA_ENDPOINT' => 'https://tts.voicetech.yandex.net/generate',
    /**
     * API Antigate
     *
     * Адрес куда отправлять капчу.
     */
    'DOMAIN_ANTI_CAPTCHA_SEND' => 'http://antigate.com/in.php',
    /**
     * Откуда брать.
     *
     * Адрес откуда брать капчу.
     */
    'DOMAIN_ANTI_CAPTCHA_GET' => 'http://antigate.com/res.php',


    /**
     * База стандартх ответов
     *
     * В этой переменной храняться стандартные ответы, используемые ботом.
     * Массив Main - переменные бота
     * Массив TextMessage - переменные используемые в классах
     * THMessage,THMessageBase, TrainingEdit
     * Массив TextCommand- переменные используемые в классах THCommands
     *
     * @see \THMessage Класс обработки текстовых сообщений
     * @see \THMessageBase Алгоритмы класса THMessage
     * @see \TrainingEdit Операции с пользовательской базой
     * @see \THCommands Класс обработки текстовых команд.
     */
    'MESSAGE' => [
        'Main' => [
            'Чтоб посмотреть список доступных команд  напишите: "команды".',
            'Крякнула уточка, крякнул и бот :)'
        ],
        'TextMessage' => [
            'Не знаю что и ответить...',
            'Подскажи, что нужно ответить на вопрос: "%s", 
             или напиши "Нет", напиши "!мусор" и сообщение будет удалено.',
            'Я не принимаю ответы мнее 6 символ, попробуй еще разок!',
            'Нет ответа на вопрос "%s", спроси что-нибудь другое.',
            'Спасибо за ответ, ты помогаешь мне стать умнее)',//Спасибо за обучение
            ' ',//от кого ответ.  [Ответ дал(а) %s] [Ответ добавил %s %s],
            //первое %s - имя, второе фамиля
            'Ну и зря, я ведь так становлюсь умнее... :(',
            'Кто-то спросил: "%s", что мне ответить в следующий раз? Дай ответ, сказажи "нет", или напиши "!мусор"', //дообучение
            'Пока ничего нет',
            'Сообщение удалено'

        ],
        'TextCommand' => [
            'Нельзя пользоваться командами для бесед, в личке',
            'у вас нет правна исполнение команд администраторов',//Нет прав
            'Извините, но данная функция отключена администратором.'
        ]
    ],
    /**
     * Версия бота
     *
     * Версия бота, указываеться вручную разработчиком бота
     */
    'VERSION' => '0.2.0',//Версия бота
    /**
     * Сборка бота
     *
     * Сборка бота, указываеться вручную разработчиком бота
     */
    'BUILD' => '12.04.18'
];
