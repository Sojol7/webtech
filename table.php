<?php
function viewTable()
{
    echo '<thead><tr><th>City</th><th>AQI</th></tr></thead>';
    echo '<tbody>';
    for ($i = 0; $i < 5; $i++) {
        echo '<tr>';
        echo '<td>' . "Bangladesh" . '</td>';
        echo '<td>' . 116 . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '<div class="loginFirst">LOGIN FIRST</div>';
}