<?php

/**
 * Проект: joker2620/bot2018
 * Author: Joker2620;
 * Date: 12.01.2018;
 * Time: 7:55;
 * PHP version 5.6;
 *
 * @category AutoSing
 * @package  Joker2620\Source\plugins\AutoSing
 * @author   Joker2620 <joker2000joker@list.ru>
 * @license  https://github.com/joker2620/bot2018/blob/master/LICENSE MIT
 * @link     https://github.com/joker2620/bot2018 #VKCHATBOT
 */

namespace joker2620\Source\plugins\AutoSing;

use joker2620\Source\Crutch\ObjectFile;
use joker2620\Source\Engine\Setting\SustemConfig;
use joker2620\Source\Exception\BotError;

/**
 * Class signart
 *
 * @category AutoSing
 * @package  Joker2620\Source\plugins\AutoSing
 * @author   Joker2620 <joker2000joker@list.ru>
 * @license  https://github.com/joker2620/bot2018/blob/master/LICENSE MIT
 * @link     https://github.com/joker2620/bot2018 #VKCHATBOT
 */
final class SignArt
{
    /**
     * Папка с картинками
     */
    private $imgDir;
    /**
     * Картинка
     */
    private $image;
    /**
     * Данные
     */
    private $data;

    /**
     * SignArt constructor.
     */
    public function __construct()
    {
        $this->imgDir = SustemConfig::getConfig()['DIR_IMAGES'] . '/sign/';
        $this->image  = null;
    }


    /**
     * Функция нанесения текста на изображение.
     *
     * @param string $text  Текст
     * @param array  $color Цвет текста
     * @param string $fonts Шрифт
     *
     * @return string
     * @throws BotError
     */
    public function generate(
        $text,
        $color = [0, 0, 0],
        $fonts = 'PFKidsPro-GradeOne.ttf'
    ) {
        if (!is_string($text) || !is_array($color) || !is_string($fonts)) {
            throw new BotError('Ошибка при вызове модуля SignArt');
        }
        $fonts = $this->imgDir . $fonts;
        $this->getRandImg();
        $color = $this->colors($color[0], $color[1], $color[2]);
        $this->setText(
            [$text, $fonts, $color],
            $this->data[5],
            [$this->data[3], $this->data[4]],
            [$this->data[1], $this->data[2]]
        );
        ob_start();
        imagepng($this->image, null, 6);
        $result = ob_get_clean();
        $result = new ObjectFile(
            'image' . rand(0, 1000) . '.png',
            'image/png',
            $result
        );
        return $result;
    }

    /**
     * Функция получения случайного изображения
     *
     * @return void
     */
    public function getRandImg()
    {
        $base_art    = include 'Config.php';
        $datas       = $base_art[rand(0, count($base_art) - 1)];
        $files       = $this->imgDir . $datas[0];
        $this->image = imagecreatefrompng($files);
        $this->data  = $datas;
    }

    /**
     * Функция установки цвета текста изображения
     *
     * @param int $r Крассный
     * @param int $g Зеленый
     * @param int $b Синий
     *
     * @return int
     */
    public function colors($r, $g, $b)
    {
        return imagecolorallocate($this->image, $r, $g, $b);
    }

    /**
     * Функция нанесения текста
     *
     * @param string $text    Текст
     * @param int    $rota    Угол наклона  текста
     * @param array  $pos     Позиция текста
     * @param array  $maxsize Размер картинки
     *
     * @return void
     */
    public function setText($text, $rota = 0, $pos = [0, 0], $maxsize = [500, 40])
    {
        $sizof = round($maxsize[0] / mb_strlen($text[0]));
        imagettftext(
            $this->image,
            $sizof > $maxsize[0] ? $maxsize[1] : $sizof,
            $rota,
            $pos[0],
            $pos[1],
            $text[2],
            $text[1],
            $text[0]
        );
    }
}
