Информация
------------
* Документ поддерживается в версиях(ии): 1.0.1;
* [Главная страница][0];
* Перед выполнением настроек ознакомитесь с [структурой][1];
* После выполнения данных настроек выполните [настройку группы][2].


Установка Composer
------------

1. Скачайте [Composer.phar][3];
1. Установит, следуя инструкциям в Интернете;
1. Выполните команду `composer create-project joker2620/bot2018`(или выполните команду `Composer install` из папки со скаченным ботом).

Требования к веб-серверу
------------

1. **PHP ^7.1**;
1. Для корректной работы бота требуются следующие PHP расширения:
   * `php-gd2`;
   * `php-curl`;
   * `php-mbstring`;
   * `php-openssl`;
1. Убедитесь что, все расширения включены.

Установка на веб-сервер
------------

1. Следующие файлы необходимы для работы бота на сайте: 
   * Папка `vendor` (данная папка создается автоматически, после установки [Composer][3]);
   * Папка `joker2620`; 
   * Файл `index.php`.
1. Настройте конфигурационные файлы, и загрузите вышеперечисленные файлы на сайт.


Настройка
------------

1. Переименуйте файл пользовательских настроек `UserConfig.php_default` в `UserConfig.php`;
1. Заполните необходимые поля, и следуйте [настройкам группы][2].

[0]: index.md
[1]: struct.md
[2]: vkgroup.md
[3]: https://getcomposer.org/doc/00-intro.md
