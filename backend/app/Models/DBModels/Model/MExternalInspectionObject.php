<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DExternalInspections;
use  App\Models\DBModels\Data\DObjects;
use  App\Models\DBModels\DBClass;

/**
 * Class MExternalInspectionObject
 * Representation for db table external_inspection_object.

 * @property  string               id            [1] type:uuid      !NULL PRIMARY 
 * @property  string               inspection    [2] type:uuid      !NULL         
 * @property  string               object        [3] type:uuid      !NULL         
 * @property  string               author        [4] type:uuid      !NULL         
 * @property  \DateTime            created_at    [5] type:timestamp               
 * @property  \DateTime            updated_at    [6] type:timestamp               
 * @property  \DateTime            deleted_at    [7] type:timestamp               
 * @property  DUsers               relAuthor                                      
 * @property  DExternalInspections relInspection                                  
 * @property  DObjects             relObject                                      
 * @package App\Models\DBModels\Model
 */
class MExternalInspectionObject extends DBClass {


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
	const  FT_AUTHOR     = 'external_inspection_object.author';
	const  FT_CREATED_AT = 'external_inspection_object.created_at';
	const  FT_DELETED_AT = 'external_inspection_object.deleted_at';
	const  FT_ID         = 'external_inspection_object.id';
	const  FT_INSPECTION = 'external_inspection_object.inspection';
	const  FT_OBJECT     = 'external_inspection_object.object';
	const  FT_UPDATED_AT = 'external_inspection_object.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_INSPECTION  = 'inspection';
	const  F_OBJECT      = 'object';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'external_inspection_object';

	public static array $jsonable = [
		MExternalInspectionObject::FJ_ID         =>[ MExternalInspectionObject::F_ID         ,null,'string',           ],
		MExternalInspectionObject::FJ_INSPECTION =>[ MExternalInspectionObject::F_INSPECTION ,null,'string',           ],
		MExternalInspectionObject::FJ_OBJECT     =>[ MExternalInspectionObject::F_OBJECT     ,null,'string',           ],
		MExternalInspectionObject::FJ_AUTHOR     =>[ MExternalInspectionObject::F_AUTHOR     ,null,'string',           ],
		MExternalInspectionObject::FJ_CREATED_AT =>[ MExternalInspectionObject::F_CREATED_AT ,'jsonDateTime','string', ],
		MExternalInspectionObject::FJ_UPDATED_AT =>[ MExternalInspectionObject::F_UPDATED_AT ,'jsonDateTime','string', ],
		MExternalInspectionObject::FJ_DELETED_AT =>[ MExternalInspectionObject::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_INSPECTION,
			self::F_OBJECT,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_INSPECTION,
			 self::F_OBJECT,
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
         * @return DExternalInspections|BelongsTo
         */
        public function relInspection(){
            return $this->belongsTo(DExternalInspections::class,self::F_INSPECTION, DExternalInspections::F_ID);
        }
            

        /**
         * @return DObjects|BelongsTo
         */
        public function relObject(){
            return $this->belongsTo(DObjects::class,self::F_OBJECT, DObjects::F_ID);
        }
            



}

