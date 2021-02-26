<?php
/**
 * This file is part of the Rcs\AdminBundle package.
 *
 * (c) Ruslan Kabirov <kabirovruslan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rcs\AdminBundle\Controller;

use Rcs\AdminBundle\AdminPanel\TemplateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

/**
 * Class AdminController
 *
 * @package Rcs\AdminBundle\Controller
 */
abstract class AdminController extends AbstractController
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var TemplateManager
     */
    private $templateManager;


    public function __construct(TemplateManager $templateManager)
    {
        $this->request = Request::createFromGlobals();
        $this->templateManager = $templateManager;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return TemplateManager
     */
    public function getTemplateManager(): TemplateManager
    {
        return $this->templateManager;
    }

    protected function renderAdminPanel()//: Response
    {
        // TODO
    }
}