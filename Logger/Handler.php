<?php
/**
 * Copyright © Ariya InfoTech All rights reserved.
 */
declare(strict_types=1);

namespace AriyaInfoTech\FixInvalidStateChange\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/invalidquotestate.log';
}
