<?php

/*
 * This file is part of the league/commonmark-ext-strikethrough package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com> and uAfrica.com (http://uafrica.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\Strikethrough;

use League\CommonMark\ConfigurableEnvironmentInterface;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Extension\Strikethrough\StrikethroughExtension as CoreExtension;

/**
 * @deprecated The league/commonmark-ext-strikethrough extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class StrikethroughExtension implements ExtensionInterface
{
    private $coreExtension;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-strikethrough is deprecated; use %s from league/commonmark 1.3+ instead', CoreExtension::class), E_USER_DEPRECATED);
        $this->coreExtension = new CoreExtension();
    }

    public function register(ConfigurableEnvironmentInterface $environment)
    {
        $this->coreExtension->register($environment);
    }
}
