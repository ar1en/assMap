<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MRiskProcesses
 * Representation for db table risk_processes.

 * @property  string     id         [1] type:uuid      !NULL PRIMARY 
 * @property  string     process    [2] type:uuid      !NULL         
 * @property  string     risk       [3] type:uuid      !NULL         
 * @property  string     author     [4] type:uuid      !NULL         
 * @property  \DateTime  created_at [5] type:timestamp               
 * @property  \DateTime  updated_at [6] type:timestamp               
 * @property  \DateTime  deleted_at [7] type:timestamp               
 * @property  DUsers     relAuthor                                   
 * @property  DProcesses relProcess                                  
 * @property  DRisks     relRisk                                     
 * @package App\Models\DBModels\Model
 */
class MRiskProcesses extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_PROCESS    = 'process';
	const  FJ_RISK       = 'risk';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_PROCESS    = 'relProcess';
	const  FR_RISK       = 'relRisk';
	const  FT_AUTHOR     = 'risk_processes.author';
	const  FT_CREATED_AT = 'risk_processes.created_at';
	const  FT_DELETED_AT = 'risk_processes.deleted_at';
	const  FT_ID         = 'risk_processes.id';
	const  FT_PROCESS    = 'risk_processes.process';
	const  FT_RISK       = 'risk_processes.risk';
	const  FT_UPDATED_AT = 'risk_processes.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_PROCESS     = 'process';
	const  F_RISK        = 'risk';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'risk_processes';

	public static array $jsonable = [
		MRiskProcesses::FJ_ID         =>[ MRiskProcesses::F_ID         ,null,'string',           ],
		MRiskProcesses::FJ_PROCESS    =>[ MRiskProcesses::F_PROCESS    ,null,'string',           ],
		MRiskProcesses::FJ_RISK       =>[ MRiskProcesses::F_RISK       ,null,'string',           ],
		MRiskProcesses::FJ_AUTHOR     =>[ MRiskProcesses::F_AUTHOR     ,null,'string',           ],
		MRiskProcesses::FJ_CREATED_AT =>[ MRiskProcesses::F_CREATED_AT ,'jsonDateTime','string', ],
		MRiskProcesses::FJ_UPDATED_AT =>[ MRiskProcesses::F_UPDATED_AT ,'jsonDateTime','string', ],
		MRiskProcesses::FJ_DELETED_AT =>[ MRiskProcesses::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_PROCESS,
			self::F_RISK,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_PROCESS,
			 self::F_RISK,
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
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            

        /**
         * @return DRisks|BelongsTo
         */
        public function relRisk(){
            return $this->belongsTo(DRisks::class,self::F_RISK, DRisks::F_ID);
        }
            



}

