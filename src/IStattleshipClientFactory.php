<?php 

namespace Garrett9\Stattleship; 

/**
 * An interface to the StattleshipClientFactory.
 * 
 * @author garrettshevach@gmail.com
 *
 */
interface IStattleshipClientFactory 
{
    /**
     * Create a new BaseballStattleshipClient.
     * 
     * @return \Garrett9\Stattleship\Baseball\BaseballStattleshipClient
     */
    public function createBaseballClient();
}