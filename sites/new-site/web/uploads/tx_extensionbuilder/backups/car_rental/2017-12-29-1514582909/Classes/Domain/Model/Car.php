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
     * tries
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire>
     * @cascade remove
     */
    protected $tries = null;

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
        $this->tries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @param \HofUniversity\CarRental\Domain\Model\Tire $try
     * @return void
     */
    public function addTry(\HofUniversity\CarRental\Domain\Model\Tire $try)
    {
        $this->tries->attach($try);
    }

    /**
     * Removes a Tire
     *
     * @param \HofUniversity\CarRental\Domain\Model\Tire $tryToRemove The Tire to be removed
     * @return void
     */
    public function removeTry(\HofUniversity\CarRental\Domain\Model\Tire $tryToRemove)
    {
        $this->tries->detach($tryToRemove);
    }

    /**
     * Returns the tries
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire> $tries
     */
    public function getTries()
    {
        return $this->tries;
    }

    /**
     * Sets the tries
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Tire> $tries
     * @return void
     */
    public function setTries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tries)
    {
        $this->tries = $tries;
    }
}
