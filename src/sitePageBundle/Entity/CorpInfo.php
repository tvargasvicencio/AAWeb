<?php

namespace sitePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorpInfo
 *
 * @ORM\Table(name="corp_info", indexes={@ORM\Index(name="fk_corp_info_shop1_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class CorpInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_corp_info", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCorpInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description = 'Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.';

    /**
     * @var string
     *
     * @ORM\Column(name="vision", type="string", length=1000, nullable=false)
     */
    private $vision = 'Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.';

    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="string", length=1000, nullable=false)
     */
    private $mission = 'Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.';

    /**
     * @var \Shop
     *
     * @ORM\ManyToOne(targetEntity="Shop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id_shop")
     * })
     */
    private $shop;



    /**
     * Get idCorpInfo
     *
     * @return integer
     */
    public function getIdCorpInfo()
    {
        return $this->idCorpInfo;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CorpInfo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set vision
     *
     * @param string $vision
     *
     * @return CorpInfo
     */
    public function setVision($vision)
    {
        $this->vision = $vision;

        return $this;
    }

    /**
     * Get vision
     *
     * @return string
     */
    public function getVision()
    {
        return $this->vision;
    }

    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return CorpInfo
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set shop
     *
     * @param \sitePageBundle\Entity\Shop $shop
     *
     * @return CorpInfo
     */
    public function setShop(\sitePageBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return \sitePageBundle\Entity\Shop
     */
    public function getShop()
    {
        return $this->shop;
    }
}
