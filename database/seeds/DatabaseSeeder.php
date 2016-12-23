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
      $this->call(PRODUCT_TABLE::class);
      $this->call(EMPLOYEE_TABLE::class);
      $this->call(GENRE_TABLE::class);
      $this->call(VENDOR_TABLE::class);
      $this->call(UORDER_TABLE::class);
      $this->call(ORDER_TABLE::class);
      $this->call(UORDER_PAID_TABLE::class);
      $this->call(VENDOR_TABLE::class);
      $this->call(UORDERDETAILS_TABLE::class);
      Model::reguard();
    }
}
