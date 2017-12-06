<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtiUtilisateur
 *
 * @ORM\Table(name="uti_utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="uti_pseudo", columns={"uti_pseudo"})})
 * @ORM\Entity
 */
class UtiUtilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="uti_pseudo", type="string", length=50, nullable=true)
     */
    private $utiPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_nom", type="string", length=50, nullable=true)
     */
    private $utiNom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_prenom", type="string", length=50, nullable=true)
     */
    private $utiPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_mdp", type="string", length=250, nullable=true)
     */
    private $utiMdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="uti_autorisation", type="integer", nullable=false)
     */
    private $utiAutorisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="uti_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utiOid;



    /**
     * Set utiPseudo
     *
     * @param string $utiPseudo
     *
     * @return UtiUtilisateur
     */
    public function setUtiPseudo($utiPseudo)
    {
        $this->utiPseudo = $utiPseudo;

        return $this;
    }

    /**
     * Get utiPseudo
     *
     * @return string
     */
    public function getUtiPseudo()
    {
        return $this->utiPseudo;
    }

    /**
     * Set utiNom
     *
     * @param string $utiNom
     *
     * @return UtiUtilisateur
     */
    public function setUtiNom($utiNom)
    {
        $this->utiNom = $utiNom;

        return $this;
    }

    /**
     * Get utiNom
     *
     * @return string
     */
    public function getUtiNom()
    {
        return $this->utiNom;
    }

    /**
     * Set utiPrenom
     *
     * @param string $utiPrenom
     *
     * @return UtiUtilisateur
     */
    public function setUtiPrenom($utiPrenom)
    {
        $this->utiPrenom = $utiPrenom;

        return $this;
    }

    /**
     * Get utiPrenom
     *
     * @return string
     */
    public function getUtiPrenom()
    {
        return $this->utiPrenom;
    }

    /**
     * Set utiMdp
     *
     * @param string $utiMdp
     *
     * @return UtiUtilisateur
     */
    public function setUtiMdp($utiMdp)
    {
        $this->utiMdp = $utiMdp;

        return $this;
    }

    /**
     * Get utiMdp
     *
     * @return string
     */
    public function getUtiMdp()
    {
        return $this->utiMdp;
    }

    /**
     * Set utiAutorisation
     *
     * @param integer $utiAutorisation
     *
     * @return UtiUtilisateur
     */
    public function setUtiAutorisation($utiAutorisation)
    {
        $this->utiAutorisation = $utiAutorisation;

        return $this;
    }

    /**
     * Get utiAutorisation
     *
     * @return integer
     */
    public function getUtiAutorisation()
    {
        return $this->utiAutorisation;
    }

    /**
     * Get utiOid
     *
     * @return integer
     */
    public function getUtiOid()
    {
        return $this->utiOid;
    }
}
