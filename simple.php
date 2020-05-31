<?php session_start(); ?>

/*
    <form id="thrown" method="post" action="test.php">
        <input type="hidden" name="uri" value="/router/test.php">
        <input type="hidden" name="user" value=".">
        <input type="hidden" name="final" value="final.php">
        <input type="hidden" name="port" value="80">
        <input type="hidden" name="base_dir" value=".">
        <button onload="submit()" onclick="submit">HEY!</button>
    </form>
*/


<script> document.getElementById("thrown").submit();</script>