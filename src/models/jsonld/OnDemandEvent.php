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

use nystudio107\seomatic\models\jsonld\PublicationEvent;

/**
 * OnDemandEvent - A publication event e.g. catch-up TV or radio podcast,
 * during which a program is available on-demand.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/OnDemandEvent
 */
class OnDemandEvent extends PublicationEvent
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'OnDemandEvent';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/OnDemandEvent';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A publication event e.g. catch-up TV or radio podcast, during which a program is available on-demand.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'PublicationEvent';

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
     * A flag to signal that the publication is accessible for free. Supersedes
     * free.
     *
     * @var bool [schema.org types: Boolean]
     */
    public $isAccessibleForFree;

    /**
     * A broadcast service associated with the publication event.
     *
     * @var BroadcastService [schema.org types: BroadcastService]
     */
    public $publishedOn;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'isAccessibleForFree',
        'publishedOn'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'isAccessibleForFree' => ['Boolean'],
        'publishedOn' => ['BroadcastService']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'isAccessibleForFree' => 'A flag to signal that the publication is accessible for free. Supersedes free.',
        'publishedOn' => 'A broadcast service associated with the publication event.'
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
            [['isAccessibleForFree','publishedOn'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}