<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatXactSysTables
 * Representation for db table pg_stat_xact_sys_tables.

 * @property  string(oid)  relid         [1]  type:oid    
 * @property  string(name) schemaname    [2]  type:name   
 * @property  string(name) relname       [3]  type:name   
 * @property  int          seq_scan      [4]  type:int8   
 * @property  int          seq_tup_read  [5]  type:int8   
 * @property  int          idx_scan      [6]  type:int8   
 * @property  int          idx_tup_fetch [7]  type:int8   
 * @property  int          n_tup_ins     [8]  type:int8   
 * @property  int          n_tup_upd     [9]  type:int8   
 * @property  int          n_tup_del     [10] type:int8   
 * @property  int          n_tup_hot_upd [11] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatXactSysTables extends DBClass {


	const  FJ_IDX_SCAN      = 'idxScan';
	const  FJ_IDX_TUP_FETCH = 'idxTupFetch';
	const  FJ_N_TUP_DEL     = 'nTupDel';
	const  FJ_N_TUP_HOT_UPD = 'nTupHotUpd';
	const  FJ_N_TUP_INS     = 'nTupIns';
	const  FJ_N_TUP_UPD     = 'nTupUpd';
	const  FJ_RELID         = 'relid';
	const  FJ_RELNAME       = 'relname';
	const  FJ_SCHEMANAME    = 'schemaname';
	const  FJ_SEQ_SCAN      = 'seqScan';
	const  FJ_SEQ_TUP_READ  = 'seqTupRead';
	const  FT_IDX_SCAN      = 'pg_stat_xact_sys_tables.idx_scan';
	const  FT_IDX_TUP_FETCH = 'pg_stat_xact_sys_tables.idx_tup_fetch';
	const  FT_N_TUP_DEL     = 'pg_stat_xact_sys_tables.n_tup_del';
	const  FT_N_TUP_HOT_UPD = 'pg_stat_xact_sys_tables.n_tup_hot_upd';
	const  FT_N_TUP_INS     = 'pg_stat_xact_sys_tables.n_tup_ins';
	const  FT_N_TUP_UPD     = 'pg_stat_xact_sys_tables.n_tup_upd';
	const  FT_RELID         = 'pg_stat_xact_sys_tables.relid';
	const  FT_RELNAME       = 'pg_stat_xact_sys_tables.relname';
	const  FT_SCHEMANAME    = 'pg_stat_xact_sys_tables.schemaname';
	const  FT_SEQ_SCAN      = 'pg_stat_xact_sys_tables.seq_scan';
	const  FT_SEQ_TUP_READ  = 'pg_stat_xact_sys_tables.seq_tup_read';
	const  F_IDX_SCAN       = 'idx_scan';
	const  F_IDX_TUP_FETCH  = 'idx_tup_fetch';
	const  F_N_TUP_DEL      = 'n_tup_del';
	const  F_N_TUP_HOT_UPD  = 'n_tup_hot_upd';
	const  F_N_TUP_INS      = 'n_tup_ins';
	const  F_N_TUP_UPD      = 'n_tup_upd';
	const  F_RELID          = 'relid';
	const  F_RELNAME        = 'relname';
	const  F_SCHEMANAME     = 'schemaname';
	const  F_SEQ_SCAN       = 'seq_scan';
	const  F_SEQ_TUP_READ   = 'seq_tup_read';

    protected $table = 'pg_stat_xact_sys_tables';

	public static array $jsonable = [
		MPgStatXactSysTables::FJ_RELID         =>[ MPgStatXactSysTables::F_RELID         ,null,'string(oid)',  ],
		MPgStatXactSysTables::FJ_SCHEMANAME    =>[ MPgStatXactSysTables::F_SCHEMANAME    ,null,'string(name)', ],
		MPgStatXactSysTables::FJ_RELNAME       =>[ MPgStatXactSysTables::F_RELNAME       ,null,'string(name)', ],
		MPgStatXactSysTables::FJ_SEQ_SCAN      =>[ MPgStatXactSysTables::F_SEQ_SCAN      ,null,'number',       ],
		MPgStatXactSysTables::FJ_SEQ_TUP_READ  =>[ MPgStatXactSysTables::F_SEQ_TUP_READ  ,null,'number',       ],
		MPgStatXactSysTables::FJ_IDX_SCAN      =>[ MPgStatXactSysTables::F_IDX_SCAN      ,null,'number',       ],
		MPgStatXactSysTables::FJ_IDX_TUP_FETCH =>[ MPgStatXactSysTables::F_IDX_TUP_FETCH ,null,'number',       ],
		MPgStatXactSysTables::FJ_N_TUP_INS     =>[ MPgStatXactSysTables::F_N_TUP_INS     ,null,'number',       ],
		MPgStatXactSysTables::FJ_N_TUP_UPD     =>[ MPgStatXactSysTables::F_N_TUP_UPD     ,null,'number',       ],
		MPgStatXactSysTables::FJ_N_TUP_DEL     =>[ MPgStatXactSysTables::F_N_TUP_DEL     ,null,'number',       ],
		MPgStatXactSysTables::FJ_N_TUP_HOT_UPD =>[ MPgStatXactSysTables::F_N_TUP_HOT_UPD ,null,'number',       ],
	];

		protected $visible = [
			self::F_RELID,
			self::F_SCHEMANAME,
			self::F_RELNAME,
			self::F_SEQ_SCAN,
			self::F_SEQ_TUP_READ,
			self::F_IDX_SCAN,
			self::F_IDX_TUP_FETCH,
			self::F_N_TUP_INS,
			self::F_N_TUP_UPD,
			self::F_N_TUP_DEL,
			self::F_N_TUP_HOT_UPD,
		]; 

		protected $fillable = [
		];





}

