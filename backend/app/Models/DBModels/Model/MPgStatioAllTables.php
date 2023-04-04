<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatioAllTables
 * Representation for db table pg_statio_all_tables.

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
class MPgStatioAllTables extends DBClass {


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
	const  FT_HEAP_BLKS_HIT   = 'pg_statio_all_tables.heap_blks_hit';
	const  FT_HEAP_BLKS_READ  = 'pg_statio_all_tables.heap_blks_read';
	const  FT_IDX_BLKS_HIT    = 'pg_statio_all_tables.idx_blks_hit';
	const  FT_IDX_BLKS_READ   = 'pg_statio_all_tables.idx_blks_read';
	const  FT_RELID           = 'pg_statio_all_tables.relid';
	const  FT_RELNAME         = 'pg_statio_all_tables.relname';
	const  FT_SCHEMANAME      = 'pg_statio_all_tables.schemaname';
	const  FT_TIDX_BLKS_HIT   = 'pg_statio_all_tables.tidx_blks_hit';
	const  FT_TIDX_BLKS_READ  = 'pg_statio_all_tables.tidx_blks_read';
	const  FT_TOAST_BLKS_HIT  = 'pg_statio_all_tables.toast_blks_hit';
	const  FT_TOAST_BLKS_READ = 'pg_statio_all_tables.toast_blks_read';
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

    protected $table = 'pg_statio_all_tables';

	public static array $jsonable = [
		MPgStatioAllTables::FJ_RELID           =>[ MPgStatioAllTables::F_RELID           ,null,'string(oid)',  ],
		MPgStatioAllTables::FJ_SCHEMANAME      =>[ MPgStatioAllTables::F_SCHEMANAME      ,null,'string(name)', ],
		MPgStatioAllTables::FJ_RELNAME         =>[ MPgStatioAllTables::F_RELNAME         ,null,'string(name)', ],
		MPgStatioAllTables::FJ_HEAP_BLKS_READ  =>[ MPgStatioAllTables::F_HEAP_BLKS_READ  ,null,'number',       ],
		MPgStatioAllTables::FJ_HEAP_BLKS_HIT   =>[ MPgStatioAllTables::F_HEAP_BLKS_HIT   ,null,'number',       ],
		MPgStatioAllTables::FJ_IDX_BLKS_READ   =>[ MPgStatioAllTables::F_IDX_BLKS_READ   ,null,'number',       ],
		MPgStatioAllTables::FJ_IDX_BLKS_HIT    =>[ MPgStatioAllTables::F_IDX_BLKS_HIT    ,null,'number',       ],
		MPgStatioAllTables::FJ_TOAST_BLKS_READ =>[ MPgStatioAllTables::F_TOAST_BLKS_READ ,null,'number',       ],
		MPgStatioAllTables::FJ_TOAST_BLKS_HIT  =>[ MPgStatioAllTables::F_TOAST_BLKS_HIT  ,null,'number',       ],
		MPgStatioAllTables::FJ_TIDX_BLKS_READ  =>[ MPgStatioAllTables::F_TIDX_BLKS_READ  ,null,'number',       ],
		MPgStatioAllTables::FJ_TIDX_BLKS_HIT   =>[ MPgStatioAllTables::F_TIDX_BLKS_HIT   ,null,'number',       ],
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

