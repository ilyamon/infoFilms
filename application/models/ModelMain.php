<?php

class ModelMain extends Model
{
    public function addFilms()
    {
        $title = (isset($_POST['title']) && (!empty($_POST['title'])) ? $_POST['title'] : false );
        $release_year = (isset($_POST['release_year']) && (!empty($_POST['release_year'])) ? $_POST['release_year'] : false );
        $format = (isset($_POST['format']) && (!empty($_POST['format'])) ? $_POST['format'] : false );
        $actors = (isset($_POST['actors']) && (!empty($_POST['actors'])) ? $_POST['actors'] : false );




        if ($this->connect()) {

            $sql = "INSERT INTO films (title, release_year, format, actors) 
        VALUES ( :title,  :release_year,  :format, :actors)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':release_year', $release_year, PDO::PARAM_INT);
            $stmt->bindParam(':format', $format, PDO::PARAM_STR);
            $stmt->bindParam(':actors', $actors, PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    public function getViewFilm($id)
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  films WHERE id='$id'")->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $data;
    }

    /**
     * @param $id
     */
    public function deleteFilm($id)
    {
        if ($this->connect()) {
            $sql = "DELETE
                FROM films
                WHERE id=$id
                ";
            return $this->connect()->prepare($sql)->execute();
        }
        return false;
    }

    public function search($string)
    {
        $search = $string['search_q'];
        $data = null;
        try {
            $sql = "SELECT *
                FROM films
                WHERE title
                LIKE '%".$search."%' OR actors LIKE '%".$search."%'
                ";
            $data = $this->connect()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $data;
    }





}