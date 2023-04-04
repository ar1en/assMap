<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DDocuments;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapDocument
 * Representation for db table assurance_map_document.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         document        [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DDocuments     relDocument                                      
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapDocument extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_DOCUMENT     = 'document';
	const  FJ_ID           = 'id';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_DOCUMENT     = 'relDocument';
	const  FT_ASSURANCEMAP = 'assurance_map_document.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_document.author';
	const  FT_CREATED_AT   = 'assurance_map_document.created_at';
	const  FT_DELETED_AT   = 'assurance_map_document.deleted_at';
	const  FT_DOCUMENT     = 'assurance_map_document.document';
	const  FT_ID           = 'assurance_map_document.id';
	const  FT_UPDATED_AT   = 'assurance_map_document.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_DOCUMENT      = 'document';
	const  F_ID            = 'id';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_document';

	public static array $jsonable = [
		MAssuranceMapDocument::FJ_ID           =>[ MAssuranceMapDocument::F_ID           ,null,'string',           ],
		MAssuranceMapDocument::FJ_ASSURANCEMAP =>[ MAssuranceMapDocument::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapDocument::FJ_DOCUMENT     =>[ MAssuranceMapDocument::F_DOCUMENT     ,null,'string',           ],
		MAssuranceMapDocument::FJ_AUTHOR       =>[ MAssuranceMapDocument::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapDocument::FJ_CREATED_AT   =>[ MAssuranceMapDocument::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapDocument::FJ_UPDATED_AT   =>[ MAssuranceMapDocument::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapDocument::FJ_DELETED_AT   =>[ MAssuranceMapDocument::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_DOCUMENT,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_DOCUMENT,
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
         * @return DDocuments|BelongsTo
         */
        public function relDocument(){
            return $this->belongsTo(DDocuments::class,self::F_DOCUMENT, DDocuments::F_ID);
        }
            



}

