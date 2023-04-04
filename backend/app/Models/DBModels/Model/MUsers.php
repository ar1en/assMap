<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DAssuranceMapAutomatedMonitoring;
use  Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\DBModels\Data\DAssuranceMapCollegiateBody;
use  App\Models\DBModels\Data\DAssuranceMapDocument;
use  App\Models\DBModels\Data\DAssuranceMapExternalInspection;
use  App\Models\DBModels\Data\DAssuranceMapIcsMatrix;
use  App\Models\DBModels\Data\DAssuranceMapIcsWork;
use  App\Models\DBModels\Data\DAssuranceMapInternalInspection;
use  App\Models\DBModels\Data\DAssuranceMapIssue;
use  App\Models\DBModels\Data\DAssuranceMapProcess;
use  App\Models\DBModels\Data\DAssuranceMapRisk;
use  App\Models\DBModels\Data\DAssuranceMapSelfRating;
use  App\Models\DBModels\Data\DAssuranceMaps;
use  App\Models\DBModels\Data\DAuditIssue;
use  App\Models\DBModels\Data\DAuditObject;
use  App\Models\DBModels\Data\DAuditProcess;
use  App\Models\DBModels\Data\DAudits;
use  App\Models\DBModels\Data\DAutomatedMonitoring;
use  App\Models\DBModels\Data\DAutomatedMonitoringProcess;
use  App\Models\DBModels\Data\DAutomatedMonitoringSystem;
use  App\Models\DBModels\Data\DCollegiateBodies;
use  App\Models\DBModels\Data\DCollegiateBodiesTypes;
use  App\Models\DBModels\Data\DCollegiateBodyDocument;
use  App\Models\DBModels\Data\DCollegiateBodyProcess;
use  App\Models\DBModels\Data\DDepartmentProcess;
use  App\Models\DBModels\Data\DDepartments;
use  App\Models\DBModels\Data\DDocumentProcesses;
use  App\Models\DBModels\Data\DDocuments;
use  App\Models\DBModels\Data\DDocumentsTypes;
use  App\Models\DBModels\Data\DExternalControllersTypes;
use  App\Models\DBModels\Data\DExternalInspectionFine;
use  App\Models\DBModels\Data\DExternalInspectionObject;
use  App\Models\DBModels\Data\DExternalInspectionProcess;
use  App\Models\DBModels\Data\DExternalInspectionRisk;
use  App\Models\DBModels\Data\DExternalInspections;
use  App\Models\DBModels\Data\DFines;
use  App\Models\DBModels\Data\DIcsMatrices;
use  App\Models\DBModels\Data\DIcsWorks;
use  App\Models\DBModels\Data\DIcsWorksTypes;
use  App\Models\DBModels\Data\DInternalInspectionObject;
use  App\Models\DBModels\Data\DInternalInspectionProcess;
use  App\Models\DBModels\Data\DInternalInspectionRisk;
use  App\Models\DBModels\Data\DInternalInspections;
use  App\Models\DBModels\Data\DInternalInspectionsTypes;
use  App\Models\DBModels\Data\DIssueProcess;
use  App\Models\DBModels\Data\DIssues;
use  App\Models\DBModels\Data\DIssuesTypes;
use  App\Models\DBModels\Data\DLogins;
use  App\Models\DBModels\Data\DObjects;
use  App\Models\DBModels\Data\DPeriods;
use  App\Models\DBModels\Data\DPermissions;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\Data\DProcessesTypes;
use  App\Models\DBModels\Data\DRiskProcesses;
use  App\Models\DBModels\Data\DRiskRates;
use  App\Models\DBModels\Data\DRiskRisk;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\Data\DRisksTypes;
use  App\Models\DBModels\Data\DRolePermission;
use  App\Models\DBModels\Data\DRoles;
use  App\Models\DBModels\Data\DSystems;
use  App\Models\DBModels\Data\DUserRole;
use  App\Models\DBModels\Data\DUserVacancy;
use  App\Models\DBModels\Data\DVacancies;
use  App\Models\DBModels\Data\DVacanciesTypes;
use  App\Models\DBModels\DBClass;

/**
 * Class MUsers
 * Representation for db table users.

 * @property  string                             id                                          [1] type:uuid         !NULL PRIMARY 
 * @property  string                             name                                        [2] type:varchar(255) !NULL         
 * @property  string                             author                                      [3] type:uuid         !NULL         
 * @property  \DateTime                          created_at                                  [4] type:timestamp                  
 * @property  \DateTime                          updated_at                                  [5] type:timestamp                  
 * @property  \DateTime                          deleted_at                                  [6] type:timestamp                  
 * @property  DUsers                             relAuthor                                                                       
 * @property  DAssuranceMapAutomatedMonitoring[] relsAssuranceMapAutomatedMonitoringByAuthor                                     
 * @property  DAssuranceMapCollegiateBody[]      relsAssuranceMapCollegiateBodyByAuthor                                          
 * @property  DAssuranceMapDocument[]            relsAssuranceMapDocumentByAuthor                                                
 * @property  DAssuranceMapExternalInspection[]  relsAssuranceMapExternalInspectionByAuthor                                      
 * @property  DAssuranceMapIcsMatrix[]           relsAssuranceMapIcsMatrixByAuthor                                               
 * @property  DAssuranceMapIcsWork[]             relsAssuranceMapIcsWorkByAuthor                                                 
 * @property  DAssuranceMapInternalInspection[]  relsAssuranceMapInternalInspectionByAuthor                                      
 * @property  DAssuranceMapIssue[]               relsAssuranceMapIssueByAuthor                                                   
 * @property  DAssuranceMapProcess[]             relsAssuranceMapProcessByAuthor                                                 
 * @property  DAssuranceMapRisk[]                relsAssuranceMapRiskByAuthor                                                    
 * @property  DAssuranceMapSelfRating[]          relsAssuranceMapSelfRatingByAuthor                                              
 * @property  DAssuranceMaps[]                   relsAssuranceMapsByAuthor                                                       
 * @property  DAuditIssue[]                      relsAuditIssueByAuthor                                                          
 * @property  DAuditObject[]                     relsAuditObjectByAuthor                                                         
 * @property  DAuditProcess[]                    relsAuditProcessByAuthor                                                        
 * @property  DAudits[]                          relsAuditsByAuthor                                                              
 * @property  DAutomatedMonitoring[]             relsAutomatedMonitoringByAuthor                                                 
 * @property  DAutomatedMonitoringProcess[]      relsAutomatedMonitoringProcessByAuthor                                          
 * @property  DAutomatedMonitoringSystem[]       relsAutomatedMonitoringSystemByAuthor                                           
 * @property  DCollegiateBodies[]                relsCollegiateBodiesByAuthor                                                    
 * @property  DCollegiateBodiesTypes[]           relsCollegiateBodiesTypesByAuthor                                               
 * @property  DCollegiateBodyDocument[]          relsCollegiateBodyDocumentByAuthor                                              
 * @property  DCollegiateBodyProcess[]           relsCollegiateBodyProcessByAuthor                                               
 * @property  DDepartmentProcess[]               relsDepartmentProcessByAuthor                                                   
 * @property  DDepartments[]                     relsDepartmentsByAuthor                                                         
 * @property  DDocumentProcesses[]               relsDocumentProcessesByAuthor                                                   
 * @property  DDocuments[]                       relsDocumentsByAuthor                                                           
 * @property  DDocumentsTypes[]                  relsDocumentsTypesByAuthor                                                      
 * @property  DExternalControllersTypes[]        relsExternalControllersTypesByAuthor                                            
 * @property  DExternalInspectionFine[]          relsExternalInspectionFineByAuthor                                              
 * @property  DExternalInspectionObject[]        relsExternalInspectionObjectByAuthor                                            
 * @property  DExternalInspectionProcess[]       relsExternalInspectionProcessByAuthor                                           
 * @property  DExternalInspectionRisk[]          relsExternalInspectionRiskByAuthor                                              
 * @property  DExternalInspections[]             relsExternalInspectionsByAuthor                                                 
 * @property  DFines[]                           relsFinesByAuthor                                                               
 * @property  DIcsMatrices[]                     relsIcsMatricesByAuthor                                                         
 * @property  DIcsWorks[]                        relsIcsWorksByAuthor                                                            
 * @property  DIcsWorksTypes[]                   relsIcsWorksTypesByAuthor                                                       
 * @property  DInternalInspectionObject[]        relsInternalInspectionObjectByAuthor                                            
 * @property  DInternalInspectionProcess[]       relsInternalInspectionProcessByAuthor                                           
 * @property  DInternalInspectionRisk[]          relsInternalInspectionRiskByAuthor                                              
 * @property  DInternalInspections[]             relsInternalInspectionsByAuthor                                                 
 * @property  DInternalInspectionsTypes[]        relsInternalInspectionsTypesByAuthor                                            
 * @property  DIssueProcess[]                    relsIssueProcessByAuthor                                                        
 * @property  DIssues[]                          relsIssuesByAuthor                                                              
 * @property  DIssuesTypes[]                     relsIssuesTypesByAuthor                                                         
 * @property  DLogins[]                          relsLoginsByAuthor                                                              
 * @property  DLogins[]                          relsLoginsByUser                                                                
 * @property  DObjects[]                         relsObjectsByAuthor                                                             
 * @property  DObjects[]                         relsObjectsBySupervisor                                                         
 * @property  DPeriods[]                         relsPeriodsByAuthor                                                             
 * @property  DPermissions[]                     relsPermissionsByAuthor                                                         
 * @property  DProcesses[]                       relsProcessesByAuthor                                                           
 * @property  DProcessesTypes[]                  relsProcessesTypesByAuthor                                                      
 * @property  DRiskProcesses[]                   relsRiskProcessesByAuthor                                                       
 * @property  DRiskRates[]                       relsRiskRatesByAuthor                                                           
 * @property  DRiskRisk[]                        relsRiskRiskByAuthor                                                            
 * @property  DRisks[]                           relsRisksByAuthor                                                               
 * @property  DRisksTypes[]                      relsRisksTypesByAuthor                                                          
 * @property  DRolePermission[]                  relsRolePermissionByAuthor                                                      
 * @property  DRoles[]                           relsRolesByAuthor                                                               
 * @property  DSystems[]                         relsSystemsByAuthor                                                             
 * @property  DUserRole[]                        relsUserRoleByAuthor                                                            
 * @property  DUserRole[]                        relsUserRoleByUser                                                              
 * @property  DUserVacancy[]                     relsUserVacancyByAuthor                                                         
 * @property  DUserVacancy[]                     relsUserVacancyByUser                                                           
 * @property  DUsers[]                           relsUsersByAuthor                                                               
 * @property  DVacancies[]                       relsVacanciesByAuthor                                                           
 * @property  DVacanciesTypes[]                  relsVacanciesTypesByAuthor                                                      
 * @package App\Models\DBModels\Model
 */
class MUsers extends DBClass {


	const  FJ_AUTHOR                                       = 'author';
	const  FJ_CREATED_AT                                   = 'createdAt';
	const  FJ_DELETED_AT                                   = 'deletedAt';
	const  FJ_ID                                           = 'id';
	const  FJ_NAME                                         = 'name';
	const  FJ_UPDATED_AT                                   = 'updatedAt';
	const  FR_ASSURANCE_MAPS_BY_AUTHOR                     = 'relsAssuranceMapsByAuthor';
	const  FR_ASSURANCE_MAP_AUTOMATED_MONITORING_BY_AUTHOR = 'relsAssuranceMapAutomatedMonitoringByAuthor';
	const  FR_ASSURANCE_MAP_COLLEGIATE_BODY_BY_AUTHOR      = 'relsAssuranceMapCollegiateBodyByAuthor';
	const  FR_ASSURANCE_MAP_DOCUMENT_BY_AUTHOR             = 'relsAssuranceMapDocumentByAuthor';
	const  FR_ASSURANCE_MAP_EXTERNAL_INSPECTION_BY_AUTHOR  = 'relsAssuranceMapExternalInspectionByAuthor';
	const  FR_ASSURANCE_MAP_ICS_MATRIX_BY_AUTHOR           = 'relsAssuranceMapIcsMatrixByAuthor';
	const  FR_ASSURANCE_MAP_ICS_WORK_BY_AUTHOR             = 'relsAssuranceMapIcsWorkByAuthor';
	const  FR_ASSURANCE_MAP_INTERNAL_INSPECTION_BY_AUTHOR  = 'relsAssuranceMapInternalInspectionByAuthor';
	const  FR_ASSURANCE_MAP_ISSUE_BY_AUTHOR                = 'relsAssuranceMapIssueByAuthor';
	const  FR_ASSURANCE_MAP_PROCESS_BY_AUTHOR              = 'relsAssuranceMapProcessByAuthor';
	const  FR_ASSURANCE_MAP_RISK_BY_AUTHOR                 = 'relsAssuranceMapRiskByAuthor';
	const  FR_ASSURANCE_MAP_SELF_RATING_BY_AUTHOR          = 'relsAssuranceMapSelfRatingByAuthor';
	const  FR_AUDITS_BY_AUTHOR                             = 'relsAuditsByAuthor';
	const  FR_AUDIT_ISSUE_BY_AUTHOR                        = 'relsAuditIssueByAuthor';
	const  FR_AUDIT_OBJECT_BY_AUTHOR                       = 'relsAuditObjectByAuthor';
	const  FR_AUDIT_PROCESS_BY_AUTHOR                      = 'relsAuditProcessByAuthor';
	const  FR_AUTHOR                                       = 'relAuthor';
	const  FR_AUTOMATED_MONITORING_BY_AUTHOR               = 'relsAutomatedMonitoringByAuthor';
	const  FR_AUTOMATED_MONITORING_PROCESS_BY_AUTHOR       = 'relsAutomatedMonitoringProcessByAuthor';
	const  FR_AUTOMATED_MONITORING_SYSTEM_BY_AUTHOR        = 'relsAutomatedMonitoringSystemByAuthor';
	const  FR_COLLEGIATE_BODIES_BY_AUTHOR                  = 'relsCollegiateBodiesByAuthor';
	const  FR_COLLEGIATE_BODIES_TYPES_BY_AUTHOR            = 'relsCollegiateBodiesTypesByAuthor';
	const  FR_COLLEGIATE_BODY_DOCUMENT_BY_AUTHOR           = 'relsCollegiateBodyDocumentByAuthor';
	const  FR_COLLEGIATE_BODY_PROCESS_BY_AUTHOR            = 'relsCollegiateBodyProcessByAuthor';
	const  FR_DEPARTMENTS_BY_AUTHOR                        = 'relsDepartmentsByAuthor';
	const  FR_DEPARTMENT_PROCESS_BY_AUTHOR                 = 'relsDepartmentProcessByAuthor';
	const  FR_DOCUMENTS_BY_AUTHOR                          = 'relsDocumentsByAuthor';
	const  FR_DOCUMENTS_TYPES_BY_AUTHOR                    = 'relsDocumentsTypesByAuthor';
	const  FR_DOCUMENT_PROCESSES_BY_AUTHOR                 = 'relsDocumentProcessesByAuthor';
	const  FR_EXTERNAL_CONTROLLERS_TYPES_BY_AUTHOR         = 'relsExternalControllersTypesByAuthor';
	const  FR_EXTERNAL_INSPECTIONS_BY_AUTHOR               = 'relsExternalInspectionsByAuthor';
	const  FR_EXTERNAL_INSPECTION_FINE_BY_AUTHOR           = 'relsExternalInspectionFineByAuthor';
	const  FR_EXTERNAL_INSPECTION_OBJECT_BY_AUTHOR         = 'relsExternalInspectionObjectByAuthor';
	const  FR_EXTERNAL_INSPECTION_PROCESS_BY_AUTHOR        = 'relsExternalInspectionProcessByAuthor';
	const  FR_EXTERNAL_INSPECTION_RISK_BY_AUTHOR           = 'relsExternalInspectionRiskByAuthor';
	const  FR_FINES_BY_AUTHOR                              = 'relsFinesByAuthor';
	const  FR_ICS_MATRICES_BY_AUTHOR                       = 'relsIcsMatricesByAuthor';
	const  FR_ICS_WORKS_BY_AUTHOR                          = 'relsIcsWorksByAuthor';
	const  FR_ICS_WORKS_TYPES_BY_AUTHOR                    = 'relsIcsWorksTypesByAuthor';
	const  FR_INTERNAL_INSPECTIONS_BY_AUTHOR               = 'relsInternalInspectionsByAuthor';
	const  FR_INTERNAL_INSPECTIONS_TYPES_BY_AUTHOR         = 'relsInternalInspectionsTypesByAuthor';
	const  FR_INTERNAL_INSPECTION_OBJECT_BY_AUTHOR         = 'relsInternalInspectionObjectByAuthor';
	const  FR_INTERNAL_INSPECTION_PROCESS_BY_AUTHOR        = 'relsInternalInspectionProcessByAuthor';
	const  FR_INTERNAL_INSPECTION_RISK_BY_AUTHOR           = 'relsInternalInspectionRiskByAuthor';
	const  FR_ISSUES_BY_AUTHOR                             = 'relsIssuesByAuthor';
	const  FR_ISSUES_TYPES_BY_AUTHOR                       = 'relsIssuesTypesByAuthor';
	const  FR_ISSUE_PROCESS_BY_AUTHOR                      = 'relsIssueProcessByAuthor';
	const  FR_LOGINS_BY_AUTHOR                             = 'relsLoginsByAuthor';
	const  FR_LOGINS_BY_USER                               = 'relsLoginsByUser';
	const  FR_OBJECTS_BY_AUTHOR                            = 'relsObjectsByAuthor';
	const  FR_OBJECTS_BY_SUPERVISOR                        = 'relsObjectsBySupervisor';
	const  FR_PERIODS_BY_AUTHOR                            = 'relsPeriodsByAuthor';
	const  FR_PERMISSIONS_BY_AUTHOR                        = 'relsPermissionsByAuthor';
	const  FR_PROCESSES_BY_AUTHOR                          = 'relsProcessesByAuthor';
	const  FR_PROCESSES_TYPES_BY_AUTHOR                    = 'relsProcessesTypesByAuthor';
	const  FR_RISKS_BY_AUTHOR                              = 'relsRisksByAuthor';
	const  FR_RISKS_TYPES_BY_AUTHOR                        = 'relsRisksTypesByAuthor';
	const  FR_RISK_PROCESSES_BY_AUTHOR                     = 'relsRiskProcessesByAuthor';
	const  FR_RISK_RATES_BY_AUTHOR                         = 'relsRiskRatesByAuthor';
	const  FR_RISK_RISK_BY_AUTHOR                          = 'relsRiskRiskByAuthor';
	const  FR_ROLES_BY_AUTHOR                              = 'relsRolesByAuthor';
	const  FR_ROLE_PERMISSION_BY_AUTHOR                    = 'relsRolePermissionByAuthor';
	const  FR_SYSTEMS_BY_AUTHOR                            = 'relsSystemsByAuthor';
	const  FR_USERS_BY_AUTHOR                              = 'relsUsersByAuthor';
	const  FR_USER_ROLE_BY_AUTHOR                          = 'relsUserRoleByAuthor';
	const  FR_USER_ROLE_BY_USER                            = 'relsUserRoleByUser';
	const  FR_USER_VACANCY_BY_AUTHOR                       = 'relsUserVacancyByAuthor';
	const  FR_USER_VACANCY_BY_USER                         = 'relsUserVacancyByUser';
	const  FR_VACANCIES_BY_AUTHOR                          = 'relsVacanciesByAuthor';
	const  FR_VACANCIES_TYPES_BY_AUTHOR                    = 'relsVacanciesTypesByAuthor';
	const  FT_AUTHOR                                       = 'users.author';
	const  FT_CREATED_AT                                   = 'users.created_at';
	const  FT_DELETED_AT                                   = 'users.deleted_at';
	const  FT_ID                                           = 'users.id';
	const  FT_NAME                                         = 'users.name';
	const  FT_UPDATED_AT                                   = 'users.updated_at';
	const  F_AUTHOR                                        = 'author';
	const  F_CREATED_AT                                    = 'created_at';
	const  F_DELETED_AT                                    = 'deleted_at';
	const  F_ID                                            = 'id';
	const  F_NAME                                          = 'name';
	const  F_UPDATED_AT                                    = 'updated_at';

    protected $table = 'users';

	public static array $jsonable = [
		MUsers::FJ_ID         =>[ MUsers::F_ID         ,null,'string',           ],
		MUsers::FJ_NAME       =>[ MUsers::F_NAME       ,null,'string',           ],
		MUsers::FJ_AUTHOR     =>[ MUsers::F_AUTHOR     ,null,'string',           ],
		MUsers::FJ_CREATED_AT =>[ MUsers::F_CREATED_AT ,'jsonDateTime','string', ],
		MUsers::FJ_UPDATED_AT =>[ MUsers::F_UPDATED_AT ,'jsonDateTime','string', ],
		MUsers::FJ_DELETED_AT =>[ MUsers::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_NAME,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_NAME,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


        /**
         * @return DUsers|BelongsTo
         */
        public function relAuthor(){
            return $this->belongsTo(DUsers::class,self::F_AUTHOR, DUsers::F_ID);
        }
            


        /**
         * @return DAssuranceMapAutomatedMonitoring[]|HasMany
         */
        public function relsAssuranceMapAutomatedMonitoringByAuthor(){
            return $this->hasMany(DAssuranceMapAutomatedMonitoring::class, DAssuranceMapAutomatedMonitoring::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapCollegiateBody[]|HasMany
         */
        public function relsAssuranceMapCollegiateBodyByAuthor(){
            return $this->hasMany(DAssuranceMapCollegiateBody::class, DAssuranceMapCollegiateBody::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapDocument[]|HasMany
         */
        public function relsAssuranceMapDocumentByAuthor(){
            return $this->hasMany(DAssuranceMapDocument::class, DAssuranceMapDocument::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapExternalInspection[]|HasMany
         */
        public function relsAssuranceMapExternalInspectionByAuthor(){
            return $this->hasMany(DAssuranceMapExternalInspection::class, DAssuranceMapExternalInspection::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIcsMatrix[]|HasMany
         */
        public function relsAssuranceMapIcsMatrixByAuthor(){
            return $this->hasMany(DAssuranceMapIcsMatrix::class, DAssuranceMapIcsMatrix::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIcsWork[]|HasMany
         */
        public function relsAssuranceMapIcsWorkByAuthor(){
            return $this->hasMany(DAssuranceMapIcsWork::class, DAssuranceMapIcsWork::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapInternalInspection[]|HasMany
         */
        public function relsAssuranceMapInternalInspectionByAuthor(){
            return $this->hasMany(DAssuranceMapInternalInspection::class, DAssuranceMapInternalInspection::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIssue[]|HasMany
         */
        public function relsAssuranceMapIssueByAuthor(){
            return $this->hasMany(DAssuranceMapIssue::class, DAssuranceMapIssue::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapProcess[]|HasMany
         */
        public function relsAssuranceMapProcessByAuthor(){
            return $this->hasMany(DAssuranceMapProcess::class, DAssuranceMapProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapRisk[]|HasMany
         */
        public function relsAssuranceMapRiskByAuthor(){
            return $this->hasMany(DAssuranceMapRisk::class, DAssuranceMapRisk::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapSelfRating[]|HasMany
         */
        public function relsAssuranceMapSelfRatingByAuthor(){
            return $this->hasMany(DAssuranceMapSelfRating::class, DAssuranceMapSelfRating::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAssuranceMaps[]|HasMany
         */
        public function relsAssuranceMapsByAuthor(){
            return $this->hasMany(DAssuranceMaps::class, DAssuranceMaps::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAuditIssue[]|HasMany
         */
        public function relsAuditIssueByAuthor(){
            return $this->hasMany(DAuditIssue::class, DAuditIssue::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAuditObject[]|HasMany
         */
        public function relsAuditObjectByAuthor(){
            return $this->hasMany(DAuditObject::class, DAuditObject::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAuditProcess[]|HasMany
         */
        public function relsAuditProcessByAuthor(){
            return $this->hasMany(DAuditProcess::class, DAuditProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAudits[]|HasMany
         */
        public function relsAuditsByAuthor(){
            return $this->hasMany(DAudits::class, DAudits::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAutomatedMonitoring[]|HasMany
         */
        public function relsAutomatedMonitoringByAuthor(){
            return $this->hasMany(DAutomatedMonitoring::class, DAutomatedMonitoring::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAutomatedMonitoringProcess[]|HasMany
         */
        public function relsAutomatedMonitoringProcessByAuthor(){
            return $this->hasMany(DAutomatedMonitoringProcess::class, DAutomatedMonitoringProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DAutomatedMonitoringSystem[]|HasMany
         */
        public function relsAutomatedMonitoringSystemByAuthor(){
            return $this->hasMany(DAutomatedMonitoringSystem::class, DAutomatedMonitoringSystem::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DCollegiateBodies[]|HasMany
         */
        public function relsCollegiateBodiesByAuthor(){
            return $this->hasMany(DCollegiateBodies::class, DCollegiateBodies::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DCollegiateBodiesTypes[]|HasMany
         */
        public function relsCollegiateBodiesTypesByAuthor(){
            return $this->hasMany(DCollegiateBodiesTypes::class, DCollegiateBodiesTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DCollegiateBodyDocument[]|HasMany
         */
        public function relsCollegiateBodyDocumentByAuthor(){
            return $this->hasMany(DCollegiateBodyDocument::class, DCollegiateBodyDocument::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DCollegiateBodyProcess[]|HasMany
         */
        public function relsCollegiateBodyProcessByAuthor(){
            return $this->hasMany(DCollegiateBodyProcess::class, DCollegiateBodyProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DDepartmentProcess[]|HasMany
         */
        public function relsDepartmentProcessByAuthor(){
            return $this->hasMany(DDepartmentProcess::class, DDepartmentProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DDepartments[]|HasMany
         */
        public function relsDepartmentsByAuthor(){
            return $this->hasMany(DDepartments::class, DDepartments::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DDocumentProcesses[]|HasMany
         */
        public function relsDocumentProcessesByAuthor(){
            return $this->hasMany(DDocumentProcesses::class, DDocumentProcesses::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DDocuments[]|HasMany
         */
        public function relsDocumentsByAuthor(){
            return $this->hasMany(DDocuments::class, DDocuments::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DDocumentsTypes[]|HasMany
         */
        public function relsDocumentsTypesByAuthor(){
            return $this->hasMany(DDocumentsTypes::class, DDocumentsTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalControllersTypes[]|HasMany
         */
        public function relsExternalControllersTypesByAuthor(){
            return $this->hasMany(DExternalControllersTypes::class, DExternalControllersTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalInspectionFine[]|HasMany
         */
        public function relsExternalInspectionFineByAuthor(){
            return $this->hasMany(DExternalInspectionFine::class, DExternalInspectionFine::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalInspectionObject[]|HasMany
         */
        public function relsExternalInspectionObjectByAuthor(){
            return $this->hasMany(DExternalInspectionObject::class, DExternalInspectionObject::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalInspectionProcess[]|HasMany
         */
        public function relsExternalInspectionProcessByAuthor(){
            return $this->hasMany(DExternalInspectionProcess::class, DExternalInspectionProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalInspectionRisk[]|HasMany
         */
        public function relsExternalInspectionRiskByAuthor(){
            return $this->hasMany(DExternalInspectionRisk::class, DExternalInspectionRisk::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DExternalInspections[]|HasMany
         */
        public function relsExternalInspectionsByAuthor(){
            return $this->hasMany(DExternalInspections::class, DExternalInspections::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DFines[]|HasMany
         */
        public function relsFinesByAuthor(){
            return $this->hasMany(DFines::class, DFines::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIcsMatrices[]|HasMany
         */
        public function relsIcsMatricesByAuthor(){
            return $this->hasMany(DIcsMatrices::class, DIcsMatrices::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIcsWorks[]|HasMany
         */
        public function relsIcsWorksByAuthor(){
            return $this->hasMany(DIcsWorks::class, DIcsWorks::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIcsWorksTypes[]|HasMany
         */
        public function relsIcsWorksTypesByAuthor(){
            return $this->hasMany(DIcsWorksTypes::class, DIcsWorksTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DInternalInspectionObject[]|HasMany
         */
        public function relsInternalInspectionObjectByAuthor(){
            return $this->hasMany(DInternalInspectionObject::class, DInternalInspectionObject::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DInternalInspectionProcess[]|HasMany
         */
        public function relsInternalInspectionProcessByAuthor(){
            return $this->hasMany(DInternalInspectionProcess::class, DInternalInspectionProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DInternalInspectionRisk[]|HasMany
         */
        public function relsInternalInspectionRiskByAuthor(){
            return $this->hasMany(DInternalInspectionRisk::class, DInternalInspectionRisk::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DInternalInspections[]|HasMany
         */
        public function relsInternalInspectionsByAuthor(){
            return $this->hasMany(DInternalInspections::class, DInternalInspections::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DInternalInspectionsTypes[]|HasMany
         */
        public function relsInternalInspectionsTypesByAuthor(){
            return $this->hasMany(DInternalInspectionsTypes::class, DInternalInspectionsTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIssueProcess[]|HasMany
         */
        public function relsIssueProcessByAuthor(){
            return $this->hasMany(DIssueProcess::class, DIssueProcess::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIssues[]|HasMany
         */
        public function relsIssuesByAuthor(){
            return $this->hasMany(DIssues::class, DIssues::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DIssuesTypes[]|HasMany
         */
        public function relsIssuesTypesByAuthor(){
            return $this->hasMany(DIssuesTypes::class, DIssuesTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DLogins[]|HasMany
         */
        public function relsLoginsByAuthor(){
            return $this->hasMany(DLogins::class, DLogins::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DLogins[]|HasMany
         */
        public function relsLoginsByUser(){
            return $this->hasMany(DLogins::class, DLogins::F_USER, self::F_ID);
        }
            

        /**
         * @return DObjects[]|HasMany
         */
        public function relsObjectsByAuthor(){
            return $this->hasMany(DObjects::class, DObjects::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DObjects[]|HasMany
         */
        public function relsObjectsBySupervisor(){
            return $this->hasMany(DObjects::class, DObjects::F_SUPERVISOR, self::F_ID);
        }
            

        /**
         * @return DPeriods[]|HasMany
         */
        public function relsPeriodsByAuthor(){
            return $this->hasMany(DPeriods::class, DPeriods::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DPermissions[]|HasMany
         */
        public function relsPermissionsByAuthor(){
            return $this->hasMany(DPermissions::class, DPermissions::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DProcesses[]|HasMany
         */
        public function relsProcessesByAuthor(){
            return $this->hasMany(DProcesses::class, DProcesses::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DProcessesTypes[]|HasMany
         */
        public function relsProcessesTypesByAuthor(){
            return $this->hasMany(DProcessesTypes::class, DProcessesTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRiskProcesses[]|HasMany
         */
        public function relsRiskProcessesByAuthor(){
            return $this->hasMany(DRiskProcesses::class, DRiskProcesses::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRiskRates[]|HasMany
         */
        public function relsRiskRatesByAuthor(){
            return $this->hasMany(DRiskRates::class, DRiskRates::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRiskRisk[]|HasMany
         */
        public function relsRiskRiskByAuthor(){
            return $this->hasMany(DRiskRisk::class, DRiskRisk::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRisks[]|HasMany
         */
        public function relsRisksByAuthor(){
            return $this->hasMany(DRisks::class, DRisks::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRisksTypes[]|HasMany
         */
        public function relsRisksTypesByAuthor(){
            return $this->hasMany(DRisksTypes::class, DRisksTypes::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRolePermission[]|HasMany
         */
        public function relsRolePermissionByAuthor(){
            return $this->hasMany(DRolePermission::class, DRolePermission::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DRoles[]|HasMany
         */
        public function relsRolesByAuthor(){
            return $this->hasMany(DRoles::class, DRoles::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DSystems[]|HasMany
         */
        public function relsSystemsByAuthor(){
            return $this->hasMany(DSystems::class, DSystems::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DUserRole[]|HasMany
         */
        public function relsUserRoleByAuthor(){
            return $this->hasMany(DUserRole::class, DUserRole::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DUserRole[]|HasMany
         */
        public function relsUserRoleByUser(){
            return $this->hasMany(DUserRole::class, DUserRole::F_USER, self::F_ID);
        }
            

        /**
         * @return DUserVacancy[]|HasMany
         */
        public function relsUserVacancyByAuthor(){
            return $this->hasMany(DUserVacancy::class, DUserVacancy::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DUserVacancy[]|HasMany
         */
        public function relsUserVacancyByUser(){
            return $this->hasMany(DUserVacancy::class, DUserVacancy::F_USER, self::F_ID);
        }
            

        /**
         * @return DUsers[]|HasMany
         */
        public function relsUsersByAuthor(){
            return $this->hasMany(DUsers::class, DUsers::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DVacancies[]|HasMany
         */
        public function relsVacanciesByAuthor(){
            return $this->hasMany(DVacancies::class, DVacancies::F_AUTHOR, self::F_ID);
        }
            

        /**
         * @return DVacanciesTypes[]|HasMany
         */
        public function relsVacanciesTypesByAuthor(){
            return $this->hasMany(DVacanciesTypes::class, DVacanciesTypes::F_AUTHOR, self::F_ID);
        }
            

}

