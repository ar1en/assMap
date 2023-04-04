<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgForeignTableColumns
 * Representation for db table _pg_foreign_table_columns.

 * @property  string(name)  nspname       [1] type:name    
 * @property  string(name)  relname       [2] type:name    
 * @property  string(name)  attname       [3] type:name    
 * @property  string(_text) attfdwoptions [4] type:_text   
 * @package App\Models\DBModels\Model
 */
class MPgForeignTableColumns extends DBClass {


	const  FJ_ATTFDWOPTIONS = 'attfdwoptions';
	const  FJ_ATTNAME       = 'attname';
	const  FJ_NSPNAME       = 'nspname';
	const  FJ_RELNAME       = 'relname';
	const  FT_ATTFDWOPTIONS = '_pg_foreign_table_columns.attfdwoptions';
	const  FT_ATTNAME       = '_pg_foreign_table_columns.attname';
	const  FT_NSPNAME       = '_pg_foreign_table_columns.nspname';
	const  FT_RELNAME       = '_pg_foreign_table_columns.relname';
	const  F_ATTFDWOPTIONS  = 'attfdwoptions';
	const  F_ATTNAME        = 'attname';
	const  F_NSPNAME        = 'nspname';
	const  F_RELNAME        = 'relname';

    protected $table = '_pg_foreign_table_columns';

	public static array $jsonable = [
		MPgForeignTableColumns::FJ_NSPNAME       =>[ MPgForeignTableColumns::F_NSPNAME       ,null,'string(name)',  ],
		MPgForeignTableColumns::FJ_RELNAME       =>[ MPgForeignTableColumns::F_RELNAME       ,null,'string(name)',  ],
		MPgForeignTableColumns::FJ_ATTNAME       =>[ MPgForeignTableColumns::F_ATTNAME       ,null,'string(name)',  ],
		MPgForeignTableColumns::FJ_ATTFDWOPTIONS =>[ MPgForeignTableColumns::F_ATTFDWOPTIONS ,null,'string(_text)', ],
	];

		protected $visible = [
			self::F_NSPNAME,
			self::F_RELNAME,
			self::F_ATTNAME,
			self::F_ATTFDWOPTIONS,
		]; 

		protected $fillable = [
		];





}

