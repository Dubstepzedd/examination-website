<!-- We assume that a session has started before hand -->
<style>

    #successful-header {
        background: green;
        color: #FFFF;
        text-align: center;
        font-weight: bold;
        font-size: 1em;
    }

</style>

<!--- Maybe move this into a seperate file? -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    // This removes the header after 3 seconds with an animation.

    //What if the div does not exist?
    setTimeout(() => {
        $("#successful-header").slideUp(function() {
            $("#successful-header").remove();
        });

    },3000);
    
</script>

<?php
    //Display message if logged in / newly registered.
    $code = getCode($CODES);
    switch($code) {
        case $SUCCESS_LOGIN:
            print("<div id='successful-header'>Du är nu inloggad.</div>");
            break;
        case $SUCCESS_REGISTER:
            print("<div id='successful-header'>Du är nu registrerad.</div>");
            break;
        default:
            $_SESSION["code"] = $code;
    }
    
?>