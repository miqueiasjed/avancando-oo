<?php


namespace Source;


interface IServiceProduct
{
    public function listar();
    public function save();
    public function update();
    public function delete();
}