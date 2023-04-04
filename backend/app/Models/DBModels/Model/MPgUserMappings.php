<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgUserMappings
 * Representation for db table _pg_user_mappings.

 * @property  string(oid)   oid                      [1] type:oid     
 * @property  string(_text) umoptions                [2] type:_text   
 * @property  string(oid)   umuser                   [3] type:oid     
 * @property  string(name)  authorization_identifier [4] type:name    
 * @property  string(name)  foreign_server_catalog   [5] type:name    
 * @property  string(name)  foreign_server_name      [6] type:name    
 * @property  string(name)  srvowner                 [7] type:name    
 * @package App\Models\DBModels\Model
 */
class MPgUserMappings extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER = 'authorizationIdentifier';
	const  FJ_FOREIGN_SERVER_CATALOG   = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME      = 'foreignServerName';
	const  FJ_OID                      = 'oid';
	const  FJ_SRVOWNER                 = 'srvowner';
	const  FJ_UMOPTIONS                = 'umoptions';
	const  FJ_UMUSER                   = 'umuser';
	const  FT_AUTHORIZATION_IDENTIFIER = '_pg_user_mappings.authorization_identifier';
	const  FT_FOREIGN_SERVER_CATALOG   = '_pg_user_mappings.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME      = '_pg_user_mappings.foreign_server_name';
	const  FT_OID                      = '_pg_user_mappings.oid';
	const  FT_SRVOWNER                 = '_pg_user_mappings.srvowner';
	const  FT_UMOPTIONS                = '_pg_user_mappings.umoptions';
	const  FT_UMUSER                   = '_pg_user_mappings.umuser';
	const  F_AUTHORIZATION_IDENTIFIER  = 'authorization_identifier';
	const  F_FOREIGN_SERVER_CATALOG    = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME       = 'foreign_server_name';
	const  F_OID                       = 'oid';
	const  F_SRVOWNER                  = 'srvowner';
	const  F_UMOPTIONS                 = 'umoptions';
	const  F_UMUSER                    = 'umuser';

    protected $table = '_pg_user_mappings';

	public static array $jsonable = [
		MPgUserMappings::FJ_OID                      =>[ MPgUserMappings::F_OID                      ,null,'string(oid)',   ],
		MPgUserMappings::FJ_UMOPTIONS                =>[ MPgUserMappings::F_UMOPTIONS                ,null,'string(_text)', ],
		MPgUserMappings::FJ_UMUSER                   =>[ MPgUserMappings::F_UMUSER                   ,null,'string(oid)',   ],
		MPgUserMappings::FJ_AUTHORIZATION_IDENTIFIER =>[ MPgUserMappings::F_AUTHORIZATION_IDENTIFIER ,null,'string(name)',  ],
		MPgUserMappings::FJ_FOREIGN_SERVER_CATALOG   =>[ MPgUserMappings::F_FOREIGN_SERVER_CATALOG   ,null,'string(name)',  ],
		MPgUserMappings::FJ_FOREIGN_SERVER_NAME      =>[ MPgUserMappings::F_FOREIGN_SERVER_NAME      ,null,'string(name)',  ],
		MPgUserMappings::FJ_SRVOWNER                 =>[ MPgUserMappings::F_SRVOWNER                 ,null,'string(name)',  ],
	];

		protected $visible = [
			self::F_OID,
			self::F_UMOPTIONS,
			self::F_UMUSER,
			self::F_AUTHORIZATION_IDENTIFIER,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
			self::F_SRVOWNER,
		]; 

		protected $fillable = [
		];





}

