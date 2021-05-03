<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/basic.css">
    <link rel="stylesheet" href="/css/samples.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <title>CSS GRID samples</title>
</head>
<body>
    <div class="wrapper">
        <div class="limiter">
            <div class="grid grid_0">
                <?php for ($btn = 1; $btn <= 22; $btn++): ?>
                    <div class="item btn" data-btn="<?= $btn ?>">
                        <div class="subitem"><?= $btn ?></div>
                    </div>
                <?php endfor; ?>
            </div>
            <?php for ($num = 1; $num <= 20; $num++): ?>
                <div class="grid num" id="num_<?= $num ?>">
                    <div class="item">
                        <div class="subitem"><?= $num ?></div>
                    </div>
                </div>
                <div class="grid grid_<?= $num ?>">
                    <?php for ($i = 1; $i <= 9; $i++): ?>
                        <div class="item">
                            <div class="subitem"><?= $i ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>



            <div class="grid num" id="num_21">
                <div class="item">
                    <div class="subitem">21</div>
                </div>
            </div>
            <div class="grid grid_21">
                <header class="item">Header</header>
                <article class="item">
                    <h1 class="item">HEADING</h1>
                    <p class="item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, placeat! Ipsum rem magni culpa aut totam deserunt ullam fuga non!</p>
                </article>
                <aside class="item">Sidebar</aside>
                <footer class="item">Footer</footer>
            </div>



            <div class="grid num" id="num_22">
                <div class="item">
                    <div class="subitem">22</div>
                </div>
            </div>

            <div class="grid grid_22">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="item">
                        <div class="subitem"><?= $i ?></div>
                    </div>
                <?php endfor; ?>
                <div class="item">
                    <div class="item">sub 1</div>
                    <div class="item">sub 2</div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>