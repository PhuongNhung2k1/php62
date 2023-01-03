Gửi dữ liệu
    - client : sd javascript đẻ bắt dữ liệu của thẻ html  
    - server : dùng php để lấy dữ liệu từ thẻ html 
    - để gửi dl ến erver cần có các thẻ fpr, control ( đặt trong thẻ form )
    <form method="post/get" action="trang-can-den">
    - textbox : <input type="text" name ="ten">
    - select 
        <select name="ten">
            <option>value</option>
        </select>
    </form>
    - Một số đối tượng php ( php pb hoa - thường)
        - $_SERVER["REQUEST_METHOD"]-> trả về trang thái của trang
            - khi go url thi trang thai cua trang la GET 
            - khi submit toi thi trang thai cua trang la POST
        - $_POST["ten the form"] -> lasy du lieu theo kieu POST
        - $_GET["ten the form"] -> lay dl theo kiei GET
        - isset(doituong)  se tra ve true ney doi tuong ton tai, ngc laij false
- ARRAY : mag trong php
    - array bao gom 2 tahnh phan
        - key: chi so cua array .key chay tu 0 den n 
            vd : key =  -> ptu dau tien 
        - value : gtri tuong ung vs phan tu thu key
    - print_r (bien array)-> hien thi kien truc cua array
    - duyet cac phan tu trong array
            foreach($bien as $key => $value){}
            foreach($bien as $value){}
    - Dinh nghia bien array:
        cach 1 :
            $bien = array();
            $bien[] = gtri ;// khi do key tu dong tang tu 0 den n
        cach 2:dinh nghia bien va gan gia tri
            $bien = array(giatri1,giatri2...);
        cach 3: co the dinh nghia key  -> dat ten key
            $bien = array("key1"=> giatri1,"key2" => giatri2)
    - HUY mot phan tu tronga array: unset($bien[key]);
- Load noi dung cua mot website khasc 
    - include tenfile.php;//bao nhieu 'include' thi load bay nhieu lan noi dung file
    - include_once file.php; // neu file co noi dung giong nhau chi load 1 lan
    - required file.php;// neu co loi thi dung lai
    - required_once  file.php;