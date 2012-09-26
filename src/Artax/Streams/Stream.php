<?php

namespace Artax\Streams;

interface Stream {
    
    const EVENT_OPEN = 'artax.network.stream.open';
    const EVENT_CLOSE = 'artax.network.stream.close';
    const EVENT_READ = 'artax.network.stream.io.read';
    const EVENT_WRITE = 'artax.network.stream.io.write';
    
    /**
     * @return void
     */
    function connect();
    
    /**
     * @return void
     */
    function close();
    
    /**
     * @param int $bytesToRead
     * @return string
     */
    function read($bytesToRead);
    
    /**
     * @param string $dataToWrite
     * @return int
     */
    function write($dataToWrite);
    
    /**
     * @return string
     */
    function getScheme();
    
    /**
     * @return string
     */
    function getHost();
    
    /**
     * @return int
     */
    function getPort();
    
    /**
     * @return string
     */
    function getAuthority();
    
    /**
     * @return string
     */
    function getPath();
    
    /**
     * @return string
     */
    function getUri();
    
    /**
     * @return resource
     */
    function getResource();
    
    /**
     * @return int
     */
    function getActivityTimestamp();
}