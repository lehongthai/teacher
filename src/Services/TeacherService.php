<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:43 AM
 */

namespace Thaile\Teacher\Services;

use Thaile\Teacher\Repositories\TeacherRepositoryContract;

class TeacherService implements TeacherServiceContract
{
    protected $repository;

    public function __construct(TeacherRepositoryContract $repositoryContract)
    {
        $this->repository = $repositoryContract;
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