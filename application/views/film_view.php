

<div class="card mb-3 mt-3" style="max-width: 540px;">
    <?php if($data) : ?>
    <?php foreach ($data as $data) : ?>
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/ru/a/a0/The_Hobbit_The_Battle_of_the_Five_Armies.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data->title; ?></h5>
                <p class="card-text">Год: <?php echo $data->release_year; ?></p>
                <p class="card-text">Формат: <?php echo $data->format; ?></p>
                <p class="card-text">Актеры: <?php echo $data->actors; ?></p>
            </div>
        </div>
    </div>
        <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>
</div>