<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DDocuments;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MDocumentProcesses
 * Representation for db table document_processes.

 * @property  string     id          [1] type:uuid      !NULL PRIMARY 
 * @property  string     document    [2] type:uuid      !NULL         
 * @property  string     process     [3] type:uuid      !NULL         
 * @property  string     author      [4] type:uuid      !NULL         
 * @property  \DateTime  created_at  [5] type:timestamp               
 * @property  \DateTime  updated_at  [6] type:timestamp               
 * @property  \DateTime  deleted_at  [7] type:timestamp               
 * @property  DUsers     relAuthor                                    
 * @property  DDocuments relDocument                                  
 * @property  DProcesses relProcess                                   
 * @package App\Models\DBModels\Model
 */
class MDocumentProcesses extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_DOCUMENT   = 'document';
	const  FJ_ID         = 'id';
	const  FJ_PROCESS    = 'process';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_DOCUMENT   = 'relDocument';
	const  FR_PROCESS    = 'relProcess';
	const  FT_AUTHOR     = 'document_processes.author';
	const  FT_CREATED_AT = 'document_processes.created_at';
	const  FT_DELETED_AT = 'document_processes.deleted_at';
	const  FT_DOCUMENT   = 'document_processes.document';
	const  FT_ID         = 'document_processes.id';
	const  FT_PROCESS    = 'document_processes.process';
	const  FT_UPDATED_AT = 'document_processes.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_DOCUMENT    = 'document';
	const  F_ID          = 'id';
	const  F_PROCESS     = 'process';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'document_processes';

	public static array $jsonable = [
		MDocumentProcesses::FJ_ID         =>[ MDocumentProcesses::F_ID         ,null,'string',           ],
		MDocumentProcesses::FJ_DOCUMENT   =>[ MDocumentProcesses::F_DOCUMENT   ,null,'string',           ],
		MDocumentProcesses::FJ_PROCESS    =>[ MDocumentProcesses::F_PROCESS    ,null,'string',           ],
		MDocumentProcesses::FJ_AUTHOR     =>[ MDocumentProcesses::F_AUTHOR     ,null,'string',           ],
		MDocumentProcesses::FJ_CREATED_AT =>[ MDocumentProcesses::F_CREATED_AT ,'jsonDateTime','string', ],
		MDocumentProcesses::FJ_UPDATED_AT =>[ MDocumentProcesses::F_UPDATED_AT ,'jsonDateTime','string', ],
		MDocumentProcesses::FJ_DELETED_AT =>[ MDocumentProcesses::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_DOCUMENT,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_DOCUMENT,
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
         * @return DDocuments|BelongsTo
         */
        public function relDocument(){
            return $this->belongsTo(DDocuments::class,self::F_DOCUMENT, DDocuments::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

