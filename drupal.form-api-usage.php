<?php
// $Id: drupal.form-api-usage.php 1 2010-12-28 04:38:52Z drupalvietnam $

/**
 * @defgroup drupal_form_api_usage Sử dụng Drupal Form API
 * @{
 * Sử dụng Drupal, bạn nên quên đi cách viết các thẻ HTML để tạo ra form, nhưng
 * hãy sử dụng Form API. Form API hỗ trợ người phát triển tạo ra form nhanh, gọn,
 * bảo mật, với khả năng mở rộng cực kỳ mạnh.
 *
 * Với cơ chế hook quen thuộc của Drupal, Form API trở nên một vũ khí lợi hại là
 * một phần không thể không nhắc tới khi nói đến Drupal. Thí dụ:
 *  - Module WYSIWYG alter vào các form, thay đổi textarea thành các rich-text-editor. 
 *  - Module Logintobogan alter vào form login, mở rộng khả năng login bằng email
 *    cho người dùng.
 *  - Captcach alter vào form để thể captcha field.
 *  - ...
 *
 * Để áp dụng được rất nhiều tính năng sẵn có, dựa trên cơ chế hook vào form,
 * thì các form của bạn tạo ra, không cách nào khác, phải sử dụng Form API. Tuy
 * nhiên, việc sử dụng Form API rất đơn giản.
 *
 * Về cơ bản, Form API chia luồng xử lý form của bạn ra làm 3 phần: hàm tạo cấu
 * trúc form, validate form và phần xử lý dữ liệu được đệ trình. Để dễ hiểu, ở 
 * đây chúng ta làm một thí dụ: Tạo một form chỉ chứa một text field, để người 
 * dùng nhập email address, và một nút submit (có thể xem như một subcription 
 * form).
 *
 * Như đã nói ở trên, bước một chúng ta tạo ra hàm để định nghĩa form. Chúng ta
 * có thể chọn một tên hàm bất kỳ, bắt đầu bằng tên của module mà chúng ta đang
 * làm việc (giả sử là www).
 *
 * @code
 *  function www_subscription_form(&$form_state) {
 *    // Text field để người dùng nhập vào địa chỉ email.
 *    $form['email'] = array(
 *      '#type' => 'textfield',
 *      '#title' => 'Địa chỉ email',
 *      '#required' => TRUE,
 *    );
 *    
 *    // Nút submit
 *    $form['submit'] = array(
 *      '#type' => 'submit',
 *      '#value' => 'Gửi đi',
 *    );
 *
 *    return $form;
 *  }
 * @endcode
 *
 * Chúng ta có thể nhận ra rằng, cấu trúc một form làm một mảng, với các phần tử
 * mảng chính là các field. Chúng ta có thể tham khảo thêm ở
 * @link http://api.drupal.org/api/drupal/developer--topics--forms_api_reference.html/6 Forms API Reference @endlink
 * để biết những phần tử form được Drupal hỗ trợ sẵn trong core.
 *
 * Tiếp đến phần thứ hai, chúng ta xây dựng thêm một hàm để validate nội dung 
 * người dùng truyền vào form. Mặc định tên hàm validate sẽ là tên của hàm đã 
 * định nghĩa ra form cộng với hậu tố _validate, bước một chúng ta đã chọn
 * www_subscription_form, vậy tên hàm validate của chúng ta sẽ là
 * www_subscription_form_validate:
 *
 * @code
 *  function www_subscription_form_validate(&$form, &$form_state) {
 *    // Ở đây, để đơn giản, chúng ta chỉ validate nội dung người dùng
 *    // nhập vào text field là một email hợp lệ
 *    if (!valid_email_address($form_state['values']['email'])) {
 *      // Báo cho Drupal biết là field email có lỗi
 *      // và hiển thị thông báo lỗi ra màn hình người dùng
 *      form_set_error('email', 'Bạn đã nhập email không hợp lệ.');
 *    }
 *  }
 * @endcode
 *
 * Chúng ta có thể yên tâm, nếu dữ liệu được gửi đến không pass được hàm validate
 * (hàm form_set_error() được gọi), thì phần xử lý form sẽ không được gọi.
 * $form và biến định nghĩa cấu trúc của form, $form_state là biến chứa tình
 * trạng hiện tại của form, bao gồm dữ liệu nhận được từ người dùng.
 *
 * Phần 3, là phần chúng ta xử lý nội dung, đã hợp lệ, mà người dùng gửi tới.
 * Chúng ta cũng phải cần định nghĩa thêm một hàm nữa, mặc định tên hàm sẽ là
 * tên của hàm định nghĩa ra form cộng với hâu tố _submit:
 *
 * @code
 *  function www_subscription_form_submit(&$form, &$form_state) {
 *    // Lưu email vào database
 *    // ...
 *    // Trình bày thông điệp - xử lý thành công - ra màn hình người dùng
 *    drupal_set_message(sprintf(
 *      "Cảm ơn... Chúng tôi đã lưu email <strong>%s</strong> vào CSDL.",
 *      $form_state['values']['email']
 *    ));
 *  }
 * @endcode
 *
 * @TODO: 1. Multistep form
 * @TODO: 2. Định nghĩa thêm form-field.
 * @TODO: 3. Tuỳ biến giao diện form.
 * @TODO: 4. Mở rộng, tuỳ biến các form hiện có.
 * @TODO: 5. Thí dụ tạo form cho phép upload hỉnh ảnh.
 */
/**
 * @} End of "defgroup drupal_form_api_usage"
 */
