<head>

	<link rel="stylesheet"  href="css/bg.css">

</head>
<?php
session_start();
include "header.php";
include("include/static.php");
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<body>
	<body>

	    <div class="bg"></div>

	    <p class="py-5 text-center">Make your vote, Let us count.</p>
			<p class="py-5 text-center">In order to make a vote you have to register first and then login.</p>

	</body>


</body>
