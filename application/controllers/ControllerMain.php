<?php



class ControllerMain extends Controller
{
    /**
     * ControllerBlog constructor.
     */
    public function __construct()
    {
        $this->model = new ModelMain();
        parent::__construct();
    }

    /**
     *
     */
    public function indexAction()
    {
        $data = $this->model->getFilms();
        $this->view->generate('home_view.php', $data);
    }

    /**
     *
     */
    public function listFilmsAction()
    {
        $data = $this->model->getFilms();
        $this->view->generate('list_films_view.php', $data);
    }


    /**
     *
     */
    public function addFilmViewAction()
    {
        $this->view->generate('add_film_view.php');
    }

    /**
     *
     */
    public function addFilmAction()
    {
        $data = $this->model->addFilms();
        $this->view->generate('add_film_view.php', $data);

    }

    /**
     * @param $myKey
     */
    public function viewFilmAction($myKey)
    {
        $data = $this->model->getViewFilm($myKey);
        $this->view->generate('film_view.php', $data);
    }

    /**
     * @param $myKey
     */
    public function deleteFilmAction($myKey)
    {
        if (!empty($myKey)) {
            $this->model->deleteFilm($myKey);
            header('Location: /main/listFilms');
        }
        $data = $this->model->getFilms();
        $this->view->generate('list_films_view.php', $data);
    }

    /**
     *
     */
    public function searchAction()
    {
        if (array_key_exists('search_q', $_POST)){
            $data = $this->model->search($_POST);
        }
        $this->view->generate('search_view.php', $data);
    }

    /**
     *
     */
    public function importTxtAction()
    {
        $this->view->generate('import_txt_view.php');
    }





}