<?php
namespace Desymfony\DesymfonyBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Desymfony\DesymfonyBundle\Entity\Ponencia;
use Desymfony\DesymfonyBundle\Usuario;
use Desymfony\DesymfonyBundle\Ponente;

class Ponencias implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$usuarios = $manager->getRepository('DesymfonyBundle:Ponente')->findAll();
		
		// -- Cargar datos de PONENCIAS ---------------------------------------
        $ponencia = new Ponencia();
        $ponencia->setTitulo('Instalación y puesta a punto');
        $ponencia->setDescripcion('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $ponencia->setFecha(new \DateTime('2011-07-01'));
        $ponencia->setHora(new \DateTime('9:45:00'));
        $ponencia->setDuracion(45);
        $ponencia->setIdioma('es');

        $ponencia->setPonente(
			$manager->merge($this->getReference('javierEguiluz'))
		);

        $manager->persist($ponencia);

        $manager->flush();
	}
}   
?>  