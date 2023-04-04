<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DObjects;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MRiskRates
 * Representation for db table risk_rates.

 * @property  string         id         [1] type:uuid      !NULL PRIMARY 
 * @property  string         risk       [2] type:uuid      !NULL         
 * @property  string         process    [3] type:uuid      !NULL         
 * @property  string         object     [4] type:uuid      !NULL         
 * @property  string(float8) rate       [5] type:float8    !NULL         
 * @property  string         author     [6] type:uuid      !NULL         
 * @property  \DateTime      created_at [7] type:timestamp               
 * @property  \DateTime      updated_at [8] type:timestamp               
 * @property  \DateTime      deleted_at [9] type:timestamp               
 * @property  DUsers         relAuthor                                   
 * @property  DObjects       relObject                                   
 * @property  DProcesses     relProcess                                  
 * @property  DRisks         relRisk                                     
 * @package App\Models\DBModels\Model
 */
class MRiskRates extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_OBJECT     = 'object';
	const  FJ_PROCESS    = 'process';
	const  FJ_RATE       = 'rate';
	const  FJ_RISK       = 'risk';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_OBJECT     = 'relObject';
	const  FR_PROCESS    = 'relProcess';
	const  FR_RISK       = 'relRisk';
	const  FT_AUTHOR     = 'risk_rates.author';
	const  FT_CREATED_AT = 'risk_rates.created_at';
	const  FT_DELETED_AT = 'risk_rates.deleted_at';
	const  FT_ID         = 'risk_rates.id';
	const  FT_OBJECT     = 'risk_rates.object';
	const  FT_PROCESS    = 'risk_rates.process';
	const  FT_RATE       = 'risk_rates.rate';
	const  FT_RISK       = 'risk_rates.risk';
	const  FT_UPDATED_AT = 'risk_rates.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_OBJECT      = 'object';
	const  F_PROCESS     = 'process';
	const  F_RATE        = 'rate';
	const  F_RISK        = 'risk';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'risk_rates';

	public static array $jsonable = [
		MRiskRates::FJ_ID         =>[ MRiskRates::F_ID         ,null,'string',           ],
		MRiskRates::FJ_RISK       =>[ MRiskRates::F_RISK       ,null,'string',           ],
		MRiskRates::FJ_PROCESS    =>[ MRiskRates::F_PROCESS    ,null,'string',           ],
		MRiskRates::FJ_OBJECT     =>[ MRiskRates::F_OBJECT     ,null,'string',           ],
		MRiskRates::FJ_RATE       =>[ MRiskRates::F_RATE       ,null,'string(float8)',   ],
		MRiskRates::FJ_AUTHOR     =>[ MRiskRates::F_AUTHOR     ,null,'string',           ],
		MRiskRates::FJ_CREATED_AT =>[ MRiskRates::F_CREATED_AT ,'jsonDateTime','string', ],
		MRiskRates::FJ_UPDATED_AT =>[ MRiskRates::F_UPDATED_AT ,'jsonDateTime','string', ],
		MRiskRates::FJ_DELETED_AT =>[ MRiskRates::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_RISK,
			self::F_PROCESS,
			self::F_OBJECT,
			self::F_RATE,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_RISK,
			 self::F_PROCESS,
			 self::F_OBJECT,
			 self::F_RATE,
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
         * @return DObjects|BelongsTo
         */
        public function relObject(){
            return $this->belongsTo(DObjects::class,self::F_OBJECT, DObjects::F_ID);
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

