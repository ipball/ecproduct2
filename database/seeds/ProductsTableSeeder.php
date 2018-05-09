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
        $data[0] = array('barcode' => '9365804876', 'name' => 'Purdy Inc', 'brand' => 'PHENTERMINE HYDROCHLORIDE', 'price' => 4058, 'quantity' => 333, 'image' => null, 'category_id' => 3);
        $data[1] = array('barcode' => '6184687409', 'name' => 'Powlowski and Sons', 'brand' => 'Lisinopril', 'price' => 1936, 'quantity' => 600, 'image' => null, 'category_id' => 5);
        $data[2] = array('barcode' => '5813266496', 'name' => 'Rau-Steuber', 'brand' => 'Water Oak', 'price' => 2452, 'quantity' => 147, 'image' => null, 'category_id' => 5);
        $data[3] = array('barcode' => '3342086483', 'name' => 'Stiedemann, Langosh and Spencer', 'brand' => 'Platinum for Women', 'price' => 1466, 'quantity' => 189, 'image' => null, 'category_id' => 5);
        $data[4] = array('barcode' => '8030834195', 'name' => 'Kautzer Group', 'brand' => 'Oyster', 'price' => 4315, 'quantity' => 270, 'image' => null, 'category_id' => 5);
        $data[5] = array('barcode' => '1183319215', 'name' => 'Dickinson-Klein', 'brand' => 'Kindest Kare Foam', 'price' => 384, 'quantity' => 160, 'image' => null, 'category_id' => 5);
        $data[6] = array('barcode' => '6925499558', 'name' => 'Quigley Inc', 'brand' => 'Allegra--D 24 Hour', 'price' => 1709, 'quantity' => 438, 'image' => null, 'category_id' => 5);
        $data[7] = array('barcode' => '5196517723', 'name' => 'Bradtke-Gleason', 'brand' => 'Mycophenolate Mofetil', 'price' => 3564, 'quantity' => 445, 'image' => null, 'category_id' => 2);
        $data[8] = array('barcode' => '3530670677', 'name' => 'Bednar LLC', 'brand' => 'MOISTURISING SUN PROTECTION', 'price' => 3177, 'quantity' => 210, 'image' => null, 'category_id' => 5);
        $data[9] = array('barcode' => '5144700691', 'name' => 'Haley, Kshlerin and Kuphal', 'brand' => 'Tretinoin', 'price' => 4656, 'quantity' => 927, 'image' => null, 'category_id' => 5);
        $data[10] = array('barcode' => '5991055262', 'name' => 'Windler Group', 'brand' => 'Triamterene and Hydrochlorothiazide', 'price' => 2998, 'quantity' => 280, 'image' => null, 'category_id' => 5);
        $data[11] = array('barcode' => '5555005199', 'name' => 'Barton, Bins and Mraz', 'brand' => 'Citrus Burst Antibacterial Foaming Hand Wash', 'price' => 4983, 'quantity' => 411, 'image' => null, 'category_id' => 5);
        $data[12] = array('barcode' => '2333947764', 'name' => 'Ankunding Group', 'brand' => 'Allergy', 'price' => 241, 'quantity' => 965, 'image' => null, 'category_id' => 5);
        $data[13] = array('barcode' => '5860848986', 'name' => 'Jast, Hane and Kilback', 'brand' => 'Acetaminophen', 'price' => 3830, 'quantity' => 572, 'image' => null, 'category_id' => 4);
        $data[14] = array('barcode' => '1536154717', 'name' => 'Sauer, Funk and Bruen', 'brand' => 'Amoxicillin and Clavulanate Potassium', 'price' => 4834, 'quantity' => 350, 'image' => null, 'category_id' => 3);
        $data[15] = array('barcode' => '7876568068', 'name' => 'Cole LLC', 'brand' => 'Amlodipine Besylate', 'price' => 3221, 'quantity' => 464, 'image' => null, 'category_id' => 3);
        $data[16] = array('barcode' => '2606383524', 'name' => 'Medhurst-Marquardt', 'brand' => 'Wheat Smut', 'price' => 4902, 'quantity' => 513, 'image' => null, 'category_id' => 5);
        $data[17] = array('barcode' => '7156482483', 'name' => 'Hartmann Inc', 'brand' => 'Instant Hand Sanitizer - Cocoa Butter', 'price' => 679, 'quantity' => 107, 'image' => null, 'category_id' => 4);
        $data[18] = array('barcode' => '1616141824', 'name' => 'Spinka and Sons', 'brand' => 'Bodycology', 'price' => 3817, 'quantity' => 706, 'image' => null, 'category_id' => 2);
        $data[19] = array('barcode' => '6552134223', 'name' => 'Rice-Hoppe', 'brand' => 'Famotidine', 'price' => 2695, 'quantity' => 336, 'image' => null, 'category_id' => 4);
        $data[20] = array('barcode' => '4493724579', 'name' => 'Cremin, Upton and Spencer', 'brand' => 'SKIN ERUPTIONS', 'price' => 335, 'quantity' => 80, 'image' => null, 'category_id' => 5);
        $data[21] = array('barcode' => '9341506115', 'name' => 'Little and Sons', 'brand' => 'Nitrogen', 'price' => 3316, 'quantity' => 418, 'image' => null, 'category_id' => 5);
        $data[22] = array('barcode' => '2925855814', 'name' => 'Russel, Dicki and Brakus', 'brand' => 'Amlodipine Besylate', 'price' => 2582, 'quantity' => 919, 'image' => null, 'category_id' => 5);
        $data[23] = array('barcode' => '6368532122', 'name' => 'Watsica LLC', 'brand' => 'INDOMETHACIN', 'price' => 2038, 'quantity' => 979, 'image' => null, 'category_id' => 5);
        $data[24] = array('barcode' => '2587678749', 'name' => 'Hettinger, Hessel and Eichmann', 'brand' => 'Alprazolam', 'price' => 4966, 'quantity' => 108, 'image' => null, 'category_id' => 3);
        $data[25] = array('barcode' => '1984898094', 'name' => 'Brown, White and Blick', 'brand' => 'Cefuroxime', 'price' => 2807, 'quantity' => 432, 'image' => null, 'category_id' => 5);
        $data[26] = array('barcode' => '6169688882', 'name' => 'Greenfelder Group', 'brand' => 'Arroyo Willow Pollen', 'price' => 1099, 'quantity' => 738, 'image' => null, 'category_id' => 5);

        for($i=0;$i<27;$i++){
            DB::table('products')->insert($data[$i]);
        }
    }
}
