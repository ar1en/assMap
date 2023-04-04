<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatRecoveryPrefetch
 * Representation for db table pg_stat_recovery_prefetch.

 * @property  string(timestamptz) stats_reset    [1]  type:timestamptz   
 * @property  int                 prefetch       [2]  type:int8          
 * @property  int                 hit            [3]  type:int8          
 * @property  int                 skip_init      [4]  type:int8          
 * @property  int                 skip_new       [5]  type:int8          
 * @property  int                 skip_fpw       [6]  type:int8          
 * @property  int                 skip_rep       [7]  type:int8          
 * @property  int                 wal_distance   [8]  type:int4          
 * @property  int                 block_distance [9]  type:int4          
 * @property  int                 io_depth       [10] type:int4          
 * @package App\Models\DBModels\Model
 */
class MPgStatRecoveryPrefetch extends DBClass {


	const  FJ_BLOCK_DISTANCE = 'blockDistance';
	const  FJ_HIT            = 'hit';
	const  FJ_IO_DEPTH       = 'ioDepth';
	const  FJ_PREFETCH       = 'prefetch';
	const  FJ_SKIP_FPW       = 'skipFpw';
	const  FJ_SKIP_INIT      = 'skipInit';
	const  FJ_SKIP_NEW       = 'skipNew';
	const  FJ_SKIP_REP       = 'skipRep';
	const  FJ_STATS_RESET    = 'statsReset';
	const  FJ_WAL_DISTANCE   = 'walDistance';
	const  FT_BLOCK_DISTANCE = 'pg_stat_recovery_prefetch.block_distance';
	const  FT_HIT            = 'pg_stat_recovery_prefetch.hit';
	const  FT_IO_DEPTH       = 'pg_stat_recovery_prefetch.io_depth';
	const  FT_PREFETCH       = 'pg_stat_recovery_prefetch.prefetch';
	const  FT_SKIP_FPW       = 'pg_stat_recovery_prefetch.skip_fpw';
	const  FT_SKIP_INIT      = 'pg_stat_recovery_prefetch.skip_init';
	const  FT_SKIP_NEW       = 'pg_stat_recovery_prefetch.skip_new';
	const  FT_SKIP_REP       = 'pg_stat_recovery_prefetch.skip_rep';
	const  FT_STATS_RESET    = 'pg_stat_recovery_prefetch.stats_reset';
	const  FT_WAL_DISTANCE   = 'pg_stat_recovery_prefetch.wal_distance';
	const  F_BLOCK_DISTANCE  = 'block_distance';
	const  F_HIT             = 'hit';
	const  F_IO_DEPTH        = 'io_depth';
	const  F_PREFETCH        = 'prefetch';
	const  F_SKIP_FPW        = 'skip_fpw';
	const  F_SKIP_INIT       = 'skip_init';
	const  F_SKIP_NEW        = 'skip_new';
	const  F_SKIP_REP        = 'skip_rep';
	const  F_STATS_RESET     = 'stats_reset';
	const  F_WAL_DISTANCE    = 'wal_distance';

    protected $table = 'pg_stat_recovery_prefetch';

	public static array $jsonable = [
		MPgStatRecoveryPrefetch::FJ_STATS_RESET    =>[ MPgStatRecoveryPrefetch::F_STATS_RESET    ,null,'string(timestamptz)', ],
		MPgStatRecoveryPrefetch::FJ_PREFETCH       =>[ MPgStatRecoveryPrefetch::F_PREFETCH       ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_HIT            =>[ MPgStatRecoveryPrefetch::F_HIT            ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_SKIP_INIT      =>[ MPgStatRecoveryPrefetch::F_SKIP_INIT      ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_SKIP_NEW       =>[ MPgStatRecoveryPrefetch::F_SKIP_NEW       ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_SKIP_FPW       =>[ MPgStatRecoveryPrefetch::F_SKIP_FPW       ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_SKIP_REP       =>[ MPgStatRecoveryPrefetch::F_SKIP_REP       ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_WAL_DISTANCE   =>[ MPgStatRecoveryPrefetch::F_WAL_DISTANCE   ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_BLOCK_DISTANCE =>[ MPgStatRecoveryPrefetch::F_BLOCK_DISTANCE ,null,'number',              ],
		MPgStatRecoveryPrefetch::FJ_IO_DEPTH       =>[ MPgStatRecoveryPrefetch::F_IO_DEPTH       ,null,'number',              ],
	];

		protected $visible = [
			self::F_STATS_RESET,
			self::F_PREFETCH,
			self::F_HIT,
			self::F_SKIP_INIT,
			self::F_SKIP_NEW,
			self::F_SKIP_FPW,
			self::F_SKIP_REP,
			self::F_WAL_DISTANCE,
			self::F_BLOCK_DISTANCE,
			self::F_IO_DEPTH,
		]; 

		protected $fillable = [
		];





}

