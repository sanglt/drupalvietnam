### Repository cho dự án Drupal Việt Nam

#### Thảo luận
Các thông tin được thảo luận trên Google Wave. Liên hệ với **Thế Hồng** để được thêm vào danh sách.

#### Chức năng:
- Phát triển trên phiên bản Drupal 7 (Chờ ~21/06/2010 sẽ có bản beta - theo những gì theo dõi tình hình các bug trên tracker)

#### Cấu trúc:
- modules/contrib: Chứa các modules phát triển
- modules/custom: Các module do cộng đồng Drupal Việt Nam tự phát triển
- themes/drupalvietnam: Theme drupalvietnam dựa trên Blue Cheese do Lê Thanh Sang phát triển


### Cài đặt môi trường phát triển:
- Hiện tại đang dùng bản Drupal 7 Alpha 5. Bản Beta sau này làm tương tự.
Mở terminal tải bản D7A5 và giải nén:
<pre>
wget http://ftp.drupal.org/files/projects/drupal-7.0-alpha5.tar.gz
tar -zxvf drupal-7.0-alpha5.tar.gz
cd drupal-7.0-alpha5
</pre>

Xóa thư mục all và tạo shortlink tới repository của DrupalVietNam:
<pre>
rm -rf sites/all
ln -s /data/git/drupalvietnam/ sites/all
</pre>
Ở đây là đặt thư mục drupalvietnam ở tại: /data/git/drupalvietnam/

Sau đó cài đặt bình thường. Sau khi cài đặt xong sẽ thấy các module và theme của dự án Drupal Việt Nam.
