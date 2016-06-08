<?php

namespace sitePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="fk_contacts_shop_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contacts", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContacts;

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", length=45, nullable=false)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="ubication", type="string", length=45, nullable=false)
     */
    private $ubication;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer", nullable=false)
     */
    private $phone;

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
     * Get idContacts
     *
     * @return integer
     */
    public function getIdContacts()
    {
        return $this->idContacts;
    }

    /**
     * Set direction
     *
     * @param string $direction
     *
     * @return Contact
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set ubication
     *
     * @param string $ubication
     *
     * @return Contact
     */
    public function setUbication($ubication)
    {
        $this->ubication = $ubication;

        return $this;
    }

    /**
     * Get ubication
     *
     * @return string
     */
    public function getUbication()
    {
        return $this->ubication;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set shop
     *
     * @param \sitePageBundle\Entity\Shop $shop
     *
     * @return Contact
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
