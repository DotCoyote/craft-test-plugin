<?php
/**
 * Kittntestpluginfoo
 *
 * @author     Michael Rog <michael@michaelrog.com>, Tom Davies <tom@madebykind.com>
 * @link       https://topshelfcraft.com
 * @copyright  Copyright 2017, Top Shelf Craft (Michael Rog)
 * @see        https://github.com/topshelfcraft/Environment-Label
 */

namespace cinkon\kittntestpluginfoo\models;

use craft\base\Model;

/**
 * @author   Michael Rog <michael@michaelrog.com>
 * @package  Kittntestpluginfoo
 * @since    3.0.0
 */
class Settings extends Model
{

    /*
     * Public properties
     */

    /**
     * @var boolean
     */
    public $showLabel = true;

    /**
     * @var string|null
     */
    public $labelColor = null;

    /**
     * @var string|null
     */
    public $textColor = null;

    /**
     * @var string|null
     */
    public $prefixText = null;

    /**
     * @var string|null
     */
    public $labelText = CRAFT_ENVIRONMENT;

    /**
     * @var string|null
     */
    public $suffixText = null;
}