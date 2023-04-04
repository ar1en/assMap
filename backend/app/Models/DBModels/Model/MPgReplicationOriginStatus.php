<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgReplicationOriginStatus
 * Representation for db table pg_replication_origin_status.

 * @property  string(oid)    local_id    [1] type:oid      
 * @property  string         external_id [2] type:text     
 * @property  string(pg_lsn) remote_lsn  [3] type:pg_lsn   
 * @property  string(pg_lsn) local_lsn   [4] type:pg_lsn   
 * @package App\Models\DBModels\Model
 */
class MPgReplicationOriginStatus extends DBClass {


	const  FJ_EXTERNAL_ID = 'externalId';
	const  FJ_LOCAL_ID    = 'localId';
	const  FJ_LOCAL_LSN   = 'localLsn';
	const  FJ_REMOTE_LSN  = 'remoteLsn';
	const  FT_EXTERNAL_ID = 'pg_replication_origin_status.external_id';
	const  FT_LOCAL_ID    = 'pg_replication_origin_status.local_id';
	const  FT_LOCAL_LSN   = 'pg_replication_origin_status.local_lsn';
	const  FT_REMOTE_LSN  = 'pg_replication_origin_status.remote_lsn';
	const  F_EXTERNAL_ID  = 'external_id';
	const  F_LOCAL_ID     = 'local_id';
	const  F_LOCAL_LSN    = 'local_lsn';
	const  F_REMOTE_LSN   = 'remote_lsn';

    protected $table = 'pg_replication_origin_status';

	public static array $jsonable = [
		MPgReplicationOriginStatus::FJ_LOCAL_ID    =>[ MPgReplicationOriginStatus::F_LOCAL_ID    ,null,'string(oid)',    ],
		MPgReplicationOriginStatus::FJ_EXTERNAL_ID =>[ MPgReplicationOriginStatus::F_EXTERNAL_ID ,null,'string',         ],
		MPgReplicationOriginStatus::FJ_REMOTE_LSN  =>[ MPgReplicationOriginStatus::F_REMOTE_LSN  ,null,'string(pg_lsn)', ],
		MPgReplicationOriginStatus::FJ_LOCAL_LSN   =>[ MPgReplicationOriginStatus::F_LOCAL_LSN   ,null,'string(pg_lsn)', ],
	];

		protected $visible = [
			self::F_LOCAL_ID,
			self::F_EXTERNAL_ID,
			self::F_REMOTE_LSN,
			self::F_LOCAL_LSN,
		]; 

		protected $fillable = [
		];





}

