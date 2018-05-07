## ecProduct version 2 ##

**ecProduct 2** คือเว็บอีคอมเมิร์ซที่หน้าบานลูกค้าสามารถสั่งซื้อสินค้าผ่านหน้าเว็บและ หลังบ้านผู้ขายสามารถจัดการการชำระเงิน
การจัดการสินค้าได้ โดยผู้พัฒนาได้มุ่งเน้นพัฒนาเพื่อประโยชน์แก่ผู้ที่ต้องการศึกษา Laravel และผู้ที่ต้องการนำไปใช้งานจริง

### ขั้นตอนการติดตั้ง ###

* `git clone https://github.com/ipball/ecproduct2.git projectname`
* ที่ command line `cd projectname` เพื่อเข้าถึง path ของ project
* พิมพ์คำสั่ง command line `composer install` กด enter
* พิมพ์คำสั่ง command line `npm install` กด enter
* พิมพ์คำสั่ง command line `npm run dev` กด enter
* พิมพ์คำสั่ง command line  `php artisan key:generate` กด enter
* สร้าง database และ แก้ไขค่า database ในไฟล์ *.env* ให้ถูกต้อง
* พิมพ์คำสั่ง command line เพื่อสร้างฐานข้อมูลและข้อมูลทดสอบ `php artisan migrate --seed` กด enter
* พิมพ์คำสั่ง command line `php artisan serve` กด enter แล้วเปิดลิงค์ http://localhost:8000/

หากมีข้อสงสัยหรือติดปัญหาการ สามารถติดต่อเราที่ [https://www.bahtsoft.com](https://www.bahtsoft.com)
หรือ [https://www.itoffside.com](https://www.itoffside.com)

### สนับสนุนนักพัฒนา ###
หากคุณต้องการสนับสนุนนักพัฒนาเพื่อเป็นกำลังใจและพัฒนาโปรเจคนี้ต่อไปก้าวต่อไปข้างหน้า

คุณสามารถโอนเงินมาได้ที่

**360-248484-4** ธนาคารไทยพานิชย์ ชื่อบัญชี ธวัชศักดิ์ แตงเอี่ยม

**ขอบคุณครับ**

### สิ่งที่ต้องการ ###

* PHP >= 7.1.3
* MySQL

### ความสามารถเพิ่มเติม ###

* ระบบตะกร้าสินค้า
* ระบบสั่งซื้อสินค้า
* ระบบลูกค้า
* ระบบตรวจสอบการเข้าหลังบ้าน
* หลังบ้านจัดการลูกค้า, สินค้า, การชำระเงิน ได้
* หลังบ้านจัดการสถานะของการสั่งซื้อได้
* ระบบสต๊อกสินค้า

### เทคโนโลยีที่ใช้ ###

* bootstrap 4
* Laravel
* Datatables
* XAMPP
* WEBPACK
* Template pike-admin-free-2.2.1

### เพิ่มเติมอื่นๆ ###

ทดสอบการใช้งาน

* Administrator : email = admin@ecproduct, password = 999988
