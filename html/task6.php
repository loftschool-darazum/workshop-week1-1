<style>
    table td {
        border: 1px solid grey;
        width: 50px;
        height: 50px;
        text-align: center;
    }

    td.red {
        background-color: #ea7474;
    }
    td.blue {
        background-color: #a1a1f5;
    }
</style>

<?php
echo '<table cellpadding="0" cellspacing="0">';
for($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for($j = 1; $j <= 10; $j++) {
        $class = 'blue';
        if (($i % 2 == 0 && $j % 2 !== 0) || ($j % 2 == 0 && $i % 2 !== 0)) {
            $class = 'red';
        }
        echo "<td class='$class'>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";