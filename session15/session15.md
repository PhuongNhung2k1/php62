Mysql : la mot he qtcsld :su dung de luu tru duw lieu
Mysql bao gom :
    - Database : csdl . moi ung dung se tao 1 database,co nghia la mySql tap hop nhieu database
        - table(bang)
            - Field (cot): tieu de du lieu/Cca cot co cac KDL
                integer,....varchar:chuoi(rong 1-4000).Gtri co dau nhay doi bao quanh VD:"hello world"
                - text giong kieu varchar(do rong lon hon)
                - date: kieu ngay thanhg namw, dinh dangj na-thang-ngay : 2022-8-28
                - Trong cot dl thi co khoa chinh(primary key), khoa ngoai(foreign key), unique
                    - primary key : tp duy nhat VD:hang 1 co giatri la 'a' thi tat ca cac hang khac k co gtri a nuaw -> co nghia la tp ton tai duy nhat k cos dl giong nhau
                    - trong 1 bang chi chua 1 khoa chinh duy nhat
                - Foreign key : la 1 cot dl binh thuong cua bang A co cunng kieu du lieu voi cot khoa chinh cua bang B ,co td khop noi dl cua 2 bang A,B dua tren gtri chung cua 2 cot nay
                - Unique: la 1 cot dl binh thuong , gtri cua no k dc giong nhau giua cac ham.
                - AI(auto uncrement):truong dl tu dong tang 1 don vi, co nghia la ko can nhap gtri o cot nay ma no tu dong tang. thuong cot khoa chinh se tich cho cot nay la AI
            - Row(hang): cac hang du lieu
- de quan tri csdl MySQL , su dung phan mem phpmyadmin
    - truy cap locallhost : http://localhost -> click vao tab phpmyadmin tren menu ngang
    - truy van csdl: 
        - select : liet ke du lieu
            - select * from tenbang -> hien thi tat ca cac cot
            - select cot1,cot2.. ten bang -> hthi huu han cot chi dinh
            - select cot1 as "ten1" cot2 as "ten2" from tenbang -> hien thi va dat ten cot

            - truy van sql : select sau do bam : ctrl + enter
        - where : dieu kien de loc du lieu
            select * from tenbang where tencot sosánh giatri
                lonhon :> ,<,=(chu y : trong ph ==, sql '='), >=,<=              khac nhau <>( trong php !=, sql '<>)
            gia tri 
                gia tri phai tuong ung voi kdl cua cot
                VD : tencot la kieu so thi gia tri la kieu so và cac kdl khác text( có dấu nháy bao quanh '?');
            gia tri co the la menh de con, la cau lẹnh sqp để trả ve kq tuong ung vs cot so sanh
            - chú ý : neu so ssanh la >,>=,<=, <> thi mde con phai tra ve 1 hang
                - Neu md con trả về nhiêu hang thi phai dung tu khoa in, not in o so sanh
                VD: SELECT hovaten,(SELECT tenphongban FROM phongban where phongban.maphongban = nhanvien.maphongban) as "tenphongban" FROM nhanvien;
        - Tu khoa like : tim kiem trong chuoi 
            where tencot like giatri
                - giatri 
                    "%key%": co chua tu khoa key,
                    "key%": bat dau =  tu khoa key,
                    "%key": ket thuc = tu khoa key,
                VD: SELECT hovaten,(SELECT tenphongban FROM phongban where phongban.maphongban = nhanvien.maphongban) as "tenphongban" FROM nhanvien;
        - order by : sap xep ban ghi
            - order by tencot asc -> theo thu tu tang dan
            - order by tencot desc -> theo thu tu giam dan
            VD :sELECT hovaten,luong FROM nhanvien ORDER BY luong DESC;
        - limit tubanghi,laybaonhieubanghi(tu bao nhieu den bao nhieu vd: tu 2 ban ghi lay 3 ban ghi den 4)
            vd:SELECT * from phongban LIMIT 2,3;(tu ban ghi thu2 lay 3 ban ghi)
            -> muon lay bao nhieu ban ghi tu tap ket qua tra ve tubanghi
            - banghi dau tien la ban ghi 0, tiep theo la 1
                vd:SELECT * from phongban LIMIT 1,2;
        - Join cac bang voi nhau : de hien thi nhieu cot khi ghep cac bang vs nhau
            - inner join : join nhieu bang vs nhau,hien thi kq tra ve dua tren gia tri chung cua cac cot se join
                cu phap : select * from A inner join B on A.tencot = B.tencot where ....
            - left join: join nhieu bang vs nhau dua cao bang ben trai. hien thi tat ca các hang cua ben trai sau do khop noi vs bang ben phai, neu khop noi dc thi dl se hien thi len , k thi la null
                VD :select * from A left join B on A.tencot = B.tencot 
            - right join: ngc vs left join 
            cu phap :VD :select * from A right join B on A.tencot = B.tencot 
    - insert : them ban ghi
        - cách 1 : insert into tenabng set tencot1 = giatri1,tencot2 = gtri2
            (chu y : gtri phai ung vs ten cot)
        - cach 2: insert into tenbng(cot1,cot2,...) values (gtri1,gtri2,...)
    - update: sua ban ghi
        cu phap : update tenbang set tencot1 = gtri1, tencot2 = gtri2 ... where 
        chu y : new ko co dk where thi gia tri tat ca cac hang can updtaw ve cung 1 gia tri
        VD :UPDATE phongban set tenphongban = 'Phòng kiểm định' WHERE maphongban = 6;
    - delete : xoa ban ghi 
        - chu y ; nu ko co dk where thi tat ca các hang se bi xoa