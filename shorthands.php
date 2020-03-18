<?php

    $loggedIn = false;
    /*
    if($loggedIn){
        echo 'You are logged in';
    } else {
        echo 'You are not logged in';
    }
    */

    // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

    /*
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    $age = 10;
    $score = 5;

    echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
    */

    ?>

    <div>
    <?php if($loggedIn){ ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest!</h1>
    <?php } ?>
    </div>

    <div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
    </div>

    <div>
    <?php $arr = [1, 2, 3, 4, 5]  ?>
    <?php foreach($arr as $val): ?>
        <?php echo $val ?>
    <?php endforeach; ?>
    </div>

    <div>
    <?php for($i = 0;$i <= 10; $i++): ?>
        <?php echo $i; ?>
        <br>
    <?php endfor; ?>
    </div>