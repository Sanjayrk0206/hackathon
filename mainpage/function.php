<?php

function check_login($conn)
{

	if(isset($_SESSION['Email']))
	{

		$id = $_SESSION['Email'];
		$query = "select * from user_details where Email = '$id'";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: ../index.html");
	die;

}