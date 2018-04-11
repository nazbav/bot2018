<?php
declare(strict_types = 1);
/**
 * Проект: joker2620/bot2018
 * Author: Joker2620;
 * PHP version 7.1;
 */
return [
    /**
     * Разрешить проверять токен администратора
     *
     * 'ADMIN_TOKEN', в UserConfig.php
     */
    'ENABLE_ADMIN_TOKEN' => true,
    /**
     * Разрешить генерацию голосовых сообщений
     *
     * ДЛЯ ГЕНЕРАЦИИ ГОЛОСОВЫХ СООБЩЕНИЙ, ТРЕБУЕТСЯ УКАЗАТЬ 'SPEECH_KEY',
     * в UserConfig.php
     */
    'YANDEX_SPEECH' => true,
    /**
     * Разрешить проверять файл UserConfig.php
     *
     * ДЛЯ КОРРЕКТНОЙ РАБОТЫ ЛУЧШЕ ОСТАВИТЬ ВКЛЮЧЕННЫМ
     */
    'CONFIG_CHECKER' => true
];
