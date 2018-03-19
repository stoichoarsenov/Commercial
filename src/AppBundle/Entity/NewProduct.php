<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * NewProduct
 *
 * @ORM\Table(name="new_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewProductRepository")
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity("name")
 */
class NewProduct
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
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Product name must be at least {{ limit }} characters long.",
     *      maxMessage = "Product name cannot be longer than {{ limit }} characters."
     * )
     * @ORM\Column(name="name", unique=true, type="string", length=30)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="category", type="string", length=255)
     * @Assert\NotNull()
     */
    private $category;

    /**
     * @var float
     * @Assert\NotNull()
     * @Assert\GreaterThan( value = 0.01 )
     * @ORM\Column(name="price", type="decimal", precision=8, scale=2)
     */
    private $price;

    /**
     * @var float
     * @Assert\NotNull()
     * @Assert\GreaterThan( value = 1 )
     * @ORM\Column(name="quantity", type="decimal" , precision=6, scale=0)
     */
    private $quantity;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 1500,
     *      minMessage = "Product description must be at least {{ limit }} characters long.",
     *      maxMessage = "Product description cannot be longer than {{ limit }} characters."
     * )
     * @ORM\Column(name="description", type="string", length=1500)
     */
    private $description;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime")
     */
    private $dateAdded;

    /**
     * @var int
     * @Assert\NotNull()
     * @Assert\GreaterThan( value = 0.01 )
     * @ORM\Column(name="boughtPrice", type="decimal", precision=8, scale=2)
     */
    private $boughtPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="addedBy", type="string", length=255)
     */
    private $addedBy;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product image.")
     * @Assert\File(mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf"
     *      })
     */
    private $image1;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf"
     *      })
     */
    private $image2;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf"
     *      })
     */
    private $image3;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf"
     *      })
     */
    private $image4;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf"
     *      })
     */
    private $image5;

    /**
     * @return mixed
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param mixed $image1
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return mixed
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param mixed $image3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    /**
     * @return mixed
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * @param mixed $image4
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;
    }

    /**
     * @return mixed
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * @param mixed $image5
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return NewProduct
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category.
     *
     * @param string $category
     *
     * @return NewProduct
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return NewProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return NewProduct
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = new \DateTime();

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @return int
     */
    public function getBoughtPrice()
    {
        return $this->boughtPrice;
    }

    /**
     * @param int $boughtPrice
     */
    public function setBoughtPrice($boughtPrice)
    {
        $this->boughtPrice = $boughtPrice;
    }



    /**
     * Set addedBy.
     *
     * @param string $addedBy
     *
     * @return NewProduct
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy.
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}
