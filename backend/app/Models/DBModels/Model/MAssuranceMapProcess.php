<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapProcess
 * Representation for db table assurance_map_process.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         process         [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DProcesses     relProcess                                       
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapProcess extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ID           = 'id';
	const  FJ_PROCESS      = 'process';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_PROCESS      = 'relProcess';
	const  FT_ASSURANCEMAP = 'assurance_map_process.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_process.author';
	const  FT_CREATED_AT   = 'assurance_map_process.created_at';
	const  FT_DELETED_AT   = 'assurance_map_process.deleted_at';
	const  FT_ID           = 'assurance_map_process.id';
	const  FT_PROCESS      = 'assurance_map_process.process';
	const  FT_UPDATED_AT   = 'assurance_map_process.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ID            = 'id';
	const  F_PROCESS       = 'process';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_process';

	public static array $jsonable = [
		MAssuranceMapProcess::FJ_ID           =>[ MAssuranceMapProcess::F_ID           ,null,'string',           ],
		MAssuranceMapProcess::FJ_ASSURANCEMAP =>[ MAssuranceMapProcess::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapProcess::FJ_PROCESS      =>[ MAssuranceMapProcess::F_PROCESS      ,null,'string',           ],
		MAssuranceMapProcess::FJ_AUTHOR       =>[ MAssuranceMapProcess::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapProcess::FJ_CREATED_AT   =>[ MAssuranceMapProcess::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapProcess::FJ_UPDATED_AT   =>[ MAssuranceMapProcess::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapProcess::FJ_DELETED_AT   =>[ MAssuranceMapProcess::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_PROCESS,
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
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

