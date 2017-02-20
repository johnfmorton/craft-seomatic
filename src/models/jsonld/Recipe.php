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

use nystudio107\seomatic\models\jsonld\CreativeWork;

/**
 * Recipe - A recipe. For dietary restrictions covered by the recipe, a few
 * common restrictions are enumerated via suitableForDiet. The keywords
 * property can also be used to add more detail.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/Recipe
 */
class Recipe extends CreativeWork
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'Recipe';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/Recipe';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via suitableForDiet. The keywords property can also be used to add more detail.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'CreativeWork';

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
     * The time it takes to actually cook the dish, in ISO 8601 duration format.
     *
     * @var Duration [schema.org types: Duration]
     */
    public $cookTime;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @var string [schema.org types: Text]
     */
    public $cookingMethod;

    /**
     * Nutrition information about the recipe.
     *
     * @var NutritionInformation [schema.org types: NutritionInformation]
     */
    public $nutrition;

    /**
     * The length of time it takes to prepare the recipe, in ISO 8601 duration
     * format.
     *
     * @var Duration [schema.org types: Duration]
     */
    public $prepTime;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var string [schema.org types: Text]
     */
    public $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @var string [schema.org types: Text]
     */
    public $recipeCuisine;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * Supersedes ingredients.
     *
     * @var string [schema.org types: Text]
     */
    public $recipeIngredient;

    /**
     * A step or instruction involved in making the recipe.
     *
     * @var mixed|ItemList|string [schema.org types: ItemList, Text]
     */
    public $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people served,
     * number of servings, etc).
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $recipeYield;

    /**
     * Indicates a dietary restriction or guideline for which this recipe is
     * suitable, e.g. diabetic, halal etc.
     *
     * @var mixed|RestrictedDiet [schema.org types: RestrictedDiet]
     */
    public $suitableForDiet;

    /**
     * The total time it takes to prepare and cook the recipe, in ISO 8601
     * duration format.
     *
     * @var mixed|Duration [schema.org types: Duration]
     */
    public $totalTime;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'cookTime',
        'cookingMethod',
        'nutrition',
        'prepTime',
        'recipeCategory',
        'recipeCuisine',
        'recipeIngredient',
        'recipeInstructions',
        'recipeYield',
        'suitableForDiet',
        'totalTime'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'cookTime' => ['Duration'],
        'cookingMethod' => ['Text'],
        'nutrition' => ['NutritionInformation'],
        'prepTime' => ['Duration'],
        'recipeCategory' => ['Text'],
        'recipeCuisine' => ['Text'],
        'recipeIngredient' => ['Text'],
        'recipeInstructions' => ['ItemList','Text'],
        'recipeYield' => ['Text'],
        'suitableForDiet' => ['RestrictedDiet'],
        'totalTime' => ['Duration']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'cookTime' => 'The time it takes to actually cook the dish, in ISO 8601 duration format.',
        'cookingMethod' => 'The method of cooking, such as Frying, Steaming, ...',
        'nutrition' => 'Nutrition information about the recipe.',
        'prepTime' => 'The length of time it takes to prepare the recipe, in ISO 8601 duration format.',
        'recipeCategory' => 'The category of the recipe—for example, appetizer, entree, etc.',
        'recipeCuisine' => 'The cuisine of the recipe (for example, French or Ethiopian).',
        'recipeIngredient' => 'A single ingredient used in the recipe, e.g. sugar, flour or garlic. Supersedes ingredients.',
        'recipeInstructions' => 'A step or instruction involved in making the recipe.',
        'recipeYield' => 'The quantity produced by the recipe (for example, number of people served, number of servings, etc).',
        'suitableForDiet' => 'Indicates a dietary restriction or guideline for which this recipe is suitable, e.g. diabetic, halal etc.',
        'totalTime' => 'The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.'
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
            [['cookTime','cookingMethod','nutrition','prepTime','recipeCategory','recipeCuisine','recipeIngredient','recipeInstructions','recipeYield','suitableForDiet','totalTime'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}