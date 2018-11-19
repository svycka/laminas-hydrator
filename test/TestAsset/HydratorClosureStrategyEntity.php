<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

declare(strict_types=1);

namespace ZendTest\Hydrator\TestAsset;

class HydratorClosureStrategyEntity
{
    public $field1;
    public $field2;

    public function __construct($field1 = null, $field2 = null)
    {
        $this->field1 = $field1;
        $this->field2 = $field2;
    }
}
