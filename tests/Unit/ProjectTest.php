<?php

namespace Tests\Unit;

use App\Models\Role;
use PHPUnit\Framework\TestCase as TestC;
use Tests\TestCase;
use Illuminate\Http\Response;

class ProjectTest extends TestCase
{

    public function testRoleStore()
    {
        $response = $this->post('/api/v1/role/',
            [
                'title' => 'TestTitleRole',
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_CREATED, $response);
    }
    public function testRoleIndex()
    {
        $response = $this->get('/api/v1/role/')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testRoleShow()
    {
        $response = $this->get('/api/v1/role/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testRoleUpdate()
    {
        $response = $this->put('/api/v1/role/1',
            [
                'title' => 'TestTitleUpdate',
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }

    public function testUserStore()
    {
        $response = $this->post('/api/v1/user/',
            [
                'nick_name' => 'nick_name',
                'email' => 'email@gmail.com',
                'first_name' => 'first_name',
                'last_name' => 'last_name',
                'password' => 'password',
                'role_id' => '1'
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_CREATED, $response);
    }
    public function testUserIndex()
    {
        $response = $this->get('/api/v1/user/')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testUserShow()
    {
        $response = $this->put('/api/v1/user/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testUserUpdate()
    {
        $response = $this->put('/api/v1/user/1',
            [
                'nick_name' => 'nick_name2',
                'email' => 'email2@gmail.com',
                'first_name' => 'first_name2',
                'last_name' => 'last_name2',
                'password' => 'password2',
                'role_id' => '1'
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testUserDestroy()
    {
        $response = $this->delete('/api/v1/user/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_NO_CONTENT, $response);
    }
    public function testRoleDestroy()
    {
        $response = $this->delete('/api/v1/role/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_NO_CONTENT, $response);
    }

    public function testCategoryStore()
    {
        $response = $this->post('/api/v1/category/',
            [
                'title' => 'TitleCategory'
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_CREATED, $response);
    }
    public function testCategoryIndex()
    {
        $response = $this->get('/api/v1/category/')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testCategoryShow()
    {
        $response = $this->get('/api/v1/category/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testCategoryUpdate()
    {
        $response = $this->put('/api/v1/category/1',
            [
                'title' => 'TitleCategoryUpdate',
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }

    public function testProductStore()
    {
        $response = $this->post('/api/v1/product/',
            [
                'title' => 'TitleProduct',
                'img' => 'ImgProduct',
                'category_id' => '1'
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_CREATED, $response);
    }
    public function testProductIndex()
    {
        $response = $this->get('/api/v1/product/')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testProductShow()
    {
        $response = $this->get('/api/v1/product/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }
    public function testProductUpdate()
    {
        $response = $this->put('/api/v1/product/1',
            [
                'title' => 'TitleProductUpdate',
                'img' => 'ImgProductUpdate',
                'category_id' => '1'
            ])->getStatusCode();
        $this->assertEquals(Response::HTTP_OK, $response);
    }

    public function testProductDestroy()
    {
        $response = $this->delete('/api/v1/product/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_NO_CONTENT, $response);
    }
    public function testCategoryDestroy()
    {
        $response = $this->delete('/api/v1/category/1')->getStatusCode();
        $this->assertEquals(Response::HTTP_NO_CONTENT, $response);
    }

}
