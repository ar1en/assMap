<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignDataWrapperOptions
 * Representation for db table foreign_data_wrapper_options.

 * @property  string(name) foreign_data_wrapper_catalog [1] type:name      
 * @property  string(name) foreign_data_wrapper_name    [2] type:name      
 * @property  string(name) option_name                  [3] type:name      
 * @property  string       option_value                 [4] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MForeignDataWrapperOptions extends DBClass {


	const  FJ_FOREIGN_DATA_WRAPPER_CATALOG = 'foreignDataWrapperCatalog';
	const  FJ_FOREIGN_DATA_WRAPPER_NAME    = 'foreignDataWrapperName';
	const  FJ_OPTION_NAME                  = 'optionName';
	const  FJ_OPTION_VALUE                 = 'optionValue';
	const  FT_FOREIGN_DATA_WRAPPER_CATALOG = 'foreign_data_wrapper_options.foreign_data_wrapper_catalog';
	const  FT_FOREIGN_DATA_WRAPPER_NAME    = 'foreign_data_wrapper_options.foreign_data_wrapper_name';
	const  FT_OPTION_NAME                  = 'foreign_data_wrapper_options.option_name';
	const  FT_OPTION_VALUE                 = 'foreign_data_wrapper_options.option_value';
	const  F_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreign_data_wrapper_catalog';
	const  F_FOREIGN_DATA_WRAPPER_NAME     = 'foreign_data_wrapper_name';
	const  F_OPTION_NAME                   = 'option_name';
	const  F_OPTION_VALUE                  = 'option_value';

    protected $table = 'foreign_data_wrapper_options';

	public static array $jsonable = [
		MForeignDataWrapperOptions::FJ_FOREIGN_DATA_WRAPPER_CATALOG =>[ MForeignDataWrapperOptions::F_FOREIGN_DATA_WRAPPER_CATALOG ,null,'string(name)', ],
		MForeignDataWrapperOptions::FJ_FOREIGN_DATA_WRAPPER_NAME    =>[ MForeignDataWrapperOptions::F_FOREIGN_DATA_WRAPPER_NAME    ,null,'string(name)', ],
		MForeignDataWrapperOptions::FJ_OPTION_NAME                  =>[ MForeignDataWrapperOptions::F_OPTION_NAME                  ,null,'string(name)', ],
		MForeignDataWrapperOptions::FJ_OPTION_VALUE                 =>[ MForeignDataWrapperOptions::F_OPTION_VALUE                 ,null,'string',       ],
	];

		protected $visible = [
			self::F_FOREIGN_DATA_WRAPPER_CATALOG,
			self::F_FOREIGN_DATA_WRAPPER_NAME,
			self::F_OPTION_NAME,
			self::F_OPTION_VALUE,
		]; 

		protected $fillable = [
		];





}

