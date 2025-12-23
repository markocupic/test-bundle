<?php

/*
 * This file is part of Test Bundle.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/test-bundle
 */

use Markocupic\TestBundle\Model\PetsModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['pet_modules']['pet_collection'] = array(
    'tables' => array('tl_pets')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_pets'] = PetsModel::class;
