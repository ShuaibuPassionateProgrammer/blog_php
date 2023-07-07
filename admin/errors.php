<?php
if(count($errors) > 0) {
    echo "<div style='background-color: red; color: white; padding: 10px; text-align: center'>";
        foreach($errors as $error) {
            echo "<p>";
                echo $error;
            echo "</p>";
        }
    echo "</div>";
}
?>