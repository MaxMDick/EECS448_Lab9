<?php
    echo '<table>';
    for($col=1; $col<101; $col++)
    {
        echo '<tr>';
        for($row=1; $row<101; $row++)
        {
            echo '<td>'.($row * $col).'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>