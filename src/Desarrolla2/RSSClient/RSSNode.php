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

use DateTime;

/**
 * 
 * Description of RSSNode
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : Node.php , UTF-8
 * @date : Oct 3, 2012 , 2:06:56 AM
 */
class RSSNode {
//    'title', 'link', 'description', 'author',
//            'category', 'comments', 'enclosure', 'guid',
//            'pubDate', 'source'

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $link = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $author = null;

    /**
     * @var string
     */
    protected $category = null;

    /**
     * @var string
     */
    protected $comments = null;

    /**
     * @var string
     */
    protected $enclosure = null;

    /**
     * @var string
     */
    protected $guid = null;

    /**
     * @var \DateTime
     */
    protected $pubDate = null;

    /**
     *
     * @param array $options 
     */
    public function __construct($options = array()) {
        $this->fromArray($options);
    }

    /**
     * toString 
     * 
     * @return string
     */
    public function __toString() {
        return $this->getDescription();
    }

    /**
     *
     * @param array $options 
     */
    public function fromArray($options = array()) {
        if (is_array($options)) {
            if (isset($options['title'])) {
                $this->setTitle($options['title']);
            }
            if (isset($options['description'])) {
                $this->setDescription($options['description']);
            }
            if (isset($options['link'])) {
                $this->setLink($options['link']);
            }
            if (isset($options['pubDate'])) {
                $this->setPubDate($options['pubDate']);
            }
        }
    }

    /**
     *
     * @param string $title 
     */
    public function setTitle($title) {
        $this->title = $this->doClean($title);
    }

    /**
     *
     * @return string $title 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     *
     * @param string $desc 
     */
    public function setDescription($desc) {
        $this->description = $this->doClean($desc);
    }

    /**
     * Backguard
     * 
     * @return string $desc  
     */
    public function getDesc() {
        return $this->description;
    }

    /**
     *
     * @return string $desc  
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     *
     * @param string $link 
     */
    public function setLink($link) {
        $this->link = $this->doClean($link);
    }

    /**
     *
     * @return string $link  
     */
    public function getLink() {
        return $this->link;
    }

    /**
     *
     * @param  string $date 
     */
    public function setPubDate($date) {
        if (strtotime($date)) {
            $this->pubDate = new DateTime($date);
        } else {
            $this->pubDate = false;
        }
    }

    /**
     * Retrieve Pub date
     * 
     * @return DateTime $date 
     */
    public function getPubDate() {
        return $this->pubDate;
    }

    /**
     * Retrieve timestamp
     * 
     * @return int
     */
    public function getTimestamp() {
        if ($this->pubDate) {
            return $this->pubDate->getTimestamp();
        }
        return 0;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $this->doClean($author);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $this->doClean($category);
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $this->doClean($comments);
    }

    public function getEnclosure() {
        return $this->enclosure;
    }

    public function setEnclosure($enclosure) {
        $this->enclosure = $this->doClean($enclosure);
    }

    public function getGuid() {
        return $this->guid;
    }

    public function setGuid($guid) {
        $this->guid = $this->doClean($guid);
    }

    /**
     * Clean text for XSS atacks
     * 
     * @param string $string
     * @return string $string 
     */
    protected function doClean($string) {
        return (string) $string;
    }

}
