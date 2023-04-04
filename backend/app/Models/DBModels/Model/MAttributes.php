<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MAttributes
 * Representation for db table attributes.

 * @property  string(name) udt_catalog                    [1]  type:name         
 * @property  string(name) udt_schema                     [2]  type:name         
 * @property  string(name) udt_name                       [3]  type:name         
 * @property  string(name) attribute_name                 [4]  type:name         
 * @property  int          ordinal_position               [5]  type:int4         
 * @property  string       attribute_default              [6]  type:varchar      
 * @property  string       is_nullable                    [7]  type:varchar(3)   
 * @property  string       data_type                      [8]  type:varchar      
 * @property  int          character_maximum_length       [9]  type:int4         
 * @property  int          character_octet_length         [10] type:int4         
 * @property  string(name) character_set_catalog          [11] type:name         
 * @property  string(name) character_set_schema           [12] type:name         
 * @property  string(name) character_set_name             [13] type:name         
 * @property  string(name) collation_catalog              [14] type:name         
 * @property  string(name) collation_schema               [15] type:name         
 * @property  string(name) collation_name                 [16] type:name         
 * @property  int          numeric_precision              [17] type:int4         
 * @property  int          numeric_precision_radix        [18] type:int4         
 * @property  int          numeric_scale                  [19] type:int4         
 * @property  int          datetime_precision             [20] type:int4         
 * @property  string       interval_type                  [21] type:varchar      
 * @property  int          interval_precision             [22] type:int4         
 * @property  string(name) attribute_udt_catalog          [23] type:name         
 * @property  string(name) attribute_udt_schema           [24] type:name         
 * @property  string(name) attribute_udt_name             [25] type:name         
 * @property  string(name) scope_catalog                  [26] type:name         
 * @property  string(name) scope_schema                   [27] type:name         
 * @property  string(name) scope_name                     [28] type:name         
 * @property  int          maximum_cardinality            [29] type:int4         
 * @property  string(name) dtd_identifier                 [30] type:name         
 * @property  string       is_derived_reference_attribute [31] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MAttributes extends DBClass {


	const  FJ_ATTRIBUTE_DEFAULT              = 'attributeDefault';
	const  FJ_ATTRIBUTE_NAME                 = 'attributeName';
	const  FJ_ATTRIBUTE_UDT_CATALOG          = 'attributeUdtCatalog';
	const  FJ_ATTRIBUTE_UDT_NAME             = 'attributeUdtName';
	const  FJ_ATTRIBUTE_UDT_SCHEMA           = 'attributeUdtSchema';
	const  FJ_CHARACTER_MAXIMUM_LENGTH       = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH         = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG          = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME             = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA           = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG              = 'collationCatalog';
	const  FJ_COLLATION_NAME                 = 'collationName';
	const  FJ_COLLATION_SCHEMA               = 'collationSchema';
	const  FJ_DATA_TYPE                      = 'dataType';
	const  FJ_DATETIME_PRECISION             = 'datetimePrecision';
	const  FJ_DTD_IDENTIFIER                 = 'dtdIdentifier';
	const  FJ_INTERVAL_PRECISION             = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE                  = 'intervalType';
	const  FJ_IS_DERIVED_REFERENCE_ATTRIBUTE = 'isDerivedReferenceAttribute';
	const  FJ_IS_NULLABLE                    = 'isNullable';
	const  FJ_MAXIMUM_CARDINALITY            = 'maximumCardinality';
	const  FJ_NUMERIC_PRECISION              = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX        = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE                  = 'numericScale';
	const  FJ_ORDINAL_POSITION               = 'ordinalPosition';
	const  FJ_SCOPE_CATALOG                  = 'scopeCatalog';
	const  FJ_SCOPE_NAME                     = 'scopeName';
	const  FJ_SCOPE_SCHEMA                   = 'scopeSchema';
	const  FJ_UDT_CATALOG                    = 'udtCatalog';
	const  FJ_UDT_NAME                       = 'udtName';
	const  FJ_UDT_SCHEMA                     = 'udtSchema';
	const  FT_ATTRIBUTE_DEFAULT              = 'attributes.attribute_default';
	const  FT_ATTRIBUTE_NAME                 = 'attributes.attribute_name';
	const  FT_ATTRIBUTE_UDT_CATALOG          = 'attributes.attribute_udt_catalog';
	const  FT_ATTRIBUTE_UDT_NAME             = 'attributes.attribute_udt_name';
	const  FT_ATTRIBUTE_UDT_SCHEMA           = 'attributes.attribute_udt_schema';
	const  FT_CHARACTER_MAXIMUM_LENGTH       = 'attributes.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH         = 'attributes.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG          = 'attributes.character_set_catalog';
	const  FT_CHARACTER_SET_NAME             = 'attributes.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA           = 'attributes.character_set_schema';
	const  FT_COLLATION_CATALOG              = 'attributes.collation_catalog';
	const  FT_COLLATION_NAME                 = 'attributes.collation_name';
	const  FT_COLLATION_SCHEMA               = 'attributes.collation_schema';
	const  FT_DATA_TYPE                      = 'attributes.data_type';
	const  FT_DATETIME_PRECISION             = 'attributes.datetime_precision';
	const  FT_DTD_IDENTIFIER                 = 'attributes.dtd_identifier';
	const  FT_INTERVAL_PRECISION             = 'attributes.interval_precision';
	const  FT_INTERVAL_TYPE                  = 'attributes.interval_type';
	const  FT_IS_DERIVED_REFERENCE_ATTRIBUTE = 'attributes.is_derived_reference_attribute';
	const  FT_IS_NULLABLE                    = 'attributes.is_nullable';
	const  FT_MAXIMUM_CARDINALITY            = 'attributes.maximum_cardinality';
	const  FT_NUMERIC_PRECISION              = 'attributes.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX        = 'attributes.numeric_precision_radix';
	const  FT_NUMERIC_SCALE                  = 'attributes.numeric_scale';
	const  FT_ORDINAL_POSITION               = 'attributes.ordinal_position';
	const  FT_SCOPE_CATALOG                  = 'attributes.scope_catalog';
	const  FT_SCOPE_NAME                     = 'attributes.scope_name';
	const  FT_SCOPE_SCHEMA                   = 'attributes.scope_schema';
	const  FT_UDT_CATALOG                    = 'attributes.udt_catalog';
	const  FT_UDT_NAME                       = 'attributes.udt_name';
	const  FT_UDT_SCHEMA                     = 'attributes.udt_schema';
	const  F_ATTRIBUTE_DEFAULT               = 'attribute_default';
	const  F_ATTRIBUTE_NAME                  = 'attribute_name';
	const  F_ATTRIBUTE_UDT_CATALOG           = 'attribute_udt_catalog';
	const  F_ATTRIBUTE_UDT_NAME              = 'attribute_udt_name';
	const  F_ATTRIBUTE_UDT_SCHEMA            = 'attribute_udt_schema';
	const  F_CHARACTER_MAXIMUM_LENGTH        = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH          = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG           = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME              = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA            = 'character_set_schema';
	const  F_COLLATION_CATALOG               = 'collation_catalog';
	const  F_COLLATION_NAME                  = 'collation_name';
	const  F_COLLATION_SCHEMA                = 'collation_schema';
	const  F_DATA_TYPE                       = 'data_type';
	const  F_DATETIME_PRECISION              = 'datetime_precision';
	const  F_DTD_IDENTIFIER                  = 'dtd_identifier';
	const  F_INTERVAL_PRECISION              = 'interval_precision';
	const  F_INTERVAL_TYPE                   = 'interval_type';
	const  F_IS_DERIVED_REFERENCE_ATTRIBUTE  = 'is_derived_reference_attribute';
	const  F_IS_NULLABLE                     = 'is_nullable';
	const  F_MAXIMUM_CARDINALITY             = 'maximum_cardinality';
	const  F_NUMERIC_PRECISION               = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX         = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE                   = 'numeric_scale';
	const  F_ORDINAL_POSITION                = 'ordinal_position';
	const  F_SCOPE_CATALOG                   = 'scope_catalog';
	const  F_SCOPE_NAME                      = 'scope_name';
	const  F_SCOPE_SCHEMA                    = 'scope_schema';
	const  F_UDT_CATALOG                     = 'udt_catalog';
	const  F_UDT_NAME                        = 'udt_name';
	const  F_UDT_SCHEMA                      = 'udt_schema';

    protected $table = 'attributes';

	public static array $jsonable = [
		MAttributes::FJ_UDT_CATALOG                    =>[ MAttributes::F_UDT_CATALOG                    ,null,'string(name)', ],
		MAttributes::FJ_UDT_SCHEMA                     =>[ MAttributes::F_UDT_SCHEMA                     ,null,'string(name)', ],
		MAttributes::FJ_UDT_NAME                       =>[ MAttributes::F_UDT_NAME                       ,null,'string(name)', ],
		MAttributes::FJ_ATTRIBUTE_NAME                 =>[ MAttributes::F_ATTRIBUTE_NAME                 ,null,'string(name)', ],
		MAttributes::FJ_ORDINAL_POSITION               =>[ MAttributes::F_ORDINAL_POSITION               ,null,'number',       ],
		MAttributes::FJ_ATTRIBUTE_DEFAULT              =>[ MAttributes::F_ATTRIBUTE_DEFAULT              ,null,'string',       ],
		MAttributes::FJ_IS_NULLABLE                    =>[ MAttributes::F_IS_NULLABLE                    ,null,'string',       ],
		MAttributes::FJ_DATA_TYPE                      =>[ MAttributes::F_DATA_TYPE                      ,null,'string',       ],
		MAttributes::FJ_CHARACTER_MAXIMUM_LENGTH       =>[ MAttributes::F_CHARACTER_MAXIMUM_LENGTH       ,null,'number',       ],
		MAttributes::FJ_CHARACTER_OCTET_LENGTH         =>[ MAttributes::F_CHARACTER_OCTET_LENGTH         ,null,'number',       ],
		MAttributes::FJ_CHARACTER_SET_CATALOG          =>[ MAttributes::F_CHARACTER_SET_CATALOG          ,null,'string(name)', ],
		MAttributes::FJ_CHARACTER_SET_SCHEMA           =>[ MAttributes::F_CHARACTER_SET_SCHEMA           ,null,'string(name)', ],
		MAttributes::FJ_CHARACTER_SET_NAME             =>[ MAttributes::F_CHARACTER_SET_NAME             ,null,'string(name)', ],
		MAttributes::FJ_COLLATION_CATALOG              =>[ MAttributes::F_COLLATION_CATALOG              ,null,'string(name)', ],
		MAttributes::FJ_COLLATION_SCHEMA               =>[ MAttributes::F_COLLATION_SCHEMA               ,null,'string(name)', ],
		MAttributes::FJ_COLLATION_NAME                 =>[ MAttributes::F_COLLATION_NAME                 ,null,'string(name)', ],
		MAttributes::FJ_NUMERIC_PRECISION              =>[ MAttributes::F_NUMERIC_PRECISION              ,null,'number',       ],
		MAttributes::FJ_NUMERIC_PRECISION_RADIX        =>[ MAttributes::F_NUMERIC_PRECISION_RADIX        ,null,'number',       ],
		MAttributes::FJ_NUMERIC_SCALE                  =>[ MAttributes::F_NUMERIC_SCALE                  ,null,'number',       ],
		MAttributes::FJ_DATETIME_PRECISION             =>[ MAttributes::F_DATETIME_PRECISION             ,null,'number',       ],
		MAttributes::FJ_INTERVAL_TYPE                  =>[ MAttributes::F_INTERVAL_TYPE                  ,null,'string',       ],
		MAttributes::FJ_INTERVAL_PRECISION             =>[ MAttributes::F_INTERVAL_PRECISION             ,null,'number',       ],
		MAttributes::FJ_ATTRIBUTE_UDT_CATALOG          =>[ MAttributes::F_ATTRIBUTE_UDT_CATALOG          ,null,'string(name)', ],
		MAttributes::FJ_ATTRIBUTE_UDT_SCHEMA           =>[ MAttributes::F_ATTRIBUTE_UDT_SCHEMA           ,null,'string(name)', ],
		MAttributes::FJ_ATTRIBUTE_UDT_NAME             =>[ MAttributes::F_ATTRIBUTE_UDT_NAME             ,null,'string(name)', ],
		MAttributes::FJ_SCOPE_CATALOG                  =>[ MAttributes::F_SCOPE_CATALOG                  ,null,'string(name)', ],
		MAttributes::FJ_SCOPE_SCHEMA                   =>[ MAttributes::F_SCOPE_SCHEMA                   ,null,'string(name)', ],
		MAttributes::FJ_SCOPE_NAME                     =>[ MAttributes::F_SCOPE_NAME                     ,null,'string(name)', ],
		MAttributes::FJ_MAXIMUM_CARDINALITY            =>[ MAttributes::F_MAXIMUM_CARDINALITY            ,null,'number',       ],
		MAttributes::FJ_DTD_IDENTIFIER                 =>[ MAttributes::F_DTD_IDENTIFIER                 ,null,'string(name)', ],
		MAttributes::FJ_IS_DERIVED_REFERENCE_ATTRIBUTE =>[ MAttributes::F_IS_DERIVED_REFERENCE_ATTRIBUTE ,null,'string',       ],
	];

		protected $visible = [
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_ATTRIBUTE_NAME,
			self::F_ORDINAL_POSITION,
			self::F_ATTRIBUTE_DEFAULT,
			self::F_IS_NULLABLE,
			self::F_DATA_TYPE,
			self::F_CHARACTER_MAXIMUM_LENGTH,
			self::F_CHARACTER_OCTET_LENGTH,
			self::F_CHARACTER_SET_CATALOG,
			self::F_CHARACTER_SET_SCHEMA,
			self::F_CHARACTER_SET_NAME,
			self::F_COLLATION_CATALOG,
			self::F_COLLATION_SCHEMA,
			self::F_COLLATION_NAME,
			self::F_NUMERIC_PRECISION,
			self::F_NUMERIC_PRECISION_RADIX,
			self::F_NUMERIC_SCALE,
			self::F_DATETIME_PRECISION,
			self::F_INTERVAL_TYPE,
			self::F_INTERVAL_PRECISION,
			self::F_ATTRIBUTE_UDT_CATALOG,
			self::F_ATTRIBUTE_UDT_SCHEMA,
			self::F_ATTRIBUTE_UDT_NAME,
			self::F_SCOPE_CATALOG,
			self::F_SCOPE_SCHEMA,
			self::F_SCOPE_NAME,
			self::F_MAXIMUM_CARDINALITY,
			self::F_DTD_IDENTIFIER,
			self::F_IS_DERIVED_REFERENCE_ATTRIBUTE,
		]; 

		protected $fillable = [
		];





}

