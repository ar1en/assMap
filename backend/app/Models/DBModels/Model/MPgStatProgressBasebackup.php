<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressBasebackup
 * Representation for db table pg_stat_progress_basebackup.

 * @property  int    pid                  [1] type:int4   
 * @property  string phase                [2] type:text   
 * @property  int    backup_total         [3] type:int8   
 * @property  int    backup_streamed      [4] type:int8   
 * @property  int    tablespaces_total    [5] type:int8   
 * @property  int    tablespaces_streamed [6] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressBasebackup extends DBClass {


	const  FJ_BACKUP_STREAMED      = 'backupStreamed';
	const  FJ_BACKUP_TOTAL         = 'backupTotal';
	const  FJ_PHASE                = 'phase';
	const  FJ_PID                  = 'pid';
	const  FJ_TABLESPACES_STREAMED = 'tablespacesStreamed';
	const  FJ_TABLESPACES_TOTAL    = 'tablespacesTotal';
	const  FT_BACKUP_STREAMED      = 'pg_stat_progress_basebackup.backup_streamed';
	const  FT_BACKUP_TOTAL         = 'pg_stat_progress_basebackup.backup_total';
	const  FT_PHASE                = 'pg_stat_progress_basebackup.phase';
	const  FT_PID                  = 'pg_stat_progress_basebackup.pid';
	const  FT_TABLESPACES_STREAMED = 'pg_stat_progress_basebackup.tablespaces_streamed';
	const  FT_TABLESPACES_TOTAL    = 'pg_stat_progress_basebackup.tablespaces_total';
	const  F_BACKUP_STREAMED       = 'backup_streamed';
	const  F_BACKUP_TOTAL          = 'backup_total';
	const  F_PHASE                 = 'phase';
	const  F_PID                   = 'pid';
	const  F_TABLESPACES_STREAMED  = 'tablespaces_streamed';
	const  F_TABLESPACES_TOTAL     = 'tablespaces_total';

    protected $table = 'pg_stat_progress_basebackup';

	public static array $jsonable = [
		MPgStatProgressBasebackup::FJ_PID                  =>[ MPgStatProgressBasebackup::F_PID                  ,null,'number', ],
		MPgStatProgressBasebackup::FJ_PHASE                =>[ MPgStatProgressBasebackup::F_PHASE                ,null,'string', ],
		MPgStatProgressBasebackup::FJ_BACKUP_TOTAL         =>[ MPgStatProgressBasebackup::F_BACKUP_TOTAL         ,null,'number', ],
		MPgStatProgressBasebackup::FJ_BACKUP_STREAMED      =>[ MPgStatProgressBasebackup::F_BACKUP_STREAMED      ,null,'number', ],
		MPgStatProgressBasebackup::FJ_TABLESPACES_TOTAL    =>[ MPgStatProgressBasebackup::F_TABLESPACES_TOTAL    ,null,'number', ],
		MPgStatProgressBasebackup::FJ_TABLESPACES_STREAMED =>[ MPgStatProgressBasebackup::F_TABLESPACES_STREAMED ,null,'number', ],
	];

		protected $visible = [
			self::F_PID,
			self::F_PHASE,
			self::F_BACKUP_TOTAL,
			self::F_BACKUP_STREAMED,
			self::F_TABLESPACES_TOTAL,
			self::F_TABLESPACES_STREAMED,
		]; 

		protected $fillable = [
		];





}

