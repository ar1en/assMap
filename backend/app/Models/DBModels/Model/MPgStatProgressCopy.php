<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressCopy
 * Representation for db table pg_stat_progress_copy.

 * @property  int          pid              [1]  type:int4   
 * @property  string(oid)  datid            [2]  type:oid    
 * @property  string(name) datname          [3]  type:name   
 * @property  string(oid)  relid            [4]  type:oid    
 * @property  string       command          [5]  type:text   
 * @property  string       type             [6]  type:text   
 * @property  int          bytes_processed  [7]  type:int8   
 * @property  int          bytes_total      [8]  type:int8   
 * @property  int          tuples_processed [9]  type:int8   
 * @property  int          tuples_excluded  [10] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressCopy extends DBClass {


	const  FJ_BYTES_PROCESSED  = 'bytesProcessed';
	const  FJ_BYTES_TOTAL      = 'bytesTotal';
	const  FJ_COMMAND          = 'command';
	const  FJ_DATID            = 'datid';
	const  FJ_DATNAME          = 'datname';
	const  FJ_PID              = 'pid';
	const  FJ_RELID            = 'relid';
	const  FJ_TUPLES_EXCLUDED  = 'tuplesExcluded';
	const  FJ_TUPLES_PROCESSED = 'tuplesProcessed';
	const  FJ_TYPE             = 'type';
	const  FT_BYTES_PROCESSED  = 'pg_stat_progress_copy.bytes_processed';
	const  FT_BYTES_TOTAL      = 'pg_stat_progress_copy.bytes_total';
	const  FT_COMMAND          = 'pg_stat_progress_copy.command';
	const  FT_DATID            = 'pg_stat_progress_copy.datid';
	const  FT_DATNAME          = 'pg_stat_progress_copy.datname';
	const  FT_PID              = 'pg_stat_progress_copy.pid';
	const  FT_RELID            = 'pg_stat_progress_copy.relid';
	const  FT_TUPLES_EXCLUDED  = 'pg_stat_progress_copy.tuples_excluded';
	const  FT_TUPLES_PROCESSED = 'pg_stat_progress_copy.tuples_processed';
	const  FT_TYPE             = 'pg_stat_progress_copy.type';
	const  F_BYTES_PROCESSED   = 'bytes_processed';
	const  F_BYTES_TOTAL       = 'bytes_total';
	const  F_COMMAND           = 'command';
	const  F_DATID             = 'datid';
	const  F_DATNAME           = 'datname';
	const  F_PID               = 'pid';
	const  F_RELID             = 'relid';
	const  F_TUPLES_EXCLUDED   = 'tuples_excluded';
	const  F_TUPLES_PROCESSED  = 'tuples_processed';
	const  F_TYPE              = 'type';

    protected $table = 'pg_stat_progress_copy';

	public static array $jsonable = [
		MPgStatProgressCopy::FJ_PID              =>[ MPgStatProgressCopy::F_PID              ,null,'number',       ],
		MPgStatProgressCopy::FJ_DATID            =>[ MPgStatProgressCopy::F_DATID            ,null,'string(oid)',  ],
		MPgStatProgressCopy::FJ_DATNAME          =>[ MPgStatProgressCopy::F_DATNAME          ,null,'string(name)', ],
		MPgStatProgressCopy::FJ_RELID            =>[ MPgStatProgressCopy::F_RELID            ,null,'string(oid)',  ],
		MPgStatProgressCopy::FJ_COMMAND          =>[ MPgStatProgressCopy::F_COMMAND          ,null,'string',       ],
		MPgStatProgressCopy::FJ_TYPE             =>[ MPgStatProgressCopy::F_TYPE             ,null,'string',       ],
		MPgStatProgressCopy::FJ_BYTES_PROCESSED  =>[ MPgStatProgressCopy::F_BYTES_PROCESSED  ,null,'number',       ],
		MPgStatProgressCopy::FJ_BYTES_TOTAL      =>[ MPgStatProgressCopy::F_BYTES_TOTAL      ,null,'number',       ],
		MPgStatProgressCopy::FJ_TUPLES_PROCESSED =>[ MPgStatProgressCopy::F_TUPLES_PROCESSED ,null,'number',       ],
		MPgStatProgressCopy::FJ_TUPLES_EXCLUDED  =>[ MPgStatProgressCopy::F_TUPLES_EXCLUDED  ,null,'number',       ],
	];

		protected $visible = [
			self::F_PID,
			self::F_DATID,
			self::F_DATNAME,
			self::F_RELID,
			self::F_COMMAND,
			self::F_TYPE,
			self::F_BYTES_PROCESSED,
			self::F_BYTES_TOTAL,
			self::F_TUPLES_PROCESSED,
			self::F_TUPLES_EXCLUDED,
		]; 

		protected $fillable = [
		];





}

