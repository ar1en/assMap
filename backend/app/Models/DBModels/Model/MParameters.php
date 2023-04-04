<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MParameters
 * Representation for db table parameters.

 * @property  string(name) specific_catalog         [1]  type:name         
 * @property  string(name) specific_schema          [2]  type:name         
 * @property  string(name) specific_name            [3]  type:name         
 * @property  int          ordinal_position         [4]  type:int4         
 * @property  string       parameter_mode           [5]  type:varchar      
 * @property  string       is_result                [6]  type:varchar(3)   
 * @property  string       as_locator               [7]  type:varchar(3)   
 * @property  string(name) parameter_name           [8]  type:name         
 * @property  string       data_type                [9]  type:varchar      
 * @property  int          character_maximum_length [10] type:int4         
 * @property  int          character_octet_length   [11] type:int4         
 * @property  string(name) character_set_catalog    [12] type:name         
 * @property  string(name) character_set_schema     [13] type:name         
 * @property  string(name) character_set_name       [14] type:name         
 * @property  string(name) collation_catalog        [15] type:name         
 * @property  string(name) collation_schema         [16] type:name         
 * @property  string(name) collation_name           [17] type:name         
 * @property  int          numeric_precision        [18] type:int4         
 * @property  int          numeric_precision_radix  [19] type:int4         
 * @property  int          numeric_scale            [20] type:int4         
 * @property  int          datetime_precision       [21] type:int4         
 * @property  string       interval_type            [22] type:varchar      
 * @property  int          interval_precision       [23] type:int4         
 * @property  string(name) udt_catalog              [24] type:name         
 * @property  string(name) udt_schema               [25] type:name         
 * @property  string(name) udt_name                 [26] type:name         
 * @property  string(name) scope_catalog            [27] type:name         
 * @property  string(name) scope_schema             [28] type:name         
 * @property  string(name) scope_name               [29] type:name         
 * @property  int          maximum_cardinality      [30] type:int4         
 * @property  string(name) dtd_identifier           [31] type:name         
 * @property  string       parameter_default        [32] type:varchar      
 * @package App\Models\DBModels\Model
 */
class MParameters extends DBClass {


	const  FJ_AS_LOCATOR               = 'asLocator';
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
	const  FJ_DTD_IDENTIFIER           = 'dtdIdentifier';
	const  FJ_INTERVAL_PRECISION       = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE            = 'intervalType';
	const  FJ_IS_RESULT                = 'isResult';
	const  FJ_MAXIMUM_CARDINALITY      = 'maximumCardinality';
	const  FJ_NUMERIC_PRECISION        = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX  = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE            = 'numericScale';
	const  FJ_ORDINAL_POSITION         = 'ordinalPosition';
	const  FJ_PARAMETER_DEFAULT        = 'parameterDefault';
	const  FJ_PARAMETER_MODE           = 'parameterMode';
	const  FJ_PARAMETER_NAME           = 'parameterName';
	const  FJ_SCOPE_CATALOG            = 'scopeCatalog';
	const  FJ_SCOPE_NAME               = 'scopeName';
	const  FJ_SCOPE_SCHEMA             = 'scopeSchema';
	const  FJ_SPECIFIC_CATALOG         = 'specificCatalog';
	const  FJ_SPECIFIC_NAME            = 'specificName';
	const  FJ_SPECIFIC_SCHEMA          = 'specificSchema';
	const  FJ_UDT_CATALOG              = 'udtCatalog';
	const  FJ_UDT_NAME                 = 'udtName';
	const  FJ_UDT_SCHEMA               = 'udtSchema';
	const  FT_AS_LOCATOR               = 'parameters.as_locator';
	const  FT_CHARACTER_MAXIMUM_LENGTH = 'parameters.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH   = 'parameters.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG    = 'parameters.character_set_catalog';
	const  FT_CHARACTER_SET_NAME       = 'parameters.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA     = 'parameters.character_set_schema';
	const  FT_COLLATION_CATALOG        = 'parameters.collation_catalog';
	const  FT_COLLATION_NAME           = 'parameters.collation_name';
	const  FT_COLLATION_SCHEMA         = 'parameters.collation_schema';
	const  FT_DATA_TYPE                = 'parameters.data_type';
	const  FT_DATETIME_PRECISION       = 'parameters.datetime_precision';
	const  FT_DTD_IDENTIFIER           = 'parameters.dtd_identifier';
	const  FT_INTERVAL_PRECISION       = 'parameters.interval_precision';
	const  FT_INTERVAL_TYPE            = 'parameters.interval_type';
	const  FT_IS_RESULT                = 'parameters.is_result';
	const  FT_MAXIMUM_CARDINALITY      = 'parameters.maximum_cardinality';
	const  FT_NUMERIC_PRECISION        = 'parameters.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX  = 'parameters.numeric_precision_radix';
	const  FT_NUMERIC_SCALE            = 'parameters.numeric_scale';
	const  FT_ORDINAL_POSITION         = 'parameters.ordinal_position';
	const  FT_PARAMETER_DEFAULT        = 'parameters.parameter_default';
	const  FT_PARAMETER_MODE           = 'parameters.parameter_mode';
	const  FT_PARAMETER_NAME           = 'parameters.parameter_name';
	const  FT_SCOPE_CATALOG            = 'parameters.scope_catalog';
	const  FT_SCOPE_NAME               = 'parameters.scope_name';
	const  FT_SCOPE_SCHEMA             = 'parameters.scope_schema';
	const  FT_SPECIFIC_CATALOG         = 'parameters.specific_catalog';
	const  FT_SPECIFIC_NAME            = 'parameters.specific_name';
	const  FT_SPECIFIC_SCHEMA          = 'parameters.specific_schema';
	const  FT_UDT_CATALOG              = 'parameters.udt_catalog';
	const  FT_UDT_NAME                 = 'parameters.udt_name';
	const  FT_UDT_SCHEMA               = 'parameters.udt_schema';
	const  F_AS_LOCATOR                = 'as_locator';
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
	const  F_DTD_IDENTIFIER            = 'dtd_identifier';
	const  F_INTERVAL_PRECISION        = 'interval_precision';
	const  F_INTERVAL_TYPE             = 'interval_type';
	const  F_IS_RESULT                 = 'is_result';
	const  F_MAXIMUM_CARDINALITY       = 'maximum_cardinality';
	const  F_NUMERIC_PRECISION         = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX   = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE             = 'numeric_scale';
	const  F_ORDINAL_POSITION          = 'ordinal_position';
	const  F_PARAMETER_DEFAULT         = 'parameter_default';
	const  F_PARAMETER_MODE            = 'parameter_mode';
	const  F_PARAMETER_NAME            = 'parameter_name';
	const  F_SCOPE_CATALOG             = 'scope_catalog';
	const  F_SCOPE_NAME                = 'scope_name';
	const  F_SCOPE_SCHEMA              = 'scope_schema';
	const  F_SPECIFIC_CATALOG          = 'specific_catalog';
	const  F_SPECIFIC_NAME             = 'specific_name';
	const  F_SPECIFIC_SCHEMA           = 'specific_schema';
	const  F_UDT_CATALOG               = 'udt_catalog';
	const  F_UDT_NAME                  = 'udt_name';
	const  F_UDT_SCHEMA                = 'udt_schema';

    protected $table = 'parameters';

	public static array $jsonable = [
		MParameters::FJ_SPECIFIC_CATALOG         =>[ MParameters::F_SPECIFIC_CATALOG         ,null,'string(name)', ],
		MParameters::FJ_SPECIFIC_SCHEMA          =>[ MParameters::F_SPECIFIC_SCHEMA          ,null,'string(name)', ],
		MParameters::FJ_SPECIFIC_NAME            =>[ MParameters::F_SPECIFIC_NAME            ,null,'string(name)', ],
		MParameters::FJ_ORDINAL_POSITION         =>[ MParameters::F_ORDINAL_POSITION         ,null,'number',       ],
		MParameters::FJ_PARAMETER_MODE           =>[ MParameters::F_PARAMETER_MODE           ,null,'string',       ],
		MParameters::FJ_IS_RESULT                =>[ MParameters::F_IS_RESULT                ,null,'string',       ],
		MParameters::FJ_AS_LOCATOR               =>[ MParameters::F_AS_LOCATOR               ,null,'string',       ],
		MParameters::FJ_PARAMETER_NAME           =>[ MParameters::F_PARAMETER_NAME           ,null,'string(name)', ],
		MParameters::FJ_DATA_TYPE                =>[ MParameters::F_DATA_TYPE                ,null,'string',       ],
		MParameters::FJ_CHARACTER_MAXIMUM_LENGTH =>[ MParameters::F_CHARACTER_MAXIMUM_LENGTH ,null,'number',       ],
		MParameters::FJ_CHARACTER_OCTET_LENGTH   =>[ MParameters::F_CHARACTER_OCTET_LENGTH   ,null,'number',       ],
		MParameters::FJ_CHARACTER_SET_CATALOG    =>[ MParameters::F_CHARACTER_SET_CATALOG    ,null,'string(name)', ],
		MParameters::FJ_CHARACTER_SET_SCHEMA     =>[ MParameters::F_CHARACTER_SET_SCHEMA     ,null,'string(name)', ],
		MParameters::FJ_CHARACTER_SET_NAME       =>[ MParameters::F_CHARACTER_SET_NAME       ,null,'string(name)', ],
		MParameters::FJ_COLLATION_CATALOG        =>[ MParameters::F_COLLATION_CATALOG        ,null,'string(name)', ],
		MParameters::FJ_COLLATION_SCHEMA         =>[ MParameters::F_COLLATION_SCHEMA         ,null,'string(name)', ],
		MParameters::FJ_COLLATION_NAME           =>[ MParameters::F_COLLATION_NAME           ,null,'string(name)', ],
		MParameters::FJ_NUMERIC_PRECISION        =>[ MParameters::F_NUMERIC_PRECISION        ,null,'number',       ],
		MParameters::FJ_NUMERIC_PRECISION_RADIX  =>[ MParameters::F_NUMERIC_PRECISION_RADIX  ,null,'number',       ],
		MParameters::FJ_NUMERIC_SCALE            =>[ MParameters::F_NUMERIC_SCALE            ,null,'number',       ],
		MParameters::FJ_DATETIME_PRECISION       =>[ MParameters::F_DATETIME_PRECISION       ,null,'number',       ],
		MParameters::FJ_INTERVAL_TYPE            =>[ MParameters::F_INTERVAL_TYPE            ,null,'string',       ],
		MParameters::FJ_INTERVAL_PRECISION       =>[ MParameters::F_INTERVAL_PRECISION       ,null,'number',       ],
		MParameters::FJ_UDT_CATALOG              =>[ MParameters::F_UDT_CATALOG              ,null,'string(name)', ],
		MParameters::FJ_UDT_SCHEMA               =>[ MParameters::F_UDT_SCHEMA               ,null,'string(name)', ],
		MParameters::FJ_UDT_NAME                 =>[ MParameters::F_UDT_NAME                 ,null,'string(name)', ],
		MParameters::FJ_SCOPE_CATALOG            =>[ MParameters::F_SCOPE_CATALOG            ,null,'string(name)', ],
		MParameters::FJ_SCOPE_SCHEMA             =>[ MParameters::F_SCOPE_SCHEMA             ,null,'string(name)', ],
		MParameters::FJ_SCOPE_NAME               =>[ MParameters::F_SCOPE_NAME               ,null,'string(name)', ],
		MParameters::FJ_MAXIMUM_CARDINALITY      =>[ MParameters::F_MAXIMUM_CARDINALITY      ,null,'number',       ],
		MParameters::FJ_DTD_IDENTIFIER           =>[ MParameters::F_DTD_IDENTIFIER           ,null,'string(name)', ],
		MParameters::FJ_PARAMETER_DEFAULT        =>[ MParameters::F_PARAMETER_DEFAULT        ,null,'string',       ],
	];

		protected $visible = [
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ORDINAL_POSITION,
			self::F_PARAMETER_MODE,
			self::F_IS_RESULT,
			self::F_AS_LOCATOR,
			self::F_PARAMETER_NAME,
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
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_SCOPE_CATALOG,
			self::F_SCOPE_SCHEMA,
			self::F_SCOPE_NAME,
			self::F_MAXIMUM_CARDINALITY,
			self::F_DTD_IDENTIFIER,
			self::F_PARAMETER_DEFAULT,
		]; 

		protected $fillable = [
		];





}

