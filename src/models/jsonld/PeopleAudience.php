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

use nystudio107\seomatic\models\jsonld\Audience;

/**
 * PeopleAudience - A set of characteristics belonging to people, e.g. who
 * compose an item's target audience.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'PeopleAudience';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/PeopleAudience';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A set of characteristics belonging to people, e.g. who compose an item\'s target audience.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Audience';

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
     * Audiences defined by a person's gender.
     *
     * @var string [schema.org types: Text]
     */
    public $requiredGender;

    /**
     * Audiences defined by a person's maximum age.
     *
     * @var int [schema.org types: Integer]
     */
    public $requiredMaxAge;

    /**
     * Audiences defined by a person's minimum age.
     *
     * @var int [schema.org types: Integer]
     */
    public $requiredMinAge;

    /**
     * The gender of the person or audience.
     *
     * @var string [schema.org types: Text]
     */
    public $suggestedGender;

    /**
     * Maximal age recommended for viewing content.
     *
     * @var float [schema.org types: Number]
     */
    public $suggestedMaxAge;

    /**
     * Minimal age recommended for viewing content.
     *
     * @var float [schema.org types: Number]
     */
    public $suggestedMinAge;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'requiredGender',
        'requiredMaxAge',
        'requiredMinAge',
        'suggestedGender',
        'suggestedMaxAge',
        'suggestedMinAge'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'requiredGender' => ['Text'],
        'requiredMaxAge' => ['Integer'],
        'requiredMinAge' => ['Integer'],
        'suggestedGender' => ['Text'],
        'suggestedMaxAge' => ['Number'],
        'suggestedMinAge' => ['Number']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'requiredGender' => 'Audiences defined by a person\'s gender.',
        'requiredMaxAge' => 'Audiences defined by a person\'s maximum age.',
        'requiredMinAge' => 'Audiences defined by a person\'s minimum age.',
        'suggestedGender' => 'The gender of the person or audience.',
        'suggestedMaxAge' => 'Maximal age recommended for viewing content.',
        'suggestedMinAge' => 'Minimal age recommended for viewing content.'
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
            [['requiredGender','requiredMaxAge','requiredMinAge','suggestedGender','suggestedMaxAge','suggestedMinAge'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}