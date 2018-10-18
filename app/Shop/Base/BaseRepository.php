<?php

namespace App\Shop\Base;

use App\Shop\Base\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

/**
 * @codeCoverageIgnore
 */
abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @param int $id
     * @return bool
     */
    public function update(array $attributes, int $id) : bool
    {
        return $this->find($id)->update($attributes);
    }
 
    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    //Busqueda selectiva teniendo en cuenta el valor de status -- Necesaria para blogs / products
    /**
     * @param int $status
     * @param array $columns
     * @param string $orderBy 
     * @param string $sortBy
     * @return mixed
     */
    public function all_with_status(int $status = 1, $columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns)->where('status', $status);
    } 


    //contar blogs por anio mes y contarlos
    /**
     * @return mixed
     */
    public function count_blogs_month_year()
    {
        //#SELECT YEAR(updated_at) AS ANIO, MONTH(updated_at) AS MES, MONTHNAME(updated_at) AS NOMBRE, COUNT(id) AS TotalPorMesAnio FROM laracomgit.blogs WHERE status = 1 GROUP BY ANIO DESC, MES DESC

        return DB::select('SELECT YEAR(updated_at) AS anio, MONTH(updated_at) AS mes,COUNT(id) AS total FROM blogs WHERE status = 1 GROUP BY anio DESC, mes DESC');
    }

    //blogs por anio mes
    /**
     * @return mixed
     */
    public function blogs_month_year()
    {
        //#SELECT YEAR(updated_at) AS ANIO, MONTH(updated_at) AS MES, slug, name_blog FROM laracomgit.blogs WHERE status = 1 ORDER BY updated_at DESC


        return DB::select('SELECT YEAR(updated_at) AS anio, MONTH(updated_at) AS mes, slug, name_blog FROM blogs WHERE status = 1 ORDER BY updated_at DESC');
    }
        

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data)
    {
        //Cambio sugerido por el github de laracom
        //https://github.com/Laracommerce/laracom/issues/50
        return $this->model->where($data)->all();
        //return $this->model->where($data)->get();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * @param array $data
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginateArrayResults(array $data, int $perPage = 50)
    {
        $page = request()->get('page', 1);
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(
            array_slice($data, $offset, $perPage, false),
            count($data),
            $perPage,
            $page,
            [
                'path' => request()->url(),
                'query' => request()->query()
            ]
        );
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id) : bool
    {
        return $this->model->find($id)->delete();
    }
}
