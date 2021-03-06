<?php
namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_game")
 */
class UserGame
{
    private $id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Game")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $game;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Platform")
     * @ORM\JoinColumn(name="platform_id", referencedColumnName="id")
     **/
    private $platform;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min = 0, max = 20)
     */
    private $rating;

    /**
     * @ORM\Column(type="boolean")
     */
    private $box = true;

    /**
     * @ORM\Column(type="boolean")
     */
    private $manual = true;

    /**
     * @ORM\Column(length=10)
     * @Assert\NotBlank()
     */
    private $version;

    /**
     * @ORM\Column(type="integer", name="price_asked")
     */
    private $priceAsked;

    /**
     * @ORM\Column(type="integer", name="price_paid")
     */
    private $pricePaid;

    /**
     * @ORM\Column(type="integer", name="price_resale", nullable=true)
     */
    private $priceResale;

    /**
     * @ORM\Column(type="integer", name="price_sold", nullable=true)
     */
    private $priceSold;

    /**
     * @ORM\Column(type="date", name="purchase_date")
     */
    private $purchaseDate;

    /**
     * @ORM\Column(type="date", name="sale_date", nullable=true)
     */
    private $saleDate;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Range(min = 0, max = 3)
     */
    private $progress = 0;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="Place")
     * @ORM\JoinColumn(name="purchase_place_id", referencedColumnName="id")
     **/
    private $purchasePlace;

    /**
     * @ORM\ManyToOne(targetEntity="Place")
     * @ORM\JoinColumn(name="sale_place_id", referencedColumnName="id")
     **/
    private $salePlace;

    /**
     * @ORM\ManyToOne(targetEntity="Contact")
     * @ORM\JoinColumn(name="purchase_contact_id", referencedColumnName="id")
     **/
    private $purchaseContact;

    /**
     * @ORM\ManyToOne(targetEntity="Contact")
     * @ORM\JoinColumn(name="sale_contact_id", referencedColumnName="id")
     **/
    private $saleContact;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return UserGame
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get box
     *
     * @return boolean
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * Set box
     *
     * @param boolean $box
     *
     * @return UserGame
     */
    public function setBox($box)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get manual
     *
     * @return boolean
     */
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * Set manual
     *
     * @param boolean $manual
     *
     * @return UserGame
     */
    public function setManual($manual)
    {
        $this->manual = $manual;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return UserGame
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get priceAsked
     *
     * @return integer
     */
    public function getPriceAsked()
    {
        return $this->priceAsked;
    }

    /**
     * Set priceAsked
     *
     * @param integer $priceAsked
     *
     * @return UserGame
     */
    public function setPriceAsked($priceAsked)
    {
        $this->priceAsked = $priceAsked;

        return $this;
    }

    /**
     * Get pricePaid
     *
     * @return integer
     */
    public function getPricePaid()
    {
        return $this->pricePaid;
    }

    /**
     * Set pricePaid
     *
     * @param integer $pricePaid
     *
     * @return UserGame
     */
    public function setPricePaid($pricePaid)
    {
        $this->pricePaid = $pricePaid;

        return $this;
    }

    /**
     * Get priceResale
     *
     * @return integer
     */
    public function getPriceResale()
    {
        return $this->priceResale;
    }

    /**
     * Set priceResale
     *
     * @param integer $priceResale
     *
     * @return UserGame
     */
    public function setPriceResale($priceResale)
    {
        $this->priceResale = $priceResale;

        return $this;
    }

    /**
     * Get priceSold
     *
     * @return integer
     */
    public function getPriceSold()
    {
        return $this->priceSold;
    }

    /**
     * Set priceSold
     *
     * @param integer $priceSold
     *
     * @return UserGame
     */
    public function setPriceSold($priceSold)
    {
        $this->priceSold = $priceSold;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return UserGame
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get saleDate
     *
     * @return \DateTime
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }

    /**
     * Set saleDate
     *
     * @param \DateTime $saleDate
     *
     * @return UserGame
     */
    public function setSaleDate($saleDate)
    {
        $this->saleDate = $saleDate;

        return $this;
    }

    /**
     * Get progress
     *
     * @return integer
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set progress
     *
     * @param integer $progress
     *
     * @return UserGame
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return UserGame
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return UserGame
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get game
     *
     * @return Game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set game
     *
     * @param Game $game
     *
     * @return UserGame
     */
    public function setGame(Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get platform
     *
     * @return Platform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set platform
     *
     * @param Platform $platform
     *
     * @return Game
     */
    public function setPlatform(Platform $platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get purchasePlace
     *
     * @return \GameBundle\Entity\Place
     */
    public function getPurchasePlace()
    {
        return $this->purchasePlace;
    }

    /**
     * Set purchasePlace
     *
     * @param Place $purchasePlace
     *
     * @return UserGame
     */
    public function setPurchasePlace(Place $purchasePlace)
    {
        $this->purchasePlace = $purchasePlace;

        return $this;
    }

    /**
     * Get salePlace
     *
     * @return Place
     */
    public function getSalePlace()
    {
        return $this->salePlace;
    }

    /**
     * Set salePlace
     *
     * @param Place $salePlace
     *
     * @return UserGame
     */
    public function setSalePlace(Place $salePlace = null)
    {
        $this->salePlace = $salePlace;

        return $this;
    }

    /**
     * Get purchaseContact
     *
     * @return Contact
     */
    public function getPurchaseContact()
    {
        return $this->purchaseContact;
    }

    /**
     * Set purchaseContact
     *
     * @param Contact $purchaseContact
     *
     * @return UserGame
     */
    public function setPurchaseContact(Contact $purchaseContact)
    {
        $this->purchaseContact = $purchaseContact;

        return $this;
    }

    /**
     * Get saleContact
     *
     * @return Contact
     */
    public function getSaleContact()
    {
        return $this->saleContact;
    }

    /**
     * Set saleContact
     *
     * @param Contact $saleContact
     *
     * @return UserGame
     */
    public function setSaleContact(Contact $saleContact = null)
    {
        $this->saleContact = $saleContact;

        return $this;
    }
}
