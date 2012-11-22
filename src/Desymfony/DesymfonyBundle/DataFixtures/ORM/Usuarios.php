<?php
namespace Desymfony\DesymfonyBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Desymfony\DesymfonyBundle\Entity\Usuario;

class Usuarios implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$nombres = array('Adán', 'Adolfo', 'Agustin', 'Albert', 'Alberto', 'Alejandro',
                 'Andrés', 'Antonio', 'Ariel', 'Benjamin', 'Bernardo', 'Carles',
                 'Carlos', 'Cayetano', 'César', 'Cristian', 'Daniel', 'David',
                 'Diego', 'Dimas', 'Eduardo', 'Eneko', 'Esteban', 'Fernando',
                 'Francisco', 'Gonzalo', 'Gregorio', 'Guillermo', 'Haritz', 'Iago',
                 'Ignacio', 'Iker', 'Isaïes', 'Isis', 'Iván', 'Jacob', 'Javier',
                 'Joan', 'Jordi', 'Jorge', 'Jose', 'Juan', 'Kevin', 'Luis', 'Marc',
                 'Marta', 'Miguel', 'Moisés', 'Oriol', 'Oscar', 'Pablo', 'Pedro',
                 'Pere', 'Rafael', 'Raúl', 'Rebeca', 'Rosa', 'Rubén', 'Salvador',
                 'Santiago', 'Sergio', 'Susana', 'Verónica', 'Vicente', 'Víctor',
                 'Victoria', 'Vidal');

		/* Los 50 apellidos más comunes en España según el Instituto de Estadística */
		$apellidos = array('García', 'Fernández', 'González', 'Rodríguez', 'López', 'Martínez',
		        'Sánchez', 'Pérez', 'Martín', 'Gómez', 'Jiménez', 'Ruiz', 'Hernández',
		        'Díaz', 'Moreno', 'Álvarez', 'Muñoz', 'Romero', 'Alonso', 'Gutiérrez',
		        'Navarro', 'Torres', 'Domínguez', 'Vázquez', 'Gil', 'Ramos', 'Serrano',
		        'Blanco', 'Ramírez', 'Molina', 'Suárez', 'Ortega', 'Delgado', 'Morales',
		        'Castro', 'Rubio', 'Ortíz', 'Marín', 'Sanz', 'Iglesias', 'Núñez',
		        'Garrido', 'Cortés', 'Medina', 'Santos', 'Lozano', 'Cano', 'Castillo',
		        'Gerrero', 'Prieto');
				
		
	    foreach (range(1, 100) as $i) {
			$usuario = new Usuario();
        
	        $usuario->setNombre($nombres[rand(0, count($nombres)-1)]);
	        $usuario->setApellidos(
	            $apellidos[rand(0, count($apellidos)-1)].
	            ' '.
	            $apellidos[rand(0, count($apellidos)-1)]
	        );
        
	        $dni = substr(rand(), 0, 8);
	        $usuario->setDni($dni.substr("TRWAGMYFPDXBNJZSQVHLCKE", strtr($dni, "XYZ", "012")%23, 1));
        
	        $usuario->setDireccion('Calle '.$i);
	        $usuario->setTelefono('600'.substr(rand(), 0, 6));
	        $usuario->setEmail('usuario'.$i.'@desymfony.com');

	        $usuario->setPassword('pass'.$i);
        
	        $manager->persist($usuario);
	    }
	    $manager->flush();
	}
}
?>