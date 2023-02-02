<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sáo C5',
                'price' => 5000000,
                'quantity' => 99,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Sáo Đô  hay còn gọi là sáo C5. Đây là loại sáo có quãng âm không cao cũng không thấp. Khoảng cách giữa các lỗ khá gần nhau giúp cho người mới tập thổi sáo dễ dàng tập luyện và làm quen với cây sáo.',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo D5',
                'price' => 5000000,
                'quantity' => 126,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Sáo Rê cao hay còn được gọi là sáo D5 thuộc trong những dòng sáo trung cao, mang âm sắc thánh thót, thích hợp chơi được nhiều thể loại nhạc, đặc biệt là nhạc chèo, nhạc trữ tình,  quê hương, bolero tới nhạc trẻ, pop, rock hay Edm',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo E5',
                'price' => 500000,
                'quantity' => 85,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Âm cao',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo F4',
                'price' => 500000,
                'quantity' => 250,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Sáo F4 hay là sáo Fa Trầm có âm thanh trầm nhất trong tất cả các loại sáo, phù hợp với nhiều bản nhạc buồn, tâm trạng. Sáo Fa Trầm F4 là cây sáo có thể chơi được nhiều thể loại.',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo G4',
                'price' => 500000,
                'quantity' => 300,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Sáo G4 hay còn gọi là Sáo Sol Trầm có âm thanh trầm ấm, phù hợp với nhiều bản nhạc buồn, tâm trạng. Có thể nói Sáo Sol Trầm G4 là cây sáo có thể chơi được nhiều thể loại. Nhất là nhạc nhạc Quê Hương trữ tình, nhạc Đỏ, nhạc Cách Mạng, nhạc Vàng…',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo A4',
                'price' => 500000,
                'quantity' => 500,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Cây sáo A4 hay còn gọi là sáo la trầm, là sáo thông dụng chỉ đứng sau cây C5, có thể nói Sáo A4 la trầm là cây sáo có thể chơi được nhiều thể loại.',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo Bb4',
                'price' => 500000,
                'quantity' => 170,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Âm thanh ngọt, Dễ bắt hơi, Thổi rất nhẹ',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo B4',
                'price' => 500000,
                'quantity' => 130,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Si bình .Thường chơi nhạc trẻ',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo C#',
                'price' => 500000,
                'quantity' => 450,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Đây là cây Sáo thường dành cho hát văn hoặc các ca khúc tác phẩm phù hợp với tone C5#',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],
            [
                'name' => 'Sáo F#',
                'price' => 500000,
                'quantity' => 230,
                'manufacture' => 'Sáo Trúc Thanh Trường',
                'category_id' => 1,
                'description' => 'Âm trầm ấm',
                'image' => 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg',
                'created_at' => '2022-12-17 04:02:10',
            ],

        ]);
    }
}
