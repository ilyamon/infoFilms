<div class="content-wrapper mt-4">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/main/addFilm">Add film</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/admin/add">Import film</a>
            </li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table">Film list</i>
            </div>
            <!-- Form search-->
            <form class="form-inline ml-3 mt-3">
                <input name="search_q" class="form-control " type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Search</button>
            </form>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Название фильма</th>
                            <th>Год</th>
                            <th>Формат</th>
                            <th>Актеры</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Название фильма</th>
                            <th>Год</th>
                            <th>Формат</th>
                            <th>Актеры</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php if ($data) : ?>
                            <?php foreach ($data as $data) : ?>
                                <tr>
                                    <td><?= $data->title; ?></td>
                                    <td><?= substr($data->release_year, 0, 20); ?></td>
                                    <td><?= $data->format; ?></td>
                                    <td><?= substr($data->actors, 0, 40); ?>...</td>
                                    <td>
                                        <a href="/main/view?<?php echo $data->id; ?>">View</a><br>
                                        <a href="/main/deleteFilm?<?php echo $data->id; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->