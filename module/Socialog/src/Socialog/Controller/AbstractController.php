<?php

namespace Socialog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;

class AbstractController extends AbstractActionController
{
    /**
     * @param \Zend\Mvc\MvcEvent $e
     */
    public function onDispatch(MvcEvent $e)
    {
        $this->layout('@theme/layout.twig');
        
        $sm = $this->getServiceLocator();

        $viewManager = $sm->get('View');
        $twigRenderingStrategy = $sm->get('TwigViewStrategy');
        $viewManager->getEventManager()->attach($twigRenderingStrategy, 100);

//		$twig = $sl->get('TwigViewRenderer')->getEngine();

        // Add themes to template stack
        $templateStack = $sm->get('TwigEnvironment');
        $templateStack->getLoader()->addPath('themes/default', 'theme');

        $templateStack = $sm->get('ViewTemplatePathStack');
        $templateStack->addPath('themes/default');

        $layout = $this->layout();
        $layout->pages = $sm->get('socialog_page_mapper')->findAllPages();

        parent::onDispatch($e);
    }
}
