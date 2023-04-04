<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DInternalInspections;
use  App\Models\DBModels\Data\DObjects;
use  App\Models\DBModels\DBClass;

/**
 * Class MInternalInspectionObject
 * Representation for db table internal_inspection_object.

 * @property  string               id            [1] type:uuid      !NULL PRIMARY 
 * @property  string               object        [2] type:uuid      !NULL         
 * @property  string               inspection    [3] type:uuid      !NULL         
 * @property  string               author        [4] type:uuid      !NULL         
 * @property  \DateTime            created_at    [5] type:timestamp               
 * @property  \DateTime            updated_at    [6] type:timestamp               
 * @property  \DateTime            deleted_at    [7] type:timestamp               
 * @property  DUsers               relAuthor                                      
 * @property  DInternalInspections relInspection                                  
 * @property  DObjects             relObject                                      
 * @package App\Models\DBModels\Model
 */
class MInternalInspectionObject extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_INSPECTION = 'inspection';
	const  FJ_OBJECT     = 'object';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_INSPECTION = 'relInspection';
	const  FR_OBJECT     = 'relObject';
	const  FT_AUTHOR     = 'internal_inspection_object.author';
	const  FT_CREATED_AT = 'internal_inspection_object.created_at';
	const  FT_DELETED_AT = 'internal_inspection_object.deleted_at';
	const  FT_ID         = 'internal_inspection_object.id';
	const  FT_INSPECTION = 'internal_inspection_object.inspection';
	const  FT_OBJECT     = 'internal_inspection_object.object';
	const  FT_UPDATED_AT = 'internal_inspection_object.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_INSPECTION  = 'inspection';
	const  F_OBJECT      = 'object';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'internal_inspection_object';

	public static array $jsonable = [
		MInternalInspectionObject::FJ_ID         =>[ MInternalInspectionObject::F_ID         ,null,'string',           ],
		MInternalInspectionObject::FJ_OBJECT     =>[ MInternalInspectionObject::F_OBJECT     ,null,'string',           ],
		MInternalInspectionObject::FJ_INSPECTION =>[ MInternalInspectionObject::F_INSPECTION ,null,'string',           ],
		MInternalInspectionObject::FJ_AUTHOR     =>[ MInternalInspectionObject::F_AUTHOR     ,null,'string',           ],
		MInternalInspectionObject::FJ_CREATED_AT =>[ MInternalInspectionObject::F_CREATED_AT ,'jsonDateTime','string', ],
		MInternalInspectionObject::FJ_UPDATED_AT =>[ MInternalInspectionObject::F_UPDATED_AT ,'jsonDateTime','string', ],
		MInternalInspectionObject::FJ_DELETED_AT =>[ MInternalInspectionObject::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_OBJECT,
			self::F_INSPECTION,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_OBJECT,
			 self::F_INSPECTION,
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
         * @return DObjects|BelongsTo
         */
        public function relObject(){
            return $this->belongsTo(DObjects::class,self::F_OBJECT, DObjects::F_ID);
        }
            



}

