<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgSequences
 * Representation for db table pg_sequences.

 * @property  string(name)    schemaname    [1]  type:name      
 * @property  string(name)    sequencename  [2]  type:name      
 * @property  string(name)    sequenceowner [3]  type:name      
 * @property  string(regtype) data_type     [4]  type:regtype   
 * @property  int             start_value   [5]  type:int8      
 * @property  int             min_value     [6]  type:int8      
 * @property  int             max_value     [7]  type:int8      
 * @property  int             increment_by  [8]  type:int8      
 * @property  boolean         cycle         [9]  type:bool      
 * @property  int             cache_size    [10] type:int8      
 * @property  int             last_value    [11] type:int8      
 * @package App\Models\DBModels\Model
 */
class MPgSequences extends DBClass {


	const  FJ_CACHE_SIZE    = 'cacheSize';
	const  FJ_CYCLE         = 'cycle';
	const  FJ_DATA_TYPE     = 'dataType';
	const  FJ_INCREMENT_BY  = 'incrementBy';
	const  FJ_LAST_VALUE    = 'lastValue';
	const  FJ_MAX_VALUE     = 'maxValue';
	const  FJ_MIN_VALUE     = 'minValue';
	const  FJ_SCHEMANAME    = 'schemaname';
	const  FJ_SEQUENCENAME  = 'sequencename';
	const  FJ_SEQUENCEOWNER = 'sequenceowner';
	const  FJ_START_VALUE   = 'startValue';
	const  FT_CACHE_SIZE    = 'pg_sequences.cache_size';
	const  FT_CYCLE         = 'pg_sequences.cycle';
	const  FT_DATA_TYPE     = 'pg_sequences.data_type';
	const  FT_INCREMENT_BY  = 'pg_sequences.increment_by';
	const  FT_LAST_VALUE    = 'pg_sequences.last_value';
	const  FT_MAX_VALUE     = 'pg_sequences.max_value';
	const  FT_MIN_VALUE     = 'pg_sequences.min_value';
	const  FT_SCHEMANAME    = 'pg_sequences.schemaname';
	const  FT_SEQUENCENAME  = 'pg_sequences.sequencename';
	const  FT_SEQUENCEOWNER = 'pg_sequences.sequenceowner';
	const  FT_START_VALUE   = 'pg_sequences.start_value';
	const  F_CACHE_SIZE     = 'cache_size';
	const  F_CYCLE          = 'cycle';
	const  F_DATA_TYPE      = 'data_type';
	const  F_INCREMENT_BY   = 'increment_by';
	const  F_LAST_VALUE     = 'last_value';
	const  F_MAX_VALUE      = 'max_value';
	const  F_MIN_VALUE      = 'min_value';
	const  F_SCHEMANAME     = 'schemaname';
	const  F_SEQUENCENAME   = 'sequencename';
	const  F_SEQUENCEOWNER  = 'sequenceowner';
	const  F_START_VALUE    = 'start_value';

    protected $table = 'pg_sequences';

	public static array $jsonable = [
		MPgSequences::FJ_SCHEMANAME    =>[ MPgSequences::F_SCHEMANAME    ,null,'string(name)',    ],
		MPgSequences::FJ_SEQUENCENAME  =>[ MPgSequences::F_SEQUENCENAME  ,null,'string(name)',    ],
		MPgSequences::FJ_SEQUENCEOWNER =>[ MPgSequences::F_SEQUENCEOWNER ,null,'string(name)',    ],
		MPgSequences::FJ_DATA_TYPE     =>[ MPgSequences::F_DATA_TYPE     ,null,'string(regtype)', ],
		MPgSequences::FJ_START_VALUE   =>[ MPgSequences::F_START_VALUE   ,null,'number',          ],
		MPgSequences::FJ_MIN_VALUE     =>[ MPgSequences::F_MIN_VALUE     ,null,'number',          ],
		MPgSequences::FJ_MAX_VALUE     =>[ MPgSequences::F_MAX_VALUE     ,null,'number',          ],
		MPgSequences::FJ_INCREMENT_BY  =>[ MPgSequences::F_INCREMENT_BY  ,null,'number',          ],
		MPgSequences::FJ_CYCLE         =>[ MPgSequences::F_CYCLE         ,null,'boolean',         ],
		MPgSequences::FJ_CACHE_SIZE    =>[ MPgSequences::F_CACHE_SIZE    ,null,'number',          ],
		MPgSequences::FJ_LAST_VALUE    =>[ MPgSequences::F_LAST_VALUE    ,null,'number',          ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_SEQUENCENAME,
			self::F_SEQUENCEOWNER,
			self::F_DATA_TYPE,
			self::F_START_VALUE,
			self::F_MIN_VALUE,
			self::F_MAX_VALUE,
			self::F_INCREMENT_BY,
			self::F_CYCLE,
			self::F_CACHE_SIZE,
			self::F_LAST_VALUE,
		]; 

		protected $fillable = [
		];





}

