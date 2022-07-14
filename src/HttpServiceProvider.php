<?php

namespace SwooleJEXON\Http;


/**
 * @codeCoverageIgnore
 */
abstract class HttpServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * @var boolean
     */
    protected $isWebsocket = false;


    /**
     * @var boolean
     */
    protected $isHttp = false;

}
