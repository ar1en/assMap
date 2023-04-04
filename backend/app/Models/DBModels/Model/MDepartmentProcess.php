<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DDepartments;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MDepartmentProcess
 * Representation for db table department_process.

 * @property  string       id              [1]  type:uuid      !NULL PRIMARY 
 * @property  string       department      [2]  type:uuid      !NULL         
 * @property  string       process         [3]  type:uuid      !NULL         
 * @property  string       desk            [4]  type:text                    
 * @property  boolean      controlFunction [5]  type:bool      !NULL         
 * @property  string       result          [6]  type:text                    
 * @property  string       author          [7]  type:uuid      !NULL         
 * @property  \DateTime    created_at      [8]  type:timestamp               
 * @property  \DateTime    updated_at      [9]  type:timestamp               
 * @property  \DateTime    deleted_at      [10] type:timestamp               
 * @property  DUsers       relAuthor                                         
 * @property  DDepartments relDepartment                                     
 * @property  DProcesses   relProcess                                        
 * @package App\Models\DBModels\Model
 */
class MDepartmentProcess extends DBClass {


	const  FJ_AUTHOR          = 'author';
	const  FJ_CONTROLFUNCTION = 'controlFunction';
	const  FJ_CREATED_AT      = 'createdAt';
	const  FJ_DELETED_AT      = 'deletedAt';
	const  FJ_DEPARTMENT      = 'department';
	const  FJ_DESK            = 'desk';
	const  FJ_ID              = 'id';
	const  FJ_PROCESS         = 'process';
	const  FJ_RESULT          = 'result';
	const  FJ_UPDATED_AT      = 'updatedAt';
	const  FR_AUTHOR          = 'relAuthor';
	const  FR_DEPARTMENT      = 'relDepartment';
	const  FR_PROCESS         = 'relProcess';
	const  FT_AUTHOR          = 'department_process.author';
	const  FT_CONTROLFUNCTION = 'department_process.controlFunction';
	const  FT_CREATED_AT      = 'department_process.created_at';
	const  FT_DELETED_AT      = 'department_process.deleted_at';
	const  FT_DEPARTMENT      = 'department_process.department';
	const  FT_DESK            = 'department_process.desk';
	const  FT_ID              = 'department_process.id';
	const  FT_PROCESS         = 'department_process.process';
	const  FT_RESULT          = 'department_process.result';
	const  FT_UPDATED_AT      = 'department_process.updated_at';
	const  F_AUTHOR           = 'author';
	const  F_CONTROLFUNCTION  = 'controlFunction';
	const  F_CREATED_AT       = 'created_at';
	const  F_DELETED_AT       = 'deleted_at';
	const  F_DEPARTMENT       = 'department';
	const  F_DESK             = 'desk';
	const  F_ID               = 'id';
	const  F_PROCESS          = 'process';
	const  F_RESULT           = 'result';
	const  F_UPDATED_AT       = 'updated_at';

    protected $table = 'department_process';

	public static array $jsonable = [
		MDepartmentProcess::FJ_ID              =>[ MDepartmentProcess::F_ID              ,null,'string',           ],
		MDepartmentProcess::FJ_DEPARTMENT      =>[ MDepartmentProcess::F_DEPARTMENT      ,null,'string',           ],
		MDepartmentProcess::FJ_PROCESS         =>[ MDepartmentProcess::F_PROCESS         ,null,'string',           ],
		MDepartmentProcess::FJ_DESK            =>[ MDepartmentProcess::F_DESK            ,null,'string',           ],
		MDepartmentProcess::FJ_CONTROLFUNCTION =>[ MDepartmentProcess::F_CONTROLFUNCTION ,null,'boolean',          ],
		MDepartmentProcess::FJ_RESULT          =>[ MDepartmentProcess::F_RESULT          ,null,'string',           ],
		MDepartmentProcess::FJ_AUTHOR          =>[ MDepartmentProcess::F_AUTHOR          ,null,'string',           ],
		MDepartmentProcess::FJ_CREATED_AT      =>[ MDepartmentProcess::F_CREATED_AT      ,'jsonDateTime','string', ],
		MDepartmentProcess::FJ_UPDATED_AT      =>[ MDepartmentProcess::F_UPDATED_AT      ,'jsonDateTime','string', ],
		MDepartmentProcess::FJ_DELETED_AT      =>[ MDepartmentProcess::F_DELETED_AT      ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_DEPARTMENT,
			self::F_PROCESS,
			self::F_DESK,
			self::F_CONTROLFUNCTION,
			self::F_RESULT,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_DEPARTMENT,
			 self::F_PROCESS,
			 self::F_DESK,
			 self::F_CONTROLFUNCTION,
			 self::F_RESULT,
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
         * @return DDepartments|BelongsTo
         */
        public function relDepartment(){
            return $this->belongsTo(DDepartments::class,self::F_DEPARTMENT, DDepartments::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

