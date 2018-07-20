<?php
require 'db.php';
        $stmt = $pdo->query('SELECT * FROM chat ORDER BY id');
        while ($row = $stmt->fetch()):
            $arr = explode(" ",$row['date']);
            $time = $arr[1];
        ?>
            <div id="chat_data">
                <span style="color: green;"><?=$row['name']?>:</span>
                <span style="color: red;"><?=$row['message']?></span>
                <span style="float:right;"><?=$time?></span>
            </div>
        <?php endwhile; ?>