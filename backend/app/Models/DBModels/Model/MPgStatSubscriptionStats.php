<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatSubscriptionStats
 * Representation for db table pg_stat_subscription_stats.

 * @property  string(oid)         subid             [1] type:oid           
 * @property  string(name)        subname           [2] type:name          
 * @property  int                 apply_error_count [3] type:int8          
 * @property  int                 sync_error_count  [4] type:int8          
 * @property  string(timestamptz) stats_reset       [5] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatSubscriptionStats extends DBClass {


	const  FJ_APPLY_ERROR_COUNT = 'applyErrorCount';
	const  FJ_STATS_RESET       = 'statsReset';
	const  FJ_SUBID             = 'subid';
	const  FJ_SUBNAME           = 'subname';
	const  FJ_SYNC_ERROR_COUNT  = 'syncErrorCount';
	const  FT_APPLY_ERROR_COUNT = 'pg_stat_subscription_stats.apply_error_count';
	const  FT_STATS_RESET       = 'pg_stat_subscription_stats.stats_reset';
	const  FT_SUBID             = 'pg_stat_subscription_stats.subid';
	const  FT_SUBNAME           = 'pg_stat_subscription_stats.subname';
	const  FT_SYNC_ERROR_COUNT  = 'pg_stat_subscription_stats.sync_error_count';
	const  F_APPLY_ERROR_COUNT  = 'apply_error_count';
	const  F_STATS_RESET        = 'stats_reset';
	const  F_SUBID              = 'subid';
	const  F_SUBNAME            = 'subname';
	const  F_SYNC_ERROR_COUNT   = 'sync_error_count';

    protected $table = 'pg_stat_subscription_stats';

	public static array $jsonable = [
		MPgStatSubscriptionStats::FJ_SUBID             =>[ MPgStatSubscriptionStats::F_SUBID             ,null,'string(oid)',         ],
		MPgStatSubscriptionStats::FJ_SUBNAME           =>[ MPgStatSubscriptionStats::F_SUBNAME           ,null,'string(name)',        ],
		MPgStatSubscriptionStats::FJ_APPLY_ERROR_COUNT =>[ MPgStatSubscriptionStats::F_APPLY_ERROR_COUNT ,null,'number',              ],
		MPgStatSubscriptionStats::FJ_SYNC_ERROR_COUNT  =>[ MPgStatSubscriptionStats::F_SYNC_ERROR_COUNT  ,null,'number',              ],
		MPgStatSubscriptionStats::FJ_STATS_RESET       =>[ MPgStatSubscriptionStats::F_STATS_RESET       ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_SUBID,
			self::F_SUBNAME,
			self::F_APPLY_ERROR_COUNT,
			self::F_SYNC_ERROR_COUNT,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

