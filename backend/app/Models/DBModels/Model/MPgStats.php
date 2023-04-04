<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStats
 * Representation for db table pg_stats.

 * @property  string(name)     schemaname             [1]  type:name       
 * @property  string(name)     tablename              [2]  type:name       
 * @property  string(name)     attname                [3]  type:name       
 * @property  boolean          inherited              [4]  type:bool       
 * @property  string(float4)   null_frac              [5]  type:float4     
 * @property  int              avg_width              [6]  type:int4       
 * @property  string(float4)   n_distinct             [7]  type:float4     
 * @property  string(anyarray) most_common_vals       [8]  type:anyarray   
 * @property  string(_float4)  most_common_freqs      [9]  type:_float4    
 * @property  string(anyarray) histogram_bounds       [10] type:anyarray   
 * @property  string(float4)   correlation            [11] type:float4     
 * @property  string(anyarray) most_common_elems      [12] type:anyarray   
 * @property  string(_float4)  most_common_elem_freqs [13] type:_float4    
 * @property  string(_float4)  elem_count_histogram   [14] type:_float4    
 * @package App\Models\DBModels\Model
 */
class MPgStats extends DBClass {


	const  FJ_ATTNAME                = 'attname';
	const  FJ_AVG_WIDTH              = 'avgWidth';
	const  FJ_CORRELATION            = 'correlation';
	const  FJ_ELEM_COUNT_HISTOGRAM   = 'elemCountHistogram';
	const  FJ_HISTOGRAM_BOUNDS       = 'histogramBounds';
	const  FJ_INHERITED              = 'inherited';
	const  FJ_MOST_COMMON_ELEMS      = 'mostCommonElems';
	const  FJ_MOST_COMMON_ELEM_FREQS = 'mostCommonElemFreqs';
	const  FJ_MOST_COMMON_FREQS      = 'mostCommonFreqs';
	const  FJ_MOST_COMMON_VALS       = 'mostCommonVals';
	const  FJ_NULL_FRAC              = 'nullFrac';
	const  FJ_N_DISTINCT             = 'nDistinct';
	const  FJ_SCHEMANAME             = 'schemaname';
	const  FJ_TABLENAME              = 'tablename';
	const  FT_ATTNAME                = 'pg_stats.attname';
	const  FT_AVG_WIDTH              = 'pg_stats.avg_width';
	const  FT_CORRELATION            = 'pg_stats.correlation';
	const  FT_ELEM_COUNT_HISTOGRAM   = 'pg_stats.elem_count_histogram';
	const  FT_HISTOGRAM_BOUNDS       = 'pg_stats.histogram_bounds';
	const  FT_INHERITED              = 'pg_stats.inherited';
	const  FT_MOST_COMMON_ELEMS      = 'pg_stats.most_common_elems';
	const  FT_MOST_COMMON_ELEM_FREQS = 'pg_stats.most_common_elem_freqs';
	const  FT_MOST_COMMON_FREQS      = 'pg_stats.most_common_freqs';
	const  FT_MOST_COMMON_VALS       = 'pg_stats.most_common_vals';
	const  FT_NULL_FRAC              = 'pg_stats.null_frac';
	const  FT_N_DISTINCT             = 'pg_stats.n_distinct';
	const  FT_SCHEMANAME             = 'pg_stats.schemaname';
	const  FT_TABLENAME              = 'pg_stats.tablename';
	const  F_ATTNAME                 = 'attname';
	const  F_AVG_WIDTH               = 'avg_width';
	const  F_CORRELATION             = 'correlation';
	const  F_ELEM_COUNT_HISTOGRAM    = 'elem_count_histogram';
	const  F_HISTOGRAM_BOUNDS        = 'histogram_bounds';
	const  F_INHERITED               = 'inherited';
	const  F_MOST_COMMON_ELEMS       = 'most_common_elems';
	const  F_MOST_COMMON_ELEM_FREQS  = 'most_common_elem_freqs';
	const  F_MOST_COMMON_FREQS       = 'most_common_freqs';
	const  F_MOST_COMMON_VALS        = 'most_common_vals';
	const  F_NULL_FRAC               = 'null_frac';
	const  F_N_DISTINCT              = 'n_distinct';
	const  F_SCHEMANAME              = 'schemaname';
	const  F_TABLENAME               = 'tablename';

    protected $table = 'pg_stats';

	public static array $jsonable = [
		MPgStats::FJ_SCHEMANAME             =>[ MPgStats::F_SCHEMANAME             ,null,'string(name)',     ],
		MPgStats::FJ_TABLENAME              =>[ MPgStats::F_TABLENAME              ,null,'string(name)',     ],
		MPgStats::FJ_ATTNAME                =>[ MPgStats::F_ATTNAME                ,null,'string(name)',     ],
		MPgStats::FJ_INHERITED              =>[ MPgStats::F_INHERITED              ,null,'boolean',          ],
		MPgStats::FJ_NULL_FRAC              =>[ MPgStats::F_NULL_FRAC              ,null,'string(float4)',   ],
		MPgStats::FJ_AVG_WIDTH              =>[ MPgStats::F_AVG_WIDTH              ,null,'number',           ],
		MPgStats::FJ_N_DISTINCT             =>[ MPgStats::F_N_DISTINCT             ,null,'string(float4)',   ],
		MPgStats::FJ_MOST_COMMON_VALS       =>[ MPgStats::F_MOST_COMMON_VALS       ,null,'string(anyarray)', ],
		MPgStats::FJ_MOST_COMMON_FREQS      =>[ MPgStats::F_MOST_COMMON_FREQS      ,null,'string(_float4)',  ],
		MPgStats::FJ_HISTOGRAM_BOUNDS       =>[ MPgStats::F_HISTOGRAM_BOUNDS       ,null,'string(anyarray)', ],
		MPgStats::FJ_CORRELATION            =>[ MPgStats::F_CORRELATION            ,null,'string(float4)',   ],
		MPgStats::FJ_MOST_COMMON_ELEMS      =>[ MPgStats::F_MOST_COMMON_ELEMS      ,null,'string(anyarray)', ],
		MPgStats::FJ_MOST_COMMON_ELEM_FREQS =>[ MPgStats::F_MOST_COMMON_ELEM_FREQS ,null,'string(_float4)',  ],
		MPgStats::FJ_ELEM_COUNT_HISTOGRAM   =>[ MPgStats::F_ELEM_COUNT_HISTOGRAM   ,null,'string(_float4)',  ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_ATTNAME,
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

