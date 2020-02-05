# webtrain

# TONG HOP MOT VAI VAN DE THUONG GAP VOI PHP VA MYSQL

# 1. Nhung diem moi cua php7 
    - Su dung Zend engine hoan toan moi de thuc thi code
    
    - toc do thuc thi cua php7 nhanh gap hai lan so voi phien ban cu
    
    - php7 cho phep khai bao kieu cua bien chat che hon tinh nang type hint cua php5
    
    - php7 cung cho phep lap trinh vien khai bao kieu tra ve cua ham
    
    - php7 co them mot so toan tu moi la:
      + Spaceship operator: <=> tra ve gia tri 0 neu so sanh hai bien bang nhau, 1 neu bien dung truoc lon hon va -1 neu bien dung sau lon hon.
      + Null Coalesce operator: ??
        Vi du: X = Y ?? Z se tra ve Y neu Y khac null va Z neu Y bang Null. 
    
    - php7 co the mot so ham moi nhu random_int hay random_bytes
    
    - Group use Declaration moi thuan tien cho viec import nhieu class tu mot namespace

    - quan ly loi de dang hon khi cho phep thay the mot so fatal error bang cac exception, dong thoi bo sung class throwable de xu ly loi
      Loi type error va parse error duoc bo sung vao cho class throwable.


# 2. Mot so chu y khi su dung session trong php
    - session duoc su dung de luu tru du lieu truy cap o phia may chu server
    
    - khoi tao session voi ham session_start()
    - du lieu cua session duoc luu o bien toan cuc $_SESSION, muon thao tac voi session phai thao tac voi bien toan cuc $_SESSION.
    - de xoa session co the su dung ham unset($ten_session) muon xoa. De xoa tat ca cac session su dung ham session_destroy

# 3. Mot so luu y khi su dung cookie tron php
    - Cookie duoc su dung de luu tru du lieu truy cap o phia client.
    - De khoi tao cookie su dung ham setcookie($name, $value, $expire, $path, $domain) trong do: 
        + $name luu ten cua cookie
        + $value la gia tri cua cookie
        + $expire la thoi gian cookie ton tai
        + $path la duong dan luu tru cookie
        + $domain la ten cua domain
    
    - gia tri cua mot cookie duoc luu trong bien toan cuc $_COOKIE, tha tac voi cookie tren bien toan cuc nay
    - de xoa cookie don gian set thoi gian ton tai nho hon thoi diem hien tai.

# 4. File upload trong php
    - de upload file voi php, dau tien can chac chan php da duoc cau hinh de upload file. 
    De kiem tra dieu nay co the truy cap php.ini va hieu chinh tinh nang file_upload = On.

    - De upload file can mot html form cho viec upload voi ot so quy tac:
        + method cua form la post
        + form html can co hau to enctype="multipart/form-data" de chi ro noi dung duoc su dung khi upload file.
        + O <input> cua for duoc dinh dang type = "file" de dieu khien viec chon file.
    
    - o script upload file php can chi ro dia chi luu file va ten file luu.

# 5. Mot so luu y voi MySql
    
    * Luu y khi dat ten:
        - Khi dat ten bang, ten cot, khong nen su dung chu hoa va khong dung ki tu dac biet, neu ten bang co nhieu tu su dung gach duoi de 
        ngan cach
    
        - tru cac cot khoa ngoai, cac cot trong bang nen co tien to giong nhau duoc tong hop tu cac chu cai dau tien cua ten bang
    
        - cot khoa ngoai cua mot bang nen duoc dat dau tien, truoc cot khoa chinh va co ten giong voi cot cua bang ma no la khoa chinh.

    * luu y khi danh index de toi uu query
        - Uu diem: day nhanh toc do xu ly, loc, tim kiem theo dieu kien WHERE. Khong chi voi cau lenh SELECT ma con trong qua trinh 
        tim kiem record voi cac xu ly UPDATE, DELETE.

        - Nhuoc diem: Cost cua INSERT, UPDATE, DELETE se tang len.

        - Nhung cot nen danh index: 
            + search record voi so luong it, luong data trong table nhieu
            + Khi data co nheu gia tri Null, in dex hieu qua khi tim kiem ngoai gia tri null
        
        - Nhung luc can su dung index:
            + khi so sanh gia tri cua field voi so chi dinh
            + khi join toan bo gia tri cua field
            + khi gioi han pham vi cua field bang toan tu so sanh
            + khi co dinh gia tri dau tien cua chuoi theo LIKE
            + khi ap dung menh de between or in
        
        - Nhung luc khong nen su dung index:
            + khi bat dau LIKE bang wildcard
            + Khi xac dinh rang doc toan bo database se nhanh hon
            + khi field ORDER BY va WHERE khac nhau nhung chi danh index tren mot field


    
    