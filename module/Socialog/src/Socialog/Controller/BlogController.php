<?php

namespace Socialog\Controller;

use Zend\View\Model\ViewModel;

class BlogController extends AbstractController
{
    public function homeAction()
    {
        $sm = $this->getServiceLocator();
        $postMapper = $sm->get('socialog_tumblr_postmapper');

        $viewModel = new ViewModel;
        $viewModel->setTemplate('home');
        $viewModel->posts = $postMapper->findAllPosts();

        return $viewModel;
    }

    public function postAction()
    {
        $viewModel = new ViewModel;
        $viewModel->setTemplate('post');

        $viewModel->comments = array(
            array(
                'name' => 'Roy',
                'comment' => 'Dit is een test comment 1',
            ),
            array(
                'name' => 'Roy',
                'comment' => 'Dit is een test comment 2',
            ),
        );

        return $viewModel;
    }
}