<?php

namespace FctBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * conf
 */
class conf
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $param;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $configuracion;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return conf
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set configuracion
     *
     * @param string $configuracion
     *
     * @return conf
     */
    public function setConfiguracion($configuracion)
    {
        $this->configuracion = $configuracion;

        return $this;
    }

    /**
     * Get configuracion
     *
     * @return string
     */
    public function getConfiguracion()
    {
        return $this->configuracion;
    }
}
