<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgPublicationTables
 * Representation for db table pg_publication_tables.

 * @property  string(name)  pubname    [1] type:name    
 * @property  string(name)  schemaname [2] type:name    
 * @property  string(name)  tablename  [3] type:name    
 * @property  string(_name) attnames   [4] type:_name   
 * @property  string        rowfilter  [5] type:text    
 * @package App\Models\DBModels\Model
 */
class MPgPublicationTables extends DBClass {


	const  FJ_ATTNAMES   = 'attnames';
	const  FJ_PUBNAME    = 'pubname';
	const  FJ_ROWFILTER  = 'rowfilter';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_TABLENAME  = 'tablename';
	const  FT_ATTNAMES   = 'pg_publication_tables.attnames';
	const  FT_PUBNAME    = 'pg_publication_tables.pubname';
	const  FT_ROWFILTER  = 'pg_publication_tables.rowfilter';
	const  FT_SCHEMANAME = 'pg_publication_tables.schemaname';
	const  FT_TABLENAME  = 'pg_publication_tables.tablename';
	const  F_ATTNAMES    = 'attnames';
	const  F_PUBNAME     = 'pubname';
	const  F_ROWFILTER   = 'rowfilter';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_TABLENAME   = 'tablename';

    protected $table = 'pg_publication_tables';

	public static array $jsonable = [
		MPgPublicationTables::FJ_PUBNAME    =>[ MPgPublicationTables::F_PUBNAME    ,null,'string(name)',  ],
		MPgPublicationTables::FJ_SCHEMANAME =>[ MPgPublicationTables::F_SCHEMANAME ,null,'string(name)',  ],
		MPgPublicationTables::FJ_TABLENAME  =>[ MPgPublicationTables::F_TABLENAME  ,null,'string(name)',  ],
		MPgPublicationTables::FJ_ATTNAMES   =>[ MPgPublicationTables::F_ATTNAMES   ,null,'string(_name)', ],
		MPgPublicationTables::FJ_ROWFILTER  =>[ MPgPublicationTables::F_ROWFILTER  ,null,'string',        ],
	];

		protected $visible = [
			self::F_PUBNAME,
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_ATTNAMES,
			self::F_ROWFILTER,
		]; 

		protected $fillable = [
		];





}

