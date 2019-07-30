<?php

class GlobalClass {

    function recurringInvoice() {
        foreach ($this->getRecurringData() as $item) {
            
        }
    }

    function weeklyRecurring() {
        $weekly_date = date('Y-m-d', strtotime('-7 days'));

        $txt = "SELECT nr.id FROM tbl_new_recurring nr WHERE " .
                "nr.last_date_sent ='" . $weekly_date . "' " .
                " && nr.due_date >= '" . $weekly_date . "' " .
                "&& nr.frequency = 'weekly'";

        $this->getRecurringData($txt);
    }

    function monthlyRecurring() {
        $weekly_date = date('Y-m-d', strtotime('-30 days'));

        $txt = "SELECT nr.id FROM tbl_new_recurring nr WHERE " .
                "nr.last_date_sent ='" . $weekly_date . "' " .
                " && nr.due_date >= '" . $weekly_date . "' " .
                "&& nr.frequency = 'weekly'";

        $this->getRecurringData($txt);
    }

    function getRecurringData($txt) {


//              $txt = "SELECT nr.id FROM tbl_new_recurring nr " .
//                      "INNER JOIN tbl_client c ON c.id = nr.client_id " .
//                      "WHERE c.orgid = " . Session::getSession('orgid');

        $sqlQuery = new SqlQuery($txt);
        $items = QueryExecutor::execute($sqlQuery);

        if (!isset($items))
            return false;

        $returns = array();

        foreach ($items as $item) {
            $txt = "SELECT ni.id FROM tbl_new_invoice ni " .
                    "INNER JOIN tbl_all_invoice ai ON ai.new_invoice_id = ni.id" .
                    "WHERE ai.new_recurring_id = " . $item->id .
                    " ORDER BY ni.id DESC LIMIT 0, 1";
            $sqlQuery = new SqlQuery($txt);
            $new_invoice = QueryExecutor::execute($sqlQuery);

            $new_invoice = DAOFactory::getTblNewInvoiceDAO()->load($new_invoice[0]['id']);
            $currentinvoice_id = $new_invoice->id;
            $new_invoice->id = '';
            $new_invoice->dateCreated = $new_invoice->dateIssued = date('Y-m-d');
//                  $new_invoice->
            $new_invoice_id = DAOFactory::getTblNewInvoiceDAO()->insert($new_invoice);

            $new_invoice = DAOFactory::getTblNewInvoiceDAO()->load($new_invoice_id);
            $new_invoice->invoiceNumber = sprintf('%1$04d', $new_invoice->id);
            DAOFactory::getTblNewInvoiceDAO()->update($new_invoice);

            $all_invoice = new TblAllInvoice();
            $all_invoice->newInvoiceId = $new_invoice_id;
            $all_invoice->newRecurringId = $item->id;

            $this->saveInvoiceLine($new_invoice_id, $currentinvoice_id);
        }

        return $returns;
    }

    function saveInvoiceLine($newinvoiceid, $currentinvoice_id) {
        $invoice_lines = DAOFactory::getTblInvoiceLinesDAO()->queryByNewInvoiceId($currentinvoice_id);
        foreach ($invoice_lines as $invoice_line) {
            $invoice_line->newInvoiceId = $newinvoiceid;
            DAOFactory::getTblInvoiceLinesDAO()->insert($invoice_line);
        }
        // echo $currentinvoice_id;
        // print_r($invoice_lines);
        // exit;
    }

    function saveCashInvoiceLine($newinvoiceid, $currentinvoice_id) {
        $invoice_lines = DAOFactory::getTblCashInvoiceLinesDAO()->queryByNewCashInvoiceId($currentinvoice_id);
        foreach ($invoice_lines as $invoice_line) {
            $invoice_line->newCashInvoiceId = $newinvoiceid;
            DAOFactory::getTblCashInvoiceLinesDAO()->insert($invoice_line);
        }
        // echo $currentinvoice_id;
        // print_r($invoice_lines);
        // exit;
    }

    function checkDuplicate() {
        // print_r($_POST);
        $result = false;
        switch ($_POST['checkitem']) {
            case 'item':
                $result = TblItemMySqlExtDAO::checkItem();
                break;
            case 'task':
                $result = TblTaskMySqlExtDAO::checkTask();
                break;
            case 'tax':
                $result = TblTaxMySqlExtDAO::checkTax();
                break;
            case 'bank':
                $result = TblBankMySqlExtDAO::checkBank();
                break;
        }

        return $result;
    }

    static function setInventoryTrans($data, $transdate, $refNo, $document_type, $status) {
        $data->transdate = $transdate;
        $data->documentType = $document_type;
        $data->refNo = $refNo;
        $data->amount = $data->netAmount;
        $data->status = $status;

        return $data;
    }

    // function setInventOnhand($transaction_id, $itemlines){		
    // }

    static function setWeightedAverage($items, $type, $transdate, $vat_inclusive) {
        //for ext

        $orgId = Session::getSession('orgid');
        $tax = DAOFactory::getTblTaxDAO()->queryByTaxCode('Vatable');

        foreach ($items as $item) {
            $result = TblAverageCostMySqlExtDAO::getItemRunningBal($item->itemId);

            $empty_val = (object) array("id" => "", "itemId" => $item->itemId, "unit" => 0, "unitCost" => 0, "totalCost" => 0, "transDate" => $transdate, "type" => "");
            $data = $result ? $result : $empty_val;

            $data->transDate = $transdate;

//            $net_amount = $item->vatId == $tax[0]->id && $vat_inclusive == 'yes' ? round($item->wholeAmount / ((100 + $tax[0]->rate) / 100), 2) : 
//                                                                                   $item->wholeAmount;

            if (in_array($type, array('sales','dr'))) {
//                $net_amount = $item->vatId == $tax[0]->id && $vat_inclusive == 'yes' ? 
//                                      round(($item->qty * $data->unitCost) / ((100 + $tax[0]->rate) / 100), 2) : $item->wholeAmount;
                $net_amount = $item->qty * $data->unitCost;
                        
                $data->unit -= $item->qty;
//                $data->totalCost -= $item->netAmount;
//                $data->unitCost = round($data->totalCost / $data->unit,2);
                $data->totalCost -= round($item->qty * $data->unitCost, 2);
//                $data->unitCost = round($data->totalCost / $data->unit,2);
                $item->averageCost = $data->unitCost;
                $data->type = "Sales";                
                
//                Controller::setTrialBalance($coaid, $debit, $credit, $transid, $transdate, $type, $diff)

                $id = $type == 'sales' ? $item->cashSalesInvoiceId : $item->deliveryReceiptId;
//                $trans_type = $type == 'sales' ? 'sales cash' : 'sales invoice';
                $trans_type = $type == 'sales' ? 'sales cash' : 'delivery receipt';

                $type == 'sales' ? DAOFactory::getTblCashSalesInvoiceLinesDAO()->update($item) : DAOFactory::getTblDeliveryReceiptLinesDAO()->update($item);
                
                $code_1002 = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('1002', $orgId);
//                Controller::setTrialBalance($code_1002, 0, round($item->qty * $data->unitCost, 2), $id, $transdate, $trans_type, 'dc');
                Controller::setTrialBalance($code_1002, 0, round($net_amount, 2), $id, $transdate, $trans_type, 'dc');
                
                $code = self::coaTaxId($item->vatId, $orgId);
//                Controller::setTrialBalance($code, round($item->qty * $data->unitCost, 2), 0, $id, $transdate, $trans_type, 'dc');
                Controller::setTrialBalance($code, round($net_amount, 2), 0, $id, $transdate, $trans_type, 'dc');
                
            } elseif ($type == 'purchase') {
                $net_amount = $item->vatId == $tax[0]->id && $vat_inclusive == 'yes' ? round($item->wholeAmount / ((100 + $tax[0]->rate) / 100), 2) : 
                                                                                   $item->wholeAmount;

                $data->unit += $item->receivedQty;
                $data->totalCost += $net_amount;
                $item->averageCost = $data->unit != 0 ? round($data->totalCost / $data->unit, 2) : '';
                 $data->unitCost = $data->unit != 0 ? round($data->totalCost / $data->unit, 2) : 0;
//                 $item->averageCost = $data->unit != 0 ? round($net_amount / $item->receivedQty, 2) : 0;
                $data->type = "Purchase";
                
                DAOFactory::getTblReceivedOrderLinesDAO()->update($item);
            } elseif (in_array($type, array('sr', 'pr'))) {
                               
//                $data->totalCost = $data->totalCost + ($item->returnQty * $item->avgCost);
                $id = $type == 'sr' ? $item->salesReturnId : 0;
                $trans_type = $type == 'sr' ? 'sales return' : '';
                
                $data->unit = $type == 'sr' ? $data->unit + $item->returnQty : $data->unit - $item->returnQty;
                $data->totalCost = $type == 'sr' ? $data->totalCost + ($item->returnQty * $item->averageCost) : $data->totalCost - ($item->returnQty * $item->averageCost);
               
                $data->unitCost = round($data->totalCost / $data->unit,2);
                $data->type = $type == "sr" ? "Sales Return" : "Purchase Return";
                
                $code_1002 = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('1002', $orgId);
                $type == 'sr' ? Controller::setTrialBalance($code_1002, round($item->returnQty * $item->averageCost, 2), 0, $id, $transdate, $trans_type, 'dc') :'';
                
                $code = self::coaTaxId($item->vatId, $orgId);
                $type == 'sr' ? Controller::setTrialBalance($code, 0, round($item->returnQty * $item->averageCost, 2), $id, $transdate, $trans_type, 'dc') :'';
                            
            }

            DAOFactory::getTblAverageCostDAO()->insert($data);
        }

//        $running_bal = 0;
    }
    
    static function coaTaxId($taxtid, $orgId){
        $tax = DAOFactory::getTblTaxDAO()->load($taxtid);
        
        $code ='';
        switch ($tax->taxCode) {
            case 'Vatable':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('5000-001', $orgId);
                break;
            case 'Vat-Exempt':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('5000-002', $orgId);
                break;
            case 'Zero Rated':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('5000-003', $orgId);
                break;
            case 'Non-Vat':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('5000-002', $orgId);
                break;

            default:
                break;
        }
        
        return $code;
        
    }
    
    static function coaTaxIdBilling($taxtid, $orgId){
        $tax = DAOFactory::getTblTaxDAO()->load($taxtid);
        
        $code ='';
        switch ($tax->taxCode) {
            case 'Vatable':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('4000-001', $orgId);
                break;
            case 'Vat-Exempt':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('4000-002', $orgId);
                break;
            case 'Zero Rated':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('4000-003', $orgId);
                break;
            case 'Non-Vat':                 
                $code = TblNewInvoiceMySqlExtDAO::getCoaCodeId2('4000-003', $orgId);
                break;

            default:
                break;
        }
        
        return $code;
        
    }
    
    function getWitholdingTax($amount, $whtax){
        $cwt = 0;
        if ($whtax > 0) {
            switch ($whtax) {
                case 15:
                    $cwt = 97;
                    break;
                case 10:
                    $cwt = 102;
                    break;
                case 5:
                    $cwt = 107;
                    break;
                case 2:
                    $cwt = 110;
                    break;
                case 1:
                    $cwt = 110;
                    break;

                default:
                    break;
            }
                
                $netvat = $amount / ($cwt / 100);

                return $netvat * ($whtax / 100);
            }
            return 0;
    }

}

?>
