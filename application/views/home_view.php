<div class="row mt-4 mb-2">
    <?php if($data) : ?>
    <?php foreach ($data as $dat) : ?>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><?php echo $dat->title; ?></h3>
                <p class="card-text mb-1">Год: <?php echo $dat->release_year; ?></p>
                <p class="card-text mb-1">Формат: <?php echo $dat->format; ?></p>
                <p class="card-text mb-auto">Актеры: <?php echo $dat->actors; ?></p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <a href="/main/viewFilm?<?php echo $dat->id; ?>">
                    <img src="https://upload.wikimedia.org/wikipedia/ru/a/a0/The_Hobbit_The_Battle_of_the_Five_Armies.jpg" class="card-img" alt="...">
                </a>

            </div>
        </div>
    </div>
        <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>
</div>