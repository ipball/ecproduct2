<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = array('id' => '1', 'name_th' => 'กระบี่', 'name_en' => 'Krabi');
        $data[1] = array('id' => '2', 'name_th' => 'กรุงเทพมหานคร', 'name_en' => 'Bangkok');
        $data[2] = array('id' => '3', 'name_th' => 'กาญจนบุรี', 'name_en' => 'Kanchanaburi');
        $data[3] = array('id' => '4', 'name_th' => 'กาฬสินธุ์', 'name_en' => 'Kalasin');
        $data[4] = array('id' => '5', 'name_th' => 'กำแพงเพชร', 'name_en' => 'Kamphaeng phet');
        $data[5] = array('id' => '6', 'name_th' => 'ขอนแก่น', 'name_en' => 'Khon kean');
        $data[6] = array('id' => '7', 'name_th' => 'จันทบุรี', 'name_en' => 'Chanthaburi');
        $data[7] = array('id' => '8', 'name_th' => 'ฉะเชิงเทรา', 'name_en' => 'Chachoengsao');
        $data[8] = array('id' => '9', 'name_th' => 'ชลบุรี', 'name_en' => 'Chon buri');
        $data[9] = array('id' => '10', 'name_th' => 'ชัยนาท', 'name_en' => 'Chai nat');
        $data[10] = array('id' => '11', 'name_th' => 'ชัยภูมิ', 'name_en' => 'Chai yaphum');
        $data[11] = array('id' => '12', 'name_th' => 'ชุมพร', 'name_en' => 'Chum phon');
        $data[12] = array('id' => '13', 'name_th' => 'เชียงราย', 'name_en' => 'Chiang rai');
        $data[13] = array('id' => '14', 'name_th' => 'เชียงใหม่', 'name_en' => 'Chiang mai');
        $data[14] = array('id' => '15', 'name_th' => 'ตรัง', 'name_en' => 'Trang');
        $data[15] = array('id' => '16', 'name_th' => 'ตราด', 'name_en' => 'Trat');
        $data[16] = array('id' => '17', 'name_th' => 'ตาก', 'name_en' => 'Tak');
        $data[17] = array('id' => '18', 'name_th' => 'นครนายก', 'name_en' => 'Nakhon nayok');
        $data[18] = array('id' => '19', 'name_th' => 'นครปฐม', 'name_en' => 'Nakhon pathom');
        $data[19] = array('id' => '20', 'name_th' => 'นครพนม', 'name_en' => 'Nakhon phanom');
        $data[20] = array('id' => '21', 'name_th' => 'นครราชสีมา', 'name_en' => 'Nakhon ratchasima');
        $data[21] = array('id' => '22', 'name_th' => 'นครศรีธรรมราช', 'name_en' => 'Nakhon si thammarat');
        $data[22] = array('id' => '23', 'name_th' => 'นครสวรรค์', 'name_en' => 'Nakhon sawan');
        $data[23] = array('id' => '24', 'name_th' => 'นนทบุรี', 'name_en' => 'Nonthaburi');
        $data[24] = array('id' => '25', 'name_th' => 'นราธิวาส', 'name_en' => 'Narathiwat');
        $data[25] = array('id' => '26', 'name_th' => 'น่าน', 'name_en' => 'Nan');
        $data[26] = array('id' => '27', 'name_th' => 'บุรีรัมย์', 'name_en' => 'Buri ram');
        $data[27] = array('id' => '28', 'name_th' => 'ปทุมธานี', 'name_en' => 'Pathum thani');
        $data[28] = array('id' => '29', 'name_th' => 'ประจวบคีรีขันธ์', 'name_en' => 'Prachuap khiri khan');
        $data[29] = array('id' => '30', 'name_th' => 'ปราจีนบุรี', 'name_en' => 'Prachinburi');
        $data[30] = array('id' => '31', 'name_th' => 'ปัตตานี', 'name_en' => 'Pattani');
        $data[31] = array('id' => '32', 'name_th' => 'พระนครศรีอยุธยา', 'name_en' => 'Ayutthaya');
        $data[32] = array('id' => '33', 'name_th' => 'พะเยา', 'name_en' => 'Phayao');
        $data[33] = array('id' => '34', 'name_th' => 'พังงา', 'name_en' => 'Phangnga');
        $data[34] = array('id' => '35', 'name_th' => 'พัทลุง', 'name_en' => 'Phatthalung');
        $data[35] = array('id' => '36', 'name_th' => 'พิจิตร', 'name_en' => 'phichit');
        $data[36] = array('id' => '37', 'name_th' => 'พิษณุโลก', 'name_en' => 'Phitsanulok');
        $data[37] = array('id' => '38', 'name_th' => 'เพชรบุรี', 'name_en' => 'Phetchaburi');
        $data[38] = array('id' => '39', 'name_th' => 'เพชรบูรณ์', 'name_en' => 'Phetchabun');
        $data[39] = array('id' => '40', 'name_th' => 'แพร่', 'name_en' => 'Phrae');
        $data[40] = array('id' => '41', 'name_th' => 'ภูเก็ต', 'name_en' => 'Phuket');
        $data[41] = array('id' => '42', 'name_th' => 'มหาสารคาม', 'name_en' => 'Mahasarakham');
        $data[42] = array('id' => '43', 'name_th' => 'มุกดาหาร', 'name_en' => 'Mukdahan');
        $data[43] = array('id' => '44', 'name_th' => 'แม่ฮ่องสอน', 'name_en' => 'Mae hong son');
        $data[44] = array('id' => '45', 'name_th' => 'ยโสธร', 'name_en' => 'Yasothon');
        $data[45] = array('id' => '46', 'name_th' => 'ยะลา', 'name_en' => 'Yala');
        $data[46] = array('id' => '47', 'name_th' => 'ร้อยเอ็ด', 'name_en' => 'Roi et');
        $data[47] = array('id' => '48', 'name_th' => 'ระนอง', 'name_en' => 'Ranong');
        $data[48] = array('id' => '49', 'name_th' => 'ระยอง', 'name_en' => 'Rayong');
        $data[49] = array('id' => '50', 'name_th' => 'ราชบุรี', 'name_en' => 'Rachaburi');
        $data[50] = array('id' => '51', 'name_th' => 'ลพบุรี', 'name_en' => 'Lopburi');
        $data[51] = array('id' => '52', 'name_th' => 'เลย', 'name_en' => 'Loei');
        $data[52] = array('id' => '53', 'name_th' => 'ลำปาง', 'name_en' => 'Lampang');
        $data[53] = array('id' => '54', 'name_th' => 'ลำพูน', 'name_en' => 'Lamphun');
        $data[54] = array('id' => '55', 'name_th' => 'ศีรสะเกษ', 'name_en' => 'Srisaket');
        $data[55] = array('id' => '56', 'name_th' => 'สกลนคร', 'name_en' => 'Sakonnakhon');
        $data[56] = array('id' => '57', 'name_th' => 'สงขลา', 'name_en' => 'Songkhla');
        $data[57] = array('id' => '58', 'name_th' => 'สตูล', 'name_en' => 'Satun');
        $data[58] = array('id' => '59', 'name_th' => 'สมุทรปราการ', 'name_en' => 'Samutprakan');
        $data[59] = array('id' => '60', 'name_th' => 'สมุทรสงคราม', 'name_en' => 'Samut songkhram');
        $data[60] = array('id' => '61', 'name_th' => 'สมุทรสาคร', 'name_en' => 'Samut sakhon');
        $data[61] = array('id' => '62', 'name_th' => 'สระแก้ว', 'name_en' => 'Sra kaeo');
        $data[62] = array('id' => '63', 'name_th' => 'สระบุรี', 'name_en' => 'Saraburi');
        $data[63] = array('id' => '64', 'name_th' => 'สิงห์บุรี', 'name_en' => 'Singburi');
        $data[64] = array('id' => '65', 'name_th' => 'สุโขทัย', 'name_en' => 'Sukhothai');
        $data[65] = array('id' => '66', 'name_th' => 'สุพรรณบุรี', 'name_en' => 'Suphanburi');
        $data[66] = array('id' => '67', 'name_th' => 'สุราษฎร์ธานี', 'name_en' => 'Surat thani');
        $data[67] = array('id' => '68', 'name_th' => 'สุรินทร์', 'name_en' => 'Surin');
        $data[68] = array('id' => '69', 'name_th' => 'หนองคาย', 'name_en' => 'Nongkhai');
        $data[69] = array('id' => '70', 'name_th' => 'หนองบัวลำภู', 'name_en' => 'Nongbualamphu');
        $data[70] = array('id' => '71', 'name_th' => 'อ่างทอง', 'name_en' => 'Angthong');
        $data[71] = array('id' => '72', 'name_th' => 'อำนาจเจริญ', 'name_en' => 'Amnatcharoen');
        $data[72] = array('id' => '73', 'name_th' => 'อุดรธานี', 'name_en' => 'Udonthani');
        $data[73] = array('id' => '74', 'name_th' => 'อุตรดิตถ์', 'name_en' => 'Uttaradit');
        $data[74] = array('id' => '75', 'name_th' => 'อุทัยธานี', 'name_en' => 'Uthaithani');
        $data[75] = array('id' => '76', 'name_th' => 'อุบลราชธานี', 'name_en' => 'Uboratchathani');

        for ($i = 0; $i < 76; $i++) {
            DB::table('province')->insert($data[$i]);
        }
    }
}
