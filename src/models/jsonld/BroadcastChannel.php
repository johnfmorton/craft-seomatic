<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * BroadcastChannel - A unique instance of a BroadcastService on a
 * CableOrSatelliteService lineup.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/BroadcastChannel
 */
class BroadcastChannel extends Intangible
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'BroadcastChannel';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/BroadcastChannel';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A unique instance of a BroadcastService on a CableOrSatelliteService lineup.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Intangible';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * The unique address by which the BroadcastService can be identified in a
     * provider lineup. In US, this is typically a number.
     *
     * @var string [schema.org types: Text]
     */
    public $broadcastChannelId;

    /**
     * The type of service required to have access to the channel (e.g. Standard
     * or Premium).
     *
     * @var string [schema.org types: Text]
     */
    public $broadcastServiceTier;

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @var CableOrSatelliteService [schema.org types: CableOrSatelliteService]
     */
    public $inBroadcastLineup;

    /**
     * The BroadcastService offered on this channel.
     *
     * @var BroadcastService [schema.org types: BroadcastService]
     */
    public $providesBroadcastService;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'broadcastChannelId',
        'broadcastServiceTier',
        'inBroadcastLineup',
        'providesBroadcastService'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'broadcastChannelId' => ['Text'],
        'broadcastServiceTier' => ['Text'],
        'inBroadcastLineup' => ['CableOrSatelliteService'],
        'providesBroadcastService' => ['BroadcastService']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'broadcastChannelId' => 'The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.',
        'broadcastServiceTier' => 'The type of service required to have access to the channel (e.g. Standard or Premium).',
        'inBroadcastLineup' => 'The CableOrSatelliteService offering the channel.',
        'providesBroadcastService' => 'The BroadcastService offered on this channel.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$_schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$_schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$_schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$_googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$_googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['broadcastChannelId','broadcastServiceTier','inBroadcastLineup','providesBroadcastService'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}