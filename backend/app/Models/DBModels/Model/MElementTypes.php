<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MElementTypes
 * Representation for db table element_types.

 * @property  string(name) object_catalog             [1]  type:name      
 * @property  string(name) object_schema              [2]  type:name      
 * @property  string(name) object_name                [3]  type:name      
 * @property  string       object_type                [4]  type:varchar   
 * @property  string(name) collection_type_identifier [5]  type:name      
 * @property  string       data_type                  [6]  type:varchar   
 * @property  int          character_maximum_length   [7]  type:int4      
 * @property  int          character_octet_length     [8]  type:int4      
 * @property  string(name) character_set_catalog      [9]  type:name      
 * @property  string(name) character_set_schema       [10] type:name      
 * @property  string(name) character_set_name         [11] type:name      
 * @property  string(name) collation_catalog          [12] type:name      
 * @property  string(name) collation_schema           [13] type:name      
 * @property  string(name) collation_name             [14] type:name      
 * @property  int          numeric_precision          [15] type:int4      
 * @property  int          numeric_precision_radix    [16] type:int4      
 * @property  int          numeric_scale              [17] type:int4      
 * @property  int          datetime_precision         [18] type:int4      
 * @property  string       interval_type              [19] type:varchar   
 * @property  int          interval_precision         [20] type:int4      
 * @property  string       domain_default             [21] type:varchar   
 * @property  string(name) udt_catalog                [22] type:name      
 * @property  string(name) udt_schema                 [23] type:name      
 * @property  string(name) udt_name                   [24] type:name      
 * @property  string(name) scope_catalog              [25] type:name      
 * @property  string(name) scope_schema               [26] type:name      
 * @property  string(name) scope_name                 [27] type:name      
 * @property  int          maximum_cardinality        [28] type:int4      
 * @property  string(name) dtd_identifier             [29] type:name      
 * @package App\Models\DBModels\Model
 */
class MElementTypes extends DBClass {


	const  FJ_CHARACTER_MAXIMUM_LENGTH   = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH     = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG      = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME         = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA       = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG          = 'collationCatalog';
	const  FJ_COLLATION_NAME             = 'collationName';
	const  FJ_COLLATION_SCHEMA           = 'collationSchema';
	const  FJ_COLLECTION_TYPE_IDENTIFIER = 'collectionTypeIdentifier';
	const  FJ_DATA_TYPE                  = 'dataType';
	const  FJ_DATETIME_PRECISION         = 'datetimePrecision';
	const  FJ_DOMAIN_DEFAULT             = 'domainDefault';
	const  FJ_DTD_IDENTIFIER             = 'dtdIdentifier';
	const  FJ_INTERVAL_PRECISION         = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE              = 'intervalType';
	const  FJ_MAXIMUM_CARDINALITY        = 'maximumCardinality';
	const  FJ_NUMERIC_PRECISION          = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX    = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE              = 'numericScale';
	const  FJ_OBJECT_CATALOG             = 'objectCatalog';
	const  FJ_OBJECT_NAME                = 'objectName';
	const  FJ_OBJECT_SCHEMA              = 'objectSchema';
	const  FJ_OBJECT_TYPE                = 'objectType';
	const  FJ_SCOPE_CATALOG              = 'scopeCatalog';
	const  FJ_SCOPE_NAME                 = 'scopeName';
	const  FJ_SCOPE_SCHEMA               = 'scopeSchema';
	const  FJ_UDT_CATALOG                = 'udtCatalog';
	const  FJ_UDT_NAME                   = 'udtName';
	const  FJ_UDT_SCHEMA                 = 'udtSchema';
	const  FT_CHARACTER_MAXIMUM_LENGTH   = 'element_types.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH     = 'element_types.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG      = 'element_types.character_set_catalog';
	const  FT_CHARACTER_SET_NAME         = 'element_types.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA       = 'element_types.character_set_schema';
	const  FT_COLLATION_CATALOG          = 'element_types.collation_catalog';
	const  FT_COLLATION_NAME             = 'element_types.collation_name';
	const  FT_COLLATION_SCHEMA           = 'element_types.collation_schema';
	const  FT_COLLECTION_TYPE_IDENTIFIER = 'element_types.collection_type_identifier';
	const  FT_DATA_TYPE                  = 'element_types.data_type';
	const  FT_DATETIME_PRECISION         = 'element_types.datetime_precision';
	const  FT_DOMAIN_DEFAULT             = 'element_types.domain_default';
	const  FT_DTD_IDENTIFIER             = 'element_types.dtd_identifier';
	const  FT_INTERVAL_PRECISION         = 'element_types.interval_precision';
	const  FT_INTERVAL_TYPE              = 'element_types.interval_type';
	const  FT_MAXIMUM_CARDINALITY        = 'element_types.maximum_cardinality';
	const  FT_NUMERIC_PRECISION          = 'element_types.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX    = 'element_types.numeric_precision_radix';
	const  FT_NUMERIC_SCALE              = 'element_types.numeric_scale';
	const  FT_OBJECT_CATALOG             = 'element_types.object_catalog';
	const  FT_OBJECT_NAME                = 'element_types.object_name';
	const  FT_OBJECT_SCHEMA              = 'element_types.object_schema';
	const  FT_OBJECT_TYPE                = 'element_types.object_type';
	const  FT_SCOPE_CATALOG              = 'element_types.scope_catalog';
	const  FT_SCOPE_NAME                 = 'element_types.scope_name';
	const  FT_SCOPE_SCHEMA               = 'element_types.scope_schema';
	const  FT_UDT_CATALOG                = 'element_types.udt_catalog';
	const  FT_UDT_NAME                   = 'element_types.udt_name';
	const  FT_UDT_SCHEMA                 = 'element_types.udt_schema';
	const  F_CHARACTER_MAXIMUM_LENGTH    = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH      = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG       = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME          = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA        = 'character_set_schema';
	const  F_COLLATION_CATALOG           = 'collation_catalog';
	const  F_COLLATION_NAME              = 'collation_name';
	const  F_COLLATION_SCHEMA            = 'collation_schema';
	const  F_COLLECTION_TYPE_IDENTIFIER  = 'collection_type_identifier';
	const  F_DATA_TYPE                   = 'data_type';
	const  F_DATETIME_PRECISION          = 'datetime_precision';
	const  F_DOMAIN_DEFAULT              = 'domain_default';
	const  F_DTD_IDENTIFIER              = 'dtd_identifier';
	const  F_INTERVAL_PRECISION          = 'interval_precision';
	const  F_INTERVAL_TYPE               = 'interval_type';
	const  F_MAXIMUM_CARDINALITY         = 'maximum_cardinality';
	const  F_NUMERIC_PRECISION           = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX     = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE               = 'numeric_scale';
	const  F_OBJECT_CATALOG              = 'object_catalog';
	const  F_OBJECT_NAME                 = 'object_name';
	const  F_OBJECT_SCHEMA               = 'object_schema';
	const  F_OBJECT_TYPE                 = 'object_type';
	const  F_SCOPE_CATALOG               = 'scope_catalog';
	const  F_SCOPE_NAME                  = 'scope_name';
	const  F_SCOPE_SCHEMA                = 'scope_schema';
	const  F_UDT_CATALOG                 = 'udt_catalog';
	const  F_UDT_NAME                    = 'udt_name';
	const  F_UDT_SCHEMA                  = 'udt_schema';

    protected $table = 'element_types';

	public static array $jsonable = [
		MElementTypes::FJ_OBJECT_CATALOG             =>[ MElementTypes::F_OBJECT_CATALOG             ,null,'string(name)', ],
		MElementTypes::FJ_OBJECT_SCHEMA              =>[ MElementTypes::F_OBJECT_SCHEMA              ,null,'string(name)', ],
		MElementTypes::FJ_OBJECT_NAME                =>[ MElementTypes::F_OBJECT_NAME                ,null,'string(name)', ],
		MElementTypes::FJ_OBJECT_TYPE                =>[ MElementTypes::F_OBJECT_TYPE                ,null,'string',       ],
		MElementTypes::FJ_COLLECTION_TYPE_IDENTIFIER =>[ MElementTypes::F_COLLECTION_TYPE_IDENTIFIER ,null,'string(name)', ],
		MElementTypes::FJ_DATA_TYPE                  =>[ MElementTypes::F_DATA_TYPE                  ,null,'string',       ],
		MElementTypes::FJ_CHARACTER_MAXIMUM_LENGTH   =>[ MElementTypes::F_CHARACTER_MAXIMUM_LENGTH   ,null,'number',       ],
		MElementTypes::FJ_CHARACTER_OCTET_LENGTH     =>[ MElementTypes::F_CHARACTER_OCTET_LENGTH     ,null,'number',       ],
		MElementTypes::FJ_CHARACTER_SET_CATALOG      =>[ MElementTypes::F_CHARACTER_SET_CATALOG      ,null,'string(name)', ],
		MElementTypes::FJ_CHARACTER_SET_SCHEMA       =>[ MElementTypes::F_CHARACTER_SET_SCHEMA       ,null,'string(name)', ],
		MElementTypes::FJ_CHARACTER_SET_NAME         =>[ MElementTypes::F_CHARACTER_SET_NAME         ,null,'string(name)', ],
		MElementTypes::FJ_COLLATION_CATALOG          =>[ MElementTypes::F_COLLATION_CATALOG          ,null,'string(name)', ],
		MElementTypes::FJ_COLLATION_SCHEMA           =>[ MElementTypes::F_COLLATION_SCHEMA           ,null,'string(name)', ],
		MElementTypes::FJ_COLLATION_NAME             =>[ MElementTypes::F_COLLATION_NAME             ,null,'string(name)', ],
		MElementTypes::FJ_NUMERIC_PRECISION          =>[ MElementTypes::F_NUMERIC_PRECISION          ,null,'number',       ],
		MElementTypes::FJ_NUMERIC_PRECISION_RADIX    =>[ MElementTypes::F_NUMERIC_PRECISION_RADIX    ,null,'number',       ],
		MElementTypes::FJ_NUMERIC_SCALE              =>[ MElementTypes::F_NUMERIC_SCALE              ,null,'number',       ],
		MElementTypes::FJ_DATETIME_PRECISION         =>[ MElementTypes::F_DATETIME_PRECISION         ,null,'number',       ],
		MElementTypes::FJ_INTERVAL_TYPE              =>[ MElementTypes::F_INTERVAL_TYPE              ,null,'string',       ],
		MElementTypes::FJ_INTERVAL_PRECISION         =>[ MElementTypes::F_INTERVAL_PRECISION         ,null,'number',       ],
		MElementTypes::FJ_DOMAIN_DEFAULT             =>[ MElementTypes::F_DOMAIN_DEFAULT             ,null,'string',       ],
		MElementTypes::FJ_UDT_CATALOG                =>[ MElementTypes::F_UDT_CATALOG                ,null,'string(name)', ],
		MElementTypes::FJ_UDT_SCHEMA                 =>[ MElementTypes::F_UDT_SCHEMA                 ,null,'string(name)', ],
		MElementTypes::FJ_UDT_NAME                   =>[ MElementTypes::F_UDT_NAME                   ,null,'string(name)', ],
		MElementTypes::FJ_SCOPE_CATALOG              =>[ MElementTypes::F_SCOPE_CATALOG              ,null,'string(name)', ],
		MElementTypes::FJ_SCOPE_SCHEMA               =>[ MElementTypes::F_SCOPE_SCHEMA               ,null,'string(name)', ],
		MElementTypes::FJ_SCOPE_NAME                 =>[ MElementTypes::F_SCOPE_NAME                 ,null,'string(name)', ],
		MElementTypes::FJ_MAXIMUM_CARDINALITY        =>[ MElementTypes::F_MAXIMUM_CARDINALITY        ,null,'number',       ],
		MElementTypes::FJ_DTD_IDENTIFIER             =>[ MElementTypes::F_DTD_IDENTIFIER             ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_OBJECT_CATALOG,
			self::F_OBJECT_SCHEMA,
			self::F_OBJECT_NAME,
			self::F_OBJECT_TYPE,
			self::F_COLLECTION_TYPE_IDENTIFIER,
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
			self::F_DOMAIN_DEFAULT,
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_SCOPE_CATALOG,
			self::F_SCOPE_SCHEMA,
			self::F_SCOPE_NAME,
			self::F_MAXIMUM_CARDINALITY,
			self::F_DTD_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

