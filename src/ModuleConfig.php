<?php

namespace Reliv\PipeRatExpressive;

/**
 * Class ModuleConfig
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   HttpTest
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        return require(__DIR__ . '/../config/config.php');
    }
}
