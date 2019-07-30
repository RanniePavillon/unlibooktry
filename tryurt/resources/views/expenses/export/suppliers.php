<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="vendor.xls"');
?>
<style>
	.reportHolderOR{
		width: 50%;
		text-align:center;
	}
	.balanceTable{
		width:50%;
		text-align:center;
	}
</style>
<?php
$supplier = $this->supplier;
$type = '';
if($supplier->id != ''){
	$status = DAOFactory::getTblNewExpenseDAO()->queryBySupplierId($supplier->id);
	if(isset($status) && !empty($status)){
		$type = 'readonly';
	}
}
$task = 'addsupplier';
?>
    <div class="reportHolderOR">
        <table class="balanceTable">
            <thead class="headinvoiceItemSuppliers">
				<th class="">Vendor Name</th>
				<th class="">Vendor No.</th>
				<th class="">Address</th>
				<th class="">Email Address</th>
				<th class="">Phone No.</th>
				<th class="">Fax No.</th>
				<th class="">Date Created</th>
				<th class="">Active</th>
            </thead>
            <?php
			//$suppliers = TblSupplierMySqlExtDAO::getVNDescendingByOrgId(Session::getSession('orgid'));
            $suppliers = TblSupplierMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
			if (count($suppliers) > 0) {
			
				foreach ($suppliers as $item) {
					?>
					<tr class="tableItemSuppliers">
						<td class=""><?php echo $item->name ?></td>
						<td class=""><a href="#" value="<?= $item->id ?>" class="viewAct"><?php echo $item->supplierAccount ?></a></td>
						<td><textarea class="newVendorNameTextA" name="address"><?php echo $supplier->address ?></textarea></td>
						<td>
							<input type="text" class="newVendorNameInput" name="emailAddress"
							value="<?php echo $supplier->emailAddress ?>" maxlength="100">
						</td>
						<td class="">
							<input type="text" class="newVendorPhoneInput2" name="phoneNum" 
							value="<?php echo $supplier->phoneNum ?>" maxlength="20">
						</td>
						<td class="">
							<input type="text" class="newVendorPhoneInput2" name="faxNum" 
							value="<?php echo $supplier->faxNum ?>" maxlength="20">
						</td>
						<!--<td class=""><?php echo date('m / d / Y', strtotime($item->dateCreated)) ?></td>-->
						<td class=""><?php echo date('M. d, Y', strtotime($item->dateCreated)) ?></td>
						<td class=""><?php echo $item->activeAccount ?></td>
					</tr>
					<?php
				}
			}
            ?>
        </table>
    </div>

