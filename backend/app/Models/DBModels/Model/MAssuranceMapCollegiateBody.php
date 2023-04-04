<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DCollegiateBodies;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapCollegiateBody
 * Representation for db table assurance_map_collegiate_body.

 * @property  string            id                [1] type:uuid      !NULL PRIMARY 
 * @property  string            assuranceMap      [2] type:uuid      !NULL         
 * @property  string            collegiateBody    [3] type:uuid      !NULL         
 * @property  string            author            [4] type:uuid      !NULL         
 * @property  \DateTime         created_at        [5] type:timestamp               
 * @property  \DateTime         updated_at        [6] type:timestamp               
 * @property  \DateTime         deleted_at        [7] type:timestamp               
 * @property  DAssuranceMaps    relAssuranceMap                                    
 * @property  DUsers            relAuthor                                          
 * @property  DCollegiateBodies relCollegiateBody                                  
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapCollegiateBody extends DBClass {


	const  FJ_ASSURANCEMAP   = 'assuranceMap';
	const  FJ_AUTHOR         = 'author';
	const  FJ_COLLEGIATEBODY = 'collegiateBody';
	const  FJ_CREATED_AT     = 'createdAt';
	const  FJ_DELETED_AT     = 'deletedAt';
	const  FJ_ID             = 'id';
	const  FJ_UPDATED_AT     = 'updatedAt';
	const  FR_ASSURANCEMAP   = 'relAssuranceMap';
	const  FR_AUTHOR         = 'relAuthor';
	const  FR_COLLEGIATEBODY = 'relCollegiateBody';
	const  FT_ASSURANCEMAP   = 'assurance_map_collegiate_body.assuranceMap';
	const  FT_AUTHOR         = 'assurance_map_collegiate_body.author';
	const  FT_COLLEGIATEBODY = 'assurance_map_collegiate_body.collegiateBody';
	const  FT_CREATED_AT     = 'assurance_map_collegiate_body.created_at';
	const  FT_DELETED_AT     = 'assurance_map_collegiate_body.deleted_at';
	const  FT_ID             = 'assurance_map_collegiate_body.id';
	const  FT_UPDATED_AT     = 'assurance_map_collegiate_body.updated_at';
	const  F_ASSURANCEMAP    = 'assuranceMap';
	const  F_AUTHOR          = 'author';
	const  F_COLLEGIATEBODY  = 'collegiateBody';
	const  F_CREATED_AT      = 'created_at';
	const  F_DELETED_AT      = 'deleted_at';
	const  F_ID              = 'id';
	const  F_UPDATED_AT      = 'updated_at';

    protected $table = 'assurance_map_collegiate_body';

	public static array $jsonable = [
		MAssuranceMapCollegiateBody::FJ_ID             =>[ MAssuranceMapCollegiateBody::F_ID             ,null,'string',           ],
		MAssuranceMapCollegiateBody::FJ_ASSURANCEMAP   =>[ MAssuranceMapCollegiateBody::F_ASSURANCEMAP   ,null,'string',           ],
		MAssuranceMapCollegiateBody::FJ_COLLEGIATEBODY =>[ MAssuranceMapCollegiateBody::F_COLLEGIATEBODY ,null,'string',           ],
		MAssuranceMapCollegiateBody::FJ_AUTHOR         =>[ MAssuranceMapCollegiateBody::F_AUTHOR         ,null,'string',           ],
		MAssuranceMapCollegiateBody::FJ_CREATED_AT     =>[ MAssuranceMapCollegiateBody::F_CREATED_AT     ,'jsonDateTime','string', ],
		MAssuranceMapCollegiateBody::FJ_UPDATED_AT     =>[ MAssuranceMapCollegiateBody::F_UPDATED_AT     ,'jsonDateTime','string', ],
		MAssuranceMapCollegiateBody::FJ_DELETED_AT     =>[ MAssuranceMapCollegiateBody::F_DELETED_AT     ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_COLLEGIATEBODY,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_COLLEGIATEBODY,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


        /**
         * @return DAssuranceMaps|BelongsTo
         */
        public function relAssuranceMap(){
            return $this->belongsTo(DAssuranceMaps::class,self::F_ASSURANCEMAP, DAssuranceMaps::F_ID);
        }
            

        /**
         * @return DUsers|BelongsTo
         */
        public function relAuthor(){
            return $this->belongsTo(DUsers::class,self::F_AUTHOR, DUsers::F_ID);
        }
            

        /**
         * @return DCollegiateBodies|BelongsTo
         */
        public function relCollegiateBody(){
            return $this->belongsTo(DCollegiateBodies::class,self::F_COLLEGIATEBODY, DCollegiateBodies::F_ID);
        }
            



}

