<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:46 AM
 */

namespace Thaile\Teacher\Repositories;

use Thaile\Teacher\Models\Teacher;
class TeacherRepository implements TeacherRepositoryContract
{
    protected $model;

    public function __construct(Teacher $model)
    {
        $this->model = $model;
    }

    public function paginate()
    {
        // TODO: Implement paginate() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

}