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
 * Rental
 */
class Rental extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * startDate
     *
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * endDate
     *
     * @var \DateTime
     */
    protected $endDate = null;

    /**
     * returnDate
     *
     * @var \DateTime
     */
    protected $returnDate = null;

    /**
     * customer
     *
     * @var \HofUniversity\CarRental\Domain\Model\Customer
     */
    protected $customer = null;

    /**
     * Returns the startDate
     *
     * @return \DateTime $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the startDate
     *
     * @param \DateTime $startDate
     * @return void
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns the endDate
     *
     * @return \DateTime $endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the endDate
     *
     * @param \DateTime $endDate
     * @return void
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns the returnDate
     *
     * @return \DateTime $returnDate
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Sets the returnDate
     *
     * @param \DateTime $returnDate
     * @return void
     */
    public function setReturnDate(\DateTime $returnDate)
    {
        $this->returnDate = $returnDate;
    }

    /**
     * Returns the customer
     *
     * @return \HofUniversity\CarRental\Domain\Model\Customer $customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the customer
     *
     * @param \HofUniversity\CarRental\Domain\Model\Customer $customer
     * @return void
     */
    public function setCustomer(\HofUniversity\CarRental\Domain\Model\Customer $customer)
    {
        $this->customer = $customer;
    }
}
