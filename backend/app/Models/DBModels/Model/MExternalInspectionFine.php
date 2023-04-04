<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DFines;
use  App\Models\DBModels\Data\DExternalInspections;
use  App\Models\DBModels\DBClass;

/**
 * Class MExternalInspectionFine
 * Representation for db table external_inspection_fine.

 * @property  string               id            [1] type:uuid      !NULL PRIMARY 
 * @property  string               inspection    [2] type:uuid      !NULL         
 * @property  string               fine          [3] type:uuid      !NULL         
 * @property  string               author        [4] type:uuid      !NULL         
 * @property  \DateTime            created_at    [5] type:timestamp               
 * @property  \DateTime            updated_at    [6] type:timestamp               
 * @property  \DateTime            deleted_at    [7] type:timestamp               
 * @property  DUsers               relAuthor                                      
 * @property  DFines               relFine                                        
 * @property  DExternalInspections relInspection                                  
 * @package App\Models\DBModels\Model
 */
class MExternalInspectionFine extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_FINE       = 'fine';
	const  FJ_ID         = 'id';
	const  FJ_INSPECTION = 'inspection';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_FINE       = 'relFine';
	const  FR_INSPECTION = 'relInspection';
	const  FT_AUTHOR     = 'external_inspection_fine.author';
	const  FT_CREATED_AT = 'external_inspection_fine.created_at';
	const  FT_DELETED_AT = 'external_inspection_fine.deleted_at';
	const  FT_FINE       = 'external_inspection_fine.fine';
	const  FT_ID         = 'external_inspection_fine.id';
	const  FT_INSPECTION = 'external_inspection_fine.inspection';
	const  FT_UPDATED_AT = 'external_inspection_fine.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_FINE        = 'fine';
	const  F_ID          = 'id';
	const  F_INSPECTION  = 'inspection';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'external_inspection_fine';

	public static array $jsonable = [
		MExternalInspectionFine::FJ_ID         =>[ MExternalInspectionFine::F_ID         ,null,'string',           ],
		MExternalInspectionFine::FJ_INSPECTION =>[ MExternalInspectionFine::F_INSPECTION ,null,'string',           ],
		MExternalInspectionFine::FJ_FINE       =>[ MExternalInspectionFine::F_FINE       ,null,'string',           ],
		MExternalInspectionFine::FJ_AUTHOR     =>[ MExternalInspectionFine::F_AUTHOR     ,null,'string',           ],
		MExternalInspectionFine::FJ_CREATED_AT =>[ MExternalInspectionFine::F_CREATED_AT ,'jsonDateTime','string', ],
		MExternalInspectionFine::FJ_UPDATED_AT =>[ MExternalInspectionFine::F_UPDATED_AT ,'jsonDateTime','string', ],
		MExternalInspectionFine::FJ_DELETED_AT =>[ MExternalInspectionFine::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_INSPECTION,
			self::F_FINE,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_INSPECTION,
			 self::F_FINE,
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
         * @return DFines|BelongsTo
         */
        public function relFine(){
            return $this->belongsTo(DFines::class,self::F_FINE, DFines::F_ID);
        }
            

        /**
         * @return DExternalInspections|BelongsTo
         */
        public function relInspection(){
            return $this->belongsTo(DExternalInspections::class,self::F_INSPECTION, DExternalInspections::F_ID);
        }
            



}

