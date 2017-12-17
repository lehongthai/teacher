<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:28 AM
 */

namespace Thaile\Teacher\Controllers;

use Thaile\Teacher\Requests\TeacherRequest;
use Thaile\Teacher\Services\TeacherServiceContract;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    protected $service;
    public function __construct(TeacherServiceContract $service)
    {
        $this->service = $service;
    }
    public function getList()
    {
        //$items = $this->service->paginate();
        return view('teacher::admin.teacher.list');
    }
    public function create()
    {
        return view('book-crud::books.create');
    }
    public function store(TeacherRequest $request)
    {
        $this->service->store($request->all());
        return redirect()->route('books.index');
    }
    public function show($id)
    {
        $item = $this->service->find($id);
        return view('book-crud::books.show', compact('item'));
    }
    public function edit($id)
    {
        $item = $this->service->find($id);
        return view('book-crud::books.edit', compact('item'));
    }
    public function update(TeacherRequest $request, $id)
    {
        $this->service->update($id, $request->all());
        return redirect()->route('books.index');
    }
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->route('books.index');
    }
}