# bot2018 - Чат-бот для сообществ.

[![PHP](https://img.shields.io/badge/PHP-5.6%5E-brightgreen.svg?style=for-the-badge)](https://php.net/)
[![LICENSE](https://img.shields.io/badge/LICENSE-MIT-yellow.svg?style=for-the-badge)](https://github.com/joker2620/bot2018/blob/master/LICENSE/)
[![VERSION](https://img.shields.io/badge/LAST%20VERSION-0.2.0-blue.svg?style=for-the-badge)](https://github.com/joker2620/bot2018/master/)
[![BUID](https://img.shields.io/badge/LAST%20BUILD-17.01.18-lightgrey.svg?style=for-the-badge)](https://github.com/joker2620/bot2018/master/)
[![PSR](https://img.shields.io/badge/PSR-0--4-orange.svg?style=for-the-badge)](https://github.com/joker2620/bot2018/master/)
[![PSR](https://img.shields.io/badge/Code%20quality-very%20bad-orange.svg?style=for-the-badge)](https://github.com/joker2620/bot2018/master/)

[bot2018][1] - это **Чат-бот** для сообществ [ВК][2], созданный для развлечения посетителей группы.

Установка
------------

1. Бот запускается на веб-севере, с минимальной версией **PHP 5.6.**.
1. Для корректной работы бота необходимо установить [Composer][3].
1. Выполните команду ``` Composer install ``` находясь в папке с ботом. 
1. Для корректной работы бота требуются следующие PHP расширения:
   * `php_gd2.dll`;
   * `php_curl.dll`;
   * `php_mbstring.dll`.
1. Убедитесь что, все расширения включены.
1. Переименуйте файл `Configuration/CommandsConfig.php_default` в `Configuration/CommandsConfig.php`
1. Переименуйте файл `Configuration/UserConfig.php_default` в `Configuration/UserConfig.php`
1. Следующие файлы, необходимы для работы бота на сайте: 
   * Папка `vendor` (данная папка создается автоматически, после установки `Composer`);
   * Папка `joker2620`; 
   * Файл `index.php`.
1. Настройте конфигурационные файлы, и загрузите вышеперечисленные файлы на сайт.
1. Описание классов бота: [```Пока недоступно```][7].


Настройка
-------------

1. Получите токен сообщества - это можно сделать перейдя в настройки сообщества, и в меню выбрать `Работа с API`, далее создайте ключ, и вставьте его в поле `ACCESS_TOKEN`, файла `joker2620/Configuration/UserConfig.php`. 
1. Добавите сервер - перейдите в меню `Работа с API`, выберите `Callback API`, ведите адрес до файла `index.php`, который находиться в папки с ботом. Скопируйте строку которую должен вернуть сервер, и вставьте в поле `CONFIRMATION_TOKEN`, файла `joker2620/Configuration/UserConfig.php`. 
1. В `Типах событий`, выберите:
    * Сообщения: `Входящие сообщения`;
    * Записи на стене: `Добавление`;
    * Прочее: `Голос в публичном опросе` (Если не включать этот метод, то можно пропустить следующее действие).
1. Получите свой токен - это требуется для работы некоторых функций (в частности, для функции pollVoteNew() - оповещения о проголосовавших в опросах группы), и вставьте в поле `ADMIN_TOKEN`, файла `joker2620/Configuration/UserConfig.php`.  

Особенности некоторых команд
---------
* Для выключения требований, заполнения некоторых из полей конфигураций (При запуске бота вам будет выдана ошибка), воспользуйтесь настройками файла `joker2620/Configuration/ConfgFeatures.php`.
Такие команды бота как `!вголос`,`!смс`, работают с помощью API сторонних сервисов.
* Для команды `!вголос`, необходимо получить Yandex API Key, через [кабинет разработчика][4], и вставить в поле `SPEECH_KEY`, файла `joker2620/Configuration/UserConfig.php`.
* Для команды `!смс`, нужно зарегистрироваться на сайте [СМС-рассылок][5], и получить `секретный ключ`, и вставить в поле `SMSRU_API`, файла `joker2620/Configuration/CommandsConfig.php`. В этом-же файле вы можете настроить номера телефонов на которые будут отправляться ваши смс.

Редактирование команд 
--------- 

1. Команды встроенные в бота, вы можете посмотреть после установки, написав ему сообщение с текстом `команды`.
1. Все команды расположены в папке `joker2620/Source/engine/Commands`.
1. Список команд и их вывод (отображение пользователю), можно изменить в файле `joker2620/Source/engine/ModuleCommand/Config.php` 

База ответов
--------- 

1. База данных расположена по адресу `joker2620/data/base/base.bin`. 
1. База имеет формат `Вопрос\ответ\0`, `0` - никак не обрабатывается. 
1. Если у вас уже есть база данных [VK IHA bot][6], вы можете переименовать ее в `base.bin`. А затем, замените ключевые слова [VK IHA bot][6], на слова из списка ниже.
1. Также, вы можете почистить базу, от повторов, и рассортировать ее по алфавиту, запустив скрипт `tools/DeleteRepeats.php`. В ходе работы скрипта, могу возникнуть ошибки которые, возможно, приведут к уничтожению базы (такие случаи не наблюдались).
1. Вы можете использовать ключевые слова в базе данных:
    * `#uid#` - айди пользователя; 
    * `#first_name#` - имя пользователя; 
    * `#last_name#` - фамилия пользователя; 
    * `#sex_dis#` - пол пользователя в виде `парень, девушка`; 
    * `#neme_bot#` - имя бота;
    * `#what_dey#` - дата;
    * `#what_time#` - время;
    * `#version#` - версия бота; 
    * `#build#` - номер сборки бота. 
1. Можно использовать падеж для склонения имени и фамилии пользователя. Используется как приставка в теге, пример: `#first_name_gen#`.
 Возможные значения:
    * `по умолчанию` - именительный;
    * `"gen"` - родительный;
    * `"dat"` - дательный;
    * `"acc"` - винительный;
    * `"ins"` - творительный;
    * `"abl"` - предложный.

[1]: https://github.com/joker2620/bot2018
[2]: https://vk.com/
[3]: https://getcomposer.org/doc/00-intro.md
[4]: https://tech.yandex.ru/speechkit/cloud/
[5]: https://sms.ru/
[6]: https://vk.com/ihabotclub
[7]: https://joker2620.github.io/bot2018/

