<?php
require 'models/User.php';

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        $users = $this->user->getAll();
        require 'views/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->user->create($name, $email);
            header('Location: index.php');
        }
        require 'views/add.php';
    }

    public function edit() {
        $id = $_GET['id'];
        $user = $this->user->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->user->update($id, $name, $email);
            header('Location: index.php');
        }
        require 'views/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        $this->user->delete($id);
        header('Location: index.php');
    }
}
?>
