<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(1)->create(['name' => 'Подать заявку']);
        Task::factory(1)->create(['name' => 'Оплатить госпошлину за формальную экспертизу']);
        Task::factory(1)->create(['name' => 'Направить госпошлину в Роспатент']);
        Task::factory(1)->create(['name' => 'Получить уведомление Роспатента о прохождении формальной экспертизы']);
        Task::factory(1)->create(['name' => 'Оплатить госпошлину за экспертизу по существу']);
        Task::factory(1)->create(['name' => 'Получить уведомление Роспатента о прохождении экспертизы по существу']);
        Task::factory(1)->create(['name' => 'Получить запрос Роспатента (сходство, уточнение перечня товаров, описательные элементы и т.д.)']);
        Task::factory(1)->create(['name' => 'Подготовить ответ на запрос Роспатента']);
        Task::factory(1)->create(['name' => 'Оплатить госпошлину за регистрацию знака и получение свидетельства']);
        Task::factory(1)->create(['name' => 'Получить свидетельство на товарный знак']);
    }
}
