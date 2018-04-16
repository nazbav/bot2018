<?php
declare(strict_types = 1);


namespace joker2620\Source\DataFlow;

use joker2620\Source\Exception\BotError;
use joker2620\Source\Interfaces\DataFlow\DataFlowInterface;
use joker2620\Source\Setting\SustemConfig;


/**
 * Class DataFlow
 *
 * @package joker2620\Source\DataFlow
 */
class DataFlow implements DataFlowInterface
{


    /**
     * readData()
     *
     * @param array $request
     *
     * @return object
     * @throws BotError
     */
    public function readData(array $request = [])
    {
        if (empty($request)) {
            $request = json_decode(file_get_contents('php://input'), true);
        }
        if (empty($request)) {
            throw new BotError(SustemConfig::getConfig()['MESSAGE']['cameEmptyRequest']);
        }
        return (object)$request;
    }


    /**
     * putData()
     *
     * @param null|string $responce
     */
    public function putData(?string $responce = 'ok'): void
    {
        file_put_contents('php://output', $responce);
    }
}