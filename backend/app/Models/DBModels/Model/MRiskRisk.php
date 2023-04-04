<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MRiskRisk
 * Representation for db table risk_risk.

 * @property  string    id         [1] type:uuid      !NULL PRIMARY 
 * @property  string    risk1      [2] type:uuid      !NULL         
 * @property  string    risk2      [3] type:uuid      !NULL         
 * @property  string    author     [4] type:uuid      !NULL         
 * @property  \DateTime created_at [5] type:timestamp               
 * @property  \DateTime updated_at [6] type:timestamp               
 * @property  \DateTime deleted_at [7] type:timestamp               
 * @property  DUsers    relAuthor                                   
 * @property  DRisks    relRisk1                                    
 * @property  DRisks    relRisk2                                    
 * @package App\Models\DBModels\Model
 */
class MRiskRisk extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_RISK1      = 'risk1';
	const  FJ_RISK2      = 'risk2';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_RISK1      = 'relRisk1';
	const  FR_RISK2      = 'relRisk2';
	const  FT_AUTHOR     = 'risk_risk.author';
	const  FT_CREATED_AT = 'risk_risk.created_at';
	const  FT_DELETED_AT = 'risk_risk.deleted_at';
	const  FT_ID         = 'risk_risk.id';
	const  FT_RISK1      = 'risk_risk.risk1';
	const  FT_RISK2      = 'risk_risk.risk2';
	const  FT_UPDATED_AT = 'risk_risk.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_RISK1       = 'risk1';
	const  F_RISK2       = 'risk2';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'risk_risk';

	public static array $jsonable = [
		MRiskRisk::FJ_ID         =>[ MRiskRisk::F_ID         ,null,'string',           ],
		MRiskRisk::FJ_RISK1      =>[ MRiskRisk::F_RISK1      ,null,'string',           ],
		MRiskRisk::FJ_RISK2      =>[ MRiskRisk::F_RISK2      ,null,'string',           ],
		MRiskRisk::FJ_AUTHOR     =>[ MRiskRisk::F_AUTHOR     ,null,'string',           ],
		MRiskRisk::FJ_CREATED_AT =>[ MRiskRisk::F_CREATED_AT ,'jsonDateTime','string', ],
		MRiskRisk::FJ_UPDATED_AT =>[ MRiskRisk::F_UPDATED_AT ,'jsonDateTime','string', ],
		MRiskRisk::FJ_DELETED_AT =>[ MRiskRisk::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_RISK1,
			self::F_RISK2,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_RISK1,
			 self::F_RISK2,
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
         * @return DRisks|BelongsTo
         */
        public function relRisk1(){
            return $this->belongsTo(DRisks::class,self::F_RISK1, DRisks::F_ID);
        }
            

        /**
         * @return DRisks|BelongsTo
         */
        public function relRisk2(){
            return $this->belongsTo(DRisks::class,self::F_RISK2, DRisks::F_ID);
        }
            



}

