#Github Kullanımı

### ubuntu repo'ları güncelliyoruz
```sh
sudo apt-get update
```

### github ve curl'ü kuruyoruz
```sh
sudo apt-get install git-core curl
```

### git'e kullanıcı adı ve şifremizi tanıtıyoruz
```sh
git config --global user.name "Om3rCitak"
git config --global user.email "mail@omercitak.com"
```

### ssh-keygen oluşturuyoruz
```sh
ssh-keygen
```

### oluşturduğumuz keyi ekrana basıp, github'da "ssh-keygens" sayfasından ekliyoruz
```sh
cat ~/.ssh/id_rsa.pub
```

### proje klasörümüzde gidiyoruz
```sh
cd /opt/lampp/htdocs
```

### git için hazırla
```sh
git init
```

### tüm dosyaları seç
```sh
git add gun1/*
```

### commit yapıştır
```sh
git commit -m "first commit"
```

### repo linkini ekle
```sh
git remote add origin https://github.com/Om3rCitak/lyk2015php
```

### pull
```sh
git pull --rebase origin master
```

### push
```sh
git push origin master
```

### dosya silme
```sh
git rm dosya
git commit -m "remove dosya"
```

https://try.github.io/
* [try.github.io](https://try.github.io/)

