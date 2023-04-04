<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatWal
 * Representation for db table pg_stat_wal.

 * @property  int                 wal_records      [1] type:int8          
 * @property  int                 wal_fpi          [2] type:int8          
 * @property  string(numeric)     wal_bytes        [3] type:numeric       
 * @property  int                 wal_buffers_full [4] type:int8          
 * @property  int                 wal_write        [5] type:int8          
 * @property  int                 wal_sync         [6] type:int8          
 * @property  string(float8)      wal_write_time   [7] type:float8        
 * @property  string(float8)      wal_sync_time    [8] type:float8        
 * @property  string(timestamptz) stats_reset      [9] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatWal extends DBClass {


	const  FJ_STATS_RESET      = 'statsReset';
	const  FJ_WAL_BUFFERS_FULL = 'walBuffersFull';
	const  FJ_WAL_BYTES        = 'walBytes';
	const  FJ_WAL_FPI          = 'walFpi';
	const  FJ_WAL_RECORDS      = 'walRecords';
	const  FJ_WAL_SYNC         = 'walSync';
	const  FJ_WAL_SYNC_TIME    = 'walSyncTime';
	const  FJ_WAL_WRITE        = 'walWrite';
	const  FJ_WAL_WRITE_TIME   = 'walWriteTime';
	const  FT_STATS_RESET      = 'pg_stat_wal.stats_reset';
	const  FT_WAL_BUFFERS_FULL = 'pg_stat_wal.wal_buffers_full';
	const  FT_WAL_BYTES        = 'pg_stat_wal.wal_bytes';
	const  FT_WAL_FPI          = 'pg_stat_wal.wal_fpi';
	const  FT_WAL_RECORDS      = 'pg_stat_wal.wal_records';
	const  FT_WAL_SYNC         = 'pg_stat_wal.wal_sync';
	const  FT_WAL_SYNC_TIME    = 'pg_stat_wal.wal_sync_time';
	const  FT_WAL_WRITE        = 'pg_stat_wal.wal_write';
	const  FT_WAL_WRITE_TIME   = 'pg_stat_wal.wal_write_time';
	const  F_STATS_RESET       = 'stats_reset';
	const  F_WAL_BUFFERS_FULL  = 'wal_buffers_full';
	const  F_WAL_BYTES         = 'wal_bytes';
	const  F_WAL_FPI           = 'wal_fpi';
	const  F_WAL_RECORDS       = 'wal_records';
	const  F_WAL_SYNC          = 'wal_sync';
	const  F_WAL_SYNC_TIME     = 'wal_sync_time';
	const  F_WAL_WRITE         = 'wal_write';
	const  F_WAL_WRITE_TIME    = 'wal_write_time';

    protected $table = 'pg_stat_wal';

	public static array $jsonable = [
		MPgStatWal::FJ_WAL_RECORDS      =>[ MPgStatWal::F_WAL_RECORDS      ,null,'number',              ],
		MPgStatWal::FJ_WAL_FPI          =>[ MPgStatWal::F_WAL_FPI          ,null,'number',              ],
		MPgStatWal::FJ_WAL_BYTES        =>[ MPgStatWal::F_WAL_BYTES        ,null,'string(numeric)',     ],
		MPgStatWal::FJ_WAL_BUFFERS_FULL =>[ MPgStatWal::F_WAL_BUFFERS_FULL ,null,'number',              ],
		MPgStatWal::FJ_WAL_WRITE        =>[ MPgStatWal::F_WAL_WRITE        ,null,'number',              ],
		MPgStatWal::FJ_WAL_SYNC         =>[ MPgStatWal::F_WAL_SYNC         ,null,'number',              ],
		MPgStatWal::FJ_WAL_WRITE_TIME   =>[ MPgStatWal::F_WAL_WRITE_TIME   ,null,'string(float8)',      ],
		MPgStatWal::FJ_WAL_SYNC_TIME    =>[ MPgStatWal::F_WAL_SYNC_TIME    ,null,'string(float8)',      ],
		MPgStatWal::FJ_STATS_RESET      =>[ MPgStatWal::F_STATS_RESET      ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_WAL_RECORDS,
			self::F_WAL_FPI,
			self::F_WAL_BYTES,
			self::F_WAL_BUFFERS_FULL,
			self::F_WAL_WRITE,
			self::F_WAL_SYNC,
			self::F_WAL_WRITE_TIME,
			self::F_WAL_SYNC_TIME,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

