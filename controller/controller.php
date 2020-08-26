<?php
include './../model/model.php';
class Controller
{
    public function createUser($id, $name, $age)
    {
        $model = new Model();
        $data = $model->insert($id, $name, $age);

    }
    public function updateUser($id, $name, $age)
    {
        $model = new Model();
        $data = $model->update($id, $name, $age);
    }
    public function getUser()
    {
        $model = new Model();
        $data = $model->fetchUser();

    }

}
