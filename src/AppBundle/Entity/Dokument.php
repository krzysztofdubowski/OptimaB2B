<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dokument
 *
 * @ORM\Table(name="dokument")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DokumentRepository")
 */
class Dokument
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="TrN_TrNID", type="integer", unique=true)
     */
    private $trNTrNID;

    /**
     * @var int
     *
     * @ORM\Column(name="TrN_TypDokumentu", type="integer")
     */
    private $trNTypDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="TrN_NumerPelny", type="string", length=255)
     */
    private $trNNumerPelny;

    /**
     * @var string
     *
     * @ORM\Column(name="TrN_RazemNetto", type="decimal", precision=4, scale=0)
     */
    private $trNRazemNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="TrN_RazemVAT", type="decimal", precision=4, scale=0)
     */
    private $trNRazemVAT;

    /**
     * @var string
     *
     * @ORM\Column(name="TrN_RazemBrutto", type="decimal", precision=4, scale=0)
     */
    private $trNRazemBrutto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TrN_DataDok", type="date")
     */
    private $trNDataDok;

    /**
     * @var int
     *
     * @ORM\Column(name="TrN_PodID", type="integer")
     */
    private $trNPodID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TrN_Termin", type="date")
     */
    private $trNTermin;


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
     * Set trNTrNID
     *
     * @param integer $trNTrNID
     *
     * @return Dokument
     */
    public function setTrNTrNID($trNTrNID)
    {
        $this->trNTrNID = $trNTrNID;

        return $this;
    }

    /**
     * Get trNTrNID
     *
     * @return int
     */
    public function getTrNTrNID()
    {
        return $this->trNTrNID;
    }

    /**
     * Set trNTypDokumentu
     *
     * @param integer $trNTypDokumentu
     *
     * @return Dokument
     */
    public function setTrNTypDokumentu($trNTypDokumentu)
    {
        $this->trNTypDokumentu = $trNTypDokumentu;

        return $this;
    }

    /**
     * Get trNTypDokumentu
     *
     * @return int
     */
    public function getTrNTypDokumentu()
    {
        return $this->trNTypDokumentu;
    }

    /**
     * Set trNNumerPelny
     *
     * @param string $trNNumerPelny
     *
     * @return Dokument
     */
    public function setTrNNumerPelny($trNNumerPelny)
    {
        $this->trNNumerPelny = $trNNumerPelny;

        return $this;
    }

    /**
     * Get trNNumerPelny
     *
     * @return string
     */
    public function getTrNNumerPelny()
    {
        return $this->trNNumerPelny;
    }

    /**
     * Set trNRazemNetto
     *
     * @param string $trNRazemNetto
     *
     * @return Dokument
     */
    public function setTrNRazemNetto($trNRazemNetto)
    {
        $this->trNRazemNetto = $trNRazemNetto;

        return $this;
    }

    /**
     * Get trNRazemNetto
     *
     * @return string
     */
    public function getTrNRazemNetto()
    {
        return $this->trNRazemNetto;
    }

    /**
     * Set trNRazemVAT
     *
     * @param string $trNRazemVAT
     *
     * @return Dokument
     */
    public function setTrNRazemVAT($trNRazemVAT)
    {
        $this->trNRazemVAT = $trNRazemVAT;

        return $this;
    }

    /**
     * Get trNRazemVAT
     *
     * @return string
     */
    public function getTrNRazemVAT()
    {
        return $this->trNRazemVAT;
    }

    /**
     * Set trNRazemBrutto
     *
     * @param string $trNRazemBrutto
     *
     * @return Dokument
     */
    public function setTrNRazemBrutto($trNRazemBrutto)
    {
        $this->trNRazemBrutto = $trNRazemBrutto;

        return $this;
    }

    /**
     * Get trNRazemBrutto
     *
     * @return string
     */
    public function getTrNRazemBrutto()
    {
        return $this->trNRazemBrutto;
    }

    /**
     * Set trNDataDok
     *
     * @param \DateTime $trNDataDok
     *
     * @return Dokument
     */
    public function setTrNDataDok($trNDataDok)
    {
        $this->trNDataDok = $trNDataDok;

        return $this;
    }

    /**
     * Get trNDataDok
     *
     * @return \DateTime
     */
    public function getTrNDataDok()
    {
        return $this->trNDataDok;
    }

    /**
     * Set trNPodID
     *
     * @param integer $trNPodID
     *
     * @return Dokument
     */
    public function setTrNPodID($trNPodID)
    {
        $this->trNPodID = $trNPodID;

        return $this;
    }

    /**
     * Get trNPodID
     *
     * @return int
     */
    public function getTrNPodID()
    {
        return $this->trNPodID;
    }

    /**
     * Set trNTermin
     *
     * @param \DateTime $trNTermin
     *
     * @return Dokument
     */
    public function setTrNTermin($trNTermin)
    {
        $this->trNTermin = $trNTermin;

        return $this;
    }

    /**
     * Get trNTermin
     *
     * @return \DateTime
     */
    public function getTrNTermin()
    {
        return $this->trNTermin;
    }
}

