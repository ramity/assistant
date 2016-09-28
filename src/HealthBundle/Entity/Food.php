<?php

namespace HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Food
 *
 * @ORM\Table(name="food")
 * @ORM\Entity(repositoryClass="HealthBundle\Repository\FoodRepository")
 */
class Food
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
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_name", type="string", length=255, nullable=true)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="serving_size", type="string", length=255)
     */
    private $servingSize;

    /**
     * @var string
     *
     * @ORM\Column(name="servings_per_container", type="string", length=255)
     */
    private $servingsPerContainer;

    /**
     * @var int
     *
     * @ORM\Column(name="calories", type="integer")
     */
    private $calories;

    /**
     * @var int
     *
     * @ORM\Column(name="carbohydrates", type="integer", nullable=true)
     */
    private $carbohydrates;

    /**
     * @var int
     *
     * @ORM\Column(name="protein", type="integer", nullable=true)
     */
    private $protein;

    /**
     * @var int
     *
     * @ORM\Column(name="fat", type="integer", nullable=true)
     */
    private $fat;

    /**
     * @var int
     *
     * @ORM\Column(name="saturated_fat", type="integer", nullable=true)
     */
    private $saturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="polyunsaturated_fat", type="integer", nullable=true)
     */
    private $polyunsaturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="monounsaturated_fat", type="integer", nullable=true)
     */
    private $monounsaturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="trans_fat", type="integer", nullable=true)
     */
    private $transFat;

    /**
     * @var int
     *
     * @ORM\Column(name="cholesterol", type="integer", nullable=true)
     */
    private $cholesterol;

    /**
     * @var int
     *
     * @ORM\Column(name="sodium", type="integer", nullable=true)
     */
    private $sodium;

    /**
     * @var int
     *
     * @ORM\Column(name="potassium", type="integer", nullable=true)
     */
    private $potassium;

    /**
     * @var int
     *
     * @ORM\Column(name="dietary_fiber", type="integer", nullable=true)
     */
    private $dietaryFiber;

    /**
     * @var int
     *
     * @ORM\Column(name="sugars", type="integer", nullable=true)
     */
    private $sugars;

    /**
     * @var int
     *
     * @ORM\Column(name="vitamin_a", type="integer", nullable=true)
     */
    private $vitaminA;

    /**
     * @var int
     *
     * @ORM\Column(name="vitamin_c", type="integer", nullable=true)
     */
    private $vitaminC;

    /**
     * @var int
     *
     * @ORM\Column(name="calcium", type="integer", nullable=true)
     */
    private $calcium;

    /**
     * @var int
     *
     * @ORM\Column(name="iron", type="integer", nullable=true)
     */
    private $iron;


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
     * Set displayName
     *
     * @param string $displayName
     *
     * @return Food
     */
    public function setdisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getdisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set brandName
     *
     * @param string $brandName
     *
     * @return Food
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Food
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
     * Set servingSize
     *
     * @param string $servingSize
     *
     * @return Food
     */
    public function setServingSize($servingSize)
    {
        $this->servingSize = $servingSize;

        return $this;
    }

    /**
     * Get servingSize
     *
     * @return string
     */
    public function getServingSize()
    {
        return $this->servingSize;
    }

    /**
     * Set servingsPerContainer
     *
     * @param string $servingsPerContainer
     *
     * @return Food
     */
    public function setServingsPerContainer($servingsPerContainer)
    {
        $this->servingsPerContainer = $servingsPerContainer;

        return $this;
    }

    /**
     * Get servingsPerContainer
     *
     * @return string
     */
    public function getServingsPerContainer()
    {
        return $this->servingsPerContainer;
    }

    /**
     * Set calories
     *
     * @param integer $calories
     *
     * @return Food
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return int
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set carbohydrates
     *
     * @param integer $carbohydrates
     *
     * @return Food
     */
    public function setCarbohydrates($carbohydrates)
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    /**
     * Get carbohydrates
     *
     * @return int
     */
    public function getCarbohydrates()
    {
        return $this->carbohydrates;
    }

    /**
     * Set protein
     *
     * @param integer $protein
     *
     * @return Food
     */
    public function setProtein($protein)
    {
        $this->protein = $protein;

        return $this;
    }

    /**
     * Get protein
     *
     * @return int
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * Set fat
     *
     * @param integer $fat
     *
     * @return Food
     */
    public function setFat($fat)
    {
        $this->fat = $fat;

        return $this;
    }

    /**
     * Get fat
     *
     * @return int
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * Set saturatedFat
     *
     * @param integer $saturatedFat
     *
     * @return Food
     */
    public function setSaturatedFat($saturatedFat)
    {
        $this->saturatedFat = $saturatedFat;

        return $this;
    }

    /**
     * Get saturatedFat
     *
     * @return int
     */
    public function getSaturatedFat()
    {
        return $this->saturatedFat;
    }

    /**
     * Set polyunsaturatedFat
     *
     * @param integer $polyunsaturatedFat
     *
     * @return Food
     */
    public function setPolyunsaturatedFat($polyunsaturatedFat)
    {
        $this->polyunsaturatedFat = $polyunsaturatedFat;

        return $this;
    }

    /**
     * Get polyunsaturatedFat
     *
     * @return int
     */
    public function getPolyunsaturatedFat()
    {
        return $this->polyunsaturatedFat;
    }

    /**
     * Set monounsaturatedFat
     *
     * @param integer $monounsaturatedFat
     *
     * @return Food
     */
    public function setMonounsaturatedFat($monounsaturatedFat)
    {
        $this->monounsaturatedFat = $monounsaturatedFat;

        return $this;
    }

    /**
     * Get monounsaturatedFat
     *
     * @return int
     */
    public function getMonounsaturatedFat()
    {
        return $this->monounsaturatedFat;
    }

    /**
     * Set transFat
     *
     * @param integer $transFat
     *
     * @return Food
     */
    public function setTransFat($transFat)
    {
        $this->transFat = $transFat;

        return $this;
    }

    /**
     * Get transFat
     *
     * @return int
     */
    public function getTransFat()
    {
        return $this->transFat;
    }

    /**
     * Set cholesterol
     *
     * @param integer $cholesterol
     *
     * @return Food
     */
    public function setCholesterol($cholesterol)
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    /**
     * Get cholesterol
     *
     * @return int
     */
    public function getCholesterol()
    {
        return $this->cholesterol;
    }

    /**
     * Set sodium
     *
     * @param integer $sodium
     *
     * @return Food
     */
    public function setSodium($sodium)
    {
        $this->sodium = $sodium;

        return $this;
    }

    /**
     * Get sodium
     *
     * @return int
     */
    public function getSodium()
    {
        return $this->sodium;
    }

    /**
     * Set potassium
     *
     * @param integer $potassium
     *
     * @return Food
     */
    public function setPotassium($potassium)
    {
        $this->potassium = $potassium;

        return $this;
    }

    /**
     * Get potassium
     *
     * @return int
     */
    public function getPotassium()
    {
        return $this->potassium;
    }

    /**
     * Set dietaryFiber
     *
     * @param integer $dietaryFiber
     *
     * @return Food
     */
    public function setDietaryFiber($dietaryFiber)
    {
        $this->dietaryFiber = $dietaryFiber;

        return $this;
    }

    /**
     * Get dietaryFiber
     *
     * @return int
     */
    public function getDietaryFiber()
    {
        return $this->dietaryFiber;
    }

    /**
     * Set sugars
     *
     * @param integer $sugars
     *
     * @return Food
     */
    public function setSugars($sugars)
    {
        $this->sugars = $sugars;

        return $this;
    }

    /**
     * Get sugars
     *
     * @return int
     */
    public function getSugars()
    {
        return $this->sugars;
    }

    /**
     * Set vitaminA
     *
     * @param integer $vitaminA
     *
     * @return Food
     */
    public function setVitaminA($vitaminA)
    {
        $this->vitaminA = $vitaminA;

        return $this;
    }

    /**
     * Get vitaminA
     *
     * @return int
     */
    public function getVitaminA()
    {
        return $this->vitaminA;
    }

    /**
     * Set vitaminC
     *
     * @param integer $vitaminC
     *
     * @return Food
     */
    public function setVitaminC($vitaminC)
    {
        $this->vitaminC = $vitaminC;

        return $this;
    }

    /**
     * Get vitaminC
     *
     * @return int
     */
    public function getVitaminC()
    {
        return $this->vitaminC;
    }

    /**
     * Set calcium
     *
     * @param integer $calcium
     *
     * @return Food
     */
    public function setCalcium($calcium)
    {
        $this->calcium = $calcium;

        return $this;
    }

    /**
     * Get calcium
     *
     * @return int
     */
    public function getCalcium()
    {
        return $this->calcium;
    }

    /**
     * Set iron
     *
     * @param integer $iron
     *
     * @return Food
     */
    public function setIron($iron)
    {
        $this->iron = $iron;

        return $this;
    }

    /**
     * Get iron
     *
     * @return int
     */
    public function getIron()
    {
        return $this->iron;
    }
}
