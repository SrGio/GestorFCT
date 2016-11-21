<?php

namespace FctBundle\Entity;

/**
 * Profesores
 */
class Profesores
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $departamento;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Profesores
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Profesores
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return Profesores
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $alumnos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumnos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumno
     *
     * @param \FctBundle\Entity\Alumnos $alumno
     *
     * @return Empresas
     */
    public function addAlumno(\FctBundle\Entity\Alumnos $alumno)
    {
        $this->alumnos[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \FctBundle\Entity\Alumnos $alumno
     */
    public function removeAlumno(\FctBundle\Entity\Alumnos $alumno)
    {
        $this->alumnos->removeElement($alumno);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
