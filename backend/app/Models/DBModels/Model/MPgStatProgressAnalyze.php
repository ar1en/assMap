<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressAnalyze
 * Representation for db table pg_stat_progress_analyze.

 * @property  int          pid                       [1]  type:int4   
 * @property  string(oid)  datid                     [2]  type:oid    
 * @property  string(name) datname                   [3]  type:name   
 * @property  string(oid)  relid                     [4]  type:oid    
 * @property  string       phase                     [5]  type:text   
 * @property  int          sample_blks_total         [6]  type:int8   
 * @property  int          sample_blks_scanned       [7]  type:int8   
 * @property  int          ext_stats_total           [8]  type:int8   
 * @property  int          ext_stats_computed        [9]  type:int8   
 * @property  int          child_tables_total        [10] type:int8   
 * @property  int          child_tables_done         [11] type:int8   
 * @property  string(oid)  current_child_table_relid [12] type:oid    
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressAnalyze extends DBClass {


	const  FJ_CHILD_TABLES_DONE         = 'childTablesDone';
	const  FJ_CHILD_TABLES_TOTAL        = 'childTablesTotal';
	const  FJ_CURRENT_CHILD_TABLE_RELID = 'currentChildTableRelid';
	const  FJ_DATID                     = 'datid';
	const  FJ_DATNAME                   = 'datname';
	const  FJ_EXT_STATS_COMPUTED        = 'extStatsComputed';
	const  FJ_EXT_STATS_TOTAL           = 'extStatsTotal';
	const  FJ_PHASE                     = 'phase';
	const  FJ_PID                       = 'pid';
	const  FJ_RELID                     = 'relid';
	const  FJ_SAMPLE_BLKS_SCANNED       = 'sampleBlksScanned';
	const  FJ_SAMPLE_BLKS_TOTAL         = 'sampleBlksTotal';
	const  FT_CHILD_TABLES_DONE         = 'pg_stat_progress_analyze.child_tables_done';
	const  FT_CHILD_TABLES_TOTAL        = 'pg_stat_progress_analyze.child_tables_total';
	const  FT_CURRENT_CHILD_TABLE_RELID = 'pg_stat_progress_analyze.current_child_table_relid';
	const  FT_DATID                     = 'pg_stat_progress_analyze.datid';
	const  FT_DATNAME                   = 'pg_stat_progress_analyze.datname';
	const  FT_EXT_STATS_COMPUTED        = 'pg_stat_progress_analyze.ext_stats_computed';
	const  FT_EXT_STATS_TOTAL           = 'pg_stat_progress_analyze.ext_stats_total';
	const  FT_PHASE                     = 'pg_stat_progress_analyze.phase';
	const  FT_PID                       = 'pg_stat_progress_analyze.pid';
	const  FT_RELID                     = 'pg_stat_progress_analyze.relid';
	const  FT_SAMPLE_BLKS_SCANNED       = 'pg_stat_progress_analyze.sample_blks_scanned';
	const  FT_SAMPLE_BLKS_TOTAL         = 'pg_stat_progress_analyze.sample_blks_total';
	const  F_CHILD_TABLES_DONE          = 'child_tables_done';
	const  F_CHILD_TABLES_TOTAL         = 'child_tables_total';
	const  F_CURRENT_CHILD_TABLE_RELID  = 'current_child_table_relid';
	const  F_DATID                      = 'datid';
	const  F_DATNAME                    = 'datname';
	const  F_EXT_STATS_COMPUTED         = 'ext_stats_computed';
	const  F_EXT_STATS_TOTAL            = 'ext_stats_total';
	const  F_PHASE                      = 'phase';
	const  F_PID                        = 'pid';
	const  F_RELID                      = 'relid';
	const  F_SAMPLE_BLKS_SCANNED        = 'sample_blks_scanned';
	const  F_SAMPLE_BLKS_TOTAL          = 'sample_blks_total';

    protected $table = 'pg_stat_progress_analyze';

	public static array $jsonable = [
		MPgStatProgressAnalyze::FJ_PID                       =>[ MPgStatProgressAnalyze::F_PID                       ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_DATID                     =>[ MPgStatProgressAnalyze::F_DATID                     ,null,'string(oid)',  ],
		MPgStatProgressAnalyze::FJ_DATNAME                   =>[ MPgStatProgressAnalyze::F_DATNAME                   ,null,'string(name)', ],
		MPgStatProgressAnalyze::FJ_RELID                     =>[ MPgStatProgressAnalyze::F_RELID                     ,null,'string(oid)',  ],
		MPgStatProgressAnalyze::FJ_PHASE                     =>[ MPgStatProgressAnalyze::F_PHASE                     ,null,'string',       ],
		MPgStatProgressAnalyze::FJ_SAMPLE_BLKS_TOTAL         =>[ MPgStatProgressAnalyze::F_SAMPLE_BLKS_TOTAL         ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_SAMPLE_BLKS_SCANNED       =>[ MPgStatProgressAnalyze::F_SAMPLE_BLKS_SCANNED       ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_EXT_STATS_TOTAL           =>[ MPgStatProgressAnalyze::F_EXT_STATS_TOTAL           ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_EXT_STATS_COMPUTED        =>[ MPgStatProgressAnalyze::F_EXT_STATS_COMPUTED        ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_CHILD_TABLES_TOTAL        =>[ MPgStatProgressAnalyze::F_CHILD_TABLES_TOTAL        ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_CHILD_TABLES_DONE         =>[ MPgStatProgressAnalyze::F_CHILD_TABLES_DONE         ,null,'number',       ],
		MPgStatProgressAnalyze::FJ_CURRENT_CHILD_TABLE_RELID =>[ MPgStatProgressAnalyze::F_CURRENT_CHILD_TABLE_RELID ,null,'string(oid)',  ],
	];

		protected $visible = [
			self::F_PID,
			self::F_DATID,
			self::F_DATNAME,
			self::F_RELID,
			self::F_PHASE,
			self::F_SAMPLE_BLKS_TOTAL,
			self::F_SAMPLE_BLKS_SCANNED,
			self::F_EXT_STATS_TOTAL,
			self::F_EXT_STATS_COMPUTED,
			self::F_CHILD_TABLES_TOTAL,
			self::F_CHILD_TABLES_DONE,
			self::F_CURRENT_CHILD_TABLE_RELID,
		]; 

		protected $fillable = [
		];





}

