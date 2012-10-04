<?php

/**
 * This file is part of the RSSClient proyect.
 * 
 * Copyright (c)
 * Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * 
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient;

/**
 * 
 * Description of RSSClientInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : ClientInterface.php , UTF-8
 * @date : Oct 3, 2012 , 2:07:10 AM
 */
interface RSSClientInterface
{

    /**
     * @return array feeds
     */
    public function getFeeds();

    /**
     *
     * @param string $feed 
     */
    public function setFeed($feed);

    /**
     *
     * @param array $feeds 
     */
    public function setFeeds($feeds);

    /**
     *
     * @param string $feed 
     */
    public function addFeed($feed);

    /**
     *
     * @param array $feeds 
     */
    public function addFeeds($feeds);

    /**
     *
     * @return int count $feeds
     */
    public function countFeeds();

    /**
     *
     * @return int $nodes
     */
    public function fetch();
}