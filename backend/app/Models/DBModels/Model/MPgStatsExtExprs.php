<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatsExtExprs
 * Representation for db table pg_stats_ext_exprs.

 * @property  string(name)     schemaname             [1]  type:name       
 * @property  string(name)     tablename              [2]  type:name       
 * @property  string(name)     statistics_schemaname  [3]  type:name       
 * @property  string(name)     statistics_name        [4]  type:name       
 * @property  string(name)     statistics_owner       [5]  type:name       
 * @property  string           expr                   [6]  type:text       
 * @property  boolean          inherited              [7]  type:bool       
 * @property  string(float4)   null_frac              [8]  type:float4     
 * @property  int              avg_width              [9]  type:int4       
 * @property  string(float4)   n_distinct             [10] type:float4     
 * @property  string(anyarray) most_common_vals       [11] type:anyarray   
 * @property  string(_float4)  most_common_freqs      [12] type:_float4    
 * @property  string(anyarray) histogram_bounds       [13] type:anyarray   
 * @property  string(float4)   correlation            [14] type:float4     
 * @property  string(anyarray) most_common_elems      [15] type:anyarray   
 * @property  string(_float4)  most_common_elem_freqs [16] type:_float4    
 * @property  string(_float4)  elem_count_histogram   [17] type:_float4    
 * @package App\Models\DBModels\Model
 */
class MPgStatsExtExprs extends DBClass {


	const  FJ_AVG_WIDTH              = 'avgWidth';
	const  FJ_CORRELATION            = 'correlation';
	const  FJ_ELEM_COUNT_HISTOGRAM   = 'elemCountHistogram';
	const  FJ_EXPR                   = 'expr';
	const  FJ_HISTOGRAM_BOUNDS       = 'histogramBounds';
	const  FJ_INHERITED              = 'inherited';
	const  FJ_MOST_COMMON_ELEMS      = 'mostCommonElems';
	const  FJ_MOST_COMMON_ELEM_FREQS = 'mostCommonElemFreqs';
	const  FJ_MOST_COMMON_FREQS      = 'mostCommonFreqs';
	const  FJ_MOST_COMMON_VALS       = 'mostCommonVals';
	const  FJ_NULL_FRAC              = 'nullFrac';
	const  FJ_N_DISTINCT             = 'nDistinct';
	const  FJ_SCHEMANAME             = 'schemaname';
	const  FJ_STATISTICS_NAME        = 'statisticsName';
	const  FJ_STATISTICS_OWNER       = 'statisticsOwner';
	const  FJ_STATISTICS_SCHEMANAME  = 'statisticsSchemaname';
	const  FJ_TABLENAME              = 'tablename';
	const  FT_AVG_WIDTH              = 'pg_stats_ext_exprs.avg_width';
	const  FT_CORRELATION            = 'pg_stats_ext_exprs.correlation';
	const  FT_ELEM_COUNT_HISTOGRAM   = 'pg_stats_ext_exprs.elem_count_histogram';
	const  FT_EXPR                   = 'pg_stats_ext_exprs.expr';
	const  FT_HISTOGRAM_BOUNDS       = 'pg_stats_ext_exprs.histogram_bounds';
	const  FT_INHERITED              = 'pg_stats_ext_exprs.inherited';
	const  FT_MOST_COMMON_ELEMS      = 'pg_stats_ext_exprs.most_common_elems';
	const  FT_MOST_COMMON_ELEM_FREQS = 'pg_stats_ext_exprs.most_common_elem_freqs';
	const  FT_MOST_COMMON_FREQS      = 'pg_stats_ext_exprs.most_common_freqs';
	const  FT_MOST_COMMON_VALS       = 'pg_stats_ext_exprs.most_common_vals';
	const  FT_NULL_FRAC              = 'pg_stats_ext_exprs.null_frac';
	const  FT_N_DISTINCT             = 'pg_stats_ext_exprs.n_distinct';
	const  FT_SCHEMANAME             = 'pg_stats_ext_exprs.schemaname';
	const  FT_STATISTICS_NAME        = 'pg_stats_ext_exprs.statistics_name';
	const  FT_STATISTICS_OWNER       = 'pg_stats_ext_exprs.statistics_owner';
	const  FT_STATISTICS_SCHEMANAME  = 'pg_stats_ext_exprs.statistics_schemaname';
	const  FT_TABLENAME              = 'pg_stats_ext_exprs.tablename';
	const  F_AVG_WIDTH               = 'avg_width';
	const  F_CORRELATION             = 'correlation';
	const  F_ELEM_COUNT_HISTOGRAM    = 'elem_count_histogram';
	const  F_EXPR                    = 'expr';
	const  F_HISTOGRAM_BOUNDS        = 'histogram_bounds';
	const  F_INHERITED               = 'inherited';
	const  F_MOST_COMMON_ELEMS       = 'most_common_elems';
	const  F_MOST_COMMON_ELEM_FREQS  = 'most_common_elem_freqs';
	const  F_MOST_COMMON_FREQS       = 'most_common_freqs';
	const  F_MOST_COMMON_VALS        = 'most_common_vals';
	const  F_NULL_FRAC               = 'null_frac';
	const  F_N_DISTINCT              = 'n_distinct';
	const  F_SCHEMANAME              = 'schemaname';
	const  F_STATISTICS_NAME         = 'statistics_name';
	const  F_STATISTICS_OWNER        = 'statistics_owner';
	const  F_STATISTICS_SCHEMANAME   = 'statistics_schemaname';
	const  F_TABLENAME               = 'tablename';

    protected $table = 'pg_stats_ext_exprs';

	public static array $jsonable = [
		MPgStatsExtExprs::FJ_SCHEMANAME             =>[ MPgStatsExtExprs::F_SCHEMANAME             ,null,'string(name)',     ],
		MPgStatsExtExprs::FJ_TABLENAME              =>[ MPgStatsExtExprs::F_TABLENAME              ,null,'string(name)',     ],
		MPgStatsExtExprs::FJ_STATISTICS_SCHEMANAME  =>[ MPgStatsExtExprs::F_STATISTICS_SCHEMANAME  ,null,'string(name)',     ],
		MPgStatsExtExprs::FJ_STATISTICS_NAME        =>[ MPgStatsExtExprs::F_STATISTICS_NAME        ,null,'string(name)',     ],
		MPgStatsExtExprs::FJ_STATISTICS_OWNER       =>[ MPgStatsExtExprs::F_STATISTICS_OWNER       ,null,'string(name)',     ],
		MPgStatsExtExprs::FJ_EXPR                   =>[ MPgStatsExtExprs::F_EXPR                   ,null,'string',           ],
		MPgStatsExtExprs::FJ_INHERITED              =>[ MPgStatsExtExprs::F_INHERITED              ,null,'boolean',          ],
		MPgStatsExtExprs::FJ_NULL_FRAC              =>[ MPgStatsExtExprs::F_NULL_FRAC              ,null,'string(float4)',   ],
		MPgStatsExtExprs::FJ_AVG_WIDTH              =>[ MPgStatsExtExprs::F_AVG_WIDTH              ,null,'number',           ],
		MPgStatsExtExprs::FJ_N_DISTINCT             =>[ MPgStatsExtExprs::F_N_DISTINCT             ,null,'string(float4)',   ],
		MPgStatsExtExprs::FJ_MOST_COMMON_VALS       =>[ MPgStatsExtExprs::F_MOST_COMMON_VALS       ,null,'string(anyarray)', ],
		MPgStatsExtExprs::FJ_MOST_COMMON_FREQS      =>[ MPgStatsExtExprs::F_MOST_COMMON_FREQS      ,null,'string(_float4)',  ],
		MPgStatsExtExprs::FJ_HISTOGRAM_BOUNDS       =>[ MPgStatsExtExprs::F_HISTOGRAM_BOUNDS       ,null,'string(anyarray)', ],
		MPgStatsExtExprs::FJ_CORRELATION            =>[ MPgStatsExtExprs::F_CORRELATION            ,null,'string(float4)',   ],
		MPgStatsExtExprs::FJ_MOST_COMMON_ELEMS      =>[ MPgStatsExtExprs::F_MOST_COMMON_ELEMS      ,null,'string(anyarray)', ],
		MPgStatsExtExprs::FJ_MOST_COMMON_ELEM_FREQS =>[ MPgStatsExtExprs::F_MOST_COMMON_ELEM_FREQS ,null,'string(_float4)',  ],
		MPgStatsExtExprs::FJ_ELEM_COUNT_HISTOGRAM   =>[ MPgStatsExtExprs::F_ELEM_COUNT_HISTOGRAM   ,null,'string(_float4)',  ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_STATISTICS_SCHEMANAME,
			self::F_STATISTICS_NAME,
			self::F_STATISTICS_OWNER,
			self::F_EXPR,
			self::F_INHERITED,
			self::F_NULL_FRAC,
			self::F_AVG_WIDTH,
			self::F_N_DISTINCT,
			self::F_MOST_COMMON_VALS,
			self::F_MOST_COMMON_FREQS,
			self::F_HISTOGRAM_BOUNDS,
			self::F_CORRELATION,
			self::F_MOST_COMMON_ELEMS,
			self::F_MOST_COMMON_ELEM_FREQS,
			self::F_ELEM_COUNT_HISTOGRAM,
		]; 

		protected $fillable = [
		];





}

