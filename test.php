<?php
    if (!isset($_SESSION))
        session_start();
    include("routes.php");
    $perm = [];
    /*
    $perm[] = new PermanentRouteFactory($_POST["uri"],$_POST["final"]);
    
    $perm[] = new TemporaryRouteFactory($_POST["uri"],$_POST["final"]);
    if (isset($_POST["groupid"]) && isset($_POST["user"]))
        $perm[] = new GroupRouteFactory($_POST["groupid"],$_POST["uri"],$_POST["base_dir"],$_POST["user"],$_POST["final"]);
    else if (isset($_POST["user"]))
        $perm[] = new UserRouteFactory($_POST["user"],$_POST["uri"],$_POST["base_dir"],$_POST["final"]);
    $x = new RouteFactory("config.json", $perm);
    */
    $y = new DirectRoute("config.json");

    $y->findRoute();
?>
