<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatUserTables
 * Representation for db table pg_stat_user_tables.

 * @property  string(oid)         relid               [1]  type:oid           
 * @property  string(name)        schemaname          [2]  type:name          
 * @property  string(name)        relname             [3]  type:name          
 * @property  int                 seq_scan            [4]  type:int8          
 * @property  int                 seq_tup_read        [5]  type:int8          
 * @property  int                 idx_scan            [6]  type:int8          
 * @property  int                 idx_tup_fetch       [7]  type:int8          
 * @property  int                 n_tup_ins           [8]  type:int8          
 * @property  int                 n_tup_upd           [9]  type:int8          
 * @property  int                 n_tup_del           [10] type:int8          
 * @property  int                 n_tup_hot_upd       [11] type:int8          
 * @property  int                 n_live_tup          [12] type:int8          
 * @property  int                 n_dead_tup          [13] type:int8          
 * @property  int                 n_mod_since_analyze [14] type:int8          
 * @property  int                 n_ins_since_vacuum  [15] type:int8          
 * @property  string(timestamptz) last_vacuum         [16] type:timestamptz   
 * @property  string(timestamptz) last_autovacuum     [17] type:timestamptz   
 * @property  string(timestamptz) last_analyze        [18] type:timestamptz   
 * @property  string(timestamptz) last_autoanalyze    [19] type:timestamptz   
 * @property  int                 vacuum_count        [20] type:int8          
 * @property  int                 autovacuum_count    [21] type:int8          
 * @property  int                 analyze_count       [22] type:int8          
 * @property  int                 autoanalyze_count   [23] type:int8          
 * @package App\Models\DBModels\Model
 */
class MPgStatUserTables extends DBClass {


	const  FJ_ANALYZE_COUNT       = 'analyzeCount';
	const  FJ_AUTOANALYZE_COUNT   = 'autoanalyzeCount';
	const  FJ_AUTOVACUUM_COUNT    = 'autovacuumCount';
	const  FJ_IDX_SCAN            = 'idxScan';
	const  FJ_IDX_TUP_FETCH       = 'idxTupFetch';
	const  FJ_LAST_ANALYZE        = 'lastAnalyze';
	const  FJ_LAST_AUTOANALYZE    = 'lastAutoanalyze';
	const  FJ_LAST_AUTOVACUUM     = 'lastAutovacuum';
	const  FJ_LAST_VACUUM         = 'lastVacuum';
	const  FJ_N_DEAD_TUP          = 'nDeadTup';
	const  FJ_N_INS_SINCE_VACUUM  = 'nInsSinceVacuum';
	const  FJ_N_LIVE_TUP          = 'nLiveTup';
	const  FJ_N_MOD_SINCE_ANALYZE = 'nModSinceAnalyze';
	const  FJ_N_TUP_DEL           = 'nTupDel';
	const  FJ_N_TUP_HOT_UPD       = 'nTupHotUpd';
	const  FJ_N_TUP_INS           = 'nTupIns';
	const  FJ_N_TUP_UPD           = 'nTupUpd';
	const  FJ_RELID               = 'relid';
	const  FJ_RELNAME             = 'relname';
	const  FJ_SCHEMANAME          = 'schemaname';
	const  FJ_SEQ_SCAN            = 'seqScan';
	const  FJ_SEQ_TUP_READ        = 'seqTupRead';
	const  FJ_VACUUM_COUNT        = 'vacuumCount';
	const  FT_ANALYZE_COUNT       = 'pg_stat_user_tables.analyze_count';
	const  FT_AUTOANALYZE_COUNT   = 'pg_stat_user_tables.autoanalyze_count';
	const  FT_AUTOVACUUM_COUNT    = 'pg_stat_user_tables.autovacuum_count';
	const  FT_IDX_SCAN            = 'pg_stat_user_tables.idx_scan';
	const  FT_IDX_TUP_FETCH       = 'pg_stat_user_tables.idx_tup_fetch';
	const  FT_LAST_ANALYZE        = 'pg_stat_user_tables.last_analyze';
	const  FT_LAST_AUTOANALYZE    = 'pg_stat_user_tables.last_autoanalyze';
	const  FT_LAST_AUTOVACUUM     = 'pg_stat_user_tables.last_autovacuum';
	const  FT_LAST_VACUUM         = 'pg_stat_user_tables.last_vacuum';
	const  FT_N_DEAD_TUP          = 'pg_stat_user_tables.n_dead_tup';
	const  FT_N_INS_SINCE_VACUUM  = 'pg_stat_user_tables.n_ins_since_vacuum';
	const  FT_N_LIVE_TUP          = 'pg_stat_user_tables.n_live_tup';
	const  FT_N_MOD_SINCE_ANALYZE = 'pg_stat_user_tables.n_mod_since_analyze';
	const  FT_N_TUP_DEL           = 'pg_stat_user_tables.n_tup_del';
	const  FT_N_TUP_HOT_UPD       = 'pg_stat_user_tables.n_tup_hot_upd';
	const  FT_N_TUP_INS           = 'pg_stat_user_tables.n_tup_ins';
	const  FT_N_TUP_UPD           = 'pg_stat_user_tables.n_tup_upd';
	const  FT_RELID               = 'pg_stat_user_tables.relid';
	const  FT_RELNAME             = 'pg_stat_user_tables.relname';
	const  FT_SCHEMANAME          = 'pg_stat_user_tables.schemaname';
	const  FT_SEQ_SCAN            = 'pg_stat_user_tables.seq_scan';
	const  FT_SEQ_TUP_READ        = 'pg_stat_user_tables.seq_tup_read';
	const  FT_VACUUM_COUNT        = 'pg_stat_user_tables.vacuum_count';
	const  F_ANALYZE_COUNT        = 'analyze_count';
	const  F_AUTOANALYZE_COUNT    = 'autoanalyze_count';
	const  F_AUTOVACUUM_COUNT     = 'autovacuum_count';
	const  F_IDX_SCAN             = 'idx_scan';
	const  F_IDX_TUP_FETCH        = 'idx_tup_fetch';
	const  F_LAST_ANALYZE         = 'last_analyze';
	const  F_LAST_AUTOANALYZE     = 'last_autoanalyze';
	const  F_LAST_AUTOVACUUM      = 'last_autovacuum';
	const  F_LAST_VACUUM          = 'last_vacuum';
	const  F_N_DEAD_TUP           = 'n_dead_tup';
	const  F_N_INS_SINCE_VACUUM   = 'n_ins_since_vacuum';
	const  F_N_LIVE_TUP           = 'n_live_tup';
	const  F_N_MOD_SINCE_ANALYZE  = 'n_mod_since_analyze';
	const  F_N_TUP_DEL            = 'n_tup_del';
	const  F_N_TUP_HOT_UPD        = 'n_tup_hot_upd';
	const  F_N_TUP_INS            = 'n_tup_ins';
	const  F_N_TUP_UPD            = 'n_tup_upd';
	const  F_RELID                = 'relid';
	const  F_RELNAME              = 'relname';
	const  F_SCHEMANAME           = 'schemaname';
	const  F_SEQ_SCAN             = 'seq_scan';
	const  F_SEQ_TUP_READ         = 'seq_tup_read';
	const  F_VACUUM_COUNT         = 'vacuum_count';

    protected $table = 'pg_stat_user_tables';

	public static array $jsonable = [
		MPgStatUserTables::FJ_RELID               =>[ MPgStatUserTables::F_RELID               ,null,'string(oid)',         ],
		MPgStatUserTables::FJ_SCHEMANAME          =>[ MPgStatUserTables::F_SCHEMANAME          ,null,'string(name)',        ],
		MPgStatUserTables::FJ_RELNAME             =>[ MPgStatUserTables::F_RELNAME             ,null,'string(name)',        ],
		MPgStatUserTables::FJ_SEQ_SCAN            =>[ MPgStatUserTables::F_SEQ_SCAN            ,null,'number',              ],
		MPgStatUserTables::FJ_SEQ_TUP_READ        =>[ MPgStatUserTables::F_SEQ_TUP_READ        ,null,'number',              ],
		MPgStatUserTables::FJ_IDX_SCAN            =>[ MPgStatUserTables::F_IDX_SCAN            ,null,'number',              ],
		MPgStatUserTables::FJ_IDX_TUP_FETCH       =>[ MPgStatUserTables::F_IDX_TUP_FETCH       ,null,'number',              ],
		MPgStatUserTables::FJ_N_TUP_INS           =>[ MPgStatUserTables::F_N_TUP_INS           ,null,'number',              ],
		MPgStatUserTables::FJ_N_TUP_UPD           =>[ MPgStatUserTables::F_N_TUP_UPD           ,null,'number',              ],
		MPgStatUserTables::FJ_N_TUP_DEL           =>[ MPgStatUserTables::F_N_TUP_DEL           ,null,'number',              ],
		MPgStatUserTables::FJ_N_TUP_HOT_UPD       =>[ MPgStatUserTables::F_N_TUP_HOT_UPD       ,null,'number',              ],
		MPgStatUserTables::FJ_N_LIVE_TUP          =>[ MPgStatUserTables::F_N_LIVE_TUP          ,null,'number',              ],
		MPgStatUserTables::FJ_N_DEAD_TUP          =>[ MPgStatUserTables::F_N_DEAD_TUP          ,null,'number',              ],
		MPgStatUserTables::FJ_N_MOD_SINCE_ANALYZE =>[ MPgStatUserTables::F_N_MOD_SINCE_ANALYZE ,null,'number',              ],
		MPgStatUserTables::FJ_N_INS_SINCE_VACUUM  =>[ MPgStatUserTables::F_N_INS_SINCE_VACUUM  ,null,'number',              ],
		MPgStatUserTables::FJ_LAST_VACUUM         =>[ MPgStatUserTables::F_LAST_VACUUM         ,null,'string(timestamptz)', ],
		MPgStatUserTables::FJ_LAST_AUTOVACUUM     =>[ MPgStatUserTables::F_LAST_AUTOVACUUM     ,null,'string(timestamptz)', ],
		MPgStatUserTables::FJ_LAST_ANALYZE        =>[ MPgStatUserTables::F_LAST_ANALYZE        ,null,'string(timestamptz)', ],
		MPgStatUserTables::FJ_LAST_AUTOANALYZE    =>[ MPgStatUserTables::F_LAST_AUTOANALYZE    ,null,'string(timestamptz)', ],
		MPgStatUserTables::FJ_VACUUM_COUNT        =>[ MPgStatUserTables::F_VACUUM_COUNT        ,null,'number',              ],
		MPgStatUserTables::FJ_AUTOVACUUM_COUNT    =>[ MPgStatUserTables::F_AUTOVACUUM_COUNT    ,null,'number',              ],
		MPgStatUserTables::FJ_ANALYZE_COUNT       =>[ MPgStatUserTables::F_ANALYZE_COUNT       ,null,'number',              ],
		MPgStatUserTables::FJ_AUTOANALYZE_COUNT   =>[ MPgStatUserTables::F_AUTOANALYZE_COUNT   ,null,'number',              ],
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
			self::F_N_LIVE_TUP,
			self::F_N_DEAD_TUP,
			self::F_N_MOD_SINCE_ANALYZE,
			self::F_N_INS_SINCE_VACUUM,
			self::F_LAST_VACUUM,
			self::F_LAST_AUTOVACUUM,
			self::F_LAST_ANALYZE,
			self::F_LAST_AUTOANALYZE,
			self::F_VACUUM_COUNT,
			self::F_AUTOVACUUM_COUNT,
			self::F_ANALYZE_COUNT,
			self::F_AUTOANALYZE_COUNT,
		]; 

		protected $fillable = [
		];





}

