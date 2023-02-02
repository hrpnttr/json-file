<form>
	<button type="submit" name="submit">Simpan</button>
</form>

<?php

	include ('config.php');

	if(isset($_GET['submit'])) 
    {

		$result = mysqli_query($mysqli, "select * from tbl_cmb_bak");

		// $data = array();

		if ($result->num_rows > 0)
		{
			// while ($row = mysqli_fetch_array($result))
			// {
			// 	$data[] = $row;
			// }

			while ($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
		}
		else
		{
			echo "kosong";
		}

		$jsonData = json_encode($data, JSON_PRETTY_PRINT);

		$file = fopen("data.json", "w");
		fwrite($file, $jsonData);
		fclose($file);

		mysqli_close($mysqli);

		echo "
                  <script>
                  	location.replace('show.php')
                  </script>
                ";
		
	}

?>