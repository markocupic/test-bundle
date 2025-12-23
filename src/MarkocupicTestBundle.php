<?php

declare(strict_types=1);

/*
 * This file is part of Test Bundle.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/test-bundle
 */

namespace Markocupic\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MarkocupicTestBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
