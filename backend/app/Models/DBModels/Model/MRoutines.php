<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutines
 * Representation for db table routines.

 * @property  string(name)        specific_catalog                    [1]  type:name          
 * @property  string(name)        specific_schema                     [2]  type:name          
 * @property  string(name)        specific_name                       [3]  type:name          
 * @property  string(name)        routine_catalog                     [4]  type:name          
 * @property  string(name)        routine_schema                      [5]  type:name          
 * @property  string(name)        routine_name                        [6]  type:name          
 * @property  string              routine_type                        [7]  type:varchar       
 * @property  string(name)        module_catalog                      [8]  type:name          
 * @property  string(name)        module_schema                       [9]  type:name          
 * @property  string(name)        module_name                         [10] type:name          
 * @property  string(name)        udt_catalog                         [11] type:name          
 * @property  string(name)        udt_schema                          [12] type:name          
 * @property  string(name)        udt_name                            [13] type:name          
 * @property  string              data_type                           [14] type:varchar       
 * @property  int                 character_maximum_length            [15] type:int4          
 * @property  int                 character_octet_length              [16] type:int4          
 * @property  string(name)        character_set_catalog               [17] type:name          
 * @property  string(name)        character_set_schema                [18] type:name          
 * @property  string(name)        character_set_name                  [19] type:name          
 * @property  string(name)        collation_catalog                   [20] type:name          
 * @property  string(name)        collation_schema                    [21] type:name          
 * @property  string(name)        collation_name                      [22] type:name          
 * @property  int                 numeric_precision                   [23] type:int4          
 * @property  int                 numeric_precision_radix             [24] type:int4          
 * @property  int                 numeric_scale                       [25] type:int4          
 * @property  int                 datetime_precision                  [26] type:int4          
 * @property  string              interval_type                       [27] type:varchar       
 * @property  int                 interval_precision                  [28] type:int4          
 * @property  string(name)        type_udt_catalog                    [29] type:name          
 * @property  string(name)        type_udt_schema                     [30] type:name          
 * @property  string(name)        type_udt_name                       [31] type:name          
 * @property  string(name)        scope_catalog                       [32] type:name          
 * @property  string(name)        scope_schema                        [33] type:name          
 * @property  string(name)        scope_name                          [34] type:name          
 * @property  int                 maximum_cardinality                 [35] type:int4          
 * @property  string(name)        dtd_identifier                      [36] type:name          
 * @property  string              routine_body                        [37] type:varchar       
 * @property  string              routine_definition                  [38] type:varchar       
 * @property  string              external_name                       [39] type:varchar       
 * @property  string              external_language                   [40] type:varchar       
 * @property  string              parameter_style                     [41] type:varchar       
 * @property  string              is_deterministic                    [42] type:varchar(3)    
 * @property  string              sql_data_access                     [43] type:varchar       
 * @property  string              is_null_call                        [44] type:varchar(3)    
 * @property  string              sql_path                            [45] type:varchar       
 * @property  string              schema_level_routine                [46] type:varchar(3)    
 * @property  int                 max_dynamic_result_sets             [47] type:int4          
 * @property  string              is_user_defined_cast                [48] type:varchar(3)    
 * @property  string              is_implicitly_invocable             [49] type:varchar(3)    
 * @property  string              security_type                       [50] type:varchar       
 * @property  string(name)        to_sql_specific_catalog             [51] type:name          
 * @property  string(name)        to_sql_specific_schema              [52] type:name          
 * @property  string(name)        to_sql_specific_name                [53] type:name          
 * @property  string              as_locator                          [54] type:varchar(3)    
 * @property  string(timestamptz) created                             [55] type:timestamptz   
 * @property  string(timestamptz) last_altered                        [56] type:timestamptz   
 * @property  string              new_savepoint_level                 [57] type:varchar(3)    
 * @property  string              is_udt_dependent                    [58] type:varchar(3)    
 * @property  string              result_cast_from_data_type          [59] type:varchar       
 * @property  string              result_cast_as_locator              [60] type:varchar(3)    
 * @property  int                 result_cast_char_max_length         [61] type:int4          
 * @property  int                 result_cast_char_octet_length       [62] type:int4          
 * @property  string(name)        result_cast_char_set_catalog        [63] type:name          
 * @property  string(name)        result_cast_char_set_schema         [64] type:name          
 * @property  string(name)        result_cast_char_set_name           [65] type:name          
 * @property  string(name)        result_cast_collation_catalog       [66] type:name          
 * @property  string(name)        result_cast_collation_schema        [67] type:name          
 * @property  string(name)        result_cast_collation_name          [68] type:name          
 * @property  int                 result_cast_numeric_precision       [69] type:int4          
 * @property  int                 result_cast_numeric_precision_radix [70] type:int4          
 * @property  int                 result_cast_numeric_scale           [71] type:int4          
 * @property  int                 result_cast_datetime_precision      [72] type:int4          
 * @property  string              result_cast_interval_type           [73] type:varchar       
 * @property  int                 result_cast_interval_precision      [74] type:int4          
 * @property  string(name)        result_cast_type_udt_catalog        [75] type:name          
 * @property  string(name)        result_cast_type_udt_schema         [76] type:name          
 * @property  string(name)        result_cast_type_udt_name           [77] type:name          
 * @property  string(name)        result_cast_scope_catalog           [78] type:name          
 * @property  string(name)        result_cast_scope_schema            [79] type:name          
 * @property  string(name)        result_cast_scope_name              [80] type:name          
 * @property  int                 result_cast_maximum_cardinality     [81] type:int4          
 * @property  string(name)        result_cast_dtd_identifier          [82] type:name          
 * @package App\Models\DBModels\Model
 */
class MRoutines extends DBClass {


	const  FJ_AS_LOCATOR                          = 'asLocator';
	const  FJ_CHARACTER_MAXIMUM_LENGTH            = 'characterMaximumLength';
	const  FJ_CHARACTER_OCTET_LENGTH              = 'characterOctetLength';
	const  FJ_CHARACTER_SET_CATALOG               = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME                  = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA                = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG                   = 'collationCatalog';
	const  FJ_COLLATION_NAME                      = 'collationName';
	const  FJ_COLLATION_SCHEMA                    = 'collationSchema';
	const  FJ_CREATED                             = 'created';
	const  FJ_DATA_TYPE                           = 'dataType';
	const  FJ_DATETIME_PRECISION                  = 'datetimePrecision';
	const  FJ_DTD_IDENTIFIER                      = 'dtdIdentifier';
	const  FJ_EXTERNAL_LANGUAGE                   = 'externalLanguage';
	const  FJ_EXTERNAL_NAME                       = 'externalName';
	const  FJ_INTERVAL_PRECISION                  = 'intervalPrecision';
	const  FJ_INTERVAL_TYPE                       = 'intervalType';
	const  FJ_IS_DETERMINISTIC                    = 'isDeterministic';
	const  FJ_IS_IMPLICITLY_INVOCABLE             = 'isImplicitlyInvocable';
	const  FJ_IS_NULL_CALL                        = 'isNullCall';
	const  FJ_IS_UDT_DEPENDENT                    = 'isUdtDependent';
	const  FJ_IS_USER_DEFINED_CAST                = 'isUserDefinedCast';
	const  FJ_LAST_ALTERED                        = 'lastAltered';
	const  FJ_MAXIMUM_CARDINALITY                 = 'maximumCardinality';
	const  FJ_MAX_DYNAMIC_RESULT_SETS             = 'maxDynamicResultSets';
	const  FJ_MODULE_CATALOG                      = 'moduleCatalog';
	const  FJ_MODULE_NAME                         = 'moduleName';
	const  FJ_MODULE_SCHEMA                       = 'moduleSchema';
	const  FJ_NEW_SAVEPOINT_LEVEL                 = 'newSavepointLevel';
	const  FJ_NUMERIC_PRECISION                   = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX             = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE                       = 'numericScale';
	const  FJ_PARAMETER_STYLE                     = 'parameterStyle';
	const  FJ_RESULT_CAST_AS_LOCATOR              = 'resultCastAsLocator';
	const  FJ_RESULT_CAST_CHAR_MAX_LENGTH         = 'resultCastCharMaxLength';
	const  FJ_RESULT_CAST_CHAR_OCTET_LENGTH       = 'resultCastCharOctetLength';
	const  FJ_RESULT_CAST_CHAR_SET_CATALOG        = 'resultCastCharSetCatalog';
	const  FJ_RESULT_CAST_CHAR_SET_NAME           = 'resultCastCharSetName';
	const  FJ_RESULT_CAST_CHAR_SET_SCHEMA         = 'resultCastCharSetSchema';
	const  FJ_RESULT_CAST_COLLATION_CATALOG       = 'resultCastCollationCatalog';
	const  FJ_RESULT_CAST_COLLATION_NAME          = 'resultCastCollationName';
	const  FJ_RESULT_CAST_COLLATION_SCHEMA        = 'resultCastCollationSchema';
	const  FJ_RESULT_CAST_DATETIME_PRECISION      = 'resultCastDatetimePrecision';
	const  FJ_RESULT_CAST_DTD_IDENTIFIER          = 'resultCastDtdIdentifier';
	const  FJ_RESULT_CAST_FROM_DATA_TYPE          = 'resultCastFromDataType';
	const  FJ_RESULT_CAST_INTERVAL_PRECISION      = 'resultCastIntervalPrecision';
	const  FJ_RESULT_CAST_INTERVAL_TYPE           = 'resultCastIntervalType';
	const  FJ_RESULT_CAST_MAXIMUM_CARDINALITY     = 'resultCastMaximumCardinality';
	const  FJ_RESULT_CAST_NUMERIC_PRECISION       = 'resultCastNumericPrecision';
	const  FJ_RESULT_CAST_NUMERIC_PRECISION_RADIX = 'resultCastNumericPrecisionRadix';
	const  FJ_RESULT_CAST_NUMERIC_SCALE           = 'resultCastNumericScale';
	const  FJ_RESULT_CAST_SCOPE_CATALOG           = 'resultCastScopeCatalog';
	const  FJ_RESULT_CAST_SCOPE_NAME              = 'resultCastScopeName';
	const  FJ_RESULT_CAST_SCOPE_SCHEMA            = 'resultCastScopeSchema';
	const  FJ_RESULT_CAST_TYPE_UDT_CATALOG        = 'resultCastTypeUdtCatalog';
	const  FJ_RESULT_CAST_TYPE_UDT_NAME           = 'resultCastTypeUdtName';
	const  FJ_RESULT_CAST_TYPE_UDT_SCHEMA         = 'resultCastTypeUdtSchema';
	const  FJ_ROUTINE_BODY                        = 'routineBody';
	const  FJ_ROUTINE_CATALOG                     = 'routineCatalog';
	const  FJ_ROUTINE_DEFINITION                  = 'routineDefinition';
	const  FJ_ROUTINE_NAME                        = 'routineName';
	const  FJ_ROUTINE_SCHEMA                      = 'routineSchema';
	const  FJ_ROUTINE_TYPE                        = 'routineType';
	const  FJ_SCHEMA_LEVEL_ROUTINE                = 'schemaLevelRoutine';
	const  FJ_SCOPE_CATALOG                       = 'scopeCatalog';
	const  FJ_SCOPE_NAME                          = 'scopeName';
	const  FJ_SCOPE_SCHEMA                        = 'scopeSchema';
	const  FJ_SECURITY_TYPE                       = 'securityType';
	const  FJ_SPECIFIC_CATALOG                    = 'specificCatalog';
	const  FJ_SPECIFIC_NAME                       = 'specificName';
	const  FJ_SPECIFIC_SCHEMA                     = 'specificSchema';
	const  FJ_SQL_DATA_ACCESS                     = 'sqlDataAccess';
	const  FJ_SQL_PATH                            = 'sqlPath';
	const  FJ_TO_SQL_SPECIFIC_CATALOG             = 'toSqlSpecificCatalog';
	const  FJ_TO_SQL_SPECIFIC_NAME                = 'toSqlSpecificName';
	const  FJ_TO_SQL_SPECIFIC_SCHEMA              = 'toSqlSpecificSchema';
	const  FJ_TYPE_UDT_CATALOG                    = 'typeUdtCatalog';
	const  FJ_TYPE_UDT_NAME                       = 'typeUdtName';
	const  FJ_TYPE_UDT_SCHEMA                     = 'typeUdtSchema';
	const  FJ_UDT_CATALOG                         = 'udtCatalog';
	const  FJ_UDT_NAME                            = 'udtName';
	const  FJ_UDT_SCHEMA                          = 'udtSchema';
	const  FT_AS_LOCATOR                          = 'routines.as_locator';
	const  FT_CHARACTER_MAXIMUM_LENGTH            = 'routines.character_maximum_length';
	const  FT_CHARACTER_OCTET_LENGTH              = 'routines.character_octet_length';
	const  FT_CHARACTER_SET_CATALOG               = 'routines.character_set_catalog';
	const  FT_CHARACTER_SET_NAME                  = 'routines.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA                = 'routines.character_set_schema';
	const  FT_COLLATION_CATALOG                   = 'routines.collation_catalog';
	const  FT_COLLATION_NAME                      = 'routines.collation_name';
	const  FT_COLLATION_SCHEMA                    = 'routines.collation_schema';
	const  FT_CREATED                             = 'routines.created';
	const  FT_DATA_TYPE                           = 'routines.data_type';
	const  FT_DATETIME_PRECISION                  = 'routines.datetime_precision';
	const  FT_DTD_IDENTIFIER                      = 'routines.dtd_identifier';
	const  FT_EXTERNAL_LANGUAGE                   = 'routines.external_language';
	const  FT_EXTERNAL_NAME                       = 'routines.external_name';
	const  FT_INTERVAL_PRECISION                  = 'routines.interval_precision';
	const  FT_INTERVAL_TYPE                       = 'routines.interval_type';
	const  FT_IS_DETERMINISTIC                    = 'routines.is_deterministic';
	const  FT_IS_IMPLICITLY_INVOCABLE             = 'routines.is_implicitly_invocable';
	const  FT_IS_NULL_CALL                        = 'routines.is_null_call';
	const  FT_IS_UDT_DEPENDENT                    = 'routines.is_udt_dependent';
	const  FT_IS_USER_DEFINED_CAST                = 'routines.is_user_defined_cast';
	const  FT_LAST_ALTERED                        = 'routines.last_altered';
	const  FT_MAXIMUM_CARDINALITY                 = 'routines.maximum_cardinality';
	const  FT_MAX_DYNAMIC_RESULT_SETS             = 'routines.max_dynamic_result_sets';
	const  FT_MODULE_CATALOG                      = 'routines.module_catalog';
	const  FT_MODULE_NAME                         = 'routines.module_name';
	const  FT_MODULE_SCHEMA                       = 'routines.module_schema';
	const  FT_NEW_SAVEPOINT_LEVEL                 = 'routines.new_savepoint_level';
	const  FT_NUMERIC_PRECISION                   = 'routines.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX             = 'routines.numeric_precision_radix';
	const  FT_NUMERIC_SCALE                       = 'routines.numeric_scale';
	const  FT_PARAMETER_STYLE                     = 'routines.parameter_style';
	const  FT_RESULT_CAST_AS_LOCATOR              = 'routines.result_cast_as_locator';
	const  FT_RESULT_CAST_CHAR_MAX_LENGTH         = 'routines.result_cast_char_max_length';
	const  FT_RESULT_CAST_CHAR_OCTET_LENGTH       = 'routines.result_cast_char_octet_length';
	const  FT_RESULT_CAST_CHAR_SET_CATALOG        = 'routines.result_cast_char_set_catalog';
	const  FT_RESULT_CAST_CHAR_SET_NAME           = 'routines.result_cast_char_set_name';
	const  FT_RESULT_CAST_CHAR_SET_SCHEMA         = 'routines.result_cast_char_set_schema';
	const  FT_RESULT_CAST_COLLATION_CATALOG       = 'routines.result_cast_collation_catalog';
	const  FT_RESULT_CAST_COLLATION_NAME          = 'routines.result_cast_collation_name';
	const  FT_RESULT_CAST_COLLATION_SCHEMA        = 'routines.result_cast_collation_schema';
	const  FT_RESULT_CAST_DATETIME_PRECISION      = 'routines.result_cast_datetime_precision';
	const  FT_RESULT_CAST_DTD_IDENTIFIER          = 'routines.result_cast_dtd_identifier';
	const  FT_RESULT_CAST_FROM_DATA_TYPE          = 'routines.result_cast_from_data_type';
	const  FT_RESULT_CAST_INTERVAL_PRECISION      = 'routines.result_cast_interval_precision';
	const  FT_RESULT_CAST_INTERVAL_TYPE           = 'routines.result_cast_interval_type';
	const  FT_RESULT_CAST_MAXIMUM_CARDINALITY     = 'routines.result_cast_maximum_cardinality';
	const  FT_RESULT_CAST_NUMERIC_PRECISION       = 'routines.result_cast_numeric_precision';
	const  FT_RESULT_CAST_NUMERIC_PRECISION_RADIX = 'routines.result_cast_numeric_precision_radix';
	const  FT_RESULT_CAST_NUMERIC_SCALE           = 'routines.result_cast_numeric_scale';
	const  FT_RESULT_CAST_SCOPE_CATALOG           = 'routines.result_cast_scope_catalog';
	const  FT_RESULT_CAST_SCOPE_NAME              = 'routines.result_cast_scope_name';
	const  FT_RESULT_CAST_SCOPE_SCHEMA            = 'routines.result_cast_scope_schema';
	const  FT_RESULT_CAST_TYPE_UDT_CATALOG        = 'routines.result_cast_type_udt_catalog';
	const  FT_RESULT_CAST_TYPE_UDT_NAME           = 'routines.result_cast_type_udt_name';
	const  FT_RESULT_CAST_TYPE_UDT_SCHEMA         = 'routines.result_cast_type_udt_schema';
	const  FT_ROUTINE_BODY                        = 'routines.routine_body';
	const  FT_ROUTINE_CATALOG                     = 'routines.routine_catalog';
	const  FT_ROUTINE_DEFINITION                  = 'routines.routine_definition';
	const  FT_ROUTINE_NAME                        = 'routines.routine_name';
	const  FT_ROUTINE_SCHEMA                      = 'routines.routine_schema';
	const  FT_ROUTINE_TYPE                        = 'routines.routine_type';
	const  FT_SCHEMA_LEVEL_ROUTINE                = 'routines.schema_level_routine';
	const  FT_SCOPE_CATALOG                       = 'routines.scope_catalog';
	const  FT_SCOPE_NAME                          = 'routines.scope_name';
	const  FT_SCOPE_SCHEMA                        = 'routines.scope_schema';
	const  FT_SECURITY_TYPE                       = 'routines.security_type';
	const  FT_SPECIFIC_CATALOG                    = 'routines.specific_catalog';
	const  FT_SPECIFIC_NAME                       = 'routines.specific_name';
	const  FT_SPECIFIC_SCHEMA                     = 'routines.specific_schema';
	const  FT_SQL_DATA_ACCESS                     = 'routines.sql_data_access';
	const  FT_SQL_PATH                            = 'routines.sql_path';
	const  FT_TO_SQL_SPECIFIC_CATALOG             = 'routines.to_sql_specific_catalog';
	const  FT_TO_SQL_SPECIFIC_NAME                = 'routines.to_sql_specific_name';
	const  FT_TO_SQL_SPECIFIC_SCHEMA              = 'routines.to_sql_specific_schema';
	const  FT_TYPE_UDT_CATALOG                    = 'routines.type_udt_catalog';
	const  FT_TYPE_UDT_NAME                       = 'routines.type_udt_name';
	const  FT_TYPE_UDT_SCHEMA                     = 'routines.type_udt_schema';
	const  FT_UDT_CATALOG                         = 'routines.udt_catalog';
	const  FT_UDT_NAME                            = 'routines.udt_name';
	const  FT_UDT_SCHEMA                          = 'routines.udt_schema';
	const  F_AS_LOCATOR                           = 'as_locator';
	const  F_CHARACTER_MAXIMUM_LENGTH             = 'character_maximum_length';
	const  F_CHARACTER_OCTET_LENGTH               = 'character_octet_length';
	const  F_CHARACTER_SET_CATALOG                = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME                   = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA                 = 'character_set_schema';
	const  F_COLLATION_CATALOG                    = 'collation_catalog';
	const  F_COLLATION_NAME                       = 'collation_name';
	const  F_COLLATION_SCHEMA                     = 'collation_schema';
	const  F_CREATED                              = 'created';
	const  F_DATA_TYPE                            = 'data_type';
	const  F_DATETIME_PRECISION                   = 'datetime_precision';
	const  F_DTD_IDENTIFIER                       = 'dtd_identifier';
	const  F_EXTERNAL_LANGUAGE                    = 'external_language';
	const  F_EXTERNAL_NAME                        = 'external_name';
	const  F_INTERVAL_PRECISION                   = 'interval_precision';
	const  F_INTERVAL_TYPE                        = 'interval_type';
	const  F_IS_DETERMINISTIC                     = 'is_deterministic';
	const  F_IS_IMPLICITLY_INVOCABLE              = 'is_implicitly_invocable';
	const  F_IS_NULL_CALL                         = 'is_null_call';
	const  F_IS_UDT_DEPENDENT                     = 'is_udt_dependent';
	const  F_IS_USER_DEFINED_CAST                 = 'is_user_defined_cast';
	const  F_LAST_ALTERED                         = 'last_altered';
	const  F_MAXIMUM_CARDINALITY                  = 'maximum_cardinality';
	const  F_MAX_DYNAMIC_RESULT_SETS              = 'max_dynamic_result_sets';
	const  F_MODULE_CATALOG                       = 'module_catalog';
	const  F_MODULE_NAME                          = 'module_name';
	const  F_MODULE_SCHEMA                        = 'module_schema';
	const  F_NEW_SAVEPOINT_LEVEL                  = 'new_savepoint_level';
	const  F_NUMERIC_PRECISION                    = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX              = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE                        = 'numeric_scale';
	const  F_PARAMETER_STYLE                      = 'parameter_style';
	const  F_RESULT_CAST_AS_LOCATOR               = 'result_cast_as_locator';
	const  F_RESULT_CAST_CHAR_MAX_LENGTH          = 'result_cast_char_max_length';
	const  F_RESULT_CAST_CHAR_OCTET_LENGTH        = 'result_cast_char_octet_length';
	const  F_RESULT_CAST_CHAR_SET_CATALOG         = 'result_cast_char_set_catalog';
	const  F_RESULT_CAST_CHAR_SET_NAME            = 'result_cast_char_set_name';
	const  F_RESULT_CAST_CHAR_SET_SCHEMA          = 'result_cast_char_set_schema';
	const  F_RESULT_CAST_COLLATION_CATALOG        = 'result_cast_collation_catalog';
	const  F_RESULT_CAST_COLLATION_NAME           = 'result_cast_collation_name';
	const  F_RESULT_CAST_COLLATION_SCHEMA         = 'result_cast_collation_schema';
	const  F_RESULT_CAST_DATETIME_PRECISION       = 'result_cast_datetime_precision';
	const  F_RESULT_CAST_DTD_IDENTIFIER           = 'result_cast_dtd_identifier';
	const  F_RESULT_CAST_FROM_DATA_TYPE           = 'result_cast_from_data_type';
	const  F_RESULT_CAST_INTERVAL_PRECISION       = 'result_cast_interval_precision';
	const  F_RESULT_CAST_INTERVAL_TYPE            = 'result_cast_interval_type';
	const  F_RESULT_CAST_MAXIMUM_CARDINALITY      = 'result_cast_maximum_cardinality';
	const  F_RESULT_CAST_NUMERIC_PRECISION        = 'result_cast_numeric_precision';
	const  F_RESULT_CAST_NUMERIC_PRECISION_RADIX  = 'result_cast_numeric_precision_radix';
	const  F_RESULT_CAST_NUMERIC_SCALE            = 'result_cast_numeric_scale';
	const  F_RESULT_CAST_SCOPE_CATALOG            = 'result_cast_scope_catalog';
	const  F_RESULT_CAST_SCOPE_NAME               = 'result_cast_scope_name';
	const  F_RESULT_CAST_SCOPE_SCHEMA             = 'result_cast_scope_schema';
	const  F_RESULT_CAST_TYPE_UDT_CATALOG         = 'result_cast_type_udt_catalog';
	const  F_RESULT_CAST_TYPE_UDT_NAME            = 'result_cast_type_udt_name';
	const  F_RESULT_CAST_TYPE_UDT_SCHEMA          = 'result_cast_type_udt_schema';
	const  F_ROUTINE_BODY                         = 'routine_body';
	const  F_ROUTINE_CATALOG                      = 'routine_catalog';
	const  F_ROUTINE_DEFINITION                   = 'routine_definition';
	const  F_ROUTINE_NAME                         = 'routine_name';
	const  F_ROUTINE_SCHEMA                       = 'routine_schema';
	const  F_ROUTINE_TYPE                         = 'routine_type';
	const  F_SCHEMA_LEVEL_ROUTINE                 = 'schema_level_routine';
	const  F_SCOPE_CATALOG                        = 'scope_catalog';
	const  F_SCOPE_NAME                           = 'scope_name';
	const  F_SCOPE_SCHEMA                         = 'scope_schema';
	const  F_SECURITY_TYPE                        = 'security_type';
	const  F_SPECIFIC_CATALOG                     = 'specific_catalog';
	const  F_SPECIFIC_NAME                        = 'specific_name';
	const  F_SPECIFIC_SCHEMA                      = 'specific_schema';
	const  F_SQL_DATA_ACCESS                      = 'sql_data_access';
	const  F_SQL_PATH                             = 'sql_path';
	const  F_TO_SQL_SPECIFIC_CATALOG              = 'to_sql_specific_catalog';
	const  F_TO_SQL_SPECIFIC_NAME                 = 'to_sql_specific_name';
	const  F_TO_SQL_SPECIFIC_SCHEMA               = 'to_sql_specific_schema';
	const  F_TYPE_UDT_CATALOG                     = 'type_udt_catalog';
	const  F_TYPE_UDT_NAME                        = 'type_udt_name';
	const  F_TYPE_UDT_SCHEMA                      = 'type_udt_schema';
	const  F_UDT_CATALOG                          = 'udt_catalog';
	const  F_UDT_NAME                             = 'udt_name';
	const  F_UDT_SCHEMA                           = 'udt_schema';

    protected $table = 'routines';

	public static array $jsonable = [
		MRoutines::FJ_SPECIFIC_CATALOG                    =>[ MRoutines::F_SPECIFIC_CATALOG                    ,null,'string(name)',        ],
		MRoutines::FJ_SPECIFIC_SCHEMA                     =>[ MRoutines::F_SPECIFIC_SCHEMA                     ,null,'string(name)',        ],
		MRoutines::FJ_SPECIFIC_NAME                       =>[ MRoutines::F_SPECIFIC_NAME                       ,null,'string(name)',        ],
		MRoutines::FJ_ROUTINE_CATALOG                     =>[ MRoutines::F_ROUTINE_CATALOG                     ,null,'string(name)',        ],
		MRoutines::FJ_ROUTINE_SCHEMA                      =>[ MRoutines::F_ROUTINE_SCHEMA                      ,null,'string(name)',        ],
		MRoutines::FJ_ROUTINE_NAME                        =>[ MRoutines::F_ROUTINE_NAME                        ,null,'string(name)',        ],
		MRoutines::FJ_ROUTINE_TYPE                        =>[ MRoutines::F_ROUTINE_TYPE                        ,null,'string',              ],
		MRoutines::FJ_MODULE_CATALOG                      =>[ MRoutines::F_MODULE_CATALOG                      ,null,'string(name)',        ],
		MRoutines::FJ_MODULE_SCHEMA                       =>[ MRoutines::F_MODULE_SCHEMA                       ,null,'string(name)',        ],
		MRoutines::FJ_MODULE_NAME                         =>[ MRoutines::F_MODULE_NAME                         ,null,'string(name)',        ],
		MRoutines::FJ_UDT_CATALOG                         =>[ MRoutines::F_UDT_CATALOG                         ,null,'string(name)',        ],
		MRoutines::FJ_UDT_SCHEMA                          =>[ MRoutines::F_UDT_SCHEMA                          ,null,'string(name)',        ],
		MRoutines::FJ_UDT_NAME                            =>[ MRoutines::F_UDT_NAME                            ,null,'string(name)',        ],
		MRoutines::FJ_DATA_TYPE                           =>[ MRoutines::F_DATA_TYPE                           ,null,'string',              ],
		MRoutines::FJ_CHARACTER_MAXIMUM_LENGTH            =>[ MRoutines::F_CHARACTER_MAXIMUM_LENGTH            ,null,'number',              ],
		MRoutines::FJ_CHARACTER_OCTET_LENGTH              =>[ MRoutines::F_CHARACTER_OCTET_LENGTH              ,null,'number',              ],
		MRoutines::FJ_CHARACTER_SET_CATALOG               =>[ MRoutines::F_CHARACTER_SET_CATALOG               ,null,'string(name)',        ],
		MRoutines::FJ_CHARACTER_SET_SCHEMA                =>[ MRoutines::F_CHARACTER_SET_SCHEMA                ,null,'string(name)',        ],
		MRoutines::FJ_CHARACTER_SET_NAME                  =>[ MRoutines::F_CHARACTER_SET_NAME                  ,null,'string(name)',        ],
		MRoutines::FJ_COLLATION_CATALOG                   =>[ MRoutines::F_COLLATION_CATALOG                   ,null,'string(name)',        ],
		MRoutines::FJ_COLLATION_SCHEMA                    =>[ MRoutines::F_COLLATION_SCHEMA                    ,null,'string(name)',        ],
		MRoutines::FJ_COLLATION_NAME                      =>[ MRoutines::F_COLLATION_NAME                      ,null,'string(name)',        ],
		MRoutines::FJ_NUMERIC_PRECISION                   =>[ MRoutines::F_NUMERIC_PRECISION                   ,null,'number',              ],
		MRoutines::FJ_NUMERIC_PRECISION_RADIX             =>[ MRoutines::F_NUMERIC_PRECISION_RADIX             ,null,'number',              ],
		MRoutines::FJ_NUMERIC_SCALE                       =>[ MRoutines::F_NUMERIC_SCALE                       ,null,'number',              ],
		MRoutines::FJ_DATETIME_PRECISION                  =>[ MRoutines::F_DATETIME_PRECISION                  ,null,'number',              ],
		MRoutines::FJ_INTERVAL_TYPE                       =>[ MRoutines::F_INTERVAL_TYPE                       ,null,'string',              ],
		MRoutines::FJ_INTERVAL_PRECISION                  =>[ MRoutines::F_INTERVAL_PRECISION                  ,null,'number',              ],
		MRoutines::FJ_TYPE_UDT_CATALOG                    =>[ MRoutines::F_TYPE_UDT_CATALOG                    ,null,'string(name)',        ],
		MRoutines::FJ_TYPE_UDT_SCHEMA                     =>[ MRoutines::F_TYPE_UDT_SCHEMA                     ,null,'string(name)',        ],
		MRoutines::FJ_TYPE_UDT_NAME                       =>[ MRoutines::F_TYPE_UDT_NAME                       ,null,'string(name)',        ],
		MRoutines::FJ_SCOPE_CATALOG                       =>[ MRoutines::F_SCOPE_CATALOG                       ,null,'string(name)',        ],
		MRoutines::FJ_SCOPE_SCHEMA                        =>[ MRoutines::F_SCOPE_SCHEMA                        ,null,'string(name)',        ],
		MRoutines::FJ_SCOPE_NAME                          =>[ MRoutines::F_SCOPE_NAME                          ,null,'string(name)',        ],
		MRoutines::FJ_MAXIMUM_CARDINALITY                 =>[ MRoutines::F_MAXIMUM_CARDINALITY                 ,null,'number',              ],
		MRoutines::FJ_DTD_IDENTIFIER                      =>[ MRoutines::F_DTD_IDENTIFIER                      ,null,'string(name)',        ],
		MRoutines::FJ_ROUTINE_BODY                        =>[ MRoutines::F_ROUTINE_BODY                        ,null,'string',              ],
		MRoutines::FJ_ROUTINE_DEFINITION                  =>[ MRoutines::F_ROUTINE_DEFINITION                  ,null,'string',              ],
		MRoutines::FJ_EXTERNAL_NAME                       =>[ MRoutines::F_EXTERNAL_NAME                       ,null,'string',              ],
		MRoutines::FJ_EXTERNAL_LANGUAGE                   =>[ MRoutines::F_EXTERNAL_LANGUAGE                   ,null,'string',              ],
		MRoutines::FJ_PARAMETER_STYLE                     =>[ MRoutines::F_PARAMETER_STYLE                     ,null,'string',              ],
		MRoutines::FJ_IS_DETERMINISTIC                    =>[ MRoutines::F_IS_DETERMINISTIC                    ,null,'string',              ],
		MRoutines::FJ_SQL_DATA_ACCESS                     =>[ MRoutines::F_SQL_DATA_ACCESS                     ,null,'string',              ],
		MRoutines::FJ_IS_NULL_CALL                        =>[ MRoutines::F_IS_NULL_CALL                        ,null,'string',              ],
		MRoutines::FJ_SQL_PATH                            =>[ MRoutines::F_SQL_PATH                            ,null,'string',              ],
		MRoutines::FJ_SCHEMA_LEVEL_ROUTINE                =>[ MRoutines::F_SCHEMA_LEVEL_ROUTINE                ,null,'string',              ],
		MRoutines::FJ_MAX_DYNAMIC_RESULT_SETS             =>[ MRoutines::F_MAX_DYNAMIC_RESULT_SETS             ,null,'number',              ],
		MRoutines::FJ_IS_USER_DEFINED_CAST                =>[ MRoutines::F_IS_USER_DEFINED_CAST                ,null,'string',              ],
		MRoutines::FJ_IS_IMPLICITLY_INVOCABLE             =>[ MRoutines::F_IS_IMPLICITLY_INVOCABLE             ,null,'string',              ],
		MRoutines::FJ_SECURITY_TYPE                       =>[ MRoutines::F_SECURITY_TYPE                       ,null,'string',              ],
		MRoutines::FJ_TO_SQL_SPECIFIC_CATALOG             =>[ MRoutines::F_TO_SQL_SPECIFIC_CATALOG             ,null,'string(name)',        ],
		MRoutines::FJ_TO_SQL_SPECIFIC_SCHEMA              =>[ MRoutines::F_TO_SQL_SPECIFIC_SCHEMA              ,null,'string(name)',        ],
		MRoutines::FJ_TO_SQL_SPECIFIC_NAME                =>[ MRoutines::F_TO_SQL_SPECIFIC_NAME                ,null,'string(name)',        ],
		MRoutines::FJ_AS_LOCATOR                          =>[ MRoutines::F_AS_LOCATOR                          ,null,'string',              ],
		MRoutines::FJ_CREATED                             =>[ MRoutines::F_CREATED                             ,null,'string(timestamptz)', ],
		MRoutines::FJ_LAST_ALTERED                        =>[ MRoutines::F_LAST_ALTERED                        ,null,'string(timestamptz)', ],
		MRoutines::FJ_NEW_SAVEPOINT_LEVEL                 =>[ MRoutines::F_NEW_SAVEPOINT_LEVEL                 ,null,'string',              ],
		MRoutines::FJ_IS_UDT_DEPENDENT                    =>[ MRoutines::F_IS_UDT_DEPENDENT                    ,null,'string',              ],
		MRoutines::FJ_RESULT_CAST_FROM_DATA_TYPE          =>[ MRoutines::F_RESULT_CAST_FROM_DATA_TYPE          ,null,'string',              ],
		MRoutines::FJ_RESULT_CAST_AS_LOCATOR              =>[ MRoutines::F_RESULT_CAST_AS_LOCATOR              ,null,'string',              ],
		MRoutines::FJ_RESULT_CAST_CHAR_MAX_LENGTH         =>[ MRoutines::F_RESULT_CAST_CHAR_MAX_LENGTH         ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_CHAR_OCTET_LENGTH       =>[ MRoutines::F_RESULT_CAST_CHAR_OCTET_LENGTH       ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_CHAR_SET_CATALOG        =>[ MRoutines::F_RESULT_CAST_CHAR_SET_CATALOG        ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_CHAR_SET_SCHEMA         =>[ MRoutines::F_RESULT_CAST_CHAR_SET_SCHEMA         ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_CHAR_SET_NAME           =>[ MRoutines::F_RESULT_CAST_CHAR_SET_NAME           ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_COLLATION_CATALOG       =>[ MRoutines::F_RESULT_CAST_COLLATION_CATALOG       ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_COLLATION_SCHEMA        =>[ MRoutines::F_RESULT_CAST_COLLATION_SCHEMA        ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_COLLATION_NAME          =>[ MRoutines::F_RESULT_CAST_COLLATION_NAME          ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_NUMERIC_PRECISION       =>[ MRoutines::F_RESULT_CAST_NUMERIC_PRECISION       ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_NUMERIC_PRECISION_RADIX =>[ MRoutines::F_RESULT_CAST_NUMERIC_PRECISION_RADIX ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_NUMERIC_SCALE           =>[ MRoutines::F_RESULT_CAST_NUMERIC_SCALE           ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_DATETIME_PRECISION      =>[ MRoutines::F_RESULT_CAST_DATETIME_PRECISION      ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_INTERVAL_TYPE           =>[ MRoutines::F_RESULT_CAST_INTERVAL_TYPE           ,null,'string',              ],
		MRoutines::FJ_RESULT_CAST_INTERVAL_PRECISION      =>[ MRoutines::F_RESULT_CAST_INTERVAL_PRECISION      ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_TYPE_UDT_CATALOG        =>[ MRoutines::F_RESULT_CAST_TYPE_UDT_CATALOG        ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_TYPE_UDT_SCHEMA         =>[ MRoutines::F_RESULT_CAST_TYPE_UDT_SCHEMA         ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_TYPE_UDT_NAME           =>[ MRoutines::F_RESULT_CAST_TYPE_UDT_NAME           ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_SCOPE_CATALOG           =>[ MRoutines::F_RESULT_CAST_SCOPE_CATALOG           ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_SCOPE_SCHEMA            =>[ MRoutines::F_RESULT_CAST_SCOPE_SCHEMA            ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_SCOPE_NAME              =>[ MRoutines::F_RESULT_CAST_SCOPE_NAME              ,null,'string(name)',        ],
		MRoutines::FJ_RESULT_CAST_MAXIMUM_CARDINALITY     =>[ MRoutines::F_RESULT_CAST_MAXIMUM_CARDINALITY     ,null,'number',              ],
		MRoutines::FJ_RESULT_CAST_DTD_IDENTIFIER          =>[ MRoutines::F_RESULT_CAST_DTD_IDENTIFIER          ,null,'string(name)',        ],
	];

		protected $visible = [
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ROUTINE_CATALOG,
			self::F_ROUTINE_SCHEMA,
			self::F_ROUTINE_NAME,
			self::F_ROUTINE_TYPE,
			self::F_MODULE_CATALOG,
			self::F_MODULE_SCHEMA,
			self::F_MODULE_NAME,
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
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
			self::F_TYPE_UDT_CATALOG,
			self::F_TYPE_UDT_SCHEMA,
			self::F_TYPE_UDT_NAME,
			self::F_SCOPE_CATALOG,
			self::F_SCOPE_SCHEMA,
			self::F_SCOPE_NAME,
			self::F_MAXIMUM_CARDINALITY,
			self::F_DTD_IDENTIFIER,
			self::F_ROUTINE_BODY,
			self::F_ROUTINE_DEFINITION,
			self::F_EXTERNAL_NAME,
			self::F_EXTERNAL_LANGUAGE,
			self::F_PARAMETER_STYLE,
			self::F_IS_DETERMINISTIC,
			self::F_SQL_DATA_ACCESS,
			self::F_IS_NULL_CALL,
			self::F_SQL_PATH,
			self::F_SCHEMA_LEVEL_ROUTINE,
			self::F_MAX_DYNAMIC_RESULT_SETS,
			self::F_IS_USER_DEFINED_CAST,
			self::F_IS_IMPLICITLY_INVOCABLE,
			self::F_SECURITY_TYPE,
			self::F_TO_SQL_SPECIFIC_CATALOG,
			self::F_TO_SQL_SPECIFIC_SCHEMA,
			self::F_TO_SQL_SPECIFIC_NAME,
			self::F_AS_LOCATOR,
			self::F_CREATED,
			self::F_LAST_ALTERED,
			self::F_NEW_SAVEPOINT_LEVEL,
			self::F_IS_UDT_DEPENDENT,
			self::F_RESULT_CAST_FROM_DATA_TYPE,
			self::F_RESULT_CAST_AS_LOCATOR,
			self::F_RESULT_CAST_CHAR_MAX_LENGTH,
			self::F_RESULT_CAST_CHAR_OCTET_LENGTH,
			self::F_RESULT_CAST_CHAR_SET_CATALOG,
			self::F_RESULT_CAST_CHAR_SET_SCHEMA,
			self::F_RESULT_CAST_CHAR_SET_NAME,
			self::F_RESULT_CAST_COLLATION_CATALOG,
			self::F_RESULT_CAST_COLLATION_SCHEMA,
			self::F_RESULT_CAST_COLLATION_NAME,
			self::F_RESULT_CAST_NUMERIC_PRECISION,
			self::F_RESULT_CAST_NUMERIC_PRECISION_RADIX,
			self::F_RESULT_CAST_NUMERIC_SCALE,
			self::F_RESULT_CAST_DATETIME_PRECISION,
			self::F_RESULT_CAST_INTERVAL_TYPE,
			self::F_RESULT_CAST_INTERVAL_PRECISION,
			self::F_RESULT_CAST_TYPE_UDT_CATALOG,
			self::F_RESULT_CAST_TYPE_UDT_SCHEMA,
			self::F_RESULT_CAST_TYPE_UDT_NAME,
			self::F_RESULT_CAST_SCOPE_CATALOG,
			self::F_RESULT_CAST_SCOPE_SCHEMA,
			self::F_RESULT_CAST_SCOPE_NAME,
			self::F_RESULT_CAST_MAXIMUM_CARDINALITY,
			self::F_RESULT_CAST_DTD_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

