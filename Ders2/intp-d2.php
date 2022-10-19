<?php


/* class: Herhangi bir programlama belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan 
nesnelere verilen isimdir.

new: Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.

Kurallar:
1.Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
2.Sınıf isimleri içerisinde alfanumerik (A-z 0-9) değerler ve _ kullanılabilir.
3.Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır.
4.Sınıf isimleri rakam ile başlayamaz !
5.Sınıf isimleri içerisinde hiçbir zaman boşluk ve Türkçe karakter bulunmaz ayrıca özel 
karakterler (?*!) kullanılamaz. 
6.Sınıf isimleri tanımlanırken php tarafında kullanılmakta olan isimler/tanımlar kullanılamaz.
7.Sınıf isimleri hiçbir zaman bir den fazla kez kullanılamaz.
(Namespace(İsim uzayı) kullanılması durumundan birden fazla kez farklı namespace içerisinde kullanılabilir.)
8.Sınıf isimler küçük/büyük harf duyarlı değildir.
9.Sınıf kapasama/etki alanı kurallarına tabidir.


Yapısı:

class isim{

    Kod Blokları...
}

__construct: Sınıfın yapıcı metodudur. Sınıf çağırıldığında otomatik çalışır.

__destruct: Sınıfın yıkıcı metodudur. Sınıfın işlemi bittiğinde otomatik çalışır.

*/

/* Yapıcı Metoda parametre gönderilebilir.
Yapıcı metoda gelen parametrelere varsayılan değer atanabilir.
Değerin gelmediği durumda varsayılan değer aktif olur.
Değer gelirse gelen değer aktif olur. */

class sinif{

    function __construct($hostname,$username,$pass,$database_name)
    {
        $metin = "$hostname,$username,$pass,$database_name";
        return $metin;
    }

    /*Public her yerden erişilebilir. */

    public $isim = "mehmet";
    public $soyisim = "Hayanlı ";

    public function Yaz ()
    {
        $metin = "merhaba yazan fonksiyon çalıştı";
        return $metin;
    }
 

    function __destruct()
    {
        echo "Yıkıcı Metot Çalıştı.";
    }

}



$yeniNesne= new Sinif("mehmethayanli.com","mehmet","123","mch_data");

echo gettype($yeniNesne);

echo "<br>";
print_r($yeniNesne);

echo "<br>";
echo $yeniNesne->Yaz(); /* nesne içerisindeki metoda erişim */
echo "<br>";




?>