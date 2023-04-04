<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatUserIndexes
 * Representation for db table pg_stat_user_indexes.

 * @property  string(oid)  relid         [1] type:oid    
 * @property  string(oid)  indexrelid    [2] type:oid    
 * @property  string(name) schemaname    [3] type:name   
 * @property  string(name) relname       [4] type:name   
 * @property  string(name) indexrelname  [5] type:name   
 * @property  int          idx_scan      [6] type:int8   
 * @property  int          idx_tup_read  [7] type:int8   
 * @property  int          idx_tup_fetch [8] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatUserIndexes extends DBClass {


	const  FJ_IDX_SCAN      = 'idxScan';
	const  FJ_IDX_TUP_FETCH = 'idxTupFetch';
	const  FJ_IDX_TUP_READ  = 'idxTupRead';
	const  FJ_INDEXRELID    = 'indexrelid';
	const  FJ_INDEXRELNAME  = 'indexrelname';
	const  FJ_RELID         = 'relid';
	const  FJ_RELNAME       = 'relname';
	const  FJ_SCHEMANAME    = 'schemaname';
	const  FT_IDX_SCAN      = 'pg_stat_user_indexes.idx_scan';
	const  FT_IDX_TUP_FETCH = 'pg_stat_user_indexes.idx_tup_fetch';
	const  FT_IDX_TUP_READ  = 'pg_stat_user_indexes.idx_tup_read';
	const  FT_INDEXRELID    = 'pg_stat_user_indexes.indexrelid';
	const  FT_INDEXRELNAME  = 'pg_stat_user_indexes.indexrelname';
	const  FT_RELID         = 'pg_stat_user_indexes.relid';
	const  FT_RELNAME       = 'pg_stat_user_indexes.relname';
	const  FT_SCHEMANAME    = 'pg_stat_user_indexes.schemaname';
	const  F_IDX_SCAN       = 'idx_scan';
	const  F_IDX_TUP_FETCH  = 'idx_tup_fetch';
	const  F_IDX_TUP_READ   = 'idx_tup_read';
	const  F_INDEXRELID     = 'indexrelid';
	const  F_INDEXRELNAME   = 'indexrelname';
	const  F_RELID          = 'relid';
	const  F_RELNAME        = 'relname';
	const  F_SCHEMANAME     = 'schemaname';

    protected $table = 'pg_stat_user_indexes';

	public static array $jsonable = [
		MPgStatUserIndexes::FJ_RELID         =>[ MPgStatUserIndexes::F_RELID         ,null,'string(oid)',  ],
		MPgStatUserIndexes::FJ_INDEXRELID    =>[ MPgStatUserIndexes::F_INDEXRELID    ,null,'string(oid)',  ],
		MPgStatUserIndexes::FJ_SCHEMANAME    =>[ MPgStatUserIndexes::F_SCHEMANAME    ,null,'string(name)', ],
		MPgStatUserIndexes::FJ_RELNAME       =>[ MPgStatUserIndexes::F_RELNAME       ,null,'string(name)', ],
		MPgStatUserIndexes::FJ_INDEXRELNAME  =>[ MPgStatUserIndexes::F_INDEXRELNAME  ,null,'string(name)', ],
		MPgStatUserIndexes::FJ_IDX_SCAN      =>[ MPgStatUserIndexes::F_IDX_SCAN      ,null,'number',       ],
		MPgStatUserIndexes::FJ_IDX_TUP_READ  =>[ MPgStatUserIndexes::F_IDX_TUP_READ  ,null,'number',       ],
		MPgStatUserIndexes::FJ_IDX_TUP_FETCH =>[ MPgStatUserIndexes::F_IDX_TUP_FETCH ,null,'number',       ],
	];

		protected $visible = [
			self::F_RELID,
			self::F_INDEXRELID,
			self::F_SCHEMANAME,
			self::F_RELNAME,
			self::F_INDEXRELNAME,
			self::F_IDX_SCAN,
			self::F_IDX_TUP_READ,
			self::F_IDX_TUP_FETCH,
		]; 

		protected $fillable = [
		];





}

