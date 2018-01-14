<?php
namespace HofUniversity\CarRental\Domain\Model;

/***
 *
 * This file is part of the "CarRental" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * Car
 */
class Car extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * vin
     *
     * @var string
     * @validate NotEmpty
     */
    protected $vin = '';

    /**
     * color
     *
     * @var string
     * @validate NotEmpty
     */
    protected $color = '';

    /**
     * brand
     *
     * @var \HofUniversity\CarRental\Domain\Model\Brand
     */
    protected $brand = null;

    /**
     * tires
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire>
     * @cascade remove
     */
    protected $tires = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tires = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the vin
     *
     * @return string $vin
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Sets the vin
     *
     * @param string $vin
     * @return void
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    }

    /**
     * Returns the color
     *
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     *
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the brand
     *
     * @return \HofUniversity\CarRental\Domain\Model\Brand $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     *
     * @param \HofUniversity\CarRental\Domain\Model\Brand $brand
     * @return void
     */
    public function setBrand(\HofUniversity\CarRental\Domain\Model\Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Adds a Tire
     *
     * @param \HofUniversity\CarRental\Domain\Model\Tire $tire
     * @return void
     */
    public function addTire(\HofUniversity\CarRental\Domain\Model\Tire $tire)
    {
        $this->tires->attach($tire);
    }

    /**
     * Removes a Tire
     *
     * @param \HofUniversity\CarRental\Domain\Model\Tire $tireToRemove The Tire to be removed
     * @return void
     */
    public function removeTire(\HofUniversity\CarRental\Domain\Model\Tire $tireToRemove)
    {
        $this->tires->detach($tireToRemove);
    }

    /**
     * Returns the tires
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire> $tires
     */
    public function getTires()
    {
        return $this->tires;
    }

    /**
     * Sets the tires
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire> $tires
     * @return void
     */
    public function setTires(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tires)
    {
        $this->tires = $tires;
    }
}
