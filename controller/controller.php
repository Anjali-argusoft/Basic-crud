<?php
include './../model/model.php';
class Controller
{
    public function createUser($id, $name, $age, $pic)
    {
        $model = new Model();
        $data = $model->insert($id, $name, $age, $pic);

    }
    public function updateUser($id, $name, $age, $pic)
    {
        $model = new Model();
        $data = $model->update($id, $name, $age, $pic);
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
