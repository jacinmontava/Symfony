<?php
namespace Desymfony\DesymfonyBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Desymfony\DesymfonyBundle\Entity\Ponente;

class Ponentes implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$ponentes = array(
		    'javierLopez' => array(
		        'nombre' => 'Javier',
		        'apellidos' => 'López',
		        'biografia' => 'Javier es co-fundador de Flai Webnected, una empresa especializada en el desarrollo de aplicaciones con este framework. Además de programar, también imparte clases de PHP en la Universidad de Córdoba.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.loalf.com/',
		        'email' => 'javier@xxx.xx',
		        'linkedin' => 'http://es.linkedin.com/in/loalf',
		        'twitter' => 'http://www.twitter.com/loalf'
		    ),
		    'nachoMartin' => array(
		        'nombre' => 'Ignacio',
		        'apellidos' => 'Martín',
		        'biografia' => 'Nacho es un programador y emprendedor con una buena lista de proyectos Symfony a sus espaldas. Entusiasta del software libre y de las buenas prácticas, cuando no está frente a una consola con un Vim abierto nota que le falta algo.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.nacho-martin.com',
		        'email' => 'nacho@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/ignaciomartinlat',
		        'twitter' => 'http://twitter.com/nacmartin'
		    ),
		    'marcosLabad' => array(
		        'nombre' => 'Marcos',
		        'apellidos' => 'Labad',
		        'biografia' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.quevidaesta.com',
		        'email' => 'marcos@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/marcoslabad',
		        'twitter' => 'http://twitter.com/esmiz'
		    ),
		    'albertJessurum' => array(
		        'nombre' => 'Albert',
		        'apellidos' => 'Jessurum',
		        'biografia' => 'Albert es un desarrollador web, especializado en PHP y apasionado de Symfony. Participa activamente en la comunidad de desarrolladores de Symfony2 con contribuciones al framework, documentación y prestando ayuda en sus listas de correo. Recientemente creo sftuts.com, con la idea de ayudar a nuevos usuarios de Symfony, y en un futuro próximo a su comunidad hispana.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://sftuts.com',
		        'email' => 'albert@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/albertjessurum',
		        'twitter' => 'http://www.twitter.com/ajessu'
		    ),
		    'pabloDiez' => array(
		        'nombre' => 'Pablo',
		        'apellidos' => 'Diez',
		        'biografia' => 'Pablo Díez es un desarrollador con alta experiencia en PHP apasionado por Symfony2, MongoDB y el alto rendimiento. Amante del software libre y de las buenas prácticas ha creado varios proyectos como Mandango, Doctrator o Pagerfanta. Le encanta el desarrollo rápido, y para ello ha creado una de las grandes ausencias de Symfony2, un AdminBundle.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://pablodip.com',
		        'email' => 'pablo@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/pub/pablo-d%C3%ADez/26/163/5b',
		        'twitter' => 'http://twitter.com/pablodip'
		    ),
		    'pabloGodel' => array(
		        'nombre' => 'Pablo',
		        'apellidos' => 'Godel',
		        'biografia' => 'Pablo Godel programa con PHP desde muy temprano, cuando descubrió la version PHP3 beta en su Argentina natal. A finales de los 90 se mudó a Estados Unidos donde aún reside actualmente. En 2005 fundó ServerGrove Networks, una empresa de Hosting que se especializa en servicios de hosting de PHP, Symfony, Zend Framework y otras soluciones de código abierto.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.servergrove.com',
		        'email' => 'pablo@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/pgodel',
		        'twitter' => 'http://www.twitter.com/pgodel'
		    ),
		    'alvaroVidela' => array(
		        'nombre' => 'Álvaro',
		        'apellidos' => 'Videla',
		        'biografia' => 'Álvaro es un programador web con experiencia desarrollando backends para sitios web con alto tráfico. Ha dado charlas sobre diferentes tecnologías en diferentes conferencias en China, Europa y los EEUU. En este momento se encuentra escribiendo el libro "RabbitMQ in Action".',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://videlalvaro.github.com/',
		        'email' => 'alvaro@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/alvarovidela',
		        'twitter' => 'http://twitter.com/old_sound'
		    ),
		    'asierMarques' => array(
		        'nombre' => 'Asier',
		        'apellidos' => 'Marqués',
		        'biografia' => 'Socio fundador de Blackslot, empresa que ofrece soluciones avanzadas de hosting y desarrollo para internet. Su experiencia profesional, tanto en el campo de desarrollo web como en el de administración de sistemas, le ha permitido desarrollar e investigar tecnologías escalables y de alto rendimiento, temática que le apasiona. También está enganchado al desarrollo de proyectos y negocios en internet.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://asiermarques.com',
		        'email' => 'asier@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/asier',
		        'twitter' => 'http://www.twitter.com/asiermarques'
		    ),
		    'jordiLlonch' => array(
		        'nombre' => 'Jordi',
		        'apellidos' => 'Llonch',
		        'biografia' => 'Soy un desarrollador con más de 10 años de experiencia en PHP desde que fundé LAIGU con Joan Valduvieco, mientras estudiaba una ingenieria técnica industrial en electrónica. En 2007 me enamoré de la primera versión de Symfony y basamos todos nuestros desarrollos y filosofia de empresa alrededor de Symfony. Actualmente formo parte del departamento de IT de Ofertix.com dónde soy uno de los responsables de todo el funcionamiento y desarrollo tecnológico de la empresa',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.linkedin.com/in/jllonch',
		        'email' => 'jordi@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/jllonch',
		        'twitter' => 'http://twitter.com/jordillonch'
		    ),
		    'joseantonioPio' => array(
		        'nombre' => 'Jose Antonio',
		        'apellidos' => 'Pío',
		        'biografia' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://www.joseantoniopio.com/',
		        'email' => 'joseantonio@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/pub/jose-antonio-pio-gil/2/791/713',
		        'twitter' => 'http://twitter.com/josetonyp'
		    ),
		    'javierEguiluz' => array(
		        'nombre' => 'Javier',
		        'apellidos' => 'Eguiluz',
		        'biografia' => 'Javier es el fundador de symfony.es, el sitio web más influyente de la comunidad hispana de Symfony. Programador apasionado por Symfony desde sus primeras versiones, actualmente se dedica a la formación.',
		        'telefono' => '600XXXXXX',
		        'url' => 'http://javiereguiluz.com',
		        'email' => 'javier@xxx.xx',
		        'linkedin' => 'http://www.linkedin.com/in/javiereguiluz',
		        'twitter' => 'http://www.twitter.com/javiereguiluz'
		    )
		);
		foreach ($ponentes as $referencia => $datosPonente) {
		    $ponente = new Ponente();
		
		    foreach ($datosPonente as $propiedad => $valor) {
		        $ponente->{'set'.ucfirst($propiedad)}($valor);
		    }
		
		    $manager->persist($ponente);
		}
		
		$manager->flush();
	}
}
?>