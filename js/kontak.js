
let navbar = document.querySelector(".navbar");

window.onscroll = function(){
	scrollFunction();
}


function scrollFunction(){
	if(document.body.scrollTop>20 || document.documentElement.scrollTop >20){
		navbar.classList.add("navbar-fixed");
	}
	else{
		navbar.classList.remove("navbar-fixed");
	}
}

const isinavbar = document.querySelector("#isinavbar");

isinavbar.addEventListener("click",function(){
	navbar.classList.toggle("navbar-click");
});


function autocomplete(inp, arr) {
 
  var currentFocus;
  
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
     
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
     
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
     
      this.parentNode.appendChild(a);
      
      for (i = 0; i < arr.length; i++) {
        
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          
          b = document.createElement("DIV");
         
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          
          b.addEventListener("click", function(e) {
            
              inp.value = this.getElementsByTagName("input")[0].value;
             
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
 
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
       
        currentFocus++;
        
        addActive(x);
      } else if (e.keyCode == 38) { 
       
        currentFocus--;
        
        addActive(x);
      } else if (e.keyCode == 13) {
       
        e.preventDefault();
        if (currentFocus > -1) {
         
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
  
    if (!x) return false;
    
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
   
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
   
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }

  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


var countries = ["Universitas Syiah Kuala, Banda Aceh ","Universitas Malikussaleh, Lhokseumawe ","Politeknik Negeri Lhokseumawe, Lhokseumawe ","Politeknik Negeri Aceh, Banda Aceh ","Universitas Samudra, Langsa ","Universitas Teuku Umar, Meulaboh ","Politeknik Aceh, Banda Aceh ","UIN Ar-Raniry, Banda Aceh ","STAIN Malikussaleh, Lhokseumawe ","STAIN Zawiyah Cot Kala, Langsa ","Akademi Komunitas Negeri (AKN) Aceh Barat Daya ","STAIN Gajah Putih Takengon ","IAIN Langsa, Langsa ","STAIN Malikussaleh, Lhokseumawe ","STAIN Gajah Putih Takengon, Takengon ","STAIN Teungku Dirundeng, Melabuh ","Politeknik Kesehatan Banda Aceh ","Universitas Serambi Mekkah ","Universitas Sumatera Utara, Medan ","Universitas Negeri Medan, Medan ","Politeknik Negeri Medan, Medan ","Politeknik Negeri Media Kreatif, Medan ","Institut Agama Islam Negeri Sumatera utara, Medan ","Poltekes Depkes Medan, Medan ","STAIN Padang Sidempuan, Padang Sidempuan ","UIN Sumatera Utara, Medan ","IAIN Padang Sidempuan, Tapanuli Selatan ","Akademi Teknik Keselamatan Penerbangan (ATKP) Medan ","Sekolah Tinggi Agama Kristen Protestan Negeri Tarutung ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Medan ","Politeknik Negeri Medan ","kademi Tek. Kes. Penerbangan (ATKP), Medan ","Sekolah Tinggi Penyuluhan Pertanian Medan ","Universitas Andalas, Padang ","Universitas Negeri Padang, Padang ","Politeknik Negeri Padang, Padang ","Politeknik Pertanian, Payakumbuh ","STSI (Sekolah Tinggi Seni Indonesia Padang Panjang), Padang Panjang ","IAIN Imam Bonjol, Padang ","STAIN Batusangkar ","STAIN Bukittinggi ","ISI Padang Panjang ","IAIN Imam Bonjol, Padang ","STAIN Sjech M. Djamil Djambek , Bukittinggi ","Politeknik Negeri Sriwijaya ","Universitas Riau, Pekanbaru ","UIN Sultan Syarif Kasim (SUSKA), Pekanbaru ","Politeknik Negeri Bengkalis ","Universitas Maritim Raja Ali Haji ","Politeknik Negeri Batam ","UIN Sultan Syarif Kasim, Riau ","STAIN Bengkalis, Riau (Riau) ","Universitas Jambi, Jambi ","STAIN Kerinci ","IAIN Sultan Thaha Saifuddin ","Politeknik Kesehatan Jambi ","Universitas Bengkulu, Bengkulu ","IAIN Bengkulu ","STAIN CURUP ","Poltekkes Kemenkes Bengkulu ","STAIN Curup, Rejang Lebong ","Universitas Sriwijaya, Palembang ","Politeknik Negeri Sriwijaya, Palembang ","Poltekkes depkes Palembang, Palembang ","Akademi Komunitas Negeri Prabumulih, Prabumulih ","IAIN Raden Fatah ","Universitas Lampung, Bandar Lampung ","Politeknik Negeri Lampung, Bandar Lampung ","Poltekkes Kemenkes Tanjungkarang, Bandar Lampung ","STIM (Sekolah Tinggi Olahraga Metro), Kota Metro ","Institut Agama Islam Negeri Raden Intan, Bandar Lampung ","STAIN Jurai Siwo Metro ","IAIN Raden Intan, Bandar Lampung ","Universitas Bangka Belitung, Bangka Belitung ","Politeknik Manufaktur, Bangka Belitung ","Poltekkes Kemenkes Pangkal Pinang, Bangka Belitung ","STAIN Syekh Abdurrahman Siddik, Bangka Belitung ","Universitas Sultan Ageng Tirtayasa, Serang ","Perguruan Tinggi Buddhi, Karawaci ","IAIN Sultan Maulana Hasanuddin ","Universitas Pendidikan Indonesia, Kampus Daerah Serang ","Universitas Terbuka Pondok Cabe ","Sekolah Tinggi Agama Buddha Negeri Sriwijaya Tangerang ","Akademi Meteorologi dan Geofisika (AMG) Tangerang ","Institut Agama Islam Banten (IAIB) ","Universitas Indonesia ","Universitas Pertahanan Indonesia (UNHAN) ","Universitas Negeri Jakarta ","Universitas Terbuka ","Politeknik Negeri Jakarta ","Politeknik Negeri Media Kreatif, Jakarta ","UIN Syarif Hidayatullah Jakartaâ€Ž ","Sekolah Tinggi Ilmu Pelayaran Jakarta ","Sekolah Tinggi Manajemen Industri Indonesia ","Akademi Pimpinan Perusahaan (APP), Jakarta ","Institut Ilmu Pemerintahan, IIP, Jakarta ","Sekolah Tinggi Akuntansi Negara, STAN ","Sekolah Tinggi Hukum Militer, STHM ","Sekolah Tinggi Ilmu Administrasi, LAN Jakarta ","Sekolah Tinggi Ilmu Kepolisian (PTIK), Jakarta ","Sekolah Tinggi Ilmu Pelayaran (STIP), Jakarta ","Sekolah Tinggi Ilmu Statistik (STIS), Jakarta ","Sekolah Tinggi Manajemen Industri(STMI), Jakarta ","Sekolah Tinggi Penerbangan Indonesia (PI), Jakarta ","Sekolah Tinggi Perikanan (STP), Jakarta ","Politeknik Kesehatan Jakarta I ","Politeknik Kesehatan Jakarta II ","Politeknik Negeri Jakarta ","Politeknik Manufaktur Negeri Bandung, Bandung ","Universitas Pendidikan Indonesia, Bandung ","Universitas Padjadjaran, Bandung ","Universitas Jenderal Achmad Yani, Bandung ","Institut Pertanian Bogor, Bogor ","Institut Teknologi Bandung, Bandung ","Politeknik Negeri Bandung, Bandung ","Politeknik Indramayu, Indramayu ","Universitas Siliwangi (UNSIL), Tasikmalaya ","niversitas Singaperbangsa (UNSIKA), Kampus Daerah Karawang ","Universitas Swadaya Gunung Jati (Unswagati) di Kota Cirebon ","Universitas Pendidikan Indonesia, Kampus Daerah Cibiru ","Universitas Pendidikan Indonesia, Kampus Daerah Tasikmalaya ","Universitas Pendidikan Indonesia, Kampus Daerah Sumedang ","Universitas Pendidikan Indonesia, Kampus Daerah Purwakarta ","Akademi Ilmu Pemasyarakatan (AKIP), Depok ","Akademi Imigrasi (AIM) Depok ","Akademi Kimia Analis (AKA) Bogor ","Sekolah Tinggi Ilmu Administrasi, Bandung ","Sekolah Tinggi Sandi Negara (STSN), Bogor ","Sekolah Tinggi Seni Indonesia (STSI), Bandung ","Sekolah Tinggi Transportasi Darat (STTD), Bekasi ","Sekolah Tinggi Kesejahteraan Sosial (STKS), Bandung ","Sekolah Tinggi Pemerintahan Dalam Negeri (STPDN), Sumedang ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Bogor ","STAIN Cirebon ","Politeknik Kesehatan Bandung ","Politeknik Manufaktur Bandung ","Politeknik Negeri Bali, Badung ","Universitas Diponegoro, Semarang ","Universitas Negeri Semarang, Semarang ","Universitas Jenderal Soedirman, Purwokerto ","Universitas Negeri Surakarta Sebelas Maret, Surakarta ","Politeknik Negeri Semarang, Semarang ","Politeknik Maritim Negeri Indonesia, Semarang ","Institut Seni Indonesia Surakarta, Surakarta (ISI Solo, dahulu STSI) ","Universitas Tidar Magelang, Magelang ","UIN Walisongo, Semarang ","IAIN Surakarta, Surakarta ","STAIN Kudus, Kudus ","STAIN Pekalongan, Pekalongan ","IAIN Salatiga, Salatiga ","IAIN Purwokerto, Purwokerto ","Akademi Kepolisian (AKPOL),Semarang ","Akademi Militer (AKMIL) TNI AD, Magelang ","Akademi Minyak dan Gas Bumi (AKAMIGAS), Blora ","Akademi Sanitasi dan Kesehatan Lingkungan (ASKK), Purwokerto ","Sekolah Tinggi Seni Indonesia (STSI), Surakarta ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Magelang ","Politeknik Ilmu Pelayaran Semarang ","Politeknik Kesehatan Semarang ","Politeknik Kesehatan Surakarta ","Universitas Gadjah Mada ","Universitas Negeri Yogyakarta ","Institut Seni Indonesia Yogyakarta ","Universita Terbuka UPBJJ Yogyakarta ","Akademi Teknologi Kulit Yogyakarta (ATK) ","Universitas Pembangunan Nasional Veteran (UPN), Yogyakarta ","UIN Sunan Kalijaga ","Akademi Angkatan Udara (AAU), Yogyakarta ","Sekolah Tinggi Pertanahan Nasional (STPN), Yogyakarta ","Sekolah Tinggi Teknologi Nuklir (STTN), Yogyakarta ","Politeknik Kesehatan Yogyakarta ","Universitas Airlangga, Surabaya ","Universitas Negeri Surabaya, Surabaya ","Universitas Brawijaya, Malang ","Universitas Negeri Malang, Malang ","Universitas Jember, Jember ","Universitas Trunojoyo, Bangkalan ","Politeknik Elektronika Negeri Surabaya, Surabaya ","Politeknik Perkapalan Negeri Surabaya, Surabaya ","Politeknik Negeri Madura, Sampang ","Politeknik Negeri Malang, Malang ","Politeknik Negeri Madiun, Madiun ","Politeknik Negeri Jember, Jember ","Institut Teknologi Sepuluh Nopember, Surabaya ","Akademi Komunitas Negeri, Bojonegoro ","Akademi Komunitas Negeri, Pacitan ","Universitas Pembangunan Nasional Veteran (UPN), Surabaya ","Politeknik Negeri Banyuwangi, Banyuwangi ","Akademi Komunitas Negeri Lamongan, Lamongan ","Akademi Komunitas Negeri Sumenep. Sumenep ","Akademi Komunitas Negeri Bojonegoro, Bojonegoro ","Universitas Islam Negeri Maulana Malik Ibrahim, Malang ","STAIN Kediri ","STAIN Ponorogo ","UIN Sunan Ampel ","IAIN Tulungagung ","UIN Maulana Malik Ibrahim, Malang ","STAIN Pamekasan, Pamekasan ","Akademi Angkatan Laut (AAL), Surabaya ","Teknik Keselamatan Penerbangan (ATKP) Surabaya ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Malang ","IAIN Jember, Jember ","Politeknik Elektronika Negeri Surabaya ","Politeknik Kesehatan Malang ","Politeknik Kesehatan Surabaya ","Politeknik Pertanian Negeri Jember ","Akademi TKP â€“ Surabaya ","Universitas Mataram, Mataram ","IAIN Mataram, Lombok ","Sekolah Tinggi Agama Hindu Negeri (STAHN) Gde Puja, Mataram ","Universitas Nusa Cendana, Kupang ","Politeknik Negeri Kupang, Kupang ","Politeknik Pertanian Negeri Kupang, Kupang ","Universitas Udayana, Denpasar ","Universitas Pendidikan Ganesha, Singaraja ","Politeknik Negeri Bali, Kuta-Badung ","Institut Seni Indonesia Denpasar, Denpasar ","Politeknik Negeri Tanah Lot ","Institut Hindu Dharma Negeri (IHDN) Denpasar ","Akademi Kebidanan Pemprov Bali singaraja ","Sekolah Tinggi Pariwisata Bali ","Sekolah Tinggi Agama Kristen Negeri (STAKN) Denpasar ","Politeknik Kesehatan Denpasar ","Universitas Tanjungpura, Pontianak ","Politeknik Negeri Pontianak, Pontianak ","Politeknik Kesehatan Kementerian Kesehatan, Pontianak ","Politeknik Terpikat Sambas ","Politeknik Tonggak Equator ","Politeknik Ketapang ","Politeknik Tunas Bangsa ","IAIN Pontianak sebelumnya STAIN Pontianak ","Universitas Palangka Raya, Palangka Raya ","IAIN Palangkaraya, Palangkaraya ","Sekolah Tinggi Agama Hindu Negeri Tampung Peyang, Palangka Raya ","Sekolah Tinggi Agama Kristen Negeri (STAKN) Palangkaraya ","Universitas Lambung Mangkurat, Banjarmasin ","Politeknik Negeri Banjarmasin, Banjarmasin ","IAIN ANTASARI, Banjarmasin ","Poltekkes Banjarmasin ","Ooliteknik Pertanian Negeri Samarinda ","Universitas Mulawarman, Samarinda ","Politeknik Negeri Samarinda, Samarinda ","Politeknik Pertanian Negeri Samarinda, Samarinda ","Universitas Borneo Tarakan, Tarakan ","Politeknik Balikpapan, Balikpapan ","IAIN Samarinda, Samarinda ","Universitas Borneo Tarakan ","Universitas Sam Ratulangi, Manado ","Universitas Negeri Manado, Manado ","Politeknik Negeri Manado, Manado ","Politeknik Negeri Nusa Utara, Tahuna ","IAIN Manado, Manado (Sulawesi Utara) ","Politeknik Kesehatan Manado ","Politeknik Negeri Manado ","Universitas Negeri Gorontalo, Gorontalo ","IAIN Sultan Amai, Gorontalo ","Universitas Tadulako, Palu ","Sekolah Tinggi Ilmu Ekonomi (YPP Mujahidin), Tolitoli ","IAIN Dato Karamau, Palu ","STAIN Datokarama, Palu ","Politeknik Kesehatan Kemenkes Makassar, Makassar ","Universitas Hasanuddin, Makassar ","Universitas Negeri Makassar ","Politeknik Pertanian Negeri Pangkajene Kepulauan, Pangkajene Kepulauan ","Politeknik Negeri Ujung pandang, Makassar ","Universitas Maiwa Enrekang ","Politeknik Negeri Media Kreatif, Makassar ","Universitas Islam Negeri Makassar ","UIN Alauddin, Makassar ","STAIN Watampone, Bone ","STAIN Parepare, Parepare ","IAIN Palopo, Palopo ","Akademi Teknik Keselamatan Penerbangan (ATKP) Makasar ","Sekolah Tinggi Ilmu Adm, Ujung Pandang ","Sekolah Tinggi Seni Indonesia, Padang Panjang ","Sekolah Tinggi Agama Kristen Negeri (STAKN) Toraja ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Gowa ","Akademi Teknik Keselamatan Penerbangan Makasar ","Universitas Haluoleo, Kendari ","Sekolah Tinggi Pertanian (STIP) Muna Kampus Baru, Muna ","STAIN Kendari ","Universitas 19 November Kolaka ","Universitas Muhammadiyah Kendari ","Universitas Lakidende ","Universitas Dayanu Iksanudin ","Universitas Muhammadiyah Buton ","Universitas Sulawesi Tenggara ","IAIN Kendari, Palu ","Universitas Negeri Sulawesi Barat ","Universitas Pattimura, Ambon ","Universitas Darussalam, Ambon ","Politeknik Negeri Ambon, Ambon ","Politeknik Perikanan Negeri Tual, Tual ","STAKPN Ambon ","IAIN Ambon ","Sekolah Tinggi Agama Kristen Protestan Negeri Ambon ","STAIN Ambon ","Universitas Khairun, Ternate ","IAIN Ternate, Ternate ","Universitas Cendrawasih, Jayapura ","Universitas Musamus Merauke, Merauke ","STAIN Al-Fatah, Jayapura ","Sekolah Tinggi. Agama Kristen Negeri (STAKN) Jayapura ","Universitas Negeri Papua, Manokwari ","STAIN Sorong, Sorong ","Sekolah Tinggi Penyuluhan Pertanian (STTP) Manokwari",];


autocomplete(document.getElementById("myInput"), countries);