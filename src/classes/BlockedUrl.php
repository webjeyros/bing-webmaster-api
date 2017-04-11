<?php

namespace bingWebmaster\classes ;

    /**
     * Class BlockedUrl
     * @package bingWebmaster\classes
     * Represents page/directory block request
     */


    class BlockedUrl
    {
        use mapTrait;
        /**
         * @var $Date
         * The date then url was blocked.
         */

        public $Date;

        /**
         * @var $DaysToExpire
         * How many days till the Expiration of a blocked url
         */

        public $DaysToExpire;

        /**
         * @var $EntityType
         * Entiry type: page or directory.
         */
        public $EntityType;

        /**
         * @var $RequestType
         * Request type: cache only or full block
         */

        public $RequestType;

        /**
         * @var $Url
         * Url which needed to be blocked
         */

        public $Url;


    }