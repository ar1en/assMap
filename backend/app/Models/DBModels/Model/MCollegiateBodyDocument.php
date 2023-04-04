<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DCollegiateBodies;
use  App\Models\DBModels\Data\DDocuments;
use  App\Models\DBModels\DBClass;

/**
 * Class MCollegiateBodyDocument
 * Representation for db table collegiate_body_document.

 * @property  string            id                [1] type:uuid      !NULL PRIMARY 
 * @property  string            collegiateBody    [2] type:uuid      !NULL         
 * @property  string            document          [3] type:uuid      !NULL         
 * @property  string            author            [4] type:uuid      !NULL         
 * @property  \DateTime         created_at        [5] type:timestamp               
 * @property  \DateTime         updated_at        [6] type:timestamp               
 * @property  \DateTime         deleted_at        [7] type:timestamp               
 * @property  DUsers            relAuthor                                          
 * @property  DCollegiateBodies relCollegiateBody                                  
 * @property  DDocuments        relDocument                                        
 * @package App\Models\DBModels\Model
 */
class MCollegiateBodyDocument extends DBClass {


	const  FJ_AUTHOR         = 'author';
	const  FJ_COLLEGIATEBODY = 'collegiateBody';
	const  FJ_CREATED_AT     = 'createdAt';
	const  FJ_DELETED_AT     = 'deletedAt';
	const  FJ_DOCUMENT       = 'document';
	const  FJ_ID             = 'id';
	const  FJ_UPDATED_AT     = 'updatedAt';
	const  FR_AUTHOR         = 'relAuthor';
	const  FR_COLLEGIATEBODY = 'relCollegiateBody';
	const  FR_DOCUMENT       = 'relDocument';
	const  FT_AUTHOR         = 'collegiate_body_document.author';
	const  FT_COLLEGIATEBODY = 'collegiate_body_document.collegiateBody';
	const  FT_CREATED_AT     = 'collegiate_body_document.created_at';
	const  FT_DELETED_AT     = 'collegiate_body_document.deleted_at';
	const  FT_DOCUMENT       = 'collegiate_body_document.document';
	const  FT_ID             = 'collegiate_body_document.id';
	const  FT_UPDATED_AT     = 'collegiate_body_document.updated_at';
	const  F_AUTHOR          = 'author';
	const  F_COLLEGIATEBODY  = 'collegiateBody';
	const  F_CREATED_AT      = 'created_at';
	const  F_DELETED_AT      = 'deleted_at';
	const  F_DOCUMENT        = 'document';
	const  F_ID              = 'id';
	const  F_UPDATED_AT      = 'updated_at';

    protected $table = 'collegiate_body_document';

	public static array $jsonable = [
		MCollegiateBodyDocument::FJ_ID             =>[ MCollegiateBodyDocument::F_ID             ,null,'string',           ],
		MCollegiateBodyDocument::FJ_COLLEGIATEBODY =>[ MCollegiateBodyDocument::F_COLLEGIATEBODY ,null,'string',           ],
		MCollegiateBodyDocument::FJ_DOCUMENT       =>[ MCollegiateBodyDocument::F_DOCUMENT       ,null,'string',           ],
		MCollegiateBodyDocument::FJ_AUTHOR         =>[ MCollegiateBodyDocument::F_AUTHOR         ,null,'string',           ],
		MCollegiateBodyDocument::FJ_CREATED_AT     =>[ MCollegiateBodyDocument::F_CREATED_AT     ,'jsonDateTime','string', ],
		MCollegiateBodyDocument::FJ_UPDATED_AT     =>[ MCollegiateBodyDocument::F_UPDATED_AT     ,'jsonDateTime','string', ],
		MCollegiateBodyDocument::FJ_DELETED_AT     =>[ MCollegiateBodyDocument::F_DELETED_AT     ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_COLLEGIATEBODY,
			self::F_DOCUMENT,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_COLLEGIATEBODY,
			 self::F_DOCUMENT,
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
         * @return DCollegiateBodies|BelongsTo
         */
        public function relCollegiateBody(){
            return $this->belongsTo(DCollegiateBodies::class,self::F_COLLEGIATEBODY, DCollegiateBodies::F_ID);
        }
            

        /**
         * @return DDocuments|BelongsTo
         */
        public function relDocument(){
            return $this->belongsTo(DDocuments::class,self::F_DOCUMENT, DDocuments::F_ID);
        }
            



}

