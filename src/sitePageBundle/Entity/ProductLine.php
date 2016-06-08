<?php

namespace sitePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductLine
 *
 * @ORM\Table(name="product_line", indexes={@ORM\Index(name="fk_product_line_shop1_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class ProductLine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_product_line", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductLine;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="principal_image", type="string", length=60, nullable=false)
     */
    private $principalImage;

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
     * Get idProductLine
     *
     * @return integer
     */
    public function getIdProductLine()
    {
        return $this->idProductLine;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ProductLine
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ProductLine
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
     * Set principalImage
     *
     * @param string $principalImage
     *
     * @return ProductLine
     */
    public function setPrincipalImage($principalImage)
    {
        $this->principalImage = $principalImage;

        return $this;
    }

    /**
     * Get principalImage
     *
     * @return string
     */
    public function getPrincipalImage()
    {
        return $this->principalImage;
    }

    /**
     * Set shop
     *
     * @param \sitePageBundle\Entity\Shop $shop
     *
     * @return ProductLine
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
