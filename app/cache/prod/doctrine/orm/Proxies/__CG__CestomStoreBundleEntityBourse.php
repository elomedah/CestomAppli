<?php

namespace Proxies\__CG__\Cestom\StoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bourse extends \Cestom\StoreBundle\Entity\Bourse implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'idBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'anneeUniversitaire', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'docBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'typeDoc', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'etatDoc', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'idmembre', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'fichierBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'misAJour', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'dateCreation');
        }

        return array('__isInitialized__', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'idBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'anneeUniversitaire', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'docBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'typeDoc', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'etatDoc', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'idmembre', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'fichierBourse', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'misAJour', '' . "\0" . 'Cestom\\StoreBundle\\Entity\\Bourse' . "\0" . 'dateCreation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bourse $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function setFichierBourse(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierBourse', array($image));

        return parent::setFichierBourse($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichierBourse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichierBourse', array());

        return parent::getFichierBourse();
    }

    /**
     * {@inheritDoc}
     */
    public function setMisAJour($misAJour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMisAJour', array($misAJour));

        return parent::setMisAJour($misAJour);
    }

    /**
     * {@inheritDoc}
     */
    public function getMisAJour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMisAJour', array());

        return parent::getMisAJour();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function setDocBourse($docBourse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocBourse', array($docBourse));

        return parent::setDocBourse($docBourse);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocBourse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocBourse', array());

        return parent::getDocBourse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeDoc($typeDoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeDoc', array($typeDoc));

        return parent::setTypeDoc($typeDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeDoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeDoc', array());

        return parent::getTypeDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatDoc($etatDoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatDoc', array($etatDoc));

        return parent::setEtatDoc($etatDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatDoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatDoc', array());

        return parent::getEtatDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnneeUniversitaire($anneeUniversitaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnneeUniversitaire', array($anneeUniversitaire));

        return parent::setAnneeUniversitaire($anneeUniversitaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnneeUniversitaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneeUniversitaire', array());

        return parent::getAnneeUniversitaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmembre(\Cestom\StoreBundle\Entity\Membre $idmembre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmembre', array($idmembre));

        return parent::setIdmembre($idmembre);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmembre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmembre', array());

        return parent::getIdmembre();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdBourse()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdBourse();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdBourse', array());

        return parent::getIdBourse();
    }

}
