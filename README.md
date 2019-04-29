# CNPM_WebBanHang

AV:
+ Sau khi clone project về, mấy ông tạo file .env, copy nội dung từ file .env.example sang và sửa cho phù hợp với cấu hình máy
+ chạy lệnh composer install để load package
+ chạy 2 lệnh
php artisan key:generate,
php artisan config:cache
để tạo key
+ sau đó chạy php artisan serve,vào localhost:8000 để xem chạy ổn chưa
+ lưu ý mình chỉ làm trong thư mục web,toàn bộ cấu trúc project laravel 5.8 nằm trong đó
