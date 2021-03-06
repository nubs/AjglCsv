<?php
/**
 * This file is part of the AJ General Libraries
 *
 * Copyright (C) 2010-2014 Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Ajgl\Csv\Charset;

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
interface ConverterInterface
{
    /**
     * @param  string $value
     * @param  string $inputCharset
     * @param  string $outputCharset
     * @return string
     */
    public function convert($value, $inputCharset, $outputCharset);
}
