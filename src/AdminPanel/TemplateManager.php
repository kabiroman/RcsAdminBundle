<?php
/**
 * This file is part of the Rcs\AdminBundle package.
 *
 * (c) Ruslan Kabirov <kabirovruslan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rcs\AdminBundle\AdminPanel;

use Twig\Environment;

/**
 * Class TemplateManager
 *
 * @package Rcs\AdminBundle\AdminPanel
 */
class TemplateManager
{
    protected $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function getNames(): array
    {
        $names = [];

        return $names;
    }
}