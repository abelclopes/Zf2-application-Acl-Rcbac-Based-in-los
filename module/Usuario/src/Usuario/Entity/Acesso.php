<?php
namespace Usuario\Entity;

use Doctrine\ORM\Mapping as ORM;
use LosBase\Entity\AbstractEntity as AbstractEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="acesso")
 */
class Acesso extends AbstractEntity
{
    /**
     * @ORM\Column(type="string")
     */
    protected $ip;

    /**
     * @ORM\Column(type="string")
     */
    protected $agente;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario\Entity\Usuario", inversedBy="acessos")
     * @ORM\JoinColumn(nullable=false, onDelete="RESTRICT")
     */
    protected $usuario;

    /**
     * construtor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retorna o campo $ip
     * @return $ip
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Seta o campo $ip
     * @param  field_type $ip
     * @return Acesso
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Retorna o campo $usuario
     * @return $usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Seta o campo $usuario
     * @param  field_type $usuario
     * @return Compra
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getAgente()
    {
        return $this->agente;
    }

    public function setAgente($agente)
    {
        $this->agente = $agente;

        return $this;
    }

}
