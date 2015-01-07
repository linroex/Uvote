<?php
class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        IssuesCategory::insert([
            ['name'=>'社團'],
            ['name'=>'宿舍'],
            ['name'=>'交通'],
            ['name'=>'飲食'],
            ['name'=>'課程'],
            ['name'=>'其他']
        ]);
    }

}

