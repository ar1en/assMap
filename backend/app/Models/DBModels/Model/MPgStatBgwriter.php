<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatBgwriter
 * Representation for db table pg_stat_bgwriter.

 * @property  int                 checkpoints_timed     [1]  type:int8          
 * @property  int                 checkpoints_req       [2]  type:int8          
 * @property  string(float8)      checkpoint_write_time [3]  type:float8        
 * @property  string(float8)      checkpoint_sync_time  [4]  type:float8        
 * @property  int                 buffers_checkpoint    [5]  type:int8          
 * @property  int                 buffers_clean         [6]  type:int8          
 * @property  int                 maxwritten_clean      [7]  type:int8          
 * @property  int                 buffers_backend       [8]  type:int8          
 * @property  int                 buffers_backend_fsync [9]  type:int8          
 * @property  int                 buffers_alloc         [10] type:int8          
 * @property  string(timestamptz) stats_reset           [11] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatBgwriter extends DBClass {


	const  FJ_BUFFERS_ALLOC         = 'buffersAlloc';
	const  FJ_BUFFERS_BACKEND       = 'buffersBackend';
	const  FJ_BUFFERS_BACKEND_FSYNC = 'buffersBackendFsync';
	const  FJ_BUFFERS_CHECKPOINT    = 'buffersCheckpoint';
	const  FJ_BUFFERS_CLEAN         = 'buffersClean';
	const  FJ_CHECKPOINTS_REQ       = 'checkpointsReq';
	const  FJ_CHECKPOINTS_TIMED     = 'checkpointsTimed';
	const  FJ_CHECKPOINT_SYNC_TIME  = 'checkpointSyncTime';
	const  FJ_CHECKPOINT_WRITE_TIME = 'checkpointWriteTime';
	const  FJ_MAXWRITTEN_CLEAN      = 'maxwrittenClean';
	const  FJ_STATS_RESET           = 'statsReset';
	const  FT_BUFFERS_ALLOC         = 'pg_stat_bgwriter.buffers_alloc';
	const  FT_BUFFERS_BACKEND       = 'pg_stat_bgwriter.buffers_backend';
	const  FT_BUFFERS_BACKEND_FSYNC = 'pg_stat_bgwriter.buffers_backend_fsync';
	const  FT_BUFFERS_CHECKPOINT    = 'pg_stat_bgwriter.buffers_checkpoint';
	const  FT_BUFFERS_CLEAN         = 'pg_stat_bgwriter.buffers_clean';
	const  FT_CHECKPOINTS_REQ       = 'pg_stat_bgwriter.checkpoints_req';
	const  FT_CHECKPOINTS_TIMED     = 'pg_stat_bgwriter.checkpoints_timed';
	const  FT_CHECKPOINT_SYNC_TIME  = 'pg_stat_bgwriter.checkpoint_sync_time';
	const  FT_CHECKPOINT_WRITE_TIME = 'pg_stat_bgwriter.checkpoint_write_time';
	const  FT_MAXWRITTEN_CLEAN      = 'pg_stat_bgwriter.maxwritten_clean';
	const  FT_STATS_RESET           = 'pg_stat_bgwriter.stats_reset';
	const  F_BUFFERS_ALLOC          = 'buffers_alloc';
	const  F_BUFFERS_BACKEND        = 'buffers_backend';
	const  F_BUFFERS_BACKEND_FSYNC  = 'buffers_backend_fsync';
	const  F_BUFFERS_CHECKPOINT     = 'buffers_checkpoint';
	const  F_BUFFERS_CLEAN          = 'buffers_clean';
	const  F_CHECKPOINTS_REQ        = 'checkpoints_req';
	const  F_CHECKPOINTS_TIMED      = 'checkpoints_timed';
	const  F_CHECKPOINT_SYNC_TIME   = 'checkpoint_sync_time';
	const  F_CHECKPOINT_WRITE_TIME  = 'checkpoint_write_time';
	const  F_MAXWRITTEN_CLEAN       = 'maxwritten_clean';
	const  F_STATS_RESET            = 'stats_reset';

    protected $table = 'pg_stat_bgwriter';

	public static array $jsonable = [
		MPgStatBgwriter::FJ_CHECKPOINTS_TIMED     =>[ MPgStatBgwriter::F_CHECKPOINTS_TIMED     ,null,'number',              ],
		MPgStatBgwriter::FJ_CHECKPOINTS_REQ       =>[ MPgStatBgwriter::F_CHECKPOINTS_REQ       ,null,'number',              ],
		MPgStatBgwriter::FJ_CHECKPOINT_WRITE_TIME =>[ MPgStatBgwriter::F_CHECKPOINT_WRITE_TIME ,null,'string(float8)',      ],
		MPgStatBgwriter::FJ_CHECKPOINT_SYNC_TIME  =>[ MPgStatBgwriter::F_CHECKPOINT_SYNC_TIME  ,null,'string(float8)',      ],
		MPgStatBgwriter::FJ_BUFFERS_CHECKPOINT    =>[ MPgStatBgwriter::F_BUFFERS_CHECKPOINT    ,null,'number',              ],
		MPgStatBgwriter::FJ_BUFFERS_CLEAN         =>[ MPgStatBgwriter::F_BUFFERS_CLEAN         ,null,'number',              ],
		MPgStatBgwriter::FJ_MAXWRITTEN_CLEAN      =>[ MPgStatBgwriter::F_MAXWRITTEN_CLEAN      ,null,'number',              ],
		MPgStatBgwriter::FJ_BUFFERS_BACKEND       =>[ MPgStatBgwriter::F_BUFFERS_BACKEND       ,null,'number',              ],
		MPgStatBgwriter::FJ_BUFFERS_BACKEND_FSYNC =>[ MPgStatBgwriter::F_BUFFERS_BACKEND_FSYNC ,null,'number',              ],
		MPgStatBgwriter::FJ_BUFFERS_ALLOC         =>[ MPgStatBgwriter::F_BUFFERS_ALLOC         ,null,'number',              ],
		MPgStatBgwriter::FJ_STATS_RESET           =>[ MPgStatBgwriter::F_STATS_RESET           ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_CHECKPOINTS_TIMED,
			self::F_CHECKPOINTS_REQ,
			self::F_CHECKPOINT_WRITE_TIME,
			self::F_CHECKPOINT_SYNC_TIME,
			self::F_BUFFERS_CHECKPOINT,
			self::F_BUFFERS_CLEAN,
			self::F_MAXWRITTEN_CLEAN,
			self::F_BUFFERS_BACKEND,
			self::F_BUFFERS_BACKEND_FSYNC,
			self::F_BUFFERS_ALLOC,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

