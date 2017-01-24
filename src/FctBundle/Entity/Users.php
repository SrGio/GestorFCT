<?php

namespace FctBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */

/**
 * Users
 */
class Users implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
    *  @Assert\Length(
    *      min = 4,
    *      max = 32,
    *      minMessage = "Debe tener como minimo 4 caracteres",
    *      maxMessage = "Debe tener como máximo 32 caracteres"
    * )
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 8,
     *      max=4096,
     *      minMessage = "Debe tener como minimo 8 caracteres",
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=true,
     *     message="Debe contener algún número"
     * )
     *
     * @Assert\Regex(
     *     pattern     = "/^[a-z]+.+$/i",
     *     htmlPattern = "^[a-z]+$",
     *     message="Debe contener alguna letra"
     * )
     * @Assert\Regex(
     *     pattern     = "/^[A-Z]+.+$/",
     *     htmlPattern = "^[a-zA-Z]+$",
     *     message="Debe contener alguna letra mayúscula"
     * )
     */
    private $plainPassword;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles = array();


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
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }


    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return Users
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles() {
      return array('ROLE_USER');
    }
    public function eraseCredentials(){}
}
