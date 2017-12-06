<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CliClient
 *
 * @ORM\Table(name="cli_client")
 * @ORM\Entity
 */
class CliClient
{
    /**
     * @var string
     *
     * @Assert\Length(min=3)
     * @Assert\NotBlank()
     * @ORM\Column(name="cli_nom", type="string", length=250, nullable=true)
     */
    private $cliNom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_prenom", type="string", length=250, nullable=true)
     */
    private $cliPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_email", type="string", length=250, nullable=true)
     */
    private $cliEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_adresse", type="string", length=500, nullable=true)
     */
    private $cliAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_cp", type="string", length=5, nullable=true)
     */
    private $cliCp;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_ville", type="string", length=100, nullable=true)
     */
    private $cliVille;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_tel", type="string", length=12, nullable=true)
     */
    private $cliTel;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_commentaire", type="text", length=65535, nullable=true)
     */
    private $cliCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_provenance", type="string", length=50, nullable=true)
     */
    private $cliProvenance;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cliOid;



    /**
     * Set cliNom
     *
     * @param string $cliNom
     *
     * @return CliClient
     */
    public function setCliNom($cliNom)
    {
        $this->cliNom = $cliNom;

        return $this;
    }

    /**
     * Get cliNom
     *
     * @return string
     */
    public function getCliNom()
    {
        return $this->cliNom;
    }

    /**
     * Set cliPrenom
     *
     * @param string $cliPrenom
     *
     * @return CliClient
     */
    public function setCliPrenom($cliPrenom)
    {
        $this->cliPrenom = $cliPrenom;

        return $this;
    }

    /**
     * Get cliPrenom
     *
     * @return string
     */
    public function getCliPrenom()
    {
        return $this->cliPrenom;
    }

    /**
     * Set cliEmail
     *
     * @param string $cliEmail
     *
     * @return CliClient
     */
    public function setCliEmail($cliEmail)
    {
        $this->cliEmail = $cliEmail;

        return $this;
    }

    /**
     * Get cliEmail
     *
     * @return string
     */
    public function getCliEmail()
    {
        return $this->cliEmail;
    }

    /**
     * Set cliAdresse
     *
     * @param string $cliAdresse
     *
     * @return CliClient
     */
    public function setCliAdresse($cliAdresse)
    {
        $this->cliAdresse = $cliAdresse;

        return $this;
    }

    /**
     * Get cliAdresse
     *
     * @return string
     */
    public function getCliAdresse()
    {
        return $this->cliAdresse;
    }

    /**
     * Set cliCp
     *
     * @param string $cliCp
     *
     * @return CliClient
     */
    public function setCliCp($cliCp)
    {
        $this->cliCp = $cliCp;

        return $this;
    }

    /**
     * Get cliCp
     *
     * @return string
     */
    public function getCliCp()
    {
        return $this->cliCp;
    }

    /**
     * Set cliVille
     *
     * @param string $cliVille
     *
     * @return CliClient
     */
    public function setCliVille($cliVille)
    {
        $this->cliVille = $cliVille;

        return $this;
    }

    /**
     * Get cliVille
     *
     * @return string
     */
    public function getCliVille()
    {
        return $this->cliVille;
    }

    /**
     * Set cliTel
     *
     * @param string $cliTel
     *
     * @return CliClient
     */
    public function setCliTel($cliTel)
    {
        $this->cliTel = $cliTel;

        return $this;
    }

    /**
     * Get cliTel
     *
     * @return string
     */
    public function getCliTel()
    {
        return $this->cliTel;
    }

    /**
     * Set cliCommentaire
     *
     * @param string $cliCommentaire
     *
     * @return CliClient
     */
    public function setCliCommentaire($cliCommentaire)
    {
        $this->cliCommentaire = $cliCommentaire;

        return $this;
    }

    /**
     * Get cliCommentaire
     *
     * @return string
     */
    public function getCliCommentaire()
    {
        return $this->cliCommentaire;
    }

    /**
     * Set cliProvenance
     *
     * @param string $cliProvenance
     *
     * @return CliClient
     */
    public function setCliProvenance($cliProvenance)
    {
        $this->cliProvenance = $cliProvenance;

        return $this;
    }

    /**
     * Get cliProvenance
     *
     * @return string
     */
    public function getCliProvenance()
    {
        return $this->cliProvenance;
    }

    /**
     * Get cliOid
     *
     * @return integer
     */
    public function getCliOid()
    {
        return $this->cliOid;
    }
}
