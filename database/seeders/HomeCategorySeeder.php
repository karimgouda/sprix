<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Buildings', 'ar' => 'أهداف الاستدامة']),
            'key' => 'buildings',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
            'progresses_percentages' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
        ]);
        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Buildings', 'ar' => 'أهداف الاستدامة']),
            'key' => 'buildings',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
            'progresses_percentages' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
        ]);
        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Buildings', 'ar' => 'أهداف الاستدامة']),
            'key' => 'buildings',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
            'progresses_percentages' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
        ]);
        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Buildings', 'ar' => 'أهداف الاستدامة']),
            'key' => 'buildings',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
            'progresses_percentages' => json_encode(['en' => "Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", 'ar' => "الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]),
        ]);

    }
}
