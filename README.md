# Film Puanlama ve Öneri Modülü
Bu modülde kullanıcılar filmleri değerlendirip yorumlayabilir.

# Kurulum 
Vagrant portal kurulumunu https://github.com/kouosl/vagrant-portal adresinden yararlanarak yapabilirsiniz.

Modülü kurmak için portal klasöründeki composer.json dosyasına aşağıdaki kodları ekliyoruz.
```
 "minimum-stability": "dev",  // "dev " olarak güncelliyoruz
 
***********
 "repositories": [
        ..........
        {
            "type": "vcs",
            "url": "https://github.com/2019-BLM317/portal-170202031.git"
        },
    ],
***********
 "require": {
        ..........
        "kouosl/portal-oneri": "dev-master"
    },
 
 ```
 Daha sonra Front-End ve Back-End için portal klasöründe sırasıyla portal\frontend\config ve portal\backend\config
 
 klasörlerindeki "main.php" dosyasına aşağıdaki kodu ekliyoruz.
 ```
 'modules' => [
        ..........
        'oneri' => [
            'class' => 'kouosl\oneri\Module',
        ],

    ],
 ```
 Bu adımlardan sonra; 
 portal\vendor\kouosl\ klasörüne portal-oneri adında klasör açalım. 
 
 Daha sonra bu repoda bulunan dosyaları oluşturduğumuz portal-oneri klasörüne indirelim.
 
 ( Bir diğer yol; Bu repoyu portal\vendor\kouosl\ adresinde klonlayıp ismi portal-oneri olarak değiştiriledebilir.)
 
 portal-oneri modülü oluşturulduktan sonra sonra vagrant up komutu vagrant-portal dizininde çalıştıralım.
 
 Migration'ı işlemek için vagrant ssh ile sanal makineye bağlanıp "cd /var/www/portal" komutunu çalıştıralım.Daha sonra 
 ```
 php yii migrate/up --migrationPath=@vendor/kouosl/portal-oneri/migrations  
 ```
 komutunu çalıştıralım.

 ### Modül bağlantı adresleri                   

 http://portal.kouosl/oneri                 

 http://portal.kouosl/admin/oneri           
 
 ### RestApi adresleri
 controllers/backend/DefaultController.php dosyasında tanımlanmışlardır.
 
 Model listeleme: http://portal.kouosl/admin/oneri/default/list-modelon 
  
 Model ekleme:    http://portal.kouosl/admin/oneri/default/create-modelon
 (RestApi ile ekleme yapıldığında userid=0 alınır.)
 
 ## Modülün Yapısı
<img src="https://user-images.githubusercontent.com/56413820/72109296-ad831e00-3346-11ea-8eaf-93eecfe4a436.jpg" width="600" height="300">

Sitede Films title bloğunun altındaki kutuya aradığınız film ismini yazarsanız o film ile ilgili değerlendirmeler listelenecektir.
İstediğiniz değerlendirmeyi sağ taraftaki göz butonuna basarak görüntüleyebilirsiniz.(Ancak login olan hesap ile oluşturulmamış bir değerlendirmeyi görüntülüyorsanız "UPDATE" ve "DELETE" butonları çalışmaz.)

Filmin kullanıcı tarafından aldığı puan "Progress widget" ı kullanılarak gösterilmiştir. 

<img src="https://user-images.githubusercontent.com/56413820/72110967-8a5a6d80-334a-11ea-8f06-6c9815bbb0ab.png" width="600" height="300">

'Add new entry' butonuna basarak yeni bir film değerlendirmesi ekleyebilirsiniz.

(Login olmadan değerlendirme giremezsiniz, yeni değerlendirme kullanıcı adınızla eşleştiriliyor.)

<img src="https://user-images.githubusercontent.com/56413820/72109877-e7085900-3347-11ea-97cb-0e5f652d8b86.png" width="600" height="300">

Üstte görülen alanları doldurduktan sonra 'Save' butonuna basarak kaydedebilirsiniz.

Kaydettikten sonra açılan sayfada kaydınızı görüntüleyebilirsiniz.(Kaydınızın başarılı bir şekilde kayıt edildiğini "Entry created successfully" FLASH Message ile anlayabilirsiniz.) 

<img src="https://user-images.githubusercontent.com/56413820/72110191-9fce9800-3348-11ea-9d36-776445b81523.png" width="600" height="300">

Yaptığınız bir kaydı "UPDATE" ve "DELETE" butonları ile düzenleyip silebilirsiniz. (UYARI: Gösterilen kayıt login olan hesap ile yapılmamış ise bu butonlar çalışmaz ve ana ekrana geri dönersiniz.)

<img src="https://user-images.githubusercontent.com/56413820/72111316-7e22e000-334b-11ea-908f-cfa986b8dbb4.png" width="600" height="300">

### Backend 
Backend tarafında ise değerlendirmeler silinip güncellenebilir.

<img src="https://user-images.githubusercontent.com/56413820/72111765-c55da080-334c-11ea-8bf2-b87515ddf5d8.png" width="400" height="200">
<img src="https://user-images.githubusercontent.com/56413820/72111908-208f9300-334d-11ea-8ea6-9a6e59723d13.png" width="400" height="200">
