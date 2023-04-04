<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgHbaFileRules
 * Representation for db table pg_hba_file_rules.

 * @property  int           line_number [1] type:int4    
 * @property  string        type        [2] type:text    
 * @property  string(_text) database    [3] type:_text   
 * @property  string(_text) user_name   [4] type:_text   
 * @property  string        address     [5] type:text    
 * @property  string        netmask     [6] type:text    
 * @property  string        auth_method [7] type:text    
 * @property  string(_text) options     [8] type:_text   
 * @property  string        error       [9] type:text    
 * @package App\Models\DBModels\Model
 */
class MPgHbaFileRules extends DBClass {


	const  FJ_ADDRESS     = 'address';
	const  FJ_AUTH_METHOD = 'authMethod';
	const  FJ_DATABASE    = 'database';
	const  FJ_ERROR       = 'error';
	const  FJ_LINE_NUMBER = 'lineNumber';
	const  FJ_NETMASK     = 'netmask';
	const  FJ_OPTIONS     = 'options';
	const  FJ_TYPE        = 'type';
	const  FJ_USER_NAME   = 'userName';
	const  FT_ADDRESS     = 'pg_hba_file_rules.address';
	const  FT_AUTH_METHOD = 'pg_hba_file_rules.auth_method';
	const  FT_DATABASE    = 'pg_hba_file_rules.database';
	const  FT_ERROR       = 'pg_hba_file_rules.error';
	const  FT_LINE_NUMBER = 'pg_hba_file_rules.line_number';
	const  FT_NETMASK     = 'pg_hba_file_rules.netmask';
	const  FT_OPTIONS     = 'pg_hba_file_rules.options';
	const  FT_TYPE        = 'pg_hba_file_rules.type';
	const  FT_USER_NAME   = 'pg_hba_file_rules.user_name';
	const  F_ADDRESS      = 'address';
	const  F_AUTH_METHOD  = 'auth_method';
	const  F_DATABASE     = 'database';
	const  F_ERROR        = 'error';
	const  F_LINE_NUMBER  = 'line_number';
	const  F_NETMASK      = 'netmask';
	const  F_OPTIONS      = 'options';
	const  F_TYPE         = 'type';
	const  F_USER_NAME    = 'user_name';

    protected $table = 'pg_hba_file_rules';

	public static array $jsonable = [
		MPgHbaFileRules::FJ_LINE_NUMBER =>[ MPgHbaFileRules::F_LINE_NUMBER ,null,'number',        ],
		MPgHbaFileRules::FJ_TYPE        =>[ MPgHbaFileRules::F_TYPE        ,null,'string',        ],
		MPgHbaFileRules::FJ_DATABASE    =>[ MPgHbaFileRules::F_DATABASE    ,null,'string(_text)', ],
		MPgHbaFileRules::FJ_USER_NAME   =>[ MPgHbaFileRules::F_USER_NAME   ,null,'string(_text)', ],
		MPgHbaFileRules::FJ_ADDRESS     =>[ MPgHbaFileRules::F_ADDRESS     ,null,'string',        ],
		MPgHbaFileRules::FJ_NETMASK     =>[ MPgHbaFileRules::F_NETMASK     ,null,'string',        ],
		MPgHbaFileRules::FJ_AUTH_METHOD =>[ MPgHbaFileRules::F_AUTH_METHOD ,null,'string',        ],
		MPgHbaFileRules::FJ_OPTIONS     =>[ MPgHbaFileRules::F_OPTIONS     ,null,'string(_text)', ],
		MPgHbaFileRules::FJ_ERROR       =>[ MPgHbaFileRules::F_ERROR       ,null,'string',        ],
	];

		protected $visible = [
			self::F_LINE_NUMBER,
			self::F_TYPE,
			self::F_DATABASE,
			self::F_USER_NAME,
			self::F_ADDRESS,
			self::F_NETMASK,
			self::F_AUTH_METHOD,
			self::F_OPTIONS,
			self::F_ERROR,
		]; 

		protected $fillable = [
		];





}

