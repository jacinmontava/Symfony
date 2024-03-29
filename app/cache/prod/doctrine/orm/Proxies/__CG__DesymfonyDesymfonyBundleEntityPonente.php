<?php

namespace Proxies\__CG__\Desymfony\DesymfonyBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ponente extends \Desymfony\DesymfonyBundle\Entity\Ponente implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setApellidos($apellidos)
    {
        $this->__load();
        return parent::setApellidos($apellidos);
    }

    public function getApellidos()
    {
        $this->__load();
        return parent::getApellidos();
    }

    public function setBiografia($biografia)
    {
        $this->__load();
        return parent::setBiografia($biografia);
    }

    public function getBiografia()
    {
        $this->__load();
        return parent::getBiografia();
    }

    public function setTelefono($telefono)
    {
        $this->__load();
        return parent::setTelefono($telefono);
    }

    public function getTelefono()
    {
        $this->__load();
        return parent::getTelefono();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setTwitter($twitter)
    {
        $this->__load();
        return parent::setTwitter($twitter);
    }

    public function getTwitter()
    {
        $this->__load();
        return parent::getTwitter();
    }

    public function setLinkedin($linkedin)
    {
        $this->__load();
        return parent::setLinkedin($linkedin);
    }

    public function getLinkedin()
    {
        $this->__load();
        return parent::getLinkedin();
    }

    public function addPonencia(\Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias)
    {
        $this->__load();
        return parent::addPonencia($ponencias);
    }

    public function removePonencia(\Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias)
    {
        $this->__load();
        return parent::removePonencia($ponencias);
    }

    public function getPonencias()
    {
        $this->__load();
        return parent::getPonencias();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'apellidos', 'biografia', 'telefono', 'url', 'email', 'twitter', 'linkedin', 'ponencias');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}