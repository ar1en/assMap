<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatSlru
 * Representation for db table pg_stat_slru.

 * @property  string              name         [1] type:text          
 * @property  int                 blks_zeroed  [2] type:int8          
 * @property  int                 blks_hit     [3] type:int8          
 * @property  int                 blks_read    [4] type:int8          
 * @property  int                 blks_written [5] type:int8          
 * @property  int                 blks_exists  [6] type:int8          
 * @property  int                 flushes      [7] type:int8          
 * @property  int                 truncates    [8] type:int8          
 * @property  string(timestamptz) stats_reset  [9] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatSlru extends DBClass {


	const  FJ_BLKS_EXISTS  = 'blksExists';
	const  FJ_BLKS_HIT     = 'blksHit';
	const  FJ_BLKS_READ    = 'blksRead';
	const  FJ_BLKS_WRITTEN = 'blksWritten';
	const  FJ_BLKS_ZEROED  = 'blksZeroed';
	const  FJ_FLUSHES      = 'flushes';
	const  FJ_NAME         = 'name';
	const  FJ_STATS_RESET  = 'statsReset';
	const  FJ_TRUNCATES    = 'truncates';
	const  FT_BLKS_EXISTS  = 'pg_stat_slru.blks_exists';
	const  FT_BLKS_HIT     = 'pg_stat_slru.blks_hit';
	const  FT_BLKS_READ    = 'pg_stat_slru.blks_read';
	const  FT_BLKS_WRITTEN = 'pg_stat_slru.blks_written';
	const  FT_BLKS_ZEROED  = 'pg_stat_slru.blks_zeroed';
	const  FT_FLUSHES      = 'pg_stat_slru.flushes';
	const  FT_NAME         = 'pg_stat_slru.name';
	const  FT_STATS_RESET  = 'pg_stat_slru.stats_reset';
	const  FT_TRUNCATES    = 'pg_stat_slru.truncates';
	const  F_BLKS_EXISTS   = 'blks_exists';
	const  F_BLKS_HIT      = 'blks_hit';
	const  F_BLKS_READ     = 'blks_read';
	const  F_BLKS_WRITTEN  = 'blks_written';
	const  F_BLKS_ZEROED   = 'blks_zeroed';
	const  F_FLUSHES       = 'flushes';
	const  F_NAME          = 'name';
	const  F_STATS_RESET   = 'stats_reset';
	const  F_TRUNCATES     = 'truncates';

    protected $table = 'pg_stat_slru';

	public static array $jsonable = [
		MPgStatSlru::FJ_NAME         =>[ MPgStatSlru::F_NAME         ,null,'string',              ],
		MPgStatSlru::FJ_BLKS_ZEROED  =>[ MPgStatSlru::F_BLKS_ZEROED  ,null,'number',              ],
		MPgStatSlru::FJ_BLKS_HIT     =>[ MPgStatSlru::F_BLKS_HIT     ,null,'number',              ],
		MPgStatSlru::FJ_BLKS_READ    =>[ MPgStatSlru::F_BLKS_READ    ,null,'number',              ],
		MPgStatSlru::FJ_BLKS_WRITTEN =>[ MPgStatSlru::F_BLKS_WRITTEN ,null,'number',              ],
		MPgStatSlru::FJ_BLKS_EXISTS  =>[ MPgStatSlru::F_BLKS_EXISTS  ,null,'number',              ],
		MPgStatSlru::FJ_FLUSHES      =>[ MPgStatSlru::F_FLUSHES      ,null,'number',              ],
		MPgStatSlru::FJ_TRUNCATES    =>[ MPgStatSlru::F_TRUNCATES    ,null,'number',              ],
		MPgStatSlru::FJ_STATS_RESET  =>[ MPgStatSlru::F_STATS_RESET  ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_BLKS_ZEROED,
			self::F_BLKS_HIT,
			self::F_BLKS_READ,
			self::F_BLKS_WRITTEN,
			self::F_BLKS_EXISTS,
			self::F_FLUSHES,
			self::F_TRUNCATES,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

