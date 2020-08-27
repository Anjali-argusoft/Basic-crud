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
        return $data;
    }
    public function getUser()
    {
        $model = new Model();
        $data = $model->fetchUser();
        return $data;

    }
    public function deleteUser($uID)
    {
        $model = new Model();
        $data = $model->removeUser($uID);
    }

}
