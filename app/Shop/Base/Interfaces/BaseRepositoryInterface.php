<?php

namespace App\Shop\Base\Interfaces;

interface BaseRepositoryInterface
{
    public function create(array $attributes);

    public function update(array $attributes, int $id);

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc');

    //Busqueda selectiva teniendo en cuenta el valor de status
    public function all_with_status(int $status = 1, $columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');

    //contar blogs por anio mes
    public function count_blogs_month_year();

    //Mostrar blogs por anio mes
    public function blogs_month_year();

    //productos -- tag = Nuevo En-Oferta Destacado  Por-Llegar
    public function products_tags();

    //Busqueda para productos recientes con o sin etiqueta-- Necesaria para front/categories/sidebar-category.blade.php
    public function custom_product_search(int $nProducts=101010, string $tag='all_products', $columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc');

    public function find(int $id);

    public function findOneOrFail(int $id);

    public function findBy(array $data);

    public function findOneBy(array $data);

    public function findOneByOrFail(array $data);

    public function paginateArrayResults(array $data, int $perPage = 50);

    public function delete(int $id);
}
