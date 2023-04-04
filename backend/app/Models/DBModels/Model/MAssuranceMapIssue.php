<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DIssues;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapIssue
 * Representation for db table assurance_map_issue.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         issue           [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DIssues        relIssue                                         
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapIssue extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ID           = 'id';
	const  FJ_ISSUE        = 'issue';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_ISSUE        = 'relIssue';
	const  FT_ASSURANCEMAP = 'assurance_map_issue.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_issue.author';
	const  FT_CREATED_AT   = 'assurance_map_issue.created_at';
	const  FT_DELETED_AT   = 'assurance_map_issue.deleted_at';
	const  FT_ID           = 'assurance_map_issue.id';
	const  FT_ISSUE        = 'assurance_map_issue.issue';
	const  FT_UPDATED_AT   = 'assurance_map_issue.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ID            = 'id';
	const  F_ISSUE         = 'issue';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_issue';

	public static array $jsonable = [
		MAssuranceMapIssue::FJ_ID           =>[ MAssuranceMapIssue::F_ID           ,null,'string',           ],
		MAssuranceMapIssue::FJ_ASSURANCEMAP =>[ MAssuranceMapIssue::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapIssue::FJ_ISSUE        =>[ MAssuranceMapIssue::F_ISSUE        ,null,'string',           ],
		MAssuranceMapIssue::FJ_AUTHOR       =>[ MAssuranceMapIssue::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapIssue::FJ_CREATED_AT   =>[ MAssuranceMapIssue::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIssue::FJ_UPDATED_AT   =>[ MAssuranceMapIssue::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIssue::FJ_DELETED_AT   =>[ MAssuranceMapIssue::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_ISSUE,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_ISSUE,
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
         * @return DIssues|BelongsTo
         */
        public function relIssue(){
            return $this->belongsTo(DIssues::class,self::F_ISSUE, DIssues::F_ID);
        }
            



}

