<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Variation;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //1
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(1);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //2
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(2);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //3
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(3);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //4
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(4);
         $variations->attribute_value()->attach(15);
         $variations->attribute_value()->attach(2);
         //5
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(5);
         $variations->attribute_value()->attach(2);
         //6
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(8);
         $variations->attribute_value()->attach(9);
         $variations->attribute_value()->attach(10);
         //7
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(7);
         $variations->attribute_value()->attach(5);
         $variations->attribute_value()->attach(11);
         //8
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(8);
         $variations->attribute_value()->attach(13);
         //9
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(9);
         $variations->attribute_value()->attach(14);
         //10
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(8);
         $variations->attribute_value()->attach(9);
         $variations->attribute_value()->attach(10);
         //11
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(11);
         $variations->attribute_value()->attach(3);
         $variations->attribute_value()->attach(11);
         //12
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(12);
         $variations->attribute_value()->attach(12);
         //13
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(13);
         $variations->attribute_value()->attach(14);
         $variations->attribute_value()->attach(5);
         //14
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(14);
         $variations->attribute_value()->attach(14);
         //15
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(15);
         $variations->attribute_value()->attach(6);
         $variations->attribute_value()->attach(7);
         $variations->attribute_value()->attach(16);
    }
}
