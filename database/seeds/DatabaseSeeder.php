<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * データベース初期値設定の実行
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();
      $this->call(ARRIVE_TABLE::class);
      $this->call(AUTH_TABLE::class);
      $this->call(AUTHER_TABLE::class);
      $this->call(AUTHERCROSS_TABLE::class);
      $this->call(CART_TABLE::class);
      $this->call(EMP_EDIT_TABLE::class);
      $this->call(EMPLOYEE_TABLE::class);
      $this->call(GENRE_TABLE::class);
      $this->call(INSPECTION_TABLE::class);
      $this->call(METHOD_OF_PAYMENT_TABLE::class);
      $this->call(ORDER_TABLE::class);
      $this->call(POST_TABLE::class);
      $this->call(PRODUCT_EDIT_TABLE::class);
      $this->call(PRODUCT_TABLE::class);
      $this->call(PROUSER_TABLE::class);
      $this->call(RETURN_BOOK_TABLE::class);
      $this->call(REVIEW_TABLE::class);
      $this->call(TRANCELATER_TABLE::class);
      $this->call(UORDER_PAID_TABLE::class);
      $this->call(UORDER_TABLE::class);
      $this->call(UORDERDETAILS_TABLE::class);
      $this->call(USER_TABLE::class);
      $this->call(VENDOR_TABLE::class);
      Model::reguard();
    }
}
