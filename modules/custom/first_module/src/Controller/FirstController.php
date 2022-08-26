<?php

namespace Drupal\first_module\Controller;

class FirstController 
{
    /**
     * @Route("/path")
     */
    public function first()
    {
       return array(['#markup' => 'Welcome to drupal website']);
    }
}