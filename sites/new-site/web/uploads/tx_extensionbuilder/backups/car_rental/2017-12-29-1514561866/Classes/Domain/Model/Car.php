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
     * color
     *
     * @var string
     * @validate NotEmpty
     */
    protected $color = '';

    /**
     * Vehicle Identification Number
     *
     * @var string
     * @validate NotEmpty
     */
    protected $vin = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;

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
     * rentals
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Rental>
     * @cascade remove
     */
    protected $rentals = null;

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
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tires = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->rentals = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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

    /**
     * Adds a Rental
     *
     * @param \HofUniversity\CarRental\Domain\Model\Rental $rental
     * @return void
     */
    public function addRental(\HofUniversity\CarRental\Domain\Model\Rental $rental)
    {
        $this->rentals->attach($rental);
    }

    /**
     * Removes a Rental
     *
     * @param \HofUniversity\CarRental\Domain\Model\Rental $rentalToRemove The Rental to be removed
     * @return void
     */
    public function removeRental(\HofUniversity\CarRental\Domain\Model\Rental $rentalToRemove)
    {
        $this->rentals->detach($rentalToRemove);
    }

    /**
     * Returns the rentals
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Rental> $rentals
     */
    public function getRentals()
    {
        return $this->rentals;
    }

    /**
     * Sets the rentals
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\CarRental\Domain\Model\Rental> $rentals
     * @return void
     */
    public function setRentals(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $rentals)
    {
        $this->rentals = $rentals;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }
}
