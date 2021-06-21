# ci-adminkit

**1. Extrak Framework CI**

**2. Buat database seusai dengan kebutuhan**

**3. application/config/autoload.php**
  <br>Awal :
  <br>`$autoload['helper'] = array('');`
  <br>Edit :
  <br>`$autoload['helper'] = array('url','form');`

  <br>Awal :
  <br>`  $autoload['libraries'] = array('');`
  <br>Edit :
  <br>`  $autoload['libraries'] = array('database','session');`

  **4. application/config/database.php**
  <br>`'hostname' => 'localhost',`
  <br>`'username' => 'root',`
  <br>`'password' => '',`
  <br>`'database' => 'db_buku',`

  **5. application/config/config.php**
  <br>`$config['base_url'] = '';`
  <br>Edit
  <br>Alamat disesuaikan dengan nama project
  <br>`$config['base_url'] = 'http://localhost/ci-adminkit/';`
  <br>
  <br>Tambahkan File .htaccess seperti berikut

  **6. Tambah folder asset**
  <br>Folder ini berisi file adminkit

  **7. application/config/routes.php ubah baris**
  <br>`$route['default_controller'] = 'welcome';`

  **8. Tambahkan header dan footer**
  <br>`application/view/template/header.php` -> File untuk header
  <br>`application/view/template/footer.php` -> File untuk footer

  **9. Tambahkan dashboard**
  <br>`application/view/dashboard.php` -> File untuk dashboard

  **10. Tambahkan CRUD User**
  <br>`application/view/v_user.php` -> File untuk tampil user
  <br>`application/view/v_user_edit.php` -> File untuk edit user
  <br>`application/view/v_user_tambah.php` -> File untuk tambah user
  <br>`application/controllers/C_user.php` -> File controller User
  <br>`application/Models/M_user.php` -> File Model User

  **11. Controller/C_page**
  <br>`application/controllers/C_page.php` -> baris ke-11 tambah session login
