<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignDataWrappers
 * Representation for db table foreign_data_wrappers.

 * @property  string(name) foreign_data_wrapper_catalog  [1] type:name      
 * @property  string(name) foreign_data_wrapper_name     [2] type:name      
 * @property  string(name) authorization_identifier      [3] type:name      
 * @property  string       library_name                  [4] type:varchar   
 * @property  string       foreign_data_wrapper_language [5] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MForeignDataWrappers extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER      = 'authorizationIdentifier';
	const  FJ_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreignDataWrapperCatalog';
	const  FJ_FOREIGN_DATA_WRAPPER_LANGUAGE = 'foreignDataWrapperLanguage';
	const  FJ_FOREIGN_DATA_WRAPPER_NAME     = 'foreignDataWrapperName';
	const  FJ_LIBRARY_NAME                  = 'libraryName';
	const  FT_AUTHORIZATION_IDENTIFIER      = 'foreign_data_wrappers.authorization_identifier';
	const  FT_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreign_data_wrappers.foreign_data_wrapper_catalog';
	const  FT_FOREIGN_DATA_WRAPPER_LANGUAGE = 'foreign_data_wrappers.foreign_data_wrapper_language';
	const  FT_FOREIGN_DATA_WRAPPER_NAME     = 'foreign_data_wrappers.foreign_data_wrapper_name';
	const  FT_LIBRARY_NAME                  = 'foreign_data_wrappers.library_name';
	const  F_AUTHORIZATION_IDENTIFIER       = 'authorization_identifier';
	const  F_FOREIGN_DATA_WRAPPER_CATALOG   = 'foreign_data_wrapper_catalog';
	const  F_FOREIGN_DATA_WRAPPER_LANGUAGE  = 'foreign_data_wrapper_language';
	const  F_FOREIGN_DATA_WRAPPER_NAME      = 'foreign_data_wrapper_name';
	const  F_LIBRARY_NAME                   = 'library_name';

    protected $table = 'foreign_data_wrappers';

	public static array $jsonable = [
		MForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_CATALOG  =>[ MForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_CATALOG  ,null,'string(name)', ],
		MForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_NAME     =>[ MForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_NAME     ,null,'string(name)', ],
		MForeignDataWrappers::FJ_AUTHORIZATION_IDENTIFIER      =>[ MForeignDataWrappers::F_AUTHORIZATION_IDENTIFIER      ,null,'string(name)', ],
		MForeignDataWrappers::FJ_LIBRARY_NAME                  =>[ MForeignDataWrappers::F_LIBRARY_NAME                  ,null,'string',       ],
		MForeignDataWrappers::FJ_FOREIGN_DATA_WRAPPER_LANGUAGE =>[ MForeignDataWrappers::F_FOREIGN_DATA_WRAPPER_LANGUAGE ,null,'string',       ],
	];

		protected $visible = [
			self::F_FOREIGN_DATA_WRAPPER_CATALOG,
			self::F_FOREIGN_DATA_WRAPPER_NAME,
			self::F_AUTHORIZATION_IDENTIFIER,
			self::F_LIBRARY_NAME,
			self::F_FOREIGN_DATA_WRAPPER_LANGUAGE,
		]; 

		protected $fillable = [
		];





}

