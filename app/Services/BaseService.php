<?php

namespace App\Services;

use App\Repositories\Repository;

use Illuminate\Http\Request;

class BaseService
{
    protected Repository $repository;

    /**
     * @return Model
     */
    public function getRepository(): Repository
    {
        return $this->repository;
    }

    /**
     * @param Model $model
     */
    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }

    public function index(Request $request) :array
    {      
        $query = $this->repository->getModel()->query();

        $entities = isset($request->skip) ? $query->skip($request->skip )->take($request->take)->get() : $query->get();

        return [ $entities , $query->count()];
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function create($data)
    {   
        $entity = $this->repository->create($data);

        return [$entity, 'Created', 200];

    }


    public function update(Request $request, $id)
    {
        if(!$this->repository->find($id)) {
            return [null,"not found",404];
        }
        $entity = $this->repository->update($request->all(),$id);
        return [$entity, "Updated", 200];
    }


    public function delete(Request $request , int $id)
    {
        $entity = $this->repository->find($id);

        if(!$entity) {
            return [null,"not found",404];
        }
        $this->repository->delete($id);

        return [null, "deleted", 200];
    }
}
