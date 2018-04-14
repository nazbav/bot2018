<?php
declare(strict_types = 1);

namespace joker2620\Source\ModulesClasses;

use joker2620\Source\Setting\SustemConfig;
use joker2620\Source\Setting\UserConfig;
use MrKody\JsonDb\JsonDb;


/**
 * Class HTMessagesBase
 *
 * @package joker2620\Source\ModuleMessage
 */
class HTMessagesBase extends TrainingEdit
{
    private $database = [];


    /**
     * prehistoric()
     *
     * @param bool $file_base
     *
     * @return bool
     */
    public function prehistoric(bool $file_base = false)
    {

        $return = false;
        $height = UserConfig::getConfig()['MIN_PERCENT'];
        if ($file_base) {
            $this->scanTraining($height);
        } else {
            $this->scanMainBase($height);
        }
        if ($this->database != []) {
            ksort($this->database);
            $answer = end($this->database);
            $answer = $answer[array_rand($answer)];
            $return = $answer;
        }
        return $return;
    }

    /**
     * scanTraining()
     *
     * @param $height
     */
    public function scanTraining($height)
    {
        $json_db = new JsonDb();
        $json_db->from(SustemConfig::getConfig()['FILE_TRAINING']);
        $result = $json_db->select('*')->get();
        if ($result) {
            foreach ($result as $lines) {
                $height = $this->getHeight($height);
                if (similar_text($this->user->getMessageData()['body'], $lines->question, $percent)) {
                    $percent = intval($percent);
                    if ($percent >= $height) {
                        $this->setDatabase($percent, $lines->answer);
                    }
                }
            }
            unset($result);
        }
    }

    /**
     * getHeight()
     *
     * @param int $height
     *
     * @return int|mixed
     */
    private function getHeight(int &$height)
    {
        $arraykey = array_keys($this->database);
        sort($arraykey);
        $maxkey = end($arraykey);
        return $height < $maxkey ? $maxkey : $height;
    }

    /**
     * setDatabase()
     *
     * @param int    $per
     * @param string $value
     */
    private function setDatabase(int $per, string $value)
    {
        $this->database[$per][] = $value;
    }

    /**
     * scanMainBase()
     *
     * @param $height
     */
    public function scanMainBase($height)
    {
        $fname  = SustemConfig::getConfig()['FILE_BASE'];
        $result = file(
            $fname,
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        );
        if ($result) {
            foreach ($result as $lines) {
                $lines  = explode('\\', $lines);
                $height = $this->getHeight($height);
                if (similar_text($this->user->getMessageData()['body'], $lines[0], $percent)) {
                    $percent = intval($percent);
                    if ($percent >= $height) {
                        $this->setDatabase($percent, $lines[1]);
                    }
                }
            }
            unset($result);
        }
    }
}
