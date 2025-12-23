<?php

declare(strict_types=1);

/*
 * This file is part of Test Bundle.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/test-bundle
 */

use Markocupic\TestBundle\Controller\FrontendModule\PetListingController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['pet_modules'] = 'Tiere';
$GLOBALS['TL_LANG']['MOD']['pet_collection'] = ['Tiersammlung', 'Fügen Sie Contao eine Tiersammlung hinzu.'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['pet_modules'] = 'Tiere';
$GLOBALS['TL_LANG']['FMD'][PetListingController::TYPE] = ['Tierauflistung', 'Fügen Sie dem Frontend eine Tiersammlung hinzu.'];
