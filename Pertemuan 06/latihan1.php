<html>
<style>
    .kotak {
        width: 30px;
        height: 30px;
        background-color: lime;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
</style>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($angka as $terluar) : ?>
        <?php foreach ($terluar as $terdalam) : ?>
            <div class="kotak"><?= $terdalam  ?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>

</body>

</html>