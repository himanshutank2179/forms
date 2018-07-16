<?php

namespace app\helpers;

use app\models\AuditElements;
use app\models\Cities;
use app\models\Clients;
use app\models\Company;
use app\models\Countries;
use app\models\DocumentsAndDistributionMaster;
use app\models\IncommingQc;
use app\models\InstrumentMaster;
use app\models\ItqtOnePlanner;
use app\models\Jobcard;
use app\models\OperationMaster;
use app\models\OrderQuotation;
use app\models\Parameters;
use app\models\ProcessMaster;
use app\models\PurchaseOrder;
use app\models\PurchaseReceipt;
use app\models\States;
use app\models\Users;
use app\models\ProductMaster;
use app\models\Responsibility;
use app\models\UnitsOfMeasures;
use app\models\Vendors;
use yii;
use yii\helpers\ArrayHelper;


class AppHelper
{


    static public function getResponsibility()
    {
        $responsibility = Responsibility::find()->all();
        $list = ArrayHelper::map($responsibility, 'responsibility_id', 'responsibility');
        return $list;
    }

    static public function getCompanies()
    {
        $responsibility = Company::find()->all();
        $list = ArrayHelper::map($responsibility, 'company_id', 'name');
        return $list;
    }

    static public function getProducts()
    {
        $data = ProductMaster::find()->where(['is_purchase' => 0, 'is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'product_master_id', 'product_name');
        return $list;
    }

    static public function getQuoteRef()
    {
        $data = OrderQuotation::find()->all();
        $list = ArrayHelper::map($data, 'our_quote_ref_num', 'our_quote_ref_num');
        return $list;
    }

    static public function getAllProducts()
    {
        $data = ProductMaster::find()->where(['is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'product_master_id', 'product_name');
        return $list;
    }

    static public function getProductsCode()
    {
        $data = ProductMaster::find()->where(['is_purchase' => 0, 'is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'product_code', function ($model) {
            return $model->product_code . '-' . $model->product_name;
        });
        return $list;
    }

    static public function getParameters()
    {
        $data = Parameters::find()->all();
        $list = ArrayHelper::map($data, 'parameter_id', 'name');
        return $list;
    }

    static public function getProcess()
    {
        $data = ProcessMaster::find()->all();
        $list = ArrayHelper::map($data, 'process_master_id', 'name');
        return $list;
    }

    static public function getClients()
    {
        $data = Clients::find()->where(['is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'client_id', 'name');
        return $list;
    }


    static public function getRawMaterials()
    {
        $data = ProductMaster::find()->where(['is_purchase' => 1, 'is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'product_master_id', 'product_name');
        return $list;
    }

    static public function getOperations()
    {
        $data = OperationMaster::find()->all();
        $list = ArrayHelper::map($data, 'operation_master_id', 'name');
        return $list;
    }

    static public function getInstruments()
    {
        $data = InstrumentMaster::find()->all();
        $list = ArrayHelper::map($data, 'instrument_master_id', 'name_of_instrument');
        return $list;
    }

    static public function getEmployee()
    {
        $data = Users::find()->all();
        $list = ArrayHelper::map($data, 'user_id', 'name');
        return $list;
    }

    static public function getUnitsOfMeasures()
    {
        $data = UnitsOfMeasures::find()->all();
        $list = ArrayHelper::map($data, 'units_of_measures_id', 'name');
        return $list;
    }

    static public function getVendors()
    {
        $data = Vendors::find()->all();
        $list = ArrayHelper::map($data, 'vendor_id', 'name');
        return $list;
    }

    static public function getSRNo()
    {
        $data = PurchaseOrder::find()->all();
        $list = ArrayHelper::map($data, 'po_no', 'po_no');
        return $list;
    }

    static public function getPONo()
    {
        $data = PurchaseOrder::find()->all();
        $list = ArrayHelper::map($data, 'po_no', function ($model) {
            /*return $model->po_no . '-' . $model->product->product_name;*/
            return $model->po_no;
        });
        return $list;
    }

    static public function getGRNO()
    {
        $data = PurchaseReceipt::find()->all();
        $list = ArrayHelper::map($data, 'GRN_NO', 'GRN_NO');
        return $list;
    }

    static public function getTestedAndApprovedSRNO()
    {
        $data = IncommingQc::find()->where(['is_approved' => 1])->all();
        $list = ArrayHelper::map($data, 'sr_no', 'sr_no');
        return $list;
    }

    static public function getAllDocuments()
    {
        $data = DocumentsAndDistributionMaster::find()->where(['is_deleted' => 0])->all();
        $list = ArrayHelper::map($data, 'documents_and_distribution_master_id', 'name_of_document');
        return $list;
    }

    static public function getStates()
    {
        $data = States::find()->all();
        $list = ArrayHelper::map($data, 'id', 'name');
        return $list;
    }

    static public function getCountries()
    {
        $data = Countries::find()->all();
        $list = ArrayHelper::map($data, 'id', 'name');
        return $list;
    }

    static public function getCity()
    {
        $data = Cities::find()->all();
        $list = ArrayHelper::map($data, 'id', 'name');
        return $list;
    }

    static public function getRandomOrderNo()
    {
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())), 0, 4));
        return $unique = $today . $rand;
    }

    static public function getJobCardNo()
    {
        $data = Jobcard::find()->all();
        $list = ArrayHelper::map($data, 'jobcard_id', 'jobcard_id');
        return $list;
    }

    static public function getInvoiceNo()
    {
        $data = PurchaseReceipt::find()->all();
        $list = ArrayHelper::map($data, 'GRN_NO', 'GRN_NO');
        return $list;
    }

    static public function getQuotationRef()
    {
        $data = OrderQuotation::find()->all();
        $list = ArrayHelper::map($data, 'order_quotation_id', 'our_quote_ref_num');
        return $list;
    }

    static public function getIncommingQCNo()
    {
        $data = IncommingQc::find()->all();
        $list = ArrayHelper::map($data, 'incomming_qc_id', 'incomming_qc_id');
        return $list;
    }

    static public function GetUnitList()
    {
        return [
            "Celsius" => "Celsius",
            "Fahrenheit" => "Fahrenheit",
            "Kelvin" => "Kelvin",
            "Reaumur" => "Reaumur",
            "Newton" => "Newton",
            "Rankine" => "Rankine",
            "Cubic Meter" => "Cubic Meter",
            "Cubic Decimeter" => "Cubic Decimeter",
            "Cubic Centimeter" => "Cubic Centimeter",
            "Liter" => "Liter",
            "Deciliter" => "Deciliter",
            "Centiliter" => "Centiliter",
            "Milliliter" => "Milliliter",
            "Fluid Ounce(UK)" => "Fluid Ounce(UK)",
            "Fluid Ounce(US)" => "Fluid Ounce(US)",
            "Cubic Inch" => "Cubic Inch",
            "Cubic Foot" => "Cubic Foot",
            "Cubic Yard" => "Cubic Yard",
            "Gallon UK" => "Gallon UK",
            "Gallon US" => "Gallon US",
            "Petroleum Barrel" => "Petroleum Barrel",
            "Pint(UK)" => "Pint(UK)",
            "Fluid Pint(US)" => "Fluid Pint(US)",
            "Dry Pint(US)" => "Dry Pint(US)",
            "Kilometer" => "Kilometer",
            "Meter" => "Meter",
            "Decimeter" => "Decimeter",
            "Centimeter" => "Centimeter",
            "Millimeter" => "Millimeter",
            "Mile" => "Mile",
            "Inch" => "Inch",
            "Foot" => "Foot",
            "Yard" => "Yard",
            "Nautical Mile" => "Nautical Mile",
            "Tonne" => "Tonne",
            "Kilogram" => "Kilogram",
            "Hectogram" => "Hectogram",
            "Gram" => "Gram",
            "Decigram" => "Decigram",
            "Centigram" => "Centigram",
            "Milligram" => "Milligram",
            "Microgram" => "Microgram",
            "Carat" => "Carat",
            "Grain" => "Grain",
            "Ounce Avoirdupois" => "Ounce Avoirdupois",
            "Pound Avoirdupois" => "Pound Avoirdupois",
            "Long Hundredweight" => "Long Hundredweight",
            "Short Hundredweight" => "Short Hundredweight",
            "Long Ton" => "Long Ton",
            "Short Ton" => "Short Ton",
            "Stone" => "Stone",


        ];
    }

    static public function GetAuditElements()
    {
        return [
            'audit_element_id' => 'Audit Element ID',
            'company_id' => 'Company ID',
            'design_dev' => 'Design and development application (7.3)',
            'design_dev_boolean' => '0 = NO, 1 = YES',
            'quality_man' => 'Quality manual and control of documents (4.2.2 and 4.2.3)',
            'quality_man_boolean' => '0 = NO, 1 = YES',
            'rec_control' => 'Control of records (4.2.4)',
            'rec_control_boolean' => '0 = NO, 1 = YES',
            'management_commitment' => 'Management commitment (5.1)',
            'management_commitment_boolean' => '0 = NO, 1 = YES',
            'customer_focus' => 'Customer focus, communication and satisfaction (5.2, 7.2.3 and 8.2.1)',
            'customer_focus_boolean' => '0 = NO, 1 = YES',
            'quality_policy' => 'Quality policy (5.3)',
            'quality_policy_boolean' => '0 = NO, 1 = YES',
            'quality_objectives' => 'Quality objectives and quality management system planning (5.4)',
            'quality_objectives_boolean' => '0 = NO, 1 = YES',
            'respo_autho' => 'Responsability and authority, management representative and internal communication (5.5)',
            'respo_autho_boolean' => '0 = No, 1 = YES',
            'management_system' => 'Management system review (5.6)',
            'management_system_boolean' => '0 = No, 1 = YES',
            'hr' => 'Human resources (6.2)',
            'hr_boolean' => '0 = No, 1 = YES',
            'infratructure' => 'Infrastructure and work environment (6.3 a 6.4)',
            'infratructure_boolean' => '0 = No, 1 = YES',
            'product_planning' => 'Planning of product realization (7.1)',
            'product_planning_boolean' => '0 = No, 1 = YES',
            'determination_review' => 'Determination and review of requirements related to the product (7.2.1 and 7.2.2)',
            'determination_review_boolean' => '0 = No, 1 = YES',
            'design_development' => '	Design and development (7.3)',
            'design_development_boolean' => '0 = No, 1 = YES',
            'purchase_outsource' => '	Purchasing and outsourcing (7.4)',
            'purchase_outsource_boolean' => '0 = No, 1 = YES',
            'production_control' => 'Control of production and service provision and its validation (7.5.1 and 7.5.2)',
            'production_control_boolean' => '0 = No, 1 = YES',
            'identification' => '	Identification and traceability, preservation of product and customer property (7.5.3, 7.5.5 and 7.5.4)',
            'identification_boolean' => '0 = No, 1 = YES',
            'monitoring_control' => 'Control of monitoring and measuring equipment (7.6)',
            'monitoring_control_boolean' => '0 = No, 1 = YES',
            'measurement_monitoring' => 'Monitoring and measurement of processes and product, control of nonconforming product (8.2.3, 8.2.4 and 8.3)',
            'measurement_monitoring_boolean' => '0 = No, 1 = YES',
            'internal_audits' => 'Internal audits, analysis of data (8.2.2 a 8.4)',
            'internal_audits_boolean' => '0 = No, 1 = YES',
            'continueal_improovement' => 'Continual improvement, corrective and preventive action (8.5.1, 8.5.2 and 8.5.3)',
            'continueal_improovement_boolean' => '0 = No, 1 = YES',
            'strengths_of_the_company' => 'Strengths Of The Company',
        ];
    }

    static public function GetAuditDocuments()
    {
        return [
            ['Environment, Occupation health Safety and Quality -IMS Manaual', 'EQHM:01'],
            ['IMS Policy', 'EQHM:5.2'],
            ['IMS Objectives', 'EQHM 5.2'],
            ['Scope of IMS', 'EQHM 0.3'],
            ['Procedure-Documents and rectod  control', 'IMP/IMS/01'],
            ['Procedure -Control of non confirming Product', 'IMP/IMS/06'],
            ['Risk assesment register', 'DIPL/RA/01'],
            ['Internal Audit schedule , Audit Plan, Audit Report', 'QF/IMS/01, QF/IMS/02 and QF/IMS/04'],
            ['4th f MRM Minutes-7th April 2018', 'QF/IMS/04'],
            ['Quality Objectives analysis-2018', 'QF/IMS/12'],
            ['Supplier Evalution-2017-18', 'QF/PUR/03'],
            ['cutomer complints record', 'QF/MKT/04'],
            ['customer satisfection survey and analysis report -2018', 'QF/MKT/01'],
            ['Training Plan-2018-19', 'QF/Trg/01'],
            ['Employess competance Mapping 2018', 'QF/HRD/02'],
            ['Training record of R.C sharma-QUality Manager', 'QF/Trg/02'],
            ['Calibration record of testing Instrument', 'MSL/Int/01'],
            ['Preventive Maintenance Record of Drill M/ch ID DM-07', 'QF/MNT/03'],
            ['final QC report of Recliner-Dleux # RLS-78901', 'QF/QCD/03'],
            ['Inspection and test plan -finish Product', 'E/QCD/03'],
            ['Stock ledger of hardware Item', 'SL/01'],

        ];
    }

    static public function getNonConformity()
    {

        return [
            'Audit Element ID',
            'Design and development application (7.3)',
            'Quality manual and control of documents (4.2.2 and 4.2.3)',
            'Control of records (4.2.4)',
            'Management commitment (5.1)',
            'Customer focus, communication and satisfaction (5.2, 7.2.3 and 8.2.1)',
            'Quality policy (5.3)',
            'Quality objectives and quality management system planning (5.4)',
            'Responsability and authority, management representative and internal communication (5.5)',
            'Management system review (5.6)',
            'Human resources (6.2)',
            'Infrastructure and work environment (6.3 a 6.4)',
            'Planning of product realization (7.1)',
            'Determination and review of requirements related to the product (7.2.1 and 7.2.2)',
            'Design and development (7.3)',
            'Purchasing and outsourcing (7.4)',
            'Control of production and service provision and its validation (7.5.1 and 7.5.2)',
            'Identification and traceability, preservation of product and customer property (7.5.3, 7.5.5 and 7.5.4)',
            'Control of monitoring and measuring equipment (7.6)',
            'Monitoring and measurement of processes and product, control of nonconforming product (8.2.3, 8.2.4 and 8.3)',
            'Internal audits, analysis of data (8.2.2 a 8.4)',
            'Continual improvement, corrective and preventive action (8.5.1, 8.5.2 and 8.5.3)',
            'Strengths Of The Company',
        ];

    }


}
