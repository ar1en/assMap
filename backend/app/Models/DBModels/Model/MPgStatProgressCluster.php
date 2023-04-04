<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressCluster
 * Representation for db table pg_stat_progress_cluster.

 * @property  int          pid                 [1]  type:int4   
 * @property  string(oid)  datid               [2]  type:oid    
 * @property  string(name) datname             [3]  type:name   
 * @property  string(oid)  relid               [4]  type:oid    
 * @property  string       command             [5]  type:text   
 * @property  string       phase               [6]  type:text   
 * @property  string(oid)  cluster_index_relid [7]  type:oid    
 * @property  int          heap_tuples_scanned [8]  type:int8   
 * @property  int          heap_tuples_written [9]  type:int8   
 * @property  int          heap_blks_total     [10] type:int8   
 * @property  int          heap_blks_scanned   [11] type:int8   
 * @property  int          index_rebuild_count [12] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressCluster extends DBClass {


	const  FJ_CLUSTER_INDEX_RELID = 'clusterIndexRelid';
	const  FJ_COMMAND             = 'command';
	const  FJ_DATID               = 'datid';
	const  FJ_DATNAME             = 'datname';
	const  FJ_HEAP_BLKS_SCANNED   = 'heapBlksScanned';
	const  FJ_HEAP_BLKS_TOTAL     = 'heapBlksTotal';
	const  FJ_HEAP_TUPLES_SCANNED = 'heapTuplesScanned';
	const  FJ_HEAP_TUPLES_WRITTEN = 'heapTuplesWritten';
	const  FJ_INDEX_REBUILD_COUNT = 'indexRebuildCount';
	const  FJ_PHASE               = 'phase';
	const  FJ_PID                 = 'pid';
	const  FJ_RELID               = 'relid';
	const  FT_CLUSTER_INDEX_RELID = 'pg_stat_progress_cluster.cluster_index_relid';
	const  FT_COMMAND             = 'pg_stat_progress_cluster.command';
	const  FT_DATID               = 'pg_stat_progress_cluster.datid';
	const  FT_DATNAME             = 'pg_stat_progress_cluster.datname';
	const  FT_HEAP_BLKS_SCANNED   = 'pg_stat_progress_cluster.heap_blks_scanned';
	const  FT_HEAP_BLKS_TOTAL     = 'pg_stat_progress_cluster.heap_blks_total';
	const  FT_HEAP_TUPLES_SCANNED = 'pg_stat_progress_cluster.heap_tuples_scanned';
	const  FT_HEAP_TUPLES_WRITTEN = 'pg_stat_progress_cluster.heap_tuples_written';
	const  FT_INDEX_REBUILD_COUNT = 'pg_stat_progress_cluster.index_rebuild_count';
	const  FT_PHASE               = 'pg_stat_progress_cluster.phase';
	const  FT_PID                 = 'pg_stat_progress_cluster.pid';
	const  FT_RELID               = 'pg_stat_progress_cluster.relid';
	const  F_CLUSTER_INDEX_RELID  = 'cluster_index_relid';
	const  F_COMMAND              = 'command';
	const  F_DATID                = 'datid';
	const  F_DATNAME              = 'datname';
	const  F_HEAP_BLKS_SCANNED    = 'heap_blks_scanned';
	const  F_HEAP_BLKS_TOTAL      = 'heap_blks_total';
	const  F_HEAP_TUPLES_SCANNED  = 'heap_tuples_scanned';
	const  F_HEAP_TUPLES_WRITTEN  = 'heap_tuples_written';
	const  F_INDEX_REBUILD_COUNT  = 'index_rebuild_count';
	const  F_PHASE                = 'phase';
	const  F_PID                  = 'pid';
	const  F_RELID                = 'relid';

    protected $table = 'pg_stat_progress_cluster';

	public static array $jsonable = [
		MPgStatProgressCluster::FJ_PID                 =>[ MPgStatProgressCluster::F_PID                 ,null,'number',       ],
		MPgStatProgressCluster::FJ_DATID               =>[ MPgStatProgressCluster::F_DATID               ,null,'string(oid)',  ],
		MPgStatProgressCluster::FJ_DATNAME             =>[ MPgStatProgressCluster::F_DATNAME             ,null,'string(name)', ],
		MPgStatProgressCluster::FJ_RELID               =>[ MPgStatProgressCluster::F_RELID               ,null,'string(oid)',  ],
		MPgStatProgressCluster::FJ_COMMAND             =>[ MPgStatProgressCluster::F_COMMAND             ,null,'string',       ],
		MPgStatProgressCluster::FJ_PHASE               =>[ MPgStatProgressCluster::F_PHASE               ,null,'string',       ],
		MPgStatProgressCluster::FJ_CLUSTER_INDEX_RELID =>[ MPgStatProgressCluster::F_CLUSTER_INDEX_RELID ,null,'string(oid)',  ],
		MPgStatProgressCluster::FJ_HEAP_TUPLES_SCANNED =>[ MPgStatProgressCluster::F_HEAP_TUPLES_SCANNED ,null,'number',       ],
		MPgStatProgressCluster::FJ_HEAP_TUPLES_WRITTEN =>[ MPgStatProgressCluster::F_HEAP_TUPLES_WRITTEN ,null,'number',       ],
		MPgStatProgressCluster::FJ_HEAP_BLKS_TOTAL     =>[ MPgStatProgressCluster::F_HEAP_BLKS_TOTAL     ,null,'number',       ],
		MPgStatProgressCluster::FJ_HEAP_BLKS_SCANNED   =>[ MPgStatProgressCluster::F_HEAP_BLKS_SCANNED   ,null,'number',       ],
		MPgStatProgressCluster::FJ_INDEX_REBUILD_COUNT =>[ MPgStatProgressCluster::F_INDEX_REBUILD_COUNT ,null,'number',       ],
	];

		protected $visible = [
			self::F_PID,
			self::F_DATID,
			self::F_DATNAME,
			self::F_RELID,
			self::F_COMMAND,
			self::F_PHASE,
			self::F_CLUSTER_INDEX_RELID,
			self::F_HEAP_TUPLES_SCANNED,
			self::F_HEAP_TUPLES_WRITTEN,
			self::F_HEAP_BLKS_TOTAL,
			self::F_HEAP_BLKS_SCANNED,
			self::F_INDEX_REBUILD_COUNT,
		]; 

		protected $fillable = [
		];





}

