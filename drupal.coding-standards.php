<?php
// $Id: drupal.coding-standards.php 1 2010-12-28 04:38:52Z drupalvietnam $

/**
 * @defgroup drupal_coding_standards Chuẩn viết mã Drupal
 * @{
 *
 * - Mỗi người có cách viết code khác nhau, không thể nói cách viết của ai là
 *   đúng, là sai, là tốt hơn một cách khách quan được.
 *   Tuy nhiên, để người khác có dễ dàng hiểu code của mình, và ngược lại, khi
 *   làm việc với mã nguồn Drupal, bạn cần tuân thủ Chuẩn viết mã của Drupal --
 *   những quy ước viết code được cộng đồng đề xuất. Bạn có thể tham khảo chi tiết
 *   tại @link http://drupal.org/coding-standards Drupal.org @endlink.
 *
 * - Nguyên tắc không hack core.
 *   
 *   Drupal cung cấp cơ chế rất linh động cho người phát triển cuối -- bạn có
 *   thể thay thế các hành vi mặc định của Drupal thành hành vi tuỳ biến của bạn
 *   mà không cần chỉnh sửa trực tiếp vào nhân của Drupal.
 *   
 *   Trường hợp bạn buộc phải hack core (hỗ trợ CDN, hiphop, ...), bạn phải tự
 *   giải quyết những vấn đề phát sinh, những thay đổi của bạn sẽ mất nếu bạn
 *   cập nhật mã nguồn mới nhất, ...
 *
 *   Trường hợp bạn thấy Drupal chưa thật sự uyển chuyển ở phần nào đó, bạn có
 *   thể tạo issue mới để yêu cầu tính năng, những người có kinh nghiệm sẽ đề
 *   suất cách giải quyết cho bạn, hoặc họ sẽ tạo patch cho tính năng mà bạn đề
 *   suất.
 *
 * - Tổ chức file trong Drupal
 *   Drupal có quy ước tổ chức mã nguồn riêng của nó, nắm bắt được quy ước này,
 *   chúng ta có thể xây dựng được modules/themes/profiles có thể sử dụng ở mọi
 *   website chạy Drupal (thậm chí, nhiều site Drupal chạy cùng trên một mã 
 *   nguồn).
 *   
 *    Xem cấu trúc tập tin của Drupal, chúng ta thấy các các phần sau:
 *    
 *    - (01) includes
 *        Các thư viện cơ bản cho Drupal, đa phần chúng swappable, nghĩa là chúng
 *        ta có thể buộc Drupal sử dụng thư viện thay thế khác, mà không cần
 *        chỉnh sửa gì lên thư viện hiện tại.
 *        Thí dụ, nếu muốn sử dụng thư viện cache.inc mặc định của Drupal, cache
 *        trên database, thành thư viện cache.memcache.inc, thì ở tập tin cấu
 *        hình của Drupal site (thường là sites/default/settings.php), chúng ta
 *        thêm vào đó dòng code sau
 *        
 *          $conf['cache_inc'] = '/path/to/cache.memcache.inc';
 *        
 *        Cho nên, đối với thư mục này của Drupal, chúng ta không nên chỉnh sửa gì.
 *    - (02) misc
 *        Là thư mục chứa những hình ảnh, css và thư viện javascript được sử
 *        dụng trong hệ thống.
 *    - (03) modules
 *    - (04) modules/*
 *    - (05) profiles
 *    - (06) scripts
 *    - (07) sites
 *    - (08) sites/all
 *    - (09) sites/default
 *    - (10) sites/default/default.settings.php
 *    - (11) themes
 *    - (12) .htaccess
 *    - (13) *.txt
 *    - (14) robots.txt
 *
 * - Document mã nguồn
 *   
 *   Để mã nguồn dễ hiểu, một việc tất yếu, bạn phải chú thích, viết tài liệu
 *   cản thận, chi tiết cho các class, interface, method, function, ... của mình.
 *   Nếu phần documetn của bạn đúng theo cú pháp được 
 *   @link http://drupal.org/project/api API module @endlink hỗ trợ, bạn không 
 *   cần phải tốn thêm thời gian để soạn thảo lại tài liệu. 
 *   @link http://drupal.org/project/api API module @endlink hỗ trợ trự động phát
 *   sinh trang tham khảo (giống như
 *   @link http://api.drupal.org api.drupal.org @endlink) từ chính mã nguồn bạn 
 *   đã viết.
 *   @link http://drupal.org/node/1354 Tham khảo các cú pháp được Doxygen hỗ trợ (Doxygen formatting conventions) @endlink.
 *
 */
/**
 * @} End of "defgroup drupal_coding_standards"
 */
