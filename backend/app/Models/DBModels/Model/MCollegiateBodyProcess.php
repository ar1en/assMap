<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DCollegiateBodies;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MCollegiateBodyProcess
 * Representation for db table collegiate_body_process.

 * @property  string            id                [1] type:uuid      !NULL PRIMARY 
 * @property  string            collegiateBody    [2] type:uuid      !NULL         
 * @property  string            process           [3] type:uuid      !NULL         
 * @property  string            author            [4] type:uuid      !NULL         
 * @property  \DateTime         created_at        [5] type:timestamp               
 * @property  \DateTime         updated_at        [6] type:timestamp               
 * @property  \DateTime         deleted_at        [7] type:timestamp               
 * @property  DUsers            relAuthor                                          
 * @property  DCollegiateBodies relCollegiateBody                                  
 * @property  DProcesses        relProcess                                         
 * @package App\Models\DBModels\Model
 */
class MCollegiateBodyProcess extends DBClass {


	const  FJ_AUTHOR         = 'author';
	const  FJ_COLLEGIATEBODY = 'collegiateBody';
	const  FJ_CREATED_AT     = 'createdAt';
	const  FJ_DELETED_AT     = 'deletedAt';
	const  FJ_ID             = 'id';
	const  FJ_PROCESS        = 'process';
	const  FJ_UPDATED_AT     = 'updatedAt';
	const  FR_AUTHOR         = 'relAuthor';
	const  FR_COLLEGIATEBODY = 'relCollegiateBody';
	const  FR_PROCESS        = 'relProcess';
	const  FT_AUTHOR         = 'collegiate_body_process.author';
	const  FT_COLLEGIATEBODY = 'collegiate_body_process.collegiateBody';
	const  FT_CREATED_AT     = 'collegiate_body_process.created_at';
	const  FT_DELETED_AT     = 'collegiate_body_process.deleted_at';
	const  FT_ID             = 'collegiate_body_process.id';
	const  FT_PROCESS        = 'collegiate_body_process.process';
	const  FT_UPDATED_AT     = 'collegiate_body_process.updated_at';
	const  F_AUTHOR          = 'author';
	const  F_COLLEGIATEBODY  = 'collegiateBody';
	const  F_CREATED_AT      = 'created_at';
	const  F_DELETED_AT      = 'deleted_at';
	const  F_ID              = 'id';
	const  F_PROCESS         = 'process';
	const  F_UPDATED_AT      = 'updated_at';

    protected $table = 'collegiate_body_process';

	public static array $jsonable = [
		MCollegiateBodyProcess::FJ_ID             =>[ MCollegiateBodyProcess::F_ID             ,null,'string',           ],
		MCollegiateBodyProcess::FJ_COLLEGIATEBODY =>[ MCollegiateBodyProcess::F_COLLEGIATEBODY ,null,'string',           ],
		MCollegiateBodyProcess::FJ_PROCESS        =>[ MCollegiateBodyProcess::F_PROCESS        ,null,'string',           ],
		MCollegiateBodyProcess::FJ_AUTHOR         =>[ MCollegiateBodyProcess::F_AUTHOR         ,null,'string',           ],
		MCollegiateBodyProcess::FJ_CREATED_AT     =>[ MCollegiateBodyProcess::F_CREATED_AT     ,'jsonDateTime','string', ],
		MCollegiateBodyProcess::FJ_UPDATED_AT     =>[ MCollegiateBodyProcess::F_UPDATED_AT     ,'jsonDateTime','string', ],
		MCollegiateBodyProcess::FJ_DELETED_AT     =>[ MCollegiateBodyProcess::F_DELETED_AT     ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_COLLEGIATEBODY,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_COLLEGIATEBODY,
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
         * @return DCollegiateBodies|BelongsTo
         */
        public function relCollegiateBody(){
            return $this->belongsTo(DCollegiateBodies::class,self::F_COLLEGIATEBODY, DCollegiateBodies::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

