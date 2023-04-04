<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignServerOptions
 * Representation for db table foreign_server_options.

 * @property  string(name) foreign_server_catalog [1] type:name      
 * @property  string(name) foreign_server_name    [2] type:name      
 * @property  string(name) option_name            [3] type:name      
 * @property  string       option_value           [4] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MForeignServerOptions extends DBClass {


	const  FJ_FOREIGN_SERVER_CATALOG = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME    = 'foreignServerName';
	const  FJ_OPTION_NAME            = 'optionName';
	const  FJ_OPTION_VALUE           = 'optionValue';
	const  FT_FOREIGN_SERVER_CATALOG = 'foreign_server_options.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME    = 'foreign_server_options.foreign_server_name';
	const  FT_OPTION_NAME            = 'foreign_server_options.option_name';
	const  FT_OPTION_VALUE           = 'foreign_server_options.option_value';
	const  F_FOREIGN_SERVER_CATALOG  = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME     = 'foreign_server_name';
	const  F_OPTION_NAME             = 'option_name';
	const  F_OPTION_VALUE            = 'option_value';

    protected $table = 'foreign_server_options';

	public static array $jsonable = [
		MForeignServerOptions::FJ_FOREIGN_SERVER_CATALOG =>[ MForeignServerOptions::F_FOREIGN_SERVER_CATALOG ,null,'string(name)', ],
		MForeignServerOptions::FJ_FOREIGN_SERVER_NAME    =>[ MForeignServerOptions::F_FOREIGN_SERVER_NAME    ,null,'string(name)', ],
		MForeignServerOptions::FJ_OPTION_NAME            =>[ MForeignServerOptions::F_OPTION_NAME            ,null,'string(name)', ],
		MForeignServerOptions::FJ_OPTION_VALUE           =>[ MForeignServerOptions::F_OPTION_VALUE           ,null,'string',       ],
	];

		protected $visible = [
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
			self::F_OPTION_NAME,
			self::F_OPTION_VALUE,
		]; 

		protected $fillable = [
		];





}

