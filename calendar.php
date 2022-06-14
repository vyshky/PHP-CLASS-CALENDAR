<?php
class Calendar
{
    public $mont = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    public $dayWeek = [5, 1, 1, 4, 6, 2, 4, 0, 3, 5, 1, 3]; 
    
    function display($x)
    {
        $month = $this->mont[$x];
        $dayWeekStart = $this->dayWeek[$x];
        $flag = false;
        $day = 1;

        echo "<table>";
        for ($i = 0; $i < 7; $i++) {
            echo "<tr>";
            for ($y = 0; $y < 7 && $day <= $month; $y++) {
                if ($dayWeekStart == $y) {
                    $flag = true;
                    echo "<td>" . $day . "</td>";
                    $day++;
                } else if ($flag == true) {
                    echo "<td>" . $day . "</td>";
                    $day++;
                } else echo "<td>...</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
