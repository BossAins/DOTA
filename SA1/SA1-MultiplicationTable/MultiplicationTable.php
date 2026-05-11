<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interactive Multiplication Table</title>

    <!-- Enables responsiveness and zoom scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Correct CSS linking -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Multiplication Table</h1>

    <div class="table-wrapper">
        <table>
            <?php
            // Control structures: nested loops
            for ($row = 0; $row <= 10; $row++) {
                echo "<tr>";

                for ($col = 0; $col <= 10; $col++) {
                    $value = $row * $col;

                    // Alternating color logic
                    if ( ($row + $col) % 2 == 0 ) {
                        echo "<td class='cell yellow'>$value</td>";
                    } else {
                        echo "<td class='cell red'>$value</td>";
                    }
                }

                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
