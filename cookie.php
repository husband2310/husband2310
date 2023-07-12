<?php
    // $_COOKIE : Lưu trữ thông tin người dùng. Nhưng ở phía client
    // Người dùng truy cập blog ( Trình duyệt Chrome) >> N bước N bước (Đăng nhập, vào bài viết, tìm kiếm.) >> N cái trả lời

    setcookie("tenhang","Ban phim", time() - 84000); // Lưu trữ trong 24h và sẽ xoá 
?>