<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DVacancies;
use  App\Models\DBModels\DBClass;

/**
 * Class MUserVacancy
 * Representation for db table user_vacancy.

 * @property  string     id         [1] type:uuid      !NULL PRIMARY 
 * @property  string     user       [2] type:uuid      !NULL         
 * @property  string     vacancy    [3] type:uuid      !NULL         
 * @property  string     author     [4] type:uuid      !NULL         
 * @property  \DateTime  validFrom  [5] type:timestamp !NULL         
 * @property  \DateTime  validUntil [6] type:timestamp               
 * @property  \DateTime  created_at [7] type:timestamp               
 * @property  \DateTime  updated_at [8] type:timestamp               
 * @property  \DateTime  deleted_at [9] type:timestamp               
 * @property  DUsers     relAuthor                                   
 * @property  DUsers     relUser                                     
 * @property  DVacancies relVacancy                                  
 * @package App\Models\DBModels\Model
 */
class MUserVacancy extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FJ_USER       = 'user';
	const  FJ_VACANCY    = 'vacancy';
	const  FJ_VALIDFROM  = 'validFrom';
	const  FJ_VALIDUNTIL = 'validUntil';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_USER       = 'relUser';
	const  FR_VACANCY    = 'relVacancy';
	const  FT_AUTHOR     = 'user_vacancy.author';
	const  FT_CREATED_AT = 'user_vacancy.created_at';
	const  FT_DELETED_AT = 'user_vacancy.deleted_at';
	const  FT_ID         = 'user_vacancy.id';
	const  FT_UPDATED_AT = 'user_vacancy.updated_at';
	const  FT_USER       = 'user_vacancy.user';
	const  FT_VACANCY    = 'user_vacancy.vacancy';
	const  FT_VALIDFROM  = 'user_vacancy.validFrom';
	const  FT_VALIDUNTIL = 'user_vacancy.validUntil';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_UPDATED_AT  = 'updated_at';
	const  F_USER        = 'user';
	const  F_VACANCY     = 'vacancy';
	const  F_VALIDFROM   = 'validFrom';
	const  F_VALIDUNTIL  = 'validUntil';

    protected $table = 'user_vacancy';

	public static array $jsonable = [
		MUserVacancy::FJ_ID         =>[ MUserVacancy::F_ID         ,null,'string',           ],
		MUserVacancy::FJ_USER       =>[ MUserVacancy::F_USER       ,null,'string',           ],
		MUserVacancy::FJ_VACANCY    =>[ MUserVacancy::F_VACANCY    ,null,'string',           ],
		MUserVacancy::FJ_AUTHOR     =>[ MUserVacancy::F_AUTHOR     ,null,'string',           ],
		MUserVacancy::FJ_VALIDFROM  =>[ MUserVacancy::F_VALIDFROM  ,'jsonDateTime','string', ],
		MUserVacancy::FJ_VALIDUNTIL =>[ MUserVacancy::F_VALIDUNTIL ,'jsonDateTime','string', ],
		MUserVacancy::FJ_CREATED_AT =>[ MUserVacancy::F_CREATED_AT ,'jsonDateTime','string', ],
		MUserVacancy::FJ_UPDATED_AT =>[ MUserVacancy::F_UPDATED_AT ,'jsonDateTime','string', ],
		MUserVacancy::FJ_DELETED_AT =>[ MUserVacancy::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_USER,
			self::F_VACANCY,
			self::F_AUTHOR,
			self::F_VALIDFROM,
			self::F_VALIDUNTIL,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_USER,
			 self::F_VACANCY,
			 self::F_AUTHOR,
			 self::F_VALIDFROM,
			 self::F_VALIDUNTIL,
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
         * @return DUsers|BelongsTo
         */
        public function relUser(){
            return $this->belongsTo(DUsers::class,self::F_USER, DUsers::F_ID);
        }
            

        /**
         * @return DVacancies|BelongsTo
         */
        public function relVacancy(){
            return $this->belongsTo(DVacancies::class,self::F_VACANCY, DVacancies::F_ID);
        }
            



}

