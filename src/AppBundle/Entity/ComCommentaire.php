<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComCommentaire
 *
 * @ORM\Table(name="com_commentaire", indexes={@ORM\Index(name="tra_oid", columns={"tra_oid"}), @ORM\Index(name="uti_oid", columns={"uti_oid"})})
 * @ORM\Entity
 */
class ComCommentaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="com_commentaire", type="text", length=65535, nullable=true)
     */
    private $comCommentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="com_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comOid;

    /**
     * @var \AppBundle\Entity\TraTravaux
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TraTravaux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tra_oid", referencedColumnName="tra_oid")
     * })
     */
    private $traOid;

    /**
     * @var \AppBundle\Entity\UtiUtilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UtiUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_oid", referencedColumnName="uti_oid")
     * })
     */
    private $utiOid;



    /**
     * Set comCommentaire
     *
     * @param string $comCommentaire
     *
     * @return ComCommentaire
     */
    public function setComCommentaire($comCommentaire)
    {
        $this->comCommentaire = $comCommentaire;

        return $this;
    }

    /**
     * Get comCommentaire
     *
     * @return string
     */
    public function getComCommentaire()
    {
        return $this->comCommentaire;
    }

    /**
     * Get comOid
     *
     * @return integer
     */
    public function getComOid()
    {
        return $this->comOid;
    }

    /**
     * Set traOid
     *
     * @param \AppBundle\Entity\TraTravaux $traOid
     *
     * @return ComCommentaire
     */
    public function setTraOid(\AppBundle\Entity\TraTravaux $traOid = null)
    {
        $this->traOid = $traOid;

        return $this;
    }

    /**
     * Get traOid
     *
     * @return \AppBundle\Entity\TraTravaux
     */
    public function getTraOid()
    {
        return $this->traOid;
    }

    /**
     * Set utiOid
     *
     * @param \AppBundle\Entity\UtiUtilisateur $utiOid
     *
     * @return ComCommentaire
     */
    public function setUtiOid(\AppBundle\Entity\UtiUtilisateur $utiOid = null)
    {
        $this->utiOid = $utiOid;

        return $this;
    }

    /**
     * Get utiOid
     *
     * @return \AppBundle\Entity\UtiUtilisateur
     */
    public function getUtiOid()
    {
        return $this->utiOid;
    }
}
