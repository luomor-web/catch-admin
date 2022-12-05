<?php
declare(strict_types=1);

namespace Modules\Permissions\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Modules\Permissions\Models\RolesModel;
use Illuminate\Http\Request;
use Modules\Permissions\Http\Requests\RoleRequest;


class RolesController extends Controller
{
    public function __construct(
        protected readonly RolesModel $model
    ){}

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return $this->model->getList();
    }

    public function store(RoleRequest $request)
    {
        return $this->model->storeBy($request->all());
    }

    public function show($id)
    {
        return $this->model->firstBy($id);
    }

    public function update($id, RoleRequest $request)
    {
        return $this->model->updateBy($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->model->deleteBy($id);
    }
}
