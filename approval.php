<?php
include( 'connection.php');

$sql =mysqli_query($conn,"SELECT * FROM  'company_registration_table' WHERE Company_name='$Company_name', Username='$Username', 
Address='$Address', State='$State', Status='$Status')";

?>
<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="panel-body widget-shadow">
						<h4>company</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>Sl no.</th>
								  <th>Company name</th>
								  <th>Username</th>
								  <th>Address</th>
                                   
                                    <th>State</th>
                                    <th>Status</th>
                                    
								</tr>
                            </thead>
                                 <?php 
								 while ($row = mysqli_fetch_array($sql)) 
								 {
            ?>
                <tr>
                    <td><?php echo $row['Company_name']; ?></td>
                    <td><?php echo $row['Username'];?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['State']; ?></td>
              
                <td><?php echo $row['Status']; ?></td>
                    
                    <td> <button  onclick="myfun1()" type="button"><a href="status.php?company_rg_id =<?php echo $row['company_rg_id ']; ?>&&status=<?php echo $row['status']; ?>" >ACCEPT</a></button></td>
                    <td> <button onclick="myfun()" type="button"><a href="status1.php?company_rg_id =<?php echo $row['company_rg_id '];?>&&status=<?php echo $row['status']; ?>" >REJECT</a></button></td>
                     
                            </tr>
					<?php } ?>		
						</table>
                        <script>
                            function myfun() {
  alert("Are you sure want to Reject");
}
                            function myfun1() {
  alert("Are you sure want to Accept");
}
                        </script>
					</div>
					