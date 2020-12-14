Luồng làm việc:
B1: Tạo branch mới trên máy để làm một chức năng, một bước trong project
B2: Code trên branch đó
B3: Commit lại tất cả thay đổi trên branch đang làm
B4: Sau khi commit, thì lên GitHub gửi pull Request và báo cho Phúc.

Lưu ý: Đối với người chưa code gì thì pull code Phúc đã làm ở trên về rồi làm.
- 1 là clone trên GitHub
- 2 là clone trên GitBash or terminal tại thư mục muốn làm project ( trước khi pull phải có gitinit )
Run my Project:
- Open your XAMPP, run Apache and SQL
- Import file fashi_shop2_0.sql (BackupDatabase folder) in mySQL
- Into DB.php, change your port in line 5 "$host = 'localhost:3308';" to $host = 'localhost:<your_port>'; => Default $host = 'localhost';
- Type this script into URL Adress "localhost/fashishop"
