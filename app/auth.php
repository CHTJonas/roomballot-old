<?php

require_once "php/common.php";

if (array_key_exists("logout", $_GET)) {
    session_unset();
    $_SESSION["msg"] = array("info", "You're now logged out.");
} else {
    require_once "lib/ucam_webauth/ucam_webauth.php";
    $authEngine = new Ucam_Webauth(array(
        "hostname" => "roomballot.fitzjcr.com",
	    "key_dir" => "/societies/rcsarooms/raven_keys",
	    "cookie_key" => "v225T29kPFaFjQCy754mrVVKVCXG8oCTkBZEAP9ohMz2sM5T5PYAGSGn3zVbZka7"
    ));

    // user does not authenticate sucessfully
    if (!$authEngine->authenticate()) {
        exit();
    }

    // user authenticates sucessfully
    if ($authEngine->success()) {
        // store CRSiD in the session token
        $_SESSION["user"] = $authEngine->principal();

        // check if user is a website administrator
        // TODO read admin CRSiD's in from an external file that's easy to edit
        $admins = array("members" => array("chtj2"));
        $_SESSION["admin"] = in_array($_SESSION["user"], $admins["members"]);

        // check if the user is a member of Fitzwilliam College
        // TODO read member CRSiD's in from an external file that's easy to edit
        $members = array("members" => array("chtj2"));
        $_SESSION["member"] = in_array($_SESSION["user"], $members["members"]);

        if ($_SESSION["member"]) {
            $_SESSION["msg"] = array("success", "Logged in sucessfully. Authenticated as a Fitzwilliam College JCR Member.");
        } else {
            $_SESSION["msg"] = array("warning", "Logged in sucessfully. Failed to authenticated as a Fitzwilliam College JCR Member, but you can still browse some areas of the site.");
        }
    } else {
        $_SESSION["msg"] = array("danger", "Failed to login (" . $webauth->status() . "): " . $webauth->msg());
    }
}
session_write_close();
header("Location: /#home");
