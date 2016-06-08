<?php

namespace sitePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Homepage
 *
 * @ORM\Table(name="homepage", indexes={@ORM\Index(name="fk_homepage_shop1_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class Homepage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_homepage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHomepage;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_color", type="string", length=7, nullable=false)
     */
    private $menuColor = '#222';

    /**
     * @var string
     *
     * @ORM\Column(name="title_color", type="string", length=7, nullable=false)
     */
    private $titleColor = '#fff';

    /**
     * @var string
     *
     * @ORM\Column(name="font_color", type="string", length=7, nullable=false)
     */
    private $fontColor = '#333';

    /**
     * @var string
     *
     * @ORM\Column(name="background_color", type="string", length=7, nullable=false)
     */
    private $backgroundColor = '#fff';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=60, nullable=false)
     */
    private $image = 'principal1.jpg';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_button_color", type="string", length=45, nullable=false)
     */
    private $ciButtonColor = '#fff';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_button_font_color", type="string", length=45, nullable=false)
     */
    private $ciButtonFontColor = '#333';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=45, nullable=false)
     */
    private $template = 'template1.html.twig';

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
     * Get idHomepage
     *
     * @return integer
     */
    public function getIdHomepage()
    {
        return $this->idHomepage;
    }

    /**
     * Set menuColor
     *
     * @param string $menuColor
     *
     * @return Homepage
     */
    public function setMenuColor($menuColor)
    {
        $this->menuColor = $menuColor;

        return $this;
    }

    /**
     * Get menuColor
     *
     * @return string
     */
    public function getMenuColor()
    {
        return $this->menuColor;
    }

    /**
     * Set titleColor
     *
     * @param string $titleColor
     *
     * @return Homepage
     */
    public function setTitleColor($titleColor)
    {
        $this->titleColor = $titleColor;

        return $this;
    }

    /**
     * Get titleColor
     *
     * @return string
     */
    public function getTitleColor()
    {
        return $this->titleColor;
    }

    /**
     * Set fontColor
     *
     * @param string $fontColor
     *
     * @return Homepage
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * Get fontColor
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * Set backgroundColor
     *
     * @param string $backgroundColor
     *
     * @return Homepage
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Homepage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set ciButtonColor
     *
     * @param string $ciButtonColor
     *
     * @return Homepage
     */
    public function setCiButtonColor($ciButtonColor)
    {
        $this->ciButtonColor = $ciButtonColor;

        return $this;
    }

    /**
     * Get ciButtonColor
     *
     * @return string
     */
    public function getCiButtonColor()
    {
        return $this->ciButtonColor;
    }

    /**
     * Set ciButtonFontColor
     *
     * @param string $ciButtonFontColor
     *
     * @return Homepage
     */
    public function setCiButtonFontColor($ciButtonFontColor)
    {
        $this->ciButtonFontColor = $ciButtonFontColor;

        return $this;
    }

    /**
     * Get ciButtonFontColor
     *
     * @return string
     */
    public function getCiButtonFontColor()
    {
        return $this->ciButtonFontColor;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return Homepage
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set shop
     *
     * @param \sitePageBundle\Entity\Shop $shop
     *
     * @return Homepage
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
