<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgForeignDataWrappers
 * Representation for db table _pg_foreign_data_wrappers.

 * @property  string(oid)   oid                           [1] type:oid       
 * @property  string(oid)   fdwowner                      [2] type:oid       
 * @property  string(_text) fdwoptions                    [3] type:_text     
 * @property  string(name)  foreign_data_wrapper_catalog  [4] type:name      
 * @property  string(name)  foreign_data_wrapper_name     [5] type:name      
 * @property  string(name)  authorization_identifier      [6] type:name      
 * @property  string        foreign_data_wrapper_language [7] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MPgForeignDataWrappers extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER      = 'authorizationIdentifier';
	const  FJ_FDWOPTIONS                    = 'fdwoptions';
	const  FJ_FDWOWNER                      = 'fdwowner';
	const  FJ_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreignDataWrapperCatalog';
	const  FJ_FOREIGN_DATA_WRAPPER_LANGUAGE = 'foreignDataWrapperLanguage';
	const  FJ_FOREIGN_DATA_WRAPPER_NAME     = 'foreignDataWrapperName';
	const  FJ_OID                           = 'oid';
	const  FT_AUTHORIZATION_IDENTIFIER      = '_pg_foreign_data_wrappers.authorization_identifier';
	const  FT_FDWOPTIONS                    = '_pg_foreign_data_wrappers.fdwoptions';
	const  FT_FDWOWNER                      = '_pg_foreign_data_wrappers.fdwowner';
	const  FT_FOREIGN_DATA_WRAPPER_CATALOG  = '_pg_foreign_data_wrappers.foreign_data_wrapper_catalog';
	const  FT_FOREIGN_DATA_WRAPPER_LANGUAGE = '_pg_foreign_data_wrappers.foreign_data_wrapper_language';
	const  FT_FOREIGN_DATA_WRAPPER_NAME     = '_pg_foreign_data_wrappers.foreign_data_wrapper_name';
	const  FT_OID                           = '_pg_foreign_data_wrappers.oid';
	const  F_AUTHORIZATION_IDENTIFIER       = 'authorization_identifier';
	const  F_FDWOPTIONS                     = 'fdwoptions';
	const  F_FDWOWNER                       = 'fdwowner';
	const  F_FOREIGN_DATA_WRAPPER_CATALOG   = 'foreign_data_wrapper_catalog';
	const  F_FOREIGN_DATA_WRAPPER_LANGUAGE  = 'foreign_data_wrapper_language';
	const  F_FOREIGN_DATA_WRAPPER_NAME      = 'foreign_data_wrapper_name';
	const  F_OID                            = 'oid';

    protected $table = '_pg_foreign_data_wrappers';

	public static array $jsonable = [
		MPgForeignDataWrappers::FJ_OID                           =>[ MPgForeignDataWrappers::F_OID                           ,null,'string(oid)',   ],
		MPgForeignDataWrappers::FJ_FDWOWNER                      =>[ MPgForeignDataWrappers::F_FDWOWNER                      ,null,'string(oid)',   ],
		MPgForeignDataWrappers::FJ_FDWOPTIONS                    =>[ MPgForeignDataWrappers::F_FDWOPTIONS                    ,null,'string(_text)', ],
		MPgForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_CATALOG  =>[ MPgForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_CATALOG  ,null,'string(name)',  ],
		MPgForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_NAME     =>[ MPgForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_NAME     ,null,'string(name)',  ],
		MPgForeignDataWrappers::FJ_AUTHORIZATION_IDENTIFIER      =>[ MPgForeignDataWrappers::F_AUTHORIZATION_IDENTIFIER      ,null,'string(name)',  ],
		MPgForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_LANGUAGE =>[ MPgForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_LANGUAGE ,null,'string',        ],
	];

		protected $visible = [
			self::F_OID,
			self::F_FDWOWNER,
			self::F_FDWOPTIONS,
			self::F_FOREIGN_DATA_WRAPPER_CATALOG,
			self::F_FOREIGN_DATA_WRAPPER_NAME,
			self::F_AUTHORIZATION_IDENTIFIER,
			self::F_FOREIGN_DATA_WRAPPER_LANGUAGE,
		]; 

		protected $fillable = [
		];





}

