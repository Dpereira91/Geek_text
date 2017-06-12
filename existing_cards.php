
<div class="container" style="margin-left: 20;">        
  <table id="card_table" class="table table-striped">
    <thead>
      <tr>
        <th class="fit">Number</th>
        <th class="fit">Type</th>
        <th class="fit">CSV Code</th>
        <th class="fit">Exp Month</th>
        <th class="fit">Exp Year</th>
        <th class="fit">Street</th>
        <th class="fit">City</th>
        <th class="fit">State</th>
        <th class="fit">Zip Code</th>
        <th class="fit">Preferred</th>
      </tr>
    </thead>
    <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php while( $row = mysqli_fetch_array( $result2 ) ){ ?>
       <form action="update_card.php" method="post">
      <tr> 
	        <td class="fit"><input type="text"  name="card_num" size="19" maxlenght="19" value="<?php echo htmlspecialchars($row['number']); ?>"></td>
	        <td class="fit"><input type="text"  name="card_type" size="15" maxlenght="15"value="<?php echo htmlspecialchars($row['type']); ?>"></td>
	        <td class="fit"><input type="text"  name="cvv_num" size="4" maxlenght="4"value="<?php echo htmlspecialchars($row['csv_code']); ?>"></td>
	        <td class="fit"><input type="text"  name="exp_month" size="2" maxlenght="2" value="<?php echo htmlspecialchars($row['exp_month']); ?>"></td>
	        <td class="fit"><input type="text"  name="exp_year" size="4" maxlenght="4"value="<?php echo htmlspecialchars($row['exp_year']); ?>"></td>
	        <td class="fit"><input type="text"  name="card_street" value="<?php echo htmlspecialchars($row['billing_street1']); ?>"></td>
	        <td class="fit"><input type="text"  name="card_city" value="<?php echo htmlspecialchars($row['billing_city']); ?>"></td>
	        <td class="fit"><input type="text"  name="card_state" size="2" maxlenght="2" value="<?php echo htmlspecialchars($row['billing_state']); ?>"></td>
	        <td class="fit"><input type="text"  name="card_zip" size="5" maxlenght="5" value="<?php echo htmlspecialchars($row['billing_zip_code']); ?>"></td>
	        <td class="fit"><input type="radio" name="preferred" class="preferred-select" value="<?php echo htmlspecialchars($row['preferred']); ?>" 
                                                                      
	        	<?php 
	        		$pref = htmlspecialchars($row['preferred']) ;
	        		if($pref == "Y") {
	        			echo "checked" ;}
	        	?>>

          </td>

	        <td><input type="submit" name="action" value="save"   class="btn btn-success"></td>
	        <td><input type="submit" name="action" value="remove" class="btn btn-danger"></td>
	        <br>	
      </tr>
       </form>
      <?php } ?> 
    </tbody>
  </table>
</div>

