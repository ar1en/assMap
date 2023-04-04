<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MSequences
 * Representation for db table sequences.

 * @property  string(name) sequence_catalog        [1]  type:name         
 * @property  string(name) sequence_schema         [2]  type:name         
 * @property  string(name) sequence_name           [3]  type:name         
 * @property  string       data_type               [4]  type:varchar      
 * @property  int          numeric_precision       [5]  type:int4         
 * @property  int          numeric_precision_radix [6]  type:int4         
 * @property  int          numeric_scale           [7]  type:int4         
 * @property  string       start_value             [8]  type:varchar      
 * @property  string       minimum_value           [9]  type:varchar      
 * @property  string       maximum_value           [10] type:varchar      
 * @property  string       increment               [11] type:varchar      
 * @property  string       cycle_option            [12] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MSequences extends DBClass {


	const  FJ_CYCLE_OPTION            = 'cycleOption';
	const  FJ_DATA_TYPE               = 'dataType';
	const  FJ_INCREMENT               = 'increment';
	const  FJ_MAXIMUM_VALUE           = 'maximumValue';
	const  FJ_MINIMUM_VALUE           = 'minimumValue';
	const  FJ_NUMERIC_PRECISION       = 'numericPrecision';
	const  FJ_NUMERIC_PRECISION_RADIX = 'numericPrecisionRadix';
	const  FJ_NUMERIC_SCALE           = 'numericScale';
	const  FJ_SEQUENCE_CATALOG        = 'sequenceCatalog';
	const  FJ_SEQUENCE_NAME           = 'sequenceName';
	const  FJ_SEQUENCE_SCHEMA         = 'sequenceSchema';
	const  FJ_START_VALUE             = 'startValue';
	const  FT_CYCLE_OPTION            = 'sequences.cycle_option';
	const  FT_DATA_TYPE               = 'sequences.data_type';
	const  FT_INCREMENT               = 'sequences.increment';
	const  FT_MAXIMUM_VALUE           = 'sequences.maximum_value';
	const  FT_MINIMUM_VALUE           = 'sequences.minimum_value';
	const  FT_NUMERIC_PRECISION       = 'sequences.numeric_precision';
	const  FT_NUMERIC_PRECISION_RADIX = 'sequences.numeric_precision_radix';
	const  FT_NUMERIC_SCALE           = 'sequences.numeric_scale';
	const  FT_SEQUENCE_CATALOG        = 'sequences.sequence_catalog';
	const  FT_SEQUENCE_NAME           = 'sequences.sequence_name';
	const  FT_SEQUENCE_SCHEMA         = 'sequences.sequence_schema';
	const  FT_START_VALUE             = 'sequences.start_value';
	const  F_CYCLE_OPTION             = 'cycle_option';
	const  F_DATA_TYPE                = 'data_type';
	const  F_INCREMENT                = 'increment';
	const  F_MAXIMUM_VALUE            = 'maximum_value';
	const  F_MINIMUM_VALUE            = 'minimum_value';
	const  F_NUMERIC_PRECISION        = 'numeric_precision';
	const  F_NUMERIC_PRECISION_RADIX  = 'numeric_precision_radix';
	const  F_NUMERIC_SCALE            = 'numeric_scale';
	const  F_SEQUENCE_CATALOG         = 'sequence_catalog';
	const  F_SEQUENCE_NAME            = 'sequence_name';
	const  F_SEQUENCE_SCHEMA          = 'sequence_schema';
	const  F_START_VALUE              = 'start_value';

    protected $table = 'sequences';

	public static array $jsonable = [
		MSequences::FJ_SEQUENCE_CATALOG        =>[ MSequences::F_SEQUENCE_CATALOG        ,null,'string(name)', ],
		MSequences::FJ_SEQUENCE_SCHEMA         =>[ MSequences::F_SEQUENCE_SCHEMA         ,null,'string(name)', ],
		MSequences::FJ_SEQUENCE_NAME           =>[ MSequences::F_SEQUENCE_NAME           ,null,'string(name)', ],
		MSequences::FJ_DATA_TYPE               =>[ MSequences::F_DATA_TYPE               ,null,'string',       ],
		MSequences::FJ_NUMERIC_PRECISION       =>[ MSequences::F_NUMERIC_PRECISION       ,null,'number',       ],
		MSequences::FJ_NUMERIC_PRECISION_RADIX =>[ MSequences::F_NUMERIC_PRECISION_RADIX ,null,'number',       ],
		MSequences::FJ_NUMERIC_SCALE           =>[ MSequences::F_NUMERIC_SCALE           ,null,'number',       ],
		MSequences::FJ_START_VALUE             =>[ MSequences::F_START_VALUE             ,null,'string',       ],
		MSequences::FJ_MINIMUM_VALUE           =>[ MSequences::F_MINIMUM_VALUE           ,null,'string',       ],
		MSequences::FJ_MAXIMUM_VALUE           =>[ MSequences::F_MAXIMUM_VALUE           ,null,'string',       ],
		MSequences::FJ_INCREMENT               =>[ MSequences::F_INCREMENT               ,null,'string',       ],
		MSequences::FJ_CYCLE_OPTION            =>[ MSequences::F_CYCLE_OPTION            ,null,'string',       ],
	];

		protected $visible = [
			self::F_SEQUENCE_CATALOG,
			self::F_SEQUENCE_SCHEMA,
			self::F_SEQUENCE_NAME,
			self::F_DATA_TYPE,
			self::F_NUMERIC_PRECISION,
			self::F_NUMERIC_PRECISION_RADIX,
			self::F_NUMERIC_SCALE,
			self::F_START_VALUE,
			self::F_MINIMUM_VALUE,
			self::F_MAXIMUM_VALUE,
			self::F_INCREMENT,
			self::F_CYCLE_OPTION,
		]; 

		protected $fillable = [
		];





}

