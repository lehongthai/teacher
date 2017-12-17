<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:45 AM
 */

namespace Thaile\Teacher\Repositories;


interface TeacherRepositoryContract
{
    public function paginate();
    public function find($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}