<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DInternalInspections;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MInternalInspectionProcess
 * Representation for db table internal_inspection_process.

 * @property  string               id            [1] type:uuid      !NULL PRIMARY 
 * @property  string               inspection    [2] type:uuid      !NULL         
 * @property  string               process       [3] type:uuid      !NULL         
 * @property  string               author        [4] type:uuid      !NULL         
 * @property  \DateTime            created_at    [5] type:timestamp               
 * @property  \DateTime            updated_at    [6] type:timestamp               
 * @property  \DateTime            deleted_at    [7] type:timestamp               
 * @property  DUsers               relAuthor                                      
 * @property  DInternalInspections relInspection                                  
 * @property  DProcesses           relProcess                                     
 * @package App\Models\DBModels\Model
 */
class MInternalInspectionProcess extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_INSPECTION = 'inspection';
	const  FJ_PROCESS    = 'process';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_INSPECTION = 'relInspection';
	const  FR_PROCESS    = 'relProcess';
	const  FT_AUTHOR     = 'internal_inspection_process.author';
	const  FT_CREATED_AT = 'internal_inspection_process.created_at';
	const  FT_DELETED_AT = 'internal_inspection_process.deleted_at';
	const  FT_ID         = 'internal_inspection_process.id';
	const  FT_INSPECTION = 'internal_inspection_process.inspection';
	const  FT_PROCESS    = 'internal_inspection_process.process';
	const  FT_UPDATED_AT = 'internal_inspection_process.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_INSPECTION  = 'inspection';
	const  F_PROCESS     = 'process';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'internal_inspection_process';

	public static array $jsonable = [
		MInternalInspectionProcess::FJ_ID         =>[ MInternalInspectionProcess::F_ID         ,null,'string',           ],
		MInternalInspectionProcess::FJ_INSPECTION =>[ MInternalInspectionProcess::F_INSPECTION ,null,'string',           ],
		MInternalInspectionProcess::FJ_PROCESS    =>[ MInternalInspectionProcess::F_PROCESS    ,null,'string',           ],
		MInternalInspectionProcess::FJ_AUTHOR     =>[ MInternalInspectionProcess::F_AUTHOR     ,null,'string',           ],
		MInternalInspectionProcess::FJ_CREATED_AT =>[ MInternalInspectionProcess::F_CREATED_AT ,'jsonDateTime','string', ],
		MInternalInspectionProcess::FJ_UPDATED_AT =>[ MInternalInspectionProcess::F_UPDATED_AT ,'jsonDateTime','string', ],
		MInternalInspectionProcess::FJ_DELETED_AT =>[ MInternalInspectionProcess::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_INSPECTION,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_INSPECTION,
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
         * @return DInternalInspections|BelongsTo
         */
        public function relInspection(){
            return $this->belongsTo(DInternalInspections::class,self::F_INSPECTION, DInternalInspections::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

