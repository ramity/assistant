<?php

namespace HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mealplan
 *
 * @ORM\Table(name="mealplan")
 * @ORM\Entity(repositoryClass="HealthBundle\Repository\MealplanRepository")
 */
class Mealplan
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="HealthBundle\Entity\Meal", cascade={"persist"})
     * @ORM\JoinColumn(name="meal_items", referencedColumnName="id", onDelete="CASCADE")
     */
    private $mealItems;


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
     * Set name
     *
     * @param string $name
     *
     * @return Mealplan
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mealItems
     *
     * @param integer $mealItems
     *
     * @return Mealplan
     */
    public function setMealItems($mealItems)
    {
        $this->mealItems = $mealItems;

        return $this;
    }

    /**
     * Get mealItems
     *
     * @return int
     */
    public function getMealItems()
    {
        return $this->mealItems;
    }
}
