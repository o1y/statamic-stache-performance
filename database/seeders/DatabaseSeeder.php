<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Statamic\Facades\Entry;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(5000, function () {
            return Entry::make()
                ->collection('pages')
                ->data(['title' => 'Lorem Ipsum', 'content' => 'Lorem Ipsum'])
                ->published(true)
                ->save();
        });
    }
}
