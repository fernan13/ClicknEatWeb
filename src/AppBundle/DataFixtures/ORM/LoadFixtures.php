<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Genus;
use Nelmio\Alice\Fixtures;
use Appundle\Entity\Usuario\Usuario;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objects = Fixtures::load(__DIR__.'/fixtures.yml', $manager, array('providers' => array($this)));
    }
    
    //Funcion que hemos definido para generar nombres aleatorios de genus
    public function genus()
    {
        $genera = array(
            'Octopus',
            'Balaena',
            'Orcinus',
            'Hippocampus',
            'Asterias',
            'Amphiprion',
            'Carcharodon',
            'Aurelia',
            'Cucumaria',
            'Balistoides',
            'Paralithodes',
            'Chelonia',
            'Trichechus',
            'Eumetopias'
        );
        
        //array_rand devuelve un indice aleatorio dentro de los indices del array pasado como parámetro
        return $genera[array_rand($genera)];
    }   
    
    
}