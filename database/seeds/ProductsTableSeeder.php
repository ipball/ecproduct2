<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = array('barcode' => '9365804876', 'name' => 'Purdy Inc', 'brand' => 'PHENTERMINE HYDROCHLORIDE', 'price' => 4058, 'quantity' => 333, 'image' => 'http://dummyimage.com/209x187.png/ff4444/ffffff', 'category_id' => 3);
        $data[1] = array('barcode' => '6184687409', 'name' => 'Powlowski and Sons', 'brand' => 'Lisinopril', 'price' => 1936, 'quantity' => 600, 'image' => 'http://dummyimage.com/159x240.png/dddddd/000000', 'category_id' => 5);
        $data[2] = array('barcode' => '5813266496', 'name' => 'Rau-Steuber', 'brand' => 'Water Oak', 'price' => 2452, 'quantity' => 147, 'image' => 'http://dummyimage.com/245x109.bmp/5fa2dd/ffffff', 'category_id' => 5);
        $data[3] = array('barcode' => '3342086483', 'name' => 'Stiedemann, Langosh and Spencer', 'brand' => 'Platinum for Women', 'price' => 1466, 'quantity' => 189, 'image' => 'http://dummyimage.com/186x202.png/cc0000/ffffff', 'category_id' => 5);
        $data[4] = array('barcode' => '8030834195', 'name' => 'Kautzer Group', 'brand' => 'Oyster', 'price' => 4315, 'quantity' => 270, 'image' => 'http://dummyimage.com/185x222.bmp/dddddd/000000', 'category_id' => 5);
        $data[5] = array('barcode' => '1183319215', 'name' => 'Dickinson-Klein', 'brand' => 'Kindest Kare Foam', 'price' => 384, 'quantity' => 160, 'image' => 'http://dummyimage.com/139x128.bmp/ff4444/ffffff', 'category_id' => 5);
        $data[6] = array('barcode' => '6925499558', 'name' => 'Quigley Inc', 'brand' => 'Allegra--D 24 Hour', 'price' => 1709, 'quantity' => 438, 'image' => 'http://dummyimage.com/239x181.png/dddddd/000000', 'category_id' => 5);
        $data[7] = array('barcode' => '5196517723', 'name' => 'Bradtke-Gleason', 'brand' => 'Mycophenolate Mofetil', 'price' => 3564, 'quantity' => 445, 'image' => 'http://dummyimage.com/214x125.png/ff4444/ffffff', 'category_id' => 2);
        $data[8] = array('barcode' => '3530670677', 'name' => 'Bednar LLC', 'brand' => 'MOISTURISING SUN PROTECTION', 'price' => 3177, 'quantity' => 210, 'image' => 'http://dummyimage.com/213x243.bmp/cc0000/ffffff', 'category_id' => 5);
        $data[9] = array('barcode' => '5144700691', 'name' => 'Haley, Kshlerin and Kuphal', 'brand' => 'Tretinoin', 'price' => 4656, 'quantity' => 927, 'image' => 'http://dummyimage.com/137x188.jpg/5fa2dd/ffffff', 'category_id' => 5);
        $data[10] = array('barcode' => '5991055262', 'name' => 'Windler Group', 'brand' => 'Triamterene and Hydrochlorothiazide', 'price' => 2998, 'quantity' => 280, 'image' => 'http://dummyimage.com/175x115.bmp/ff4444/ffffff', 'category_id' => 5);
        $data[11] = array('barcode' => '5555005199', 'name' => 'Barton, Bins and Mraz', 'brand' => 'Citrus Burst Antibacterial Foaming Hand Wash', 'price' => 4983, 'quantity' => 411, 'image' => 'http://dummyimage.com/215x237.jpg/ff4444/ffffff', 'category_id' => 5);
        $data[12] = array('barcode' => '2333947764', 'name' => 'Ankunding Group', 'brand' => 'Allergy', 'price' => 241, 'quantity' => 965, 'image' => 'http://dummyimage.com/122x227.bmp/ff4444/ffffff', 'category_id' => 5);
        $data[13] = array('barcode' => '5860848986', 'name' => 'Jast, Hane and Kilback', 'brand' => 'Acetaminophen', 'price' => 3830, 'quantity' => 572, 'image' => 'http://dummyimage.com/148x209.jpg/5fa2dd/ffffff', 'category_id' => 4);
        $data[14] = array('barcode' => '1536154717', 'name' => 'Sauer, Funk and Bruen', 'brand' => 'Amoxicillin and Clavulanate Potassium', 'price' => 4834, 'quantity' => 350, 'image' => 'http://dummyimage.com/144x231.bmp/ff4444/ffffff', 'category_id' => 3);
        $data[15] = array('barcode' => '7876568068', 'name' => 'Cole LLC', 'brand' => 'Amlodipine Besylate', 'price' => 3221, 'quantity' => 464, 'image' => 'http://dummyimage.com/240x250.bmp/5fa2dd/ffffff', 'category_id' => 3);
        $data[16] = array('barcode' => '2606383524', 'name' => 'Medhurst-Marquardt', 'brand' => 'Wheat Smut', 'price' => 4902, 'quantity' => 513, 'image' => 'http://dummyimage.com/120x134.bmp/dddddd/000000', 'category_id' => 5);
        $data[17] = array('barcode' => '7156482483', 'name' => 'Hartmann Inc', 'brand' => 'Instant Hand Sanitizer - Cocoa Butter', 'price' => 679, 'quantity' => 107, 'image' => 'http://dummyimage.com/113x166.jpg/dddddd/000000', 'category_id' => 4);
        $data[18] = array('barcode' => '1616141824', 'name' => 'Spinka and Sons', 'brand' => 'Bodycology', 'price' => 3817, 'quantity' => 706, 'image' => 'http://dummyimage.com/224x203.png/dddddd/000000', 'category_id' => 2);
        $data[19] = array('barcode' => '6552134223', 'name' => 'Rice-Hoppe', 'brand' => 'Famotidine', 'price' => 2695, 'quantity' => 336, 'image' => 'http://dummyimage.com/154x138.bmp/5fa2dd/ffffff', 'category_id' => 4);
        $data[20] = array('barcode' => '4493724579', 'name' => 'Cremin, Upton and Spencer', 'brand' => 'SKIN ERUPTIONS', 'price' => 335, 'quantity' => 80, 'image' => 'http://dummyimage.com/229x219.png/ff4444/ffffff', 'category_id' => 5);
        $data[21] = array('barcode' => '9341506115', 'name' => 'Little and Sons', 'brand' => 'Nitrogen', 'price' => 3316, 'quantity' => 418, 'image' => 'http://dummyimage.com/124x154.bmp/5fa2dd/ffffff', 'category_id' => 5);
        $data[22] = array('barcode' => '2925855814', 'name' => 'Russel, Dicki and Brakus', 'brand' => 'Amlodipine Besylate', 'price' => 2582, 'quantity' => 919, 'image' => 'http://dummyimage.com/158x245.jpg/cc0000/ffffff', 'category_id' => 5);
        $data[23] = array('barcode' => '6368532122', 'name' => 'Watsica LLC', 'brand' => 'INDOMETHACIN', 'price' => 2038, 'quantity' => 979, 'image' => 'http://dummyimage.com/154x183.png/5fa2dd/ffffff', 'category_id' => 5);
        $data[24] = array('barcode' => '2587678749', 'name' => 'Hettinger, Hessel and Eichmann', 'brand' => 'Alprazolam', 'price' => 4966, 'quantity' => 108, 'image' => 'http://dummyimage.com/118x203.jpg/cc0000/ffffff', 'category_id' => 3);
        $data[25] = array('barcode' => '1984898094', 'name' => 'Brown, White and Blick', 'brand' => 'Cefuroxime', 'price' => 2807, 'quantity' => 432, 'image' => 'http://dummyimage.com/186x242.png/5fa2dd/ffffff', 'category_id' => 5);
        $data[26] = array('barcode' => '6169688882', 'name' => 'Greenfelder Group', 'brand' => 'Arroyo Willow Pollen', 'price' => 1099, 'quantity' => 738, 'image' => 'http://dummyimage.com/132x170.bmp/ff4444/ffffff', 'category_id' => 5);

        for($i=0;$i<27;$i++){
            DB::table('products')->insert($data[$i]);
        }
    }
}
