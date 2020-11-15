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

	</body>


</body>
