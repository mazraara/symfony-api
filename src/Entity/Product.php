<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Column(name="app_product")
 * @ORM\Entity()
 */

class Product
{
    /**
     * @var int|null
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    private $id;
    /**
     * @var string|null
     * @ORM\Column(name="code", type="string", length=150)
     */
    private $code;
    /**
     * @var string|null
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;
    /**
     * @var int|null
     * @ORM\Table(name="price", type="integer")
     */
    private $price;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int|null $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

}