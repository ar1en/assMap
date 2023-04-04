<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MUserMappingOptions
 * Representation for db table user_mapping_options.

 * @property  string(name) authorization_identifier [1] type:name      
 * @property  string(name) foreign_server_catalog   [2] type:name      
 * @property  string(name) foreign_server_name      [3] type:name      
 * @property  string(name) option_name              [4] type:name      
 * @property  string       option_value             [5] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MUserMappingOptions extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER = 'authorizationIdentifier';
	const  FJ_FOREIGN_SERVER_CATALOG   = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME      = 'foreignServerName';
	const  FJ_OPTION_NAME              = 'optionName';
	const  FJ_OPTION_VALUE             = 'optionValue';
	const  FT_AUTHORIZATION_IDENTIFIER = 'user_mapping_options.authorization_identifier';
	const  FT_FOREIGN_SERVER_CATALOG   = 'user_mapping_options.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME      = 'user_mapping_options.foreign_server_name';
	const  FT_OPTION_NAME              = 'user_mapping_options.option_name';
	const  FT_OPTION_VALUE             = 'user_mapping_options.option_value';
	const  F_AUTHORIZATION_IDENTIFIER  = 'authorization_identifier';
	const  F_FOREIGN_SERVER_CATALOG    = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME       = 'foreign_server_name';
	const  F_OPTION_NAME               = 'option_name';
	const  F_OPTION_VALUE              = 'option_value';

    protected $table = 'user_mapping_options';

	public static array $jsonable = [
		MUserMappingOptions::FJ_AUTHORIZATION_IDENTIFIER =>[ MUserMappingOptions::F_AUTHORIZATION_IDENTIFIER ,null,'string(name)', ],
		MUserMappingOptions::FJ_FOREIGN_SERVER_CATALOG   =>[ MUserMappingOptions::F_FOREIGN_SERVER_CATALOG   ,null,'string(name)', ],
		MUserMappingOptions::FJ_FOREIGN_SERVER_NAME      =>[ MUserMappingOptions::F_FOREIGN_SERVER_NAME      ,null,'string(name)', ],
		MUserMappingOptions::FJ_OPTION_NAME              =>[ MUserMappingOptions::F_OPTION_NAME              ,null,'string(name)', ],
		MUserMappingOptions::FJ_OPTION_VALUE             =>[ MUserMappingOptions::F_OPTION_VALUE             ,null,'string',       ],
	];

		protected $visible = [
			self::F_AUTHORIZATION_IDENTIFIER,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
			self::F_OPTION_NAME,
			self::F_OPTION_VALUE,
		]; 

		protected $fillable = [
		];





}

