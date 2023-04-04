<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatArchiver
 * Representation for db table pg_stat_archiver.

 * @property  int                 archived_count     [1] type:int8          
 * @property  string              last_archived_wal  [2] type:text          
 * @property  string(timestamptz) last_archived_time [3] type:timestamptz   
 * @property  int                 failed_count       [4] type:int8          
 * @property  string              last_failed_wal    [5] type:text          
 * @property  string(timestamptz) last_failed_time   [6] type:timestamptz   
 * @property  string(timestamptz) stats_reset        [7] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatArchiver extends DBClass {


	const  FJ_ARCHIVED_COUNT     = 'archivedCount';
	const  FJ_FAILED_COUNT       = 'failedCount';
	const  FJ_LAST_ARCHIVED_TIME = 'lastArchivedTime';
	const  FJ_LAST_ARCHIVED_WAL  = 'lastArchivedWal';
	const  FJ_LAST_FAILED_TIME   = 'lastFailedTime';
	const  FJ_LAST_FAILED_WAL    = 'lastFailedWal';
	const  FJ_STATS_RESET        = 'statsReset';
	const  FT_ARCHIVED_COUNT     = 'pg_stat_archiver.archived_count';
	const  FT_FAILED_COUNT       = 'pg_stat_archiver.failed_count';
	const  FT_LAST_ARCHIVED_TIME = 'pg_stat_archiver.last_archived_time';
	const  FT_LAST_ARCHIVED_WAL  = 'pg_stat_archiver.last_archived_wal';
	const  FT_LAST_FAILED_TIME   = 'pg_stat_archiver.last_failed_time';
	const  FT_LAST_FAILED_WAL    = 'pg_stat_archiver.last_failed_wal';
	const  FT_STATS_RESET        = 'pg_stat_archiver.stats_reset';
	const  F_ARCHIVED_COUNT      = 'archived_count';
	const  F_FAILED_COUNT        = 'failed_count';
	const  F_LAST_ARCHIVED_TIME  = 'last_archived_time';
	const  F_LAST_ARCHIVED_WAL   = 'last_archived_wal';
	const  F_LAST_FAILED_TIME    = 'last_failed_time';
	const  F_LAST_FAILED_WAL     = 'last_failed_wal';
	const  F_STATS_RESET         = 'stats_reset';

    protected $table = 'pg_stat_archiver';

	public static array $jsonable = [
		MPgStatArchiver::FJ_ARCHIVED_COUNT     =>[ MPgStatArchiver::F_ARCHIVED_COUNT     ,null,'number',              ],
		MPgStatArchiver::FJ_LAST_ARCHIVED_WAL  =>[ MPgStatArchiver::F_LAST_ARCHIVED_WAL  ,null,'string',              ],
		MPgStatArchiver::FJ_LAST_ARCHIVED_TIME =>[ MPgStatArchiver::F_LAST_ARCHIVED_TIME ,null,'string(timestamptz)', ],
		MPgStatArchiver::FJ_FAILED_COUNT       =>[ MPgStatArchiver::F_FAILED_COUNT       ,null,'number',              ],
		MPgStatArchiver::FJ_LAST_FAILED_WAL    =>[ MPgStatArchiver::F_LAST_FAILED_WAL    ,null,'string',              ],
		MPgStatArchiver::FJ_LAST_FAILED_TIME   =>[ MPgStatArchiver::F_LAST_FAILED_TIME   ,null,'string(timestamptz)', ],
		MPgStatArchiver::FJ_STATS_RESET        =>[ MPgStatArchiver::F_STATS_RESET        ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_ARCHIVED_COUNT,
			self::F_LAST_ARCHIVED_WAL,
			self::F_LAST_ARCHIVED_TIME,
			self::F_FAILED_COUNT,
			self::F_LAST_FAILED_WAL,
			self::F_LAST_FAILED_TIME,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

