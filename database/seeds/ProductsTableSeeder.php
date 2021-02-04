<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('pasta.products');
        foreach ($products as $product) {
            $new_product_obj = new Product();
            $new_product_obj->title = $product['titolo'];
            $new_product_obj->slug = Str::slug( $product['titolo']);
            $new_product_obj->description = $product['descrizione'];
            $new_product_obj->cooking_time = $product['cottura'];
            $new_product_obj->weight = $product['peso'];
            $new_product_obj->thumb_img = $product['src'];
            $new_product_obj->header_img = $product['src-h'];
            $new_product_obj->big_img = $product['src-p'];
            $new_product_obj->shape_id = $product['tipo'];
            $new_product_obj->save();
        }
    }
}
