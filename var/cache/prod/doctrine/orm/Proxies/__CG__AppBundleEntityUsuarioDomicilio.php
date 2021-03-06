<?php

namespace Proxies\__CG__\AppBundle\Entity\Usuario;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Domicilio extends \AppBundle\Entity\Usuario\Domicilio implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'ubicacion', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'imagenes', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'perfil', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'publicacion'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'ubicacion', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'imagenes', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'perfil', '' . "\0" . 'AppBundle\\Entity\\Usuario\\Domicilio' . "\0" . 'publicacion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Domicilio $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getUbicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUbicacion', []);

        return parent::getUbicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUbicacion($ubicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUbicacion', [$ubicacion]);

        return parent::setUbicacion($ubicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagenes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagenes', []);

        return parent::getImagenes();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagenes($imagenes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagenes', [$imagenes]);

        return parent::setImagenes($imagenes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicacion', []);

        return parent::getPublicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerfil($perfil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerfil', [$perfil]);

        return parent::setPerfil($perfil);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfil', []);

        return parent::getPerfil();
    }

    /**
     * {@inheritDoc}
     */
    public function verDomicilio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'verDomicilio', []);

        return parent::verDomicilio();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

}
