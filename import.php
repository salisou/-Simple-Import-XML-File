<?php
	if(ISSET($_POST['import'])){
		$file_name=$_FILES['file']['name'];
		$exp=explode('.', $file_name);
		$name=end($exp);
		
		if($name=="xml"){
?>
	<table class="table table-bordered" >	
		<thead class="alert-info">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		
		<tbody>
		
			<?php
				$xml = simplexml_load_file(''.$file_name);
				foreach($xml->member as $member){
					echo '
						<tr>
							<td>'.$member->firstname.'</td>
							<td>'.$member->lastname.'</td>
							<td>'.$member->address.'</td>
						</tr>
					';
				}
			?>
		</tbody>
	</table>
<?php
		}else{
			echo"<script>alert('Please upload xml file only')</script>";
		}
	}else{
?>
	<table class="table table-bordered" >	
		<thead class="alert-info">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		
		<tbody>
			<td></td>
			<td></td>
			<td></td>
		</tbody>
	</table>
<?php
	}
?>