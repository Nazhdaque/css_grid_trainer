<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/basic.css">
    <link rel="stylesheet" href="/css/trainer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <title>CSS GRID trainer</title>
</head>
<body>
    <div class="wrapper">
        <div class="limiter">
            <div class="grid grid_0">
                <?php for ($btn = 1; $btn <= 1; $btn++): ?>
                    <div class="item btn" data-btn="<?= $btn ?>">
                        <div class="subitem"><?= $btn ?></div>
                    </div>
                <?php endfor; ?>
            </div>

            
            <?php for ($num = 1; $num <= 1; $num++): ?>
                <div class="grid num" id="num_<?= $num ?>">
                    <div class="item">
                        <div class="subitem"><?= $num ?></div>
                    </div>
                </div>


                <div class="grid grid_<?= $num ?>">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <div class="item">
                            <div class="subitem"><?= $i ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>