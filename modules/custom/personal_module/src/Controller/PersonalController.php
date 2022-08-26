<?php

namespace Drupal\personal_module\Controller;
use Drupal\Core\StringTranslation\StringTranslationTrait;
// use Drupal\Core\StringTranslation\TranslationInterface;


class PersonalController 
{
    use StringTranslationTrait;
    /**
     * @Route("/path")
     */
    public function personal()
    {
    //    return array(['#markup' => 'This is a short description of a cool guy in React Class 22k']);
    return ['#markup' => $this->t('Welcome home')];

    }

}