<?php

declare(strict_types=1);

/**
 * This file is part of Nexus Semi-Finals.
 *
 * (c) 2021 John Paul E. Balandan, CPA <paulbalandan@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Nexus\CsConfig\Factory;
use Nexus\CsConfig\Ruleset\Nexus80;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in(__DIR__)
    ->exclude(['build'])
    ->append([__FILE__])
;

$overrides = [];
$options = [
    'cacheFile' => 'build/.php-cs-fixer.cache',
    'finder' => $finder,
];

return Factory::create(new Nexus80(), $overrides, $options)->forLibrary('Nexus Semi-Finals', 'John Paul E. Balandan, CPA', 'paulbalandan@gmail.com', 2021);
