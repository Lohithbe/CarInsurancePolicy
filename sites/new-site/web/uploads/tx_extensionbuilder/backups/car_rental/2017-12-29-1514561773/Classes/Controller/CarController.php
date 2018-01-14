<?php
namespace HofUniversity\CarRental\Controller;

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
 * CarController
 */
class CarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * carRepository
     *
     * @var \HofUniversity\CarRental\Domain\Repository\CarRepository
     * @inject
     */
    protected $carRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cars = $this->carRepository->findAll();
        $this->view->assign('cars', $cars);
    }

    /**
     * action show
     *
     * @param \HofUniversity\CarRental\Domain\Model\Car $car
     * @return void
     */
    public function showAction(\HofUniversity\CarRental\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);
    }
}
