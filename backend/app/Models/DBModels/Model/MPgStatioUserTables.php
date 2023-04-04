<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatioUserTables
 * Representation for db table pg_statio_user_tables.

 * @property  string(oid)  relid           [1]  type:oid    
 * @property  string(name) schemaname      [2]  type:name   
 * @property  string(name) relname         [3]  type:name   
 * @property  int          heap_blks_read  [4]  type:int8   
 * @property  int          heap_blks_hit   [5]  type:int8   
 * @property  int          idx_blks_read   [6]  type:int8   
 * @property  int          idx_blks_hit    [7]  type:int8   
 * @property  int          toast_blks_read [8]  type:int8   
 * @property  int          toast_blks_hit  [9]  type:int8   
 * @property  int          tidx_blks_read  [10] type:int8   
 * @property  int          tidx_blks_hit   [11] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatioUserTables extends DBClass {


	const  FJ_HEAP_BLKS_HIT   = 'heapBlksHit';
	const  FJ_HEAP_BLKS_READ  = 'heapBlksRead';
	const  FJ_IDX_BLKS_HIT    = 'idxBlksHit';
	const  FJ_IDX_BLKS_READ   = 'idxBlksRead';
	const  FJ_RELID           = 'relid';
	const  FJ_RELNAME         = 'relname';
	const  FJ_SCHEMANAME      = 'schemaname';
	const  FJ_TIDX_BLKS_HIT   = 'tidxBlksHit';
	const  FJ_TIDX_BLKS_READ  = 'tidxBlksRead';
	const  FJ_TOAST_BLKS_HIT  = 'toastBlksHit';
	const  FJ_TOAST_BLKS_READ = 'toastBlksRead';
	const  FT_HEAP_BLKS_HIT   = 'pg_statio_user_tables.heap_blks_hit';
	const  FT_HEAP_BLKS_READ  = 'pg_statio_user_tables.heap_blks_read';
	const  FT_IDX_BLKS_HIT    = 'pg_statio_user_tables.idx_blks_hit';
	const  FT_IDX_BLKS_READ   = 'pg_statio_user_tables.idx_blks_read';
	const  FT_RELID           = 'pg_statio_user_tables.relid';
	const  FT_RELNAME         = 'pg_statio_user_tables.relname';
	const  FT_SCHEMANAME      = 'pg_statio_user_tables.schemaname';
	const  FT_TIDX_BLKS_HIT   = 'pg_statio_user_tables.tidx_blks_hit';
	const  FT_TIDX_BLKS_READ  = 'pg_statio_user_tables.tidx_blks_read';
	const  FT_TOAST_BLKS_HIT  = 'pg_statio_user_tables.toast_blks_hit';
	const  FT_TOAST_BLKS_READ = 'pg_statio_user_tables.toast_blks_read';
	const  F_HEAP_BLKS_HIT    = 'heap_blks_hit';
	const  F_HEAP_BLKS_READ   = 'heap_blks_read';
	const  F_IDX_BLKS_HIT     = 'idx_blks_hit';
	const  F_IDX_BLKS_READ    = 'idx_blks_read';
	const  F_RELID            = 'relid';
	const  F_RELNAME          = 'relname';
	const  F_SCHEMANAME       = 'schemaname';
	const  F_TIDX_BLKS_HIT    = 'tidx_blks_hit';
	const  F_TIDX_BLKS_READ   = 'tidx_blks_read';
	const  F_TOAST_BLKS_HIT   = 'toast_blks_hit';
	const  F_TOAST_BLKS_READ  = 'toast_blks_read';

    protected $table = 'pg_statio_user_tables';

	public static array $jsonable = [
		MPgStatioUserTables::FJ_RELID           =>[ MPgStatioUserTables::F_RELID           ,null,'string(oid)',  ],
		MPgStatioUserTables::FJ_SCHEMANAME      =>[ MPgStatioUserTables::F_SCHEMANAME      ,null,'string(name)', ],
		MPgStatioUserTables::FJ_RELNAME         =>[ MPgStatioUserTables::F_RELNAME         ,null,'string(name)', ],
		MPgStatioUserTables::FJ_HEAP_BLKS_READ  =>[ MPgStatioUserTables::F_HEAP_BLKS_READ  ,null,'number',       ],
		MPgStatioUserTables::FJ_HEAP_BLKS_HIT   =>[ MPgStatioUserTables::F_HEAP_BLKS_HIT   ,null,'number',       ],
		MPgStatioUserTables::FJ_IDX_BLKS_READ   =>[ MPgStatioUserTables::F_IDX_BLKS_READ   ,null,'number',       ],
		MPgStatioUserTables::FJ_IDX_BLKS_HIT    =>[ MPgStatioUserTables::F_IDX_BLKS_HIT    ,null,'number',       ],
		MPgStatioUserTables::FJ_TOAST_BLKS_READ =>[ MPgStatioUserTables::F_TOAST_BLKS_READ ,null,'number',       ],
		MPgStatioUserTables::FJ_TOAST_BLKS_HIT  =>[ MPgStatioUserTables::F_TOAST_BLKS_HIT  ,null,'number',       ],
		MPgStatioUserTables::FJ_TIDX_BLKS_READ  =>[ MPgStatioUserTables::F_TIDX_BLKS_READ  ,null,'number',       ],
		MPgStatioUserTables::FJ_TIDX_BLKS_HIT   =>[ MPgStatioUserTables::F_TIDX_BLKS_HIT   ,null,'number',       ],
	];

		protected $visible = [
			self::F_RELID,
			self::F_SCHEMANAME,
			self::F_RELNAME,
			self::F_HEAP_BLKS_READ,
			self::F_HEAP_BLKS_HIT,
			self::F_IDX_BLKS_READ,
			self::F_IDX_BLKS_HIT,
			self::F_TOAST_BLKS_READ,
			self::F_TOAST_BLKS_HIT,
			self::F_TIDX_BLKS_READ,
			self::F_TIDX_BLKS_HIT,
		]; 

		protected $fillable = [
		];





}

