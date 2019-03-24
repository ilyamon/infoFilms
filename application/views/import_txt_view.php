<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group mt-3">
        <label for="exampleFormControlFile1">Файл .TXT :</label>
        <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-success mb-3">Загрузить данные в базу </button>
</form>


<?php
        ini_set("display_errors", 1);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);


        if (!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
            echo "No upload";
        } else {

            $file = fopen($_FILES['file']['tmp_name'], "r");

            $i = 0;
            $result = [];

            while (!feof($file)) {
                $buffer = fgets($file);
                if (($buffer != "\n") && ($buffer != '')) {
                    $result[$i][explode(':', $buffer)[0]] = explode(':', $buffer)[1];
                } else $i++;
            }

            fclose($file);

            $c = new Model();

            if ($c->connect()) {

                foreach ($result as $v ) {

                    echo "<pre>";
                    var_dump($v);
                    echo "</pre>";

                    $sql = "INSERT INTO films (title, release_year, format, actors)
                            VALUES ( :title,  :release_year,  :format, :actors)";
                    $stmt = $c->connect()->prepare($sql);
                    $stmt->bindParam(':title', $v['Title'], PDO::PARAM_STR);
                    $stmt->bindParam(':release_year', $v['Release Year'], PDO::PARAM_INT);
                    $stmt->bindParam(':format', $v['Format'], PDO::PARAM_STR);
                    $stmt->bindParam(':actors', $v['Stars'], PDO::PARAM_STR);
                    $stmt->execute();
                }
            }
        }

?>