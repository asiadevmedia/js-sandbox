<?php declare(strict_types=1);

/*
 * This file is part of the pinepain/js-sandbox PHP library.
 *
 * Copyright (c) 2016-2017 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source or visit
 * http://opensource.org/licenses/MIT
 */


namespace Pinepain\JsSandbox\Specs;


use Pinepain\JsSandbox\Specs\Parameters\ParameterSpecInterface;


interface ParametersListInterface
{
    /**
     * @return int
     */
    public function getNumberOfParameters(): int;

    /**
     * @return int
     */
    public function getNumberOfRequiredParameters(): int;

    /**
     * @return bool
     */
    public function isVariadic(): bool;

    /**
     * @return ParameterSpecInterface[]
     */
    public function getParameters(): array;
}
