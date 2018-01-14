<?php
namespace HofUniversity\CarRental\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CarTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \HofUniversity\CarRental\Domain\Model\Car
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\CarRental\Domain\Model\Car();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVinReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVin()
        );
    }

    /**
     * @test
     */
    public function setVinForStringSetsVin()
    {
        $this->subject->setVin('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBrandReturnsInitialValueForBrand()
    {
        self::assertEquals(
            null,
            $this->subject->getBrand()
        );
    }

    /**
     * @test
     */
    public function setBrandForBrandSetsBrand()
    {
        $brandFixture = new \HofUniversity\CarRental\Domain\Model\Brand();
        $this->subject->setBrand($brandFixture);

        self::assertAttributeEquals(
            $brandFixture,
            'brand',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTriesReturnsInitialValueForTire()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTries()
        );
    }

    /**
     * @test
     */
    public function setTriesForObjectStorageContainingTireSetsTries()
    {
        $try = new \HofUniversity\CarRental\Domain\Model\Tire();
        $objectStorageHoldingExactlyOneTries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTries->attach($try);
        $this->subject->setTries($objectStorageHoldingExactlyOneTries);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTries,
            'tries',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTryToObjectStorageHoldingTries()
    {
        $try = new \HofUniversity\CarRental\Domain\Model\Tire();
        $triesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $triesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($try));
        $this->inject($this->subject, 'tries', $triesObjectStorageMock);

        $this->subject->addTry($try);
    }

    /**
     * @test
     */
    public function removeTryFromObjectStorageHoldingTries()
    {
        $try = new \HofUniversity\CarRental\Domain\Model\Tire();
        $triesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $triesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($try));
        $this->inject($this->subject, 'tries', $triesObjectStorageMock);

        $this->subject->removeTry($try);
    }

    /**
     * @test
     */
    public function getRentalsReturnsInitialValueForRental()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRentals()
        );
    }

    /**
     * @test
     */
    public function setRentalsForObjectStorageContainingRentalSetsRentals()
    {
        $rental = new \HofUniversity\CarRental\Domain\Model\Rental();
        $objectStorageHoldingExactlyOneRentals = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRentals->attach($rental);
        $this->subject->setRentals($objectStorageHoldingExactlyOneRentals);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRentals,
            'rentals',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addRentalToObjectStorageHoldingRentals()
    {
        $rental = new \HofUniversity\CarRental\Domain\Model\Rental();
        $rentalsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $rentalsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($rental));
        $this->inject($this->subject, 'rentals', $rentalsObjectStorageMock);

        $this->subject->addRental($rental);
    }

    /**
     * @test
     */
    public function removeRentalFromObjectStorageHoldingRentals()
    {
        $rental = new \HofUniversity\CarRental\Domain\Model\Rental();
        $rentalsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $rentalsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($rental));
        $this->inject($this->subject, 'rentals', $rentalsObjectStorageMock);

        $this->subject->removeRental($rental);
    }
}
