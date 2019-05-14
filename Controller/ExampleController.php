<?php

namespace Logipro\Bundle\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExampleController extends AbstractController
{
    public function view()
    {
        return $this->render('@LogiproExample/Example/example.html.twig');
    }
}
