### Repository cho dự án Drupal Việt Nam

#### Thảo luận
https://github.com/sanglt/drupalvietnam/issues

#### Chức năng:
- Phát triển trên phiên bản Drupal 6 (sẽ chuyển sang Drupal 7 khi module API hoạt động ổn định)

#### Cấu trúc:
- modules/contrib: Chứa các modules phát triển
- modules/custom: Các module do cộng đồng Drupal Việt Nam tự phát triển
- themes/drupalvietnam: Theme drupalvietnam dựa trên Blue Cheese do Lê Thanh Sang phát triển

### Cài đặt môi trường phát triển:
- Hiện tại đang dùng bản Drupal 7.0. Bản Beta sau này làm tương tự.
Mở terminal tải bản D7 và giải nén:
<pre>
wget http://ftp.drupal.org/files/projects/drupal-7.0.tar.gz
tar -zxvf drupal-7.0.tar.gz
cd drupal-7.0
</pre>

Xóa thư mục all và tạo shortlink tới repository của DrupalVietNam:
<pre>
rm -rf sites/all
ln -s /data/git/drupalvietnam/ sites/all
</pre>
Ở đây là đặt thư mục drupalvietnam ở tại: /data/git/drupalvietnam/

Sau đó cài đặt bình thường. Sau khi cài đặt xong sẽ thấy các module và theme của dự án Drupal Việt Nam.
