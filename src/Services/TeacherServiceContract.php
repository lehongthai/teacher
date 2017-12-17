<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:43 AM
 */

namespace Thaile\Teacher\Services;


interface TeacherServiceContract
{
    public function paginate();
    public function find($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}