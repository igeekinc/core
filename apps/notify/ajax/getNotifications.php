<?php
OCP\JSON::checkLoggedIn();
OCP\JSON::checkAppEnabled("notify");
if(isset($_POST["count"])) {
	$count = (int)$_POST["count"];
} else {
	$count = 10;
}
OCP\JSON::encodedPrint(OC_Notify::getNotifications(null, $count));
