<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatsExt
 * Representation for db table pg_stats_ext.

 * @property  string(name)            schemaname             [1]  type:name              
 * @property  string(name)            tablename              [2]  type:name              
 * @property  string(name)            statistics_schemaname  [3]  type:name              
 * @property  string(name)            statistics_name        [4]  type:name              
 * @property  string(name)            statistics_owner       [5]  type:name              
 * @property  string(_name)           attnames               [6]  type:_name             
 * @property  string(_text)           exprs                  [7]  type:_text             
 * @property  string(_char)           kinds                  [8]  type:_char             
 * @property  boolean                 inherited              [9]  type:bool              
 * @property  string(pg_ndistinct)    n_distinct             [10] type:pg_ndistinct      
 * @property  string(pg_dependencies) dependencies           [11] type:pg_dependencies   
 * @property  string(_text)           most_common_vals       [12] type:_text             
 * @property  string(_bool)           most_common_val_nulls  [13] type:_bool             
 * @property  string(_float8)         most_common_freqs      [14] type:_float8           
 * @property  string(_float8)         most_common_base_freqs [15] type:_float8           
 * @package App\Models\DBModels\Model
 */
class MPgStatsExt extends DBClass {


	const  FJ_ATTNAMES               = 'attnames';
	const  FJ_DEPENDENCIES           = 'dependencies';
	const  FJ_EXPRS                  = 'exprs';
	const  FJ_INHERITED              = 'inherited';
	const  FJ_KINDS                  = 'kinds';
	const  FJ_MOST_COMMON_BASE_FREQS = 'mostCommonBaseFreqs';
	const  FJ_MOST_COMMON_FREQS      = 'mostCommonFreqs';
	const  FJ_MOST_COMMON_VALS       = 'mostCommonVals';
	const  FJ_MOST_COMMON_VAL_NULLS  = 'mostCommonValNulls';
	const  FJ_N_DISTINCT             = 'nDistinct';
	const  FJ_SCHEMANAME             = 'schemaname';
	const  FJ_STATISTICS_NAME        = 'statisticsName';
	const  FJ_STATISTICS_OWNER       = 'statisticsOwner';
	const  FJ_STATISTICS_SCHEMANAME  = 'statisticsSchemaname';
	const  FJ_TABLENAME              = 'tablename';
	const  FT_ATTNAMES               = 'pg_stats_ext.attnames';
	const  FT_DEPENDENCIES           = 'pg_stats_ext.dependencies';
	const  FT_EXPRS                  = 'pg_stats_ext.exprs';
	const  FT_INHERITED              = 'pg_stats_ext.inherited';
	const  FT_KINDS                  = 'pg_stats_ext.kinds';
	const  FT_MOST_COMMON_BASE_FREQS = 'pg_stats_ext.most_common_base_freqs';
	const  FT_MOST_COMMON_FREQS      = 'pg_stats_ext.most_common_freqs';
	const  FT_MOST_COMMON_VALS       = 'pg_stats_ext.most_common_vals';
	const  FT_MOST_COMMON_VAL_NULLS  = 'pg_stats_ext.most_common_val_nulls';
	const  FT_N_DISTINCT             = 'pg_stats_ext.n_distinct';
	const  FT_SCHEMANAME             = 'pg_stats_ext.schemaname';
	const  FT_STATISTICS_NAME        = 'pg_stats_ext.statistics_name';
	const  FT_STATISTICS_OWNER       = 'pg_stats_ext.statistics_owner';
	const  FT_STATISTICS_SCHEMANAME  = 'pg_stats_ext.statistics_schemaname';
	const  FT_TABLENAME              = 'pg_stats_ext.tablename';
	const  F_ATTNAMES                = 'attnames';
	const  F_DEPENDENCIES            = 'dependencies';
	const  F_EXPRS                   = 'exprs';
	const  F_INHERITED               = 'inherited';
	const  F_KINDS                   = 'kinds';
	const  F_MOST_COMMON_BASE_FREQS  = 'most_common_base_freqs';
	const  F_MOST_COMMON_FREQS       = 'most_common_freqs';
	const  F_MOST_COMMON_VALS        = 'most_common_vals';
	const  F_MOST_COMMON_VAL_NULLS   = 'most_common_val_nulls';
	const  F_N_DISTINCT              = 'n_distinct';
	const  F_SCHEMANAME              = 'schemaname';
	const  F_STATISTICS_NAME         = 'statistics_name';
	const  F_STATISTICS_OWNER        = 'statistics_owner';
	const  F_STATISTICS_SCHEMANAME   = 'statistics_schemaname';
	const  F_TABLENAME               = 'tablename';

    protected $table = 'pg_stats_ext';

	public static array $jsonable = [
		MPgStatsExt::FJ_SCHEMANAME             =>[ MPgStatsExt::F_SCHEMANAME             ,null,'string(name)',            ],
		MPgStatsExt::FJ_TABLENAME              =>[ MPgStatsExt::F_TABLENAME              ,null,'string(name)',            ],
		MPgStatsExt::FJ_STATISTICS_SCHEMANAME  =>[ MPgStatsExt::F_STATISTICS_SCHEMANAME  ,null,'string(name)',            ],
		MPgStatsExt::FJ_STATISTICS_NAME        =>[ MPgStatsExt::F_STATISTICS_NAME        ,null,'string(name)',            ],
		MPgStatsExt::FJ_STATISTICS_OWNER       =>[ MPgStatsExt::F_STATISTICS_OWNER       ,null,'string(name)',            ],
		MPgStatsExt::FJ_ATTNAMES               =>[ MPgStatsExt::F_ATTNAMES               ,null,'string(_name)',           ],
		MPgStatsExt::FJ_EXPRS                  =>[ MPgStatsExt::F_EXPRS                  ,null,'string(_text)',           ],
		MPgStatsExt::FJ_KINDS                  =>[ MPgStatsExt::F_KINDS                  ,null,'string(_char)',           ],
		MPgStatsExt::FJ_INHERITED              =>[ MPgStatsExt::F_INHERITED              ,null,'boolean',                 ],
		MPgStatsExt::FJ_N_DISTINCT             =>[ MPgStatsExt::F_N_DISTINCT             ,null,'string(pg_ndistinct)',    ],
		MPgStatsExt::FJ_DEPENDENCIES           =>[ MPgStatsExt::F_DEPENDENCIES           ,null,'string(pg_dependencies)', ],
		MPgStatsExt::FJ_MOST_COMMON_VALS       =>[ MPgStatsExt::F_MOST_COMMON_VALS       ,null,'string(_text)',           ],
		MPgStatsExt::FJ_MOST_COMMON_VAL_NULLS  =>[ MPgStatsExt::F_MOST_COMMON_VAL_NULLS  ,null,'string(_bool)',           ],
		MPgStatsExt::FJ_MOST_COMMON_FREQS      =>[ MPgStatsExt::F_MOST_COMMON_FREQS      ,null,'string(_float8)',         ],
		MPgStatsExt::FJ_MOST_COMMON_BASE_FREQS =>[ MPgStatsExt::F_MOST_COMMON_BASE_FREQS ,null,'string(_float8)',         ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_STATISTICS_SCHEMANAME,
			self::F_STATISTICS_NAME,
			self::F_STATISTICS_OWNER,
			self::F_ATTNAMES,
			self::F_EXPRS,
			self::F_KINDS,
			self::F_INHERITED,
			self::F_N_DISTINCT,
			self::F_DEPENDENCIES,
			self::F_MOST_COMMON_VALS,
			self::F_MOST_COMMON_VAL_NULLS,
			self::F_MOST_COMMON_FREQS,
			self::F_MOST_COMMON_BASE_FREQS,
		]; 

		protected $fillable = [
		];





}

