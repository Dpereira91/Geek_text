<div class="container">        
  <table id="address_table" class="table table-striped">
    <thead>
      <tr>
        <th class="fit">Street Address</th>
        <th class="fit">City</th>
        <th class="fit">State</th>
        <th class="fit">Zip Code</th>
        <th class="fit hidden-element"></th>
        <th class="fit">Preferred</th>
      </tr>
    </thead>
    <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php while( $row = mysqli_fetch_array( $result1 ) ){ ?>
       <form action="update_address.php" method="post">
      <tr> 
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['street1'] ) ); ?>" name="street" placeholder="Street Address"></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['city'] ) ); ?>" name="city" placeholder="City"></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['state'] ) ); ?>" name="state" placeholder="State Abbreviation"></td>
          <td class="fit"><input type="text" value="<?php echo( htmlspecialchars( $row['zip_code'] ) ); ?>" name="zip" placeholder="Zip Code"></td>
          <td class="fit hidden-element"><input type="hidden" value="<?php echo (htmlspecialchars( $row['address_id']) ); ?>" name="addressId" placeholder="Address ID"></td>
          <td class="fit"><input type="radio" name="preferred" class="preferred-address" value="<?php echo htmlspecialchars($row['preferred']); ?>" 

	        	<?php 
	        		$pref = htmlspecialchars($row['preferred']) ;
	        		if($pref == "1") {
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
