<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatioSysIndexes
 * Representation for db table pg_statio_sys_indexes.

 * @property  string(oid)  relid         [1] type:oid    
 * @property  string(oid)  indexrelid    [2] type:oid    
 * @property  string(name) schemaname    [3] type:name   
 * @property  string(name) relname       [4] type:name   
 * @property  string(name) indexrelname  [5] type:name   
 * @property  int          idx_blks_read [6] type:int8   
 * @property  int          idx_blks_hit  [7] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatioSysIndexes extends DBClass {


	const  FJ_IDX_BLKS_HIT  = 'idxBlksHit';
	const  FJ_IDX_BLKS_READ = 'idxBlksRead';
	const  FJ_INDEXRELID    = 'indexrelid';
	const  FJ_INDEXRELNAME  = 'indexrelname';
	const  FJ_RELID         = 'relid';
	const  FJ_RELNAME       = 'relname';
	const  FJ_SCHEMANAME    = 'schemaname';
	const  FT_IDX_BLKS_HIT  = 'pg_statio_sys_indexes.idx_blks_hit';
	const  FT_IDX_BLKS_READ = 'pg_statio_sys_indexes.idx_blks_read';
	const  FT_INDEXRELID    = 'pg_statio_sys_indexes.indexrelid';
	const  FT_INDEXRELNAME  = 'pg_statio_sys_indexes.indexrelname';
	const  FT_RELID         = 'pg_statio_sys_indexes.relid';
	const  FT_RELNAME       = 'pg_statio_sys_indexes.relname';
	const  FT_SCHEMANAME    = 'pg_statio_sys_indexes.schemaname';
	const  F_IDX_BLKS_HIT   = 'idx_blks_hit';
	const  F_IDX_BLKS_READ  = 'idx_blks_read';
	const  F_INDEXRELID     = 'indexrelid';
	const  F_INDEXRELNAME   = 'indexrelname';
	const  F_RELID          = 'relid';
	const  F_RELNAME        = 'relname';
	const  F_SCHEMANAME     = 'schemaname';

    protected $table = 'pg_statio_sys_indexes';

	public static array $jsonable = [
		MPgStatioSysIndexes::FJ_RELID         =>[ MPgStatioSysIndexes::F_RELID         ,null,'string(oid)',  ],
		MPgStatioSysIndexes::FJ_INDEXRELID    =>[ MPgStatioSysIndexes::F_INDEXRELID    ,null,'string(oid)',  ],
		MPgStatioSysIndexes::FJ_SCHEMANAME    =>[ MPgStatioSysIndexes::F_SCHEMANAME    ,null,'string(name)', ],
		MPgStatioSysIndexes::FJ_RELNAME       =>[ MPgStatioSysIndexes::F_RELNAME       ,null,'string(name)', ],
		MPgStatioSysIndexes::FJ_INDEXRELNAME  =>[ MPgStatioSysIndexes::F_INDEXRELNAME  ,null,'string(name)', ],
		MPgStatioSysIndexes::FJ_IDX_BLKS_READ =>[ MPgStatioSysIndexes::F_IDX_BLKS_READ ,null,'number',       ],
		MPgStatioSysIndexes::FJ_IDX_BLKS_HIT  =>[ MPgStatioSysIndexes::F_IDX_BLKS_HIT  ,null,'number',       ],
	];

		protected $visible = [
			self::F_RELID,
			self::F_INDEXRELID,
			self::F_SCHEMANAME,
			self::F_RELNAME,
			self::F_INDEXRELNAME,
			self::F_IDX_BLKS_READ,
			self::F_IDX_BLKS_HIT,
		]; 

		protected $fillable = [
		];





}

