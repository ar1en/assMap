<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DAutomatedMonitoring;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MAutomatedMonitoringProcess
 * Representation for db table automated_monitoring_process.

 * @property  string               id                     [1] type:uuid      !NULL PRIMARY 
 * @property  string               automatedMonitoring    [2] type:uuid      !NULL         
 * @property  string               process                [3] type:uuid      !NULL         
 * @property  string               author                 [4] type:uuid      !NULL         
 * @property  \DateTime            created_at             [5] type:timestamp               
 * @property  \DateTime            updated_at             [6] type:timestamp               
 * @property  \DateTime            deleted_at             [7] type:timestamp               
 * @property  DUsers               relAuthor                                               
 * @property  DAutomatedMonitoring relAutomatedMonitoring                                  
 * @property  DProcesses           relProcess                                              
 * @package App\Models\DBModels\Model
 */
class MAutomatedMonitoringProcess extends DBClass {


	const  FJ_AUTHOR              = 'author';
	const  FJ_AUTOMATEDMONITORING = 'automatedMonitoring';
	const  FJ_CREATED_AT          = 'createdAt';
	const  FJ_DELETED_AT          = 'deletedAt';
	const  FJ_ID                  = 'id';
	const  FJ_PROCESS             = 'process';
	const  FJ_UPDATED_AT          = 'updatedAt';
	const  FR_AUTHOR              = 'relAuthor';
	const  FR_AUTOMATEDMONITORING = 'relAutomatedMonitoring';
	const  FR_PROCESS             = 'relProcess';
	const  FT_AUTHOR              = 'automated_monitoring_process.author';
	const  FT_AUTOMATEDMONITORING = 'automated_monitoring_process.automatedMonitoring';
	const  FT_CREATED_AT          = 'automated_monitoring_process.created_at';
	const  FT_DELETED_AT          = 'automated_monitoring_process.deleted_at';
	const  FT_ID                  = 'automated_monitoring_process.id';
	const  FT_PROCESS             = 'automated_monitoring_process.process';
	const  FT_UPDATED_AT          = 'automated_monitoring_process.updated_at';
	const  F_AUTHOR               = 'author';
	const  F_AUTOMATEDMONITORING  = 'automatedMonitoring';
	const  F_CREATED_AT           = 'created_at';
	const  F_DELETED_AT           = 'deleted_at';
	const  F_ID                   = 'id';
	const  F_PROCESS              = 'process';
	const  F_UPDATED_AT           = 'updated_at';

    protected $table = 'automated_monitoring_process';

	public static array $jsonable = [
		MAutomatedMonitoringProcess::FJ_ID                  =>[ MAutomatedMonitoringProcess::F_ID                  ,null,'string',           ],
		MAutomatedMonitoringProcess::FJ_AUTOMATEDMONITORING =>[ MAutomatedMonitoringProcess::F_AUTOMATEDMONITORING ,null,'string',           ],
		MAutomatedMonitoringProcess::FJ_PROCESS             =>[ MAutomatedMonitoringProcess::F_PROCESS             ,null,'string',           ],
		MAutomatedMonitoringProcess::FJ_AUTHOR              =>[ MAutomatedMonitoringProcess::F_AUTHOR              ,null,'string',           ],
		MAutomatedMonitoringProcess::FJ_CREATED_AT          =>[ MAutomatedMonitoringProcess::F_CREATED_AT          ,'jsonDateTime','string', ],
		MAutomatedMonitoringProcess::FJ_UPDATED_AT          =>[ MAutomatedMonitoringProcess::F_UPDATED_AT          ,'jsonDateTime','string', ],
		MAutomatedMonitoringProcess::FJ_DELETED_AT          =>[ MAutomatedMonitoringProcess::F_DELETED_AT          ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_AUTOMATEDMONITORING,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_AUTOMATEDMONITORING,
			 self::F_PROCESS,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


        /**
         * @return DUsers|BelongsTo
         */
        public function relAuthor(){
            return $this->belongsTo(DUsers::class,self::F_AUTHOR, DUsers::F_ID);
        }
            

        /**
         * @return DAutomatedMonitoring|BelongsTo
         */
        public function relAutomatedMonitoring(){
            return $this->belongsTo(DAutomatedMonitoring::class,self::F_AUTOMATEDMONITORING, DAutomatedMonitoring::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

