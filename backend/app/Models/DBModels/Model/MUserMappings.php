<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MUserMappings
 * Representation for db table user_mappings.

 * @property  string(name) authorization_identifier [1] type:name   
 * @property  string(name) foreign_server_catalog   [2] type:name   
 * @property  string(name) foreign_server_name      [3] type:name   
 * @package App\Models\DBModels\Model
 */
class MUserMappings extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER = 'authorizationIdentifier';
	const  FJ_FOREIGN_SERVER_CATALOG   = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME      = 'foreignServerName';
	const  FT_AUTHORIZATION_IDENTIFIER = 'user_mappings.authorization_identifier';
	const  FT_FOREIGN_SERVER_CATALOG   = 'user_mappings.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME      = 'user_mappings.foreign_server_name';
	const  F_AUTHORIZATION_IDENTIFIER  = 'authorization_identifier';
	const  F_FOREIGN_SERVER_CATALOG    = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME       = 'foreign_server_name';

    protected $table = 'user_mappings';

	public static array $jsonable = [
		MUserMappings::FJ_AUTHORIZATION_IDENTIFIER =>[ MUserMappings::F_AUTHORIZATION_IDENTIFIER ,null,'string(name)', ],
		MUserMappings::FJ_FOREIGN_SERVER_CATALOG   =>[ MUserMappings::F_FOREIGN_SERVER_CATALOG   ,null,'string(name)', ],
		MUserMappings::FJ_FOREIGN_SERVER_NAME      =>[ MUserMappings::F_FOREIGN_SERVER_NAME      ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_AUTHORIZATION_IDENTIFIER,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
		]; 

		protected $fillable = [
		];





}

