<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MUserDefinedTypes
 * Representation for db table user_defined_types.

 * @property  string(name) user_defined_type_catalog  [1]  type:name         
 * @property  string(name) user_defined_type_schema   [2]  type:name         
 * @property  string(name) user_defined_type_name     [3]  type:name         
 * @property  string       user_defined_type_category [4]  type:varchar      
 * @property  string       is_instantiable            [5]  type:varchar(3)   
 * @property  string       is_final                   [6]  type:varchar(3)   
 * @property  string       ordering_form              [7]  type:varchar      
 * @property  string       ordering_category          [8]  type:varchar      
 * @property  string(name) ordering_routine_catalog   [9]  type:name         
 * @property  string(name) ordering_routine_schema    [10] type:name         
 * @property  string(name) ordering_routine_name      [11] type:name         
 * @property  string       reference_type             [12] type:varchar      
 * @property  string       data_type                  [13] type:varchar      
 * @property  int          character_maximum_length   [14] type:int4         
 * @property  int          character_octet_length     [15] type:int4         
 * @property  string(name) character_set_catalog      [16] type:name         
 * @property  string(name) character_set_schema       [17] type:name         
 * @property  string(name) character_set_name         [18] type:name         
 * @property  string(name) collation_catalog          [19] type:name         
 * @property  string(name) collation_schema           [20] type:name         
 * @property  string(name) collation_name             [21] type:name         
 * @property  int          numeric_precision          [22] type:int4         
 * @property  int          numeric_precision_radix    [23] type:int4         
 * @property  int          numeric_scale              [24] type:int4         
 * @property  int          datetime_precision         [25] type:int4         
 * @property  string       interval_type              [26] type:varchar      
 * @property  int          interval_precision         [27] type:int4         
 * @property  string(name) source_dtd_identifier      [28] type:name         
 * @property  string(name) ref_dtd_identifier         [29] type:name         
 * @package App\Models\DBModels\Model
 */
class MUserDefinedTypes extends DBClass {


	const  FJ_CHARACTER_MAXIMUM_LENGTH   = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH     = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG      = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME         = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA       = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG          = 'collationCatalog';
	const  FJ_COLLATION_NAME             = 'collationName';
	const  FJ_COLLATION_SCHEMA           = 'collationSchema';
	const  FJ_DATA_TYPE                  = 'dataType';
	const  FJ_DATETIME_PRECISION         = 'datetimePrecision';
	const  FJ_INTERVAL_PRECISION         = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE              = 'intervalType';
	const  FJ_IS_FINAL                   = 'isFinal';
	const  FJ_IS_INSTANTIABLE            = 'isInstantiable';
	const  FJ_NUMERIC_PRECISION          = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX    = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE              = 'numericScale';
	const  FJ_ORDERING_CATEGORY          = 'orderingCategory';
	const  FJ_ORDERING_FORM              = 'orderingForm';
	const  FJ_ORDERING_ROUTINE_CATALOG   = 'orderingRoutineCatalog';
	const  FJ_ORDERING_ROUTINE_NAME      = 'orderingRoutineName';
	const  FJ_ORDERING_ROUTINE_SCHEMA    = 'orderingRoutineSchema';
	const  FJ_REFERENCE_TYPE             = 'referenceType';
	const  FJ_REF_DTD_IDENTIFIER         = 'refDtdIdentifier';
	const  FJ_SOURCE_DTD_IDENTIFIER      = 'sourceDtdIdentifier';
	const  FJ_USER_DEFINED_TYPE_CATALOG  = 'userDefinedTypeCatalog';
	const  FJ_USER_DEFINED_TYPE_CATEGORY = 'userDefinedTypeCategory';
	const  FJ_USER_DEFINED_TYPE_NAME     = 'userDefinedTypeName';
	const  FJ_USER_DEFINED_TYPE_SCHEMA   = 'userDefinedTypeSchema';
	const  FT_CHARACTER_MAXIMUM_LENGTH   = 'user_defined_types.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH     = 'user_defined_types.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG      = 'user_defined_types.character_set_catalog';
	const  FT_CHARACTER_SET_NAME         = 'user_defined_types.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA       = 'user_defined_types.character_set_schema';
	const  FT_COLLATION_CATALOG          = 'user_defined_types.collation_catalog';
	const  FT_COLLATION_NAME             = 'user_defined_types.collation_name';
	const  FT_COLLATION_SCHEMA           = 'user_defined_types.collation_schema';
	const  FT_DATA_TYPE                  = 'user_defined_types.data_type';
	const  FT_DATETIME_PRECISION         = 'user_defined_types.datetime_precision';
	const  FT_INTERVAL_PRECISION         = 'user_defined_types.interval_precision';
	const  FT_INTERVAL_TYPE              = 'user_defined_types.interval_type';
	const  FT_IS_FINAL                   = 'user_defined_types.is_final';
	const  FT_IS_INSTANTIABLE            = 'user_defined_types.is_instantiable';
	const  FT_NUMERIC_PRECISION          = 'user_defined_types.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX    = 'user_defined_types.numeric_precision_radix';
	const  FT_NUMERIC_SCALE              = 'user_defined_types.numeric_scale';
	const  FT_ORDERING_CATEGORY          = 'user_defined_types.ordering_category';
	const  FT_ORDERING_FORM              = 'user_defined_types.ordering_form';
	const  FT_ORDERING_ROUTINE_CATALOG   = 'user_defined_types.ordering_routine_catalog';
	const  FT_ORDERING_ROUTINE_NAME      = 'user_defined_types.ordering_routine_name';
	const  FT_ORDERING_ROUTINE_SCHEMA    = 'user_defined_types.ordering_routine_schema';
	const  FT_REFERENCE_TYPE             = 'user_defined_types.reference_type';
	const  FT_REF_DTD_IDENTIFIER         = 'user_defined_types.ref_dtd_identifier';
	const  FT_SOURCE_DTD_IDENTIFIER      = 'user_defined_types.source_dtd_identifier';
	const  FT_USER_DEFINED_TYPE_CATALOG  = 'user_defined_types.user_defined_type_catalog';
	const  FT_USER_DEFINED_TYPE_CATEGORY = 'user_defined_types.user_defined_type_category';
	const  FT_USER_DEFINED_TYPE_NAME     = 'user_defined_types.user_defined_type_name';
	const  FT_USER_DEFINED_TYPE_SCHEMA   = 'user_defined_types.user_defined_type_schema';
	const  F_CHARACTER_MAXIMUM_LENGTH    = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH      = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG       = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME          = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA        = 'character_set_schema';
	const  F_COLLATION_CATALOG           = 'collation_catalog';
	const  F_COLLATION_NAME              = 'collation_name';
	const  F_COLLATION_SCHEMA            = 'collation_schema';
	const  F_DATA_TYPE                   = 'data_type';
	const  F_DATETIME_PRECISION          = 'datetime_precision';
	const  F_INTERVAL_PRECISION          = 'interval_precision';
	const  F_INTERVAL_TYPE               = 'interval_type';
	const  F_IS_FINAL                    = 'is_final';
	const  F_IS_INSTANTIABLE             = 'is_instantiable';
	const  F_NUMERIC_PRECISION           = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX     = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE               = 'numeric_scale';
	const  F_ORDERING_CATEGORY           = 'ordering_category';
	const  F_ORDERING_FORM               = 'ordering_form';
	const  F_ORDERING_ROUTINE_CATALOG    = 'ordering_routine_catalog';
	const  F_ORDERING_ROUTINE_NAME       = 'ordering_routine_name';
	const  F_ORDERING_ROUTINE_SCHEMA     = 'ordering_routine_schema';
	const  F_REFERENCE_TYPE              = 'reference_type';
	const  F_REF_DTD_IDENTIFIER          = 'ref_dtd_identifier';
	const  F_SOURCE_DTD_IDENTIFIER       = 'source_dtd_identifier';
	const  F_USER_DEFINED_TYPE_CATALOG   = 'user_defined_type_catalog';
	const  F_USER_DEFINED_TYPE_CATEGORY  = 'user_defined_type_category';
	const  F_USER_DEFINED_TYPE_NAME      = 'user_defined_type_name';
	const  F_USER_DEFINED_TYPE_SCHEMA    = 'user_defined_type_schema';

    protected $table = 'user_defined_types';

	public static array $jsonable = [
		MUserDefinedTypes::FJ_USER_DEFINED_TYPE_CATALOG  =>[ MUserDefinedTypes::F_USER_DEFINED_TYPE_CATALOG  ,null,'string(name)', ],
		MUserDefinedTypes::FJ_USER_DEFINED_TYPE_SCHEMA   =>[ MUserDefinedTypes::F_USER_DEFINED_TYPE_SCHEMA   ,null,'string(name)', ],
		MUserDefinedTypes::FJ_USER_DEFINED_TYPE_NAME     =>[ MUserDefinedTypes::F_USER_DEFINED_TYPE_NAME     ,null,'string(name)', ],
		MUserDefinedTypes::FJ_USER_DEFINED_TYPE_CATEGORY =>[ MUserDefinedTypes::F_USER_DEFINED_TYPE_CATEGORY ,null,'string',       ],
		MUserDefinedTypes::FJ_IS_INSTANTIABLE            =>[ MUserDefinedTypes::F_IS_INSTANTIABLE            ,null,'string',       ],
		MUserDefinedTypes::FJ_IS_FINAL                   =>[ MUserDefinedTypes::F_IS_FINAL                   ,null,'string',       ],
		MUserDefinedTypes::FJ_ORDERING_FORM              =>[ MUserDefinedTypes::F_ORDERING_FORM              ,null,'string',       ],
		MUserDefinedTypes::FJ_ORDERING_CATEGORY          =>[ MUserDefinedTypes::F_ORDERING_CATEGORY          ,null,'string',       ],
		MUserDefinedTypes::FJ_ORDERING_ROUTINE_CATALOG   =>[ MUserDefinedTypes::F_ORDERING_ROUTINE_CATALOG   ,null,'string(name)', ],
		MUserDefinedTypes::FJ_ORDERING_ROUTINE_SCHEMA    =>[ MUserDefinedTypes::F_ORDERING_ROUTINE_SCHEMA    ,null,'string(name)', ],
		MUserDefinedTypes::FJ_ORDERING_ROUTINE_NAME      =>[ MUserDefinedTypes::F_ORDERING_ROUTINE_NAME      ,null,'string(name)', ],
		MUserDefinedTypes::FJ_REFERENCE_TYPE             =>[ MUserDefinedTypes::F_REFERENCE_TYPE             ,null,'string',       ],
		MUserDefinedTypes::FJ_DATA_TYPE                  =>[ MUserDefinedTypes::F_DATA_TYPE                  ,null,'string',       ],
		MUserDefinedTypes::FJ_CHARACTER_MAXIMUM_LENGTH   =>[ MUserDefinedTypes::F_CHARACTER_MAXIMUM_LENGTH   ,null,'number',       ],
		MUserDefinedTypes::FJ_CHARACTER_OCTET_LENGTH     =>[ MUserDefinedTypes::F_CHARACTER_OCTET_LENGTH     ,null,'number',       ],
		MUserDefinedTypes::FJ_CHARACTER_SET_CATALOG      =>[ MUserDefinedTypes::F_CHARACTER_SET_CATALOG      ,null,'string(name)', ],
		MUserDefinedTypes::FJ_CHARACTER_SET_SCHEMA       =>[ MUserDefinedTypes::F_CHARACTER_SET_SCHEMA       ,null,'string(name)', ],
		MUserDefinedTypes::FJ_CHARACTER_SET_NAME         =>[ MUserDefinedTypes::F_CHARACTER_SET_NAME         ,null,'string(name)', ],
		MUserDefinedTypes::FJ_COLLATION_CATALOG          =>[ MUserDefinedTypes::F_COLLATION_CATALOG          ,null,'string(name)', ],
		MUserDefinedTypes::FJ_COLLATION_SCHEMA           =>[ MUserDefinedTypes::F_COLLATION_SCHEMA           ,null,'string(name)', ],
		MUserDefinedTypes::FJ_COLLATION_NAME             =>[ MUserDefinedTypes::F_COLLATION_NAME             ,null,'string(name)', ],
		MUserDefinedTypes::FJ_NUMERIC_PRECISION          =>[ MUserDefinedTypes::F_NUMERIC_PRECISION          ,null,'number',       ],
		MUserDefinedTypes::FJ_NUMERIC_PRECISION_RADIX    =>[ MUserDefinedTypes::F_NUMERIC_PRECISION_RADIX    ,null,'number',       ],
		MUserDefinedTypes::FJ_NUMERIC_SCALE              =>[ MUserDefinedTypes::F_NUMERIC_SCALE              ,null,'number',       ],
		MUserDefinedTypes::FJ_DATETIME_PRECISION         =>[ MUserDefinedTypes::F_DATETIME_PRECISION         ,null,'number',       ],
		MUserDefinedTypes::FJ_INTERVAL_TYPE              =>[ MUserDefinedTypes::F_INTERVAL_TYPE              ,null,'string',       ],
		MUserDefinedTypes::FJ_INTERVAL_PRECISION         =>[ MUserDefinedTypes::F_INTERVAL_PRECISION         ,null,'number',       ],
		MUserDefinedTypes::FJ_SOURCE_DTD_IDENTIFIER      =>[ MUserDefinedTypes::F_SOURCE_DTD_IDENTIFIER      ,null,'string(name)', ],
		MUserDefinedTypes::FJ_REF_DTD_IDENTIFIER         =>[ MUserDefinedTypes::F_REF_DTD_IDENTIFIER         ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_USER_DEFINED_TYPE_CATALOG,
			self::F_USER_DEFINED_TYPE_SCHEMA,
			self::F_USER_DEFINED_TYPE_NAME,
			self::F_USER_DEFINED_TYPE_CATEGORY,
			self::F_IS_INSTANTIABLE,
			self::F_IS_FINAL,
			self::F_ORDERING_FORM,
			self::F_ORDERING_CATEGORY,
			self::F_ORDERING_ROUTINE_CATALOG,
			self::F_ORDERING_ROUTINE_SCHEMA,
			self::F_ORDERING_ROUTINE_NAME,
			self::F_REFERENCE_TYPE,
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
			self::F_SOURCE_DTD_IDENTIFIER,
			self::F_REF_DTD_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

