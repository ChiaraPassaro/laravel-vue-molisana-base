<?php

use Illuminate\Database\Seeder;
use App\Shape;

class ShapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('pasta.shapes');
        foreach ($types as $type) {
            $new_type_obj = new Shape();
            $new_type_obj->fill($type);
            $new_type_obj->save();
        }
    }
}
