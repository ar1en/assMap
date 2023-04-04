<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumns
 * Representation for db table columns.

 * @property  string(name) table_catalog            [1]  type:name         
 * @property  string(name) table_schema             [2]  type:name         
 * @property  string(name) table_name               [3]  type:name         
 * @property  string(name) column_name              [4]  type:name         
 * @property  int          ordinal_position         [5]  type:int4         
 * @property  string       column_default           [6]  type:varchar      
 * @property  string       is_nullable              [7]  type:varchar(3)   
 * @property  string       data_type                [8]  type:varchar      
 * @property  int          character_maximum_length [9]  type:int4         
 * @property  int          character_octet_length   [10] type:int4         
 * @property  int          numeric_precision        [11] type:int4         
 * @property  int          numeric_precision_radix  [12] type:int4         
 * @property  int          numeric_scale            [13] type:int4         
 * @property  int          datetime_precision       [14] type:int4         
 * @property  string       interval_type            [15] type:varchar      
 * @property  int          interval_precision       [16] type:int4         
 * @property  string(name) character_set_catalog    [17] type:name         
 * @property  string(name) character_set_schema     [18] type:name         
 * @property  string(name) character_set_name       [19] type:name         
 * @property  string(name) collation_catalog        [20] type:name         
 * @property  string(name) collation_schema         [21] type:name         
 * @property  string(name) collation_name           [22] type:name         
 * @property  string(name) domain_catalog           [23] type:name         
 * @property  string(name) domain_schema            [24] type:name         
 * @property  string(name) domain_name              [25] type:name         
 * @property  string(name) udt_catalog              [26] type:name         
 * @property  string(name) udt_schema               [27] type:name         
 * @property  string(name) udt_name                 [28] type:name         
 * @property  string(name) scope_catalog            [29] type:name         
 * @property  string(name) scope_schema             [30] type:name         
 * @property  string(name) scope_name               [31] type:name         
 * @property  int          maximum_cardinality      [32] type:int4         
 * @property  string(name) dtd_identifier           [33] type:name         
 * @property  string       is_self_referencing      [34] type:varchar(3)   
 * @property  string       is_identity              [35] type:varchar(3)   
 * @property  string       identity_generation      [36] type:varchar      
 * @property  string       identity_start           [37] type:varchar      
 * @property  string       identity_increment       [38] type:varchar      
 * @property  string       identity_maximum         [39] type:varchar      
 * @property  string       identity_minimum         [40] type:varchar      
 * @property  string       identity_cycle           [41] type:varchar(3)   
 * @property  string       is_generated             [42] type:varchar      
 * @property  string       generation_expression    [43] type:varchar      
 * @property  string       is_updatable             [44] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MColumns extends DBClass {


	const  FJ_CHARACTER_MAXIMUM_LENGTH = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH   = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG    = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME       = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA     = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG        = 'collationCatalog';
	const  FJ_COLLATION_NAME           = 'collationName';
	const  FJ_COLLATION_SCHEMA         = 'collationSchema';
	const  FJ_COLUMN_DEFAULT           = 'columnDefault';
	const  FJ_COLUMN_NAME              = 'columnName';
	const  FJ_DATA_TYPE                = 'dataType';
	const  FJ_DATETIME_PRECISION       = 'datetimePrecision';
	const  FJ_DOMAIN_CATALOG           = 'domainCatalog';
	const  FJ_DOMAIN_NAME              = 'domainName';
	const  FJ_DOMAIN_SCHEMA            = 'domainSchema';
	const  FJ_DTD_IDENTIFIER           = 'dtdIdentifier';
	const  FJ_GENERATION_EXPRESSION    = 'generationExpression';
	const  FJ_IDENTITY_CYCLE           = 'identityCycle';
	const  FJ_IDENTITY_GENERATION      = 'identityGeneration';
	const  FJ_IDENTITY_INCREMENT       = 'identityIncrement';
	const  FJ_IDENTITY_MAXIMUM         = 'identityMaximum';
	const  FJ_IDENTITY_MINIMUM         = 'identityMinimum';
	const  FJ_IDENTITY_START           = 'identityStart';
	const  FJ_INTERVAL_PRECISION       = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE            = 'intervalType';
	const  FJ_IS_GENERATED             = 'isGenerated';
	const  FJ_IS_IDENTITY              = 'isIdentity';
	const  FJ_IS_NULLABLE              = 'isNullable';
	const  FJ_IS_SELF_REFERENCING      = 'isSelfReferencing';
	const  FJ_IS_UPDATABLE             = 'isUpdatable';
	const  FJ_MAXIMUM_CARDINALITY      = 'maximumCardinality';
	const  FJ_NUMERIC_PRECISION        = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX  = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE            = 'numericScale';
	const  FJ_ORDINAL_POSITION         = 'ordinalPosition';
	const  FJ_SCOPE_CATALOG            = 'scopeCatalog';
	const  FJ_SCOPE_NAME               = 'scopeName';
	const  FJ_SCOPE_SCHEMA             = 'scopeSchema';
	const  FJ_TABLE_CATALOG            = 'tableCatalog';
	const  FJ_TABLE_NAME               = 'tableName';
	const  FJ_TABLE_SCHEMA             = 'tableSchema';
	const  FJ_UDT_CATALOG              = 'udtCatalog';
	const  FJ_UDT_NAME                 = 'udtName';
	const  FJ_UDT_SCHEMA               = 'udtSchema';
	const  FT_CHARACTER_MAXIMUM_LENGTH = 'columns.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH   = 'columns.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG    = 'columns.character_set_catalog';
	const  FT_CHARACTER_SET_NAME       = 'columns.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA     = 'columns.character_set_schema';
	const  FT_COLLATION_CATALOG        = 'columns.collation_catalog';
	const  FT_COLLATION_NAME           = 'columns.collation_name';
	const  FT_COLLATION_SCHEMA         = 'columns.collation_schema';
	const  FT_COLUMN_DEFAULT           = 'columns.column_default';
	const  FT_COLUMN_NAME              = 'columns.column_name';
	const  FT_DATA_TYPE                = 'columns.data_type';
	const  FT_DATETIME_PRECISION       = 'columns.datetime_precision';
	const  FT_DOMAIN_CATALOG           = 'columns.domain_catalog';
	const  FT_DOMAIN_NAME              = 'columns.domain_name';
	const  FT_DOMAIN_SCHEMA            = 'columns.domain_schema';
	const  FT_DTD_IDENTIFIER           = 'columns.dtd_identifier';
	const  FT_GENERATION_EXPRESSION    = 'columns.generation_expression';
	const  FT_IDENTITY_CYCLE           = 'columns.identity_cycle';
	const  FT_IDENTITY_GENERATION      = 'columns.identity_generation';
	const  FT_IDENTITY_INCREMENT       = 'columns.identity_increment';
	const  FT_IDENTITY_MAXIMUM         = 'columns.identity_maximum';
	const  FT_IDENTITY_MINIMUM         = 'columns.identity_minimum';
	const  FT_IDENTITY_START           = 'columns.identity_start';
	const  FT_INTERVAL_PRECISION       = 'columns.interval_precision';
	const  FT_INTERVAL_TYPE            = 'columns.interval_type';
	const  FT_IS_GENERATED             = 'columns.is_generated';
	const  FT_IS_IDENTITY              = 'columns.is_identity';
	const  FT_IS_NULLABLE              = 'columns.is_nullable';
	const  FT_IS_SELF_REFERENCING      = 'columns.is_self_referencing';
	const  FT_IS_UPDATABLE             = 'columns.is_updatable';
	const  FT_MAXIMUM_CARDINALITY      = 'columns.maximum_cardinality';
	const  FT_NUMERIC_PRECISION        = 'columns.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX  = 'columns.numeric_precision_radix';
	const  FT_NUMERIC_SCALE            = 'columns.numeric_scale';
	const  FT_ORDINAL_POSITION         = 'columns.ordinal_position';
	const  FT_SCOPE_CATALOG            = 'columns.scope_catalog';
	const  FT_SCOPE_NAME               = 'columns.scope_name';
	const  FT_SCOPE_SCHEMA             = 'columns.scope_schema';
	const  FT_TABLE_CATALOG            = 'columns.table_catalog';
	const  FT_TABLE_NAME               = 'columns.table_name';
	const  FT_TABLE_SCHEMA             = 'columns.table_schema';
	const  FT_UDT_CATALOG              = 'columns.udt_catalog';
	const  FT_UDT_NAME                 = 'columns.udt_name';
	const  FT_UDT_SCHEMA               = 'columns.udt_schema';
	const  F_CHARACTER_MAXIMUM_LENGTH  = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH    = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG     = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME        = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA      = 'character_set_schema';
	const  F_COLLATION_CATALOG         = 'collation_catalog';
	const  F_COLLATION_NAME            = 'collation_name';
	const  F_COLLATION_SCHEMA          = 'collation_schema';
	const  F_COLUMN_DEFAULT            = 'column_default';
	const  F_COLUMN_NAME               = 'column_name';
	const  F_DATA_TYPE                 = 'data_type';
	const  F_DATETIME_PRECISION        = 'datetime_precision';
	const  F_DOMAIN_CATALOG            = 'domain_catalog';
	const  F_DOMAIN_NAME               = 'domain_name';
	const  F_DOMAIN_SCHEMA             = 'domain_schema';
	const  F_DTD_IDENTIFIER            = 'dtd_identifier';
	const  F_GENERATION_EXPRESSION     = 'generation_expression';
	const  F_IDENTITY_CYCLE            = 'identity_cycle';
	const  F_IDENTITY_GENERATION       = 'identity_generation';
	const  F_IDENTITY_INCREMENT        = 'identity_increment';
	const  F_IDENTITY_MAXIMUM          = 'identity_maximum';
	const  F_IDENTITY_MINIMUM          = 'identity_minimum';
	const  F_IDENTITY_START            = 'identity_start';
	const  F_INTERVAL_PRECISION        = 'interval_precision';
	const  F_INTERVAL_TYPE             = 'interval_type';
	const  F_IS_GENERATED              = 'is_generated';
	const  F_IS_IDENTITY               = 'is_identity';
	const  F_IS_NULLABLE               = 'is_nullable';
	const  F_IS_SELF_REFERENCING       = 'is_self_referencing';
	const  F_IS_UPDATABLE              = 'is_updatable';
	const  F_MAXIMUM_CARDINALITY       = 'maximum_cardinality';
	const  F_NUMERIC_PRECISION         = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX   = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE             = 'numeric_scale';
	const  F_ORDINAL_POSITION          = 'ordinal_position';
	const  F_SCOPE_CATALOG             = 'scope_catalog';
	const  F_SCOPE_NAME                = 'scope_name';
	const  F_SCOPE_SCHEMA              = 'scope_schema';
	const  F_TABLE_CATALOG             = 'table_catalog';
	const  F_TABLE_NAME                = 'table_name';
	const  F_TABLE_SCHEMA              = 'table_schema';
	const  F_UDT_CATALOG               = 'udt_catalog';
	const  F_UDT_NAME                  = 'udt_name';
	const  F_UDT_SCHEMA                = 'udt_schema';

    protected $table = 'columns';

	public static array $jsonable = [
		MColumns::FJ_TABLE_CATALOG            =>[ MColumns::F_TABLE_CATALOG            ,null,'string(name)', ],
		MColumns::FJ_TABLE_SCHEMA             =>[ MColumns::F_TABLE_SCHEMA             ,null,'string(name)', ],
		MColumns::FJ_TABLE_NAME               =>[ MColumns::F_TABLE_NAME               ,null,'string(name)', ],
		MColumns::FJ_COLUMN_NAME              =>[ MColumns::F_COLUMN_NAME              ,null,'string(name)', ],
		MColumns::FJ_ORDINAL_POSITION         =>[ MColumns::F_ORDINAL_POSITION         ,null,'number',       ],
		MColumns::FJ_COLUMN_DEFAULT           =>[ MColumns::F_COLUMN_DEFAULT           ,null,'string',       ],
		MColumns::FJ_IS_NULLABLE              =>[ MColumns::F_IS_NULLABLE              ,null,'string',       ],
		MColumns::FJ_DATA_TYPE                =>[ MColumns::F_DATA_TYPE                ,null,'string',       ],
		MColumns::FJ_CHARACTER_MAXIMUM_LENGTH =>[ MColumns::F_CHARACTER_MAXIMUM_LENGTH ,null,'number',       ],
		MColumns::FJ_CHARACTER_OCTET_LENGTH   =>[ MColumns::F_CHARACTER_OCTET_LENGTH   ,null,'number',       ],
		MColumns::FJ_NUMERIC_PRECISION        =>[ MColumns::F_NUMERIC_PRECISION        ,null,'number',       ],
		MColumns::FJ_NUMERIC_PRECISION_RADIX  =>[ MColumns::F_NUMERIC_PRECISION_RADIX  ,null,'number',       ],
		MColumns::FJ_NUMERIC_SCALE            =>[ MColumns::F_NUMERIC_SCALE            ,null,'number',       ],
		MColumns::FJ_DATETIME_PRECISION       =>[ MColumns::F_DATETIME_PRECISION       ,null,'number',       ],
		MColumns::FJ_INTERVAL_TYPE            =>[ MColumns::F_INTERVAL_TYPE            ,null,'string',       ],
		MColumns::FJ_INTERVAL_PRECISION       =>[ MColumns::F_INTERVAL_PRECISION       ,null,'number',       ],
		MColumns::FJ_CHARACTER_SET_CATALOG    =>[ MColumns::F_CHARACTER_SET_CATALOG    ,null,'string(name)', ],
		MColumns::FJ_CHARACTER_SET_SCHEMA     =>[ MColumns::F_CHARACTER_SET_SCHEMA     ,null,'string(name)', ],
		MColumns::FJ_CHARACTER_SET_NAME       =>[ MColumns::F_CHARACTER_SET_NAME       ,null,'string(name)', ],
		MColumns::FJ_COLLATION_CATALOG        =>[ MColumns::F_COLLATION_CATALOG        ,null,'string(name)', ],
		MColumns::FJ_COLLATION_SCHEMA         =>[ MColumns::F_COLLATION_SCHEMA         ,null,'string(name)', ],
		MColumns::FJ_COLLATION_NAME           =>[ MColumns::F_COLLATION_NAME           ,null,'string(name)', ],
		MColumns::FJ_DOMAIN_CATALOG           =>[ MColumns::F_DOMAIN_CATALOG           ,null,'string(name)', ],
		MColumns::FJ_DOMAIN_SCHEMA            =>[ MColumns::F_DOMAIN_SCHEMA            ,null,'string(name)', ],
		MColumns::FJ_DOMAIN_NAME              =>[ MColumns::F_DOMAIN_NAME              ,null,'string(name)', ],
		MColumns::FJ_UDT_CATALOG              =>[ MColumns::F_UDT_CATALOG              ,null,'string(name)', ],
		MColumns::FJ_UDT_SCHEMA               =>[ MColumns::F_UDT_SCHEMA               ,null,'string(name)', ],
		MColumns::FJ_UDT_NAME                 =>[ MColumns::F_UDT_NAME                 ,null,'string(name)', ],
		MColumns::FJ_SCOPE_CATALOG            =>[ MColumns::F_SCOPE_CATALOG            ,null,'string(name)', ],
		MColumns::FJ_SCOPE_SCHEMA             =>[ MColumns::F_SCOPE_SCHEMA             ,null,'string(name)', ],
		MColumns::FJ_SCOPE_NAME               =>[ MColumns::F_SCOPE_NAME               ,null,'string(name)', ],
		MColumns::FJ_MAXIMUM_CARDINALITY      =>[ MColumns::F_MAXIMUM_CARDINALITY      ,null,'number',       ],
		MColumns::FJ_DTD_IDENTIFIER           =>[ MColumns::F_DTD_IDENTIFIER           ,null,'string(name)', ],
		MColumns::FJ_IS_SELF_REFERENCING      =>[ MColumns::F_IS_SELF_REFERENCING      ,null,'string',       ],
		MColumns::FJ_IS_IDENTITY              =>[ MColumns::F_IS_IDENTITY              ,null,'string',       ],
		MColumns::FJ_IDENTITY_GENERATION      =>[ MColumns::F_IDENTITY_GENERATION      ,null,'string',       ],
		MColumns::FJ_IDENTITY_START           =>[ MColumns::F_IDENTITY_START           ,null,'string',       ],
		MColumns::FJ_IDENTITY_INCREMENT       =>[ MColumns::F_IDENTITY_INCREMENT       ,null,'string',       ],
		MColumns::FJ_IDENTITY_MAXIMUM         =>[ MColumns::F_IDENTITY_MAXIMUM         ,null,'string',       ],
		MColumns::FJ_IDENTITY_MINIMUM         =>[ MColumns::F_IDENTITY_MINIMUM         ,null,'string',       ],
		MColumns::FJ_IDENTITY_CYCLE           =>[ MColumns::F_IDENTITY_CYCLE           ,null,'string',       ],
		MColumns::FJ_IS_GENERATED             =>[ MColumns::F_IS_GENERATED             ,null,'string',       ],
		MColumns::FJ_GENERATION_EXPRESSION    =>[ MColumns::F_GENERATION_EXPRESSION    ,null,'string',       ],
		MColumns::FJ_IS_UPDATABLE             =>[ MColumns::F_IS_UPDATABLE             ,null,'string',       ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_ORDINAL_POSITION,
			self::F_COLUMN_DEFAULT,
			self::F_IS_NULLABLE,
			self::F_DATA_TYPE,
			self::F_CHARACTER_MAXIMUM_LENGTH,
			self::F_CHARACTER_OCTET_LENGTH,
			self::F_NUMERIC_PRECISION,
			self::F_NUMERIC_PRECISION_RADIX,
			self::F_NUMERIC_SCALE,
			self::F_DATETIME_PRECISION,
			self::F_INTERVAL_TYPE,
			self::F_INTERVAL_PRECISION,
			self::F_CHARACTER_SET_CATALOG,
			self::F_CHARACTER_SET_SCHEMA,
			self::F_CHARACTER_SET_NAME,
			self::F_COLLATION_CATALOG,
			self::F_COLLATION_SCHEMA,
			self::F_COLLATION_NAME,
			self::F_DOMAIN_CATALOG,
			self::F_DOMAIN_SCHEMA,
			self::F_DOMAIN_NAME,
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_SCOPE_CATALOG,
			self::F_SCOPE_SCHEMA,
			self::F_SCOPE_NAME,
			self::F_MAXIMUM_CARDINALITY,
			self::F_DTD_IDENTIFIER,
			self::F_IS_SELF_REFERENCING,
			self::F_IS_IDENTITY,
			self::F_IDENTITY_GENERATION,
			self::F_IDENTITY_START,
			self::F_IDENTITY_INCREMENT,
			self::F_IDENTITY_MAXIMUM,
			self::F_IDENTITY_MINIMUM,
			self::F_IDENTITY_CYCLE,
			self::F_IS_GENERATED,
			self::F_GENERATION_EXPRESSION,
			self::F_IS_UPDATABLE,
		]; 

		protected $fillable = [
		];





}

