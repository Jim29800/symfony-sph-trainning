<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraTravaux
 *
 * @ORM\Table(name="tra_travaux", indexes={@ORM\Index(name="cli_oid", columns={"cli_oid"})})
 * @ORM\Entity
 */
class TraTravaux
{
    /**
     * @var string
     *
     * @ORM\Column(name="tra_titre", type="string", length=50, nullable=true)
     */
    private $traTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_description", type="string", length=255, nullable=true)
     */
    private $traDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="tra_prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $traPrix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tra_date_debut", type="date", nullable=true)
     */
    private $traDateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tra_date_devis", type="date", nullable=true)
     */
    private $traDateDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tra_date_rappel", type="date", nullable=true)
     */
    private $traDateRappel;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_mode_paiment", type="string", length=50, nullable=true)
     */
    private $traModePaiment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tra_verif", type="boolean", nullable=false)
     */
    private $traVerif;

    /**
     * @var integer
     *
     * @ORM\Column(name="tra_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traOid;

    /**
     * @var \AppBundle\Entity\CliClient
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CliClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cli_oid", referencedColumnName="cli_oid")
     * })
     */
    private $cliOid;



    /**
     * Set traTitre
     *
     * @param string $traTitre
     *
     * @return TraTravaux
     */
    public function setTraTitre($traTitre)
    {
        $this->traTitre = $traTitre;

        return $this;
    }

    /**
     * Get traTitre
     *
     * @return string
     */
    public function getTraTitre()
    {
        return $this->traTitre;
    }

    /**
     * Set traDescription
     *
     * @param string $traDescription
     *
     * @return TraTravaux
     */
    public function setTraDescription($traDescription)
    {
        $this->traDescription = $traDescription;

        return $this;
    }

    /**
     * Get traDescription
     *
     * @return string
     */
    public function getTraDescription()
    {
        return $this->traDescription;
    }

    /**
     * Set traPrix
     *
     * @param float $traPrix
     *
     * @return TraTravaux
     */
    public function setTraPrix($traPrix)
    {
        $this->traPrix = $traPrix;

        return $this;
    }

    /**
     * Get traPrix
     *
     * @return float
     */
    public function getTraPrix()
    {
        return $this->traPrix;
    }

    /**
     * Set traDateDebut
     *
     * @param \DateTime $traDateDebut
     *
     * @return TraTravaux
     */
    public function setTraDateDebut($traDateDebut)
    {
        $this->traDateDebut = $traDateDebut;

        return $this;
    }

    /**
     * Get traDateDebut
     *
     * @return \DateTime
     */
    public function getTraDateDebut()
    {
        return $this->traDateDebut;
    }

    /**
     * Set traDateDevis
     *
     * @param \DateTime $traDateDevis
     *
     * @return TraTravaux
     */
    public function setTraDateDevis($traDateDevis)
    {
        $this->traDateDevis = $traDateDevis;

        return $this;
    }

    /**
     * Get traDateDevis
     *
     * @return \DateTime
     */
    public function getTraDateDevis()
    {
        return $this->traDateDevis;
    }

    /**
     * Set traDateRappel
     *
     * @param \DateTime $traDateRappel
     *
     * @return TraTravaux
     */
    public function setTraDateRappel($traDateRappel)
    {
        $this->traDateRappel = $traDateRappel;

        return $this;
    }

    /**
     * Get traDateRappel
     *
     * @return \DateTime
     */
    public function getTraDateRappel()
    {
        return $this->traDateRappel;
    }

    /**
     * Set traModePaiment
     *
     * @param string $traModePaiment
     *
     * @return TraTravaux
     */
    public function setTraModePaiment($traModePaiment)
    {
        $this->traModePaiment = $traModePaiment;

        return $this;
    }

    /**
     * Get traModePaiment
     *
     * @return string
     */
    public function getTraModePaiment()
    {
        return $this->traModePaiment;
    }

    /**
     * Set traVerif
     *
     * @param boolean $traVerif
     *
     * @return TraTravaux
     */
    public function setTraVerif($traVerif)
    {
        $this->traVerif = $traVerif;

        return $this;
    }

    /**
     * Get traVerif
     *
     * @return boolean
     */
    public function getTraVerif()
    {
        return $this->traVerif;
    }

    /**
     * Get traOid
     *
     * @return integer
     */
    public function getTraOid()
    {
        return $this->traOid;
    }

    /**
     * Set cliOid
     *
     * @param \AppBundle\Entity\CliClient $cliOid
     *
     * @return TraTravaux
     */
    public function setCliOid(\AppBundle\Entity\CliClient $cliOid = null)
    {
        $this->cliOid = $cliOid;

        return $this;
    }

    /**
     * Get cliOid
     *
     * @return \AppBundle\Entity\CliClient
     */
    public function getCliOid()
    {
        return $this->cliOid;
    }
}
