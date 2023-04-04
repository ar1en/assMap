<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MDomains
 * Representation for db table domains.

 * @property  string(name) domain_catalog           [1]  type:name      
 * @property  string(name) domain_schema            [2]  type:name      
 * @property  string(name) domain_name              [3]  type:name      
 * @property  string       data_type                [4]  type:varchar   
 * @property  int          character_maximum_length [5]  type:int4      
 * @property  int          character_octet_length   [6]  type:int4      
 * @property  string(name) character_set_catalog    [7]  type:name      
 * @property  string(name) character_set_schema     [8]  type:name      
 * @property  string(name) character_set_name       [9]  type:name      
 * @property  string(name) collation_catalog        [10] type:name      
 * @property  string(name) collation_schema         [11] type:name      
 * @property  string(name) collation_name           [12] type:name      
 * @property  int          numeric_precision        [13] type:int4      
 * @property  int          numeric_precision_radix  [14] type:int4      
 * @property  int          numeric_scale            [15] type:int4      
 * @property  int          datetime_precision       [16] type:int4      
 * @property  string       interval_type            [17] type:varchar   
 * @property  int          interval_precision       [18] type:int4      
 * @property  string       domain_default           [19] type:varchar   
 * @property  string(name) udt_catalog              [20] type:name      
 * @property  string(name) udt_schema               [21] type:name      
 * @property  string(name) udt_name                 [22] type:name      
 * @property  string(name) scope_catalog            [23] type:name      
 * @property  string(name) scope_schema             [24] type:name      
 * @property  string(name) scope_name               [25] type:name      
 * @property  int          maximum_cardinality      [26] type:int4      
 * @property  string(name) dtd_identifier           [27] type:name      
 * @package App\Models\DBModels\Model
 */
class MDomains extends DBClass {


	const  FJ_CHARACTER_MAXIMUM_LENGTH = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH   = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG    = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME       = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA     = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG        = 'collationCatalog';
	const  FJ_COLLATION_NAME           = 'collationName';
	const  FJ_COLLATION_SCHEMA         = 'collationSchema';
	const  FJ_DATA_TYPE                = 'dataType';
	const  FJ_DATETIME_PRECISION       = 'datetimePrecision';
	const  FJ_DOMAIN_CATALOG           = 'domainCatalog';
	const  FJ_DOMAIN_DEFAULT           = 'domainDefault';
	const  FJ_DOMAIN_NAME              = 'domainName';
	const  FJ_DOMAIN_SCHEMA            = 'domainSchema';
	const  FJ_DTD_IDENTIFIER           = 'dtdIdentifier';
	const  FJ_INTERVAL_PRECISION       = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE            = 'intervalType';
	const  FJ_MAXIMUM_CARDINALITY      = 'maximumCardinality';
	const  FJ_NUMERIC_PRECISION        = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX  = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE            = 'numericScale';
	const  FJ_SCOPE_CATALOG            = 'scopeCatalog';
	const  FJ_SCOPE_NAME               = 'scopeName';
	const  FJ_SCOPE_SCHEMA             = 'scopeSchema';
	const  FJ_UDT_CATALOG              = 'udtCatalog';
	const  FJ_UDT_NAME                 = 'udtName';
	const  FJ_UDT_SCHEMA               = 'udtSchema';
	const  FT_CHARACTER_MAXIMUM_LENGTH = 'domains.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH   = 'domains.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG    = 'domains.character_set_catalog';
	const  FT_CHARACTER_SET_NAME       = 'domains.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA     = 'domains.character_set_schema';
	const  FT_COLLATION_CATALOG        = 'domains.collation_catalog';
	const  FT_COLLATION_NAME           = 'domains.collation_name';
	const  FT_COLLATION_SCHEMA         = 'domains.collation_schema';
	const  FT_DATA_TYPE                = 'domains.data_type';
	const  FT_DATETIME_PRECISION       = 'domains.datetime_precision';
	const  FT_DOMAIN_CATALOG           = 'domains.domain_catalog';
	const  FT_DOMAIN_DEFAULT           = 'domains.domain_default';
	const  FT_DOMAIN_NAME              = 'domains.domain_name';
	const  FT_DOMAIN_SCHEMA            = 'domains.domain_schema';
	const  FT_DTD_IDENTIFIER           = 'domains.dtd_identifier';
	const  FT_INTERVAL_PRECISION       = 'domains.interval_precision';
	const  FT_INTERVAL_TYPE            = 'domains.interval_type';
	const  FT_MAXIMUM_CARDINALITY      = 'domains.maximum_cardinality';
	const  FT_NUMERIC_PRECISION        = 'domains.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX  = 'domains.numeric_precision_radix';
	const  FT_NUMERIC_SCALE            = 'domains.numeric_scale';
	const  FT_SCOPE_CATALOG            = 'domains.scope_catalog';
	const  FT_SCOPE_NAME               = 'domains.scope_name';
	const  FT_SCOPE_SCHEMA             = 'domains.scope_schema';
	const  FT_UDT_CATALOG              = 'domains.udt_catalog';
	const  FT_UDT_NAME                 = 'domains.udt_name';
	const  FT_UDT_SCHEMA               = 'domains.udt_schema';
	const  F_CHARACTER_MAXIMUM_LENGTH  = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH    = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG     = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME        = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA      = 'character_set_schema';
	const  F_COLLATION_CATALOG         = 'collation_catalog';
	const  F_COLLATION_NAME            = 'collation_name';
	const  F_COLLATION_SCHEMA          = 'collation_schema';
	const  F_DATA_TYPE                 = 'data_type';
	const  F_DATETIME_PRECISION        = 'datetime_precision';
	const  F_DOMAIN_CATALOG            = 'domain_catalog';
	const  F_DOMAIN_DEFAULT            = 'domain_default';
	const  F_DOMAIN_NAME               = 'domain_name';
	const  F_DOMAIN_SCHEMA             = 'domain_schema';
	const  F_DTD_IDENTIFIER            = 'dtd_identifier';
	const  F_INTERVAL_PRECISION        = 'interval_precision';
	const  F_INTERVAL_TYPE             = 'interval_type';
	const  F_MAXIMUM_CARDINALITY       = 'maximum_cardinality';
	const  F_NUMERIC_PRECISION         = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX   = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE             = 'numeric_scale';
	const  F_SCOPE_CATALOG             = 'scope_catalog';
	const  F_SCOPE_NAME                = 'scope_name';
	const  F_SCOPE_SCHEMA              = 'scope_schema';
	const  F_UDT_CATALOG               = 'udt_catalog';
	const  F_UDT_NAME                  = 'udt_name';
	const  F_UDT_SCHEMA                = 'udt_schema';

    protected $table = 'domains';

	public static array $jsonable = [
		MDomains::FJ_DOMAIN_CATALOG           =>[ MDomains::F_DOMAIN_CATALOG           ,null,'string(name)', ],
		MDomains::FJ_DOMAIN_SCHEMA            =>[ MDomains::F_DOMAIN_SCHEMA            ,null,'string(name)', ],
		MDomains::FJ_DOMAIN_NAME              =>[ MDomains::F_DOMAIN_NAME              ,null,'string(name)', ],
		MDomains::FJ_DATA_TYPE                =>[ MDomains::F_DATA_TYPE                ,null,'string',       ],
		MDomains::FJ_CHARACTER_MAXIMUM_LENGTH =>[ MDomains::F_CHARACTER_MAXIMUM_LENGTH ,null,'number',       ],
		MDomains::FJ_CHARACTER_OCTET_LENGTH   =>[ MDomains::F_CHARACTER_OCTET_LENGTH   ,null,'number',       ],
		MDomains::FJ_CHARACTER_SET_CATALOG    =>[ MDomains::F_CHARACTER_SET_CATALOG    ,null,'string(name)', ],
		MDomains::FJ_CHARACTER_SET_SCHEMA     =>[ MDomains::F_CHARACTER_SET_SCHEMA     ,null,'string(name)', ],
		MDomains::FJ_CHARACTER_SET_NAME       =>[ MDomains::F_CHARACTER_SET_NAME       ,null,'string(name)', ],
		MDomains::FJ_COLLATION_CATALOG        =>[ MDomains::F_COLLATION_CATALOG        ,null,'string(name)', ],
		MDomains::FJ_COLLATION_SCHEMA         =>[ MDomains::F_COLLATION_SCHEMA         ,null,'string(name)', ],
		MDomains::FJ_COLLATION_NAME           =>[ MDomains::F_COLLATION_NAME           ,null,'string(name)', ],
		MDomains::FJ_NUMERIC_PRECISION        =>[ MDomains::F_NUMERIC_PRECISION        ,null,'number',       ],
		MDomains::FJ_NUMERIC_PRECISION_RADIX  =>[ MDomains::F_NUMERIC_PRECISION_RADIX  ,null,'number',       ],
		MDomains::FJ_NUMERIC_SCALE            =>[ MDomains::F_NUMERIC_SCALE            ,null,'number',       ],
		MDomains::FJ_DATETIME_PRECISION       =>[ MDomains::F_DATETIME_PRECISION       ,null,'number',       ],
		MDomains::FJ_INTERVAL_TYPE            =>[ MDomains::F_INTERVAL_TYPE            ,null,'string',       ],
		MDomains::FJ_INTERVAL_PRECISION       =>[ MDomains::F_INTERVAL_PRECISION       ,null,'number',       ],
		MDomains::FJ_DOMAIN_DEFAULT           =>[ MDomains::F_DOMAIN_DEFAULT           ,null,'string',       ],
		MDomains::FJ_UDT_CATALOG              =>[ MDomains::F_UDT_CATALOG              ,null,'string(name)', ],
		MDomains::FJ_UDT_SCHEMA               =>[ MDomains::F_UDT_SCHEMA               ,null,'string(name)', ],
		MDomains::FJ_UDT_NAME                 =>[ MDomains::F_UDT_NAME                 ,null,'string(name)', ],
		MDomains::FJ_SCOPE_CATALOG            =>[ MDomains::F_SCOPE_CATALOG            ,null,'string(name)', ],
		MDomains::FJ_SCOPE_SCHEMA             =>[ MDomains::F_SCOPE_SCHEMA             ,null,'string(name)', ],
		MDomains::FJ_SCOPE_NAME               =>[ MDomains::F_SCOPE_NAME               ,null,'string(name)', ],
		MDomains::FJ_MAXIMUM_CARDINALITY      =>[ MDomains::F_MAXIMUM_CARDINALITY      ,null,'number',       ],
		MDomains::FJ_DTD_IDENTIFIER           =>[ MDomains::F_DTD_IDENTIFIER           ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_DOMAIN_CATALOG,
			self::F_DOMAIN_SCHEMA,
			self::F_DOMAIN_NAME,
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

