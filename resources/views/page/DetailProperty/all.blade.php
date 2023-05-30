@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/DetailProperty/detailproperty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/Lib/swiper-bundle.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/Lib/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/Home/home.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Libraries Stylesheet -->
    <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/Panduan/panduan.css" rel="stylesheet">
    
  </head>
  <body>
    
    <div class = "card78-wrapper">
      <div class = "card78">
        <!-- card78 left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img  src = "/assets/detail/home.jpg" alt = "shoe image">
              <img  src = "/assets/detail/livingroom.jpg" alt = "shoe image">
              <img  src = "/assets/detail/bathroom.jpg" alt = "shoe image">
              <img  src = "/assets/detail/bedroom.jpg" alt = "shoe image">
              <img  src = "/assets/detail/denah.jpg" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img style="width: 100px; height:70px; border: 1px solid black;" src = "/assets/detail/home.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img style="width: 100px; height:70px; border: 1px solid black;" src = "/assets/detail/livingroom.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img style="width: 100px; height:70px; border: 1px solid black;" src = "/assets/detail/bathroom.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img style="width: 100px; height:70px; border: 1px solid black;" src = "/assets/detail/bedroom.jpg" alt = "shoe image">
              </a>
            </div><div class = "img-item">
              <a href = "#" data-id = "5">
                <img style="width: 100px; height:70px; border: 1px solid black;" src = "/assets/detail/denah.jpg" alt = "shoe image">
              </a>
            </div>
          </div>

          


        </div>
        <!-- card78 right -->
        <div class = "product-content">
          <h2 class = "product-title">Rumah Minimalis</h2>
          <a href = "#" class = "product-link">Rumah</a>

          <div class = "product-price">
            <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: normal;" class = "last-price">Harga Sebelumnya: <span>Rp. 749.000.000</span></p>
            <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: normal;" class = "new-price">Harga: <span>Rp. 711.550.000 (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>Tentang Produk: </h2>
            <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Rumah ini memiliki berbagai fitur dan karakteristik yang membedakannya, seperti tipe, gaya arsitektur, dan penyesuaian dengan kebutuhan individu seperti kamar tidur, kamar mandi, ruang tamu, dapur, dan ruang keluarga.</p>
            <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Rumah juga memiliki nilai investasi yang signifikan dengan potensi kenaikan harga dalam jangka panjang, memberikan keuntungan finansial bagi pemiliknya. Selain itu, rumah juga dapat digunakan sebagai aset untuk memperoleh pinjaman atau hipotek.</p>
            <ul>
              <li style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Design Rumah: <span>Modern</span></li>
              <li style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Luas Bangunan: <span>521 m²</span></li>
              <li style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Luas Tanah: <span>535 m²</span></li>
              <li style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Ruang Tamu : <span>1</span></li>
              <li style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Kamar Tidur : <span>2</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <button type = "button" class = "btn">
              Ajukan <i style="margin-left: 5px;" class = "fas fa-phone"></i>
            </button>
            <button type = "button" class = "btn">Favorite <i style="margin-left: 5px;" class = "fas fa-heart"></i></button>
          </div>

          
        </div>
      </div>
    </div>










    <div class="frame-156-pto" id="4:7196" style="">
        <div class="group-77-FDR" id="4:7198" style="">
        <div class="daftar-rumah-baru-ALP" id="4:7200">Properti Serupa</div>
        
        <div class="slide-container swiper" style="">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                        <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                        <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                        <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                        <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                        <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                        <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                        <span class="rp-25-jt-Kps-sub-0">Rp</span>
                        <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                        </div>
                        <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                        <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                        </div>
                        <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                        <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                        <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                        <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                        <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                        <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                        </div>
                        <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                        <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                        <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                        </div>
                        </div>
                        <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                        <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                        <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                        </div>
                        </div>
                        <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                            <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                            <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                            <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                            <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                            <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                            <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                            <span class="rp-25-jt-Kps-sub-0">Rp</span>
                            <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                            </div>
                            <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                            <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                            </div>
                            <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                            <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                            <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                            <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                            <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                            <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                            </div>
                            <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                            <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                            <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                            </div>
                            </div>
                            <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                            <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                            <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                            </div>
                            </div>
                            <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                </div>
                                <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                </div>
                                <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                </div>
                                <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                </div>
                                </div>
                                <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                </div>
                                </div>
                                <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                    <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                    <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                    <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                    <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                    <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                    <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                    <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                    <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                    </div>
                                    <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                    <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                    </div>
                                    <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                    <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                    <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                    <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                    <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                    <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                    </div>
                                    <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                    <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                    <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                    </div>
                                    </div>
                                    <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                    <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                    <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                    </div>
                                    </div>
                                    <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                        <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                        <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                        <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                        <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                        <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                        <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                        <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                        <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                        </div>
                                        <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                        <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                        </div>
                                        <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                        <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                        <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                        <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                        <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                        <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                        </div>
                                        <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                        <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                        <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                        </div>
                                        </div>
                                        <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                        <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                        <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                        </div>
                                        </div>
                                        <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                            <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                            <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                            <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                            <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                            <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                            <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                            <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                            <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                            </div>
                                            <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                            <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                            </div>
                                            <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                            <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                            <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                            <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                            <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                            <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                            </div>
                                            <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                            <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                            <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                            </div>
                                            </div>
                                            <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                            <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                            <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                            </div>
                                            </div>
                                            <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                                <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                                <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                                <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                                <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                                <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                                <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                                <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                                <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                                </div>
                                                <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                                <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                                </div>
                                                <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                                <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                                <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                                <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                                <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                                <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                                </div>
                                                <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                                <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                                <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                                </div>
                                                </div>
                                                <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                                <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                                <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                                </div>
                                                </div>
                                                <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                                    <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                                    <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                                    <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                                    <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                                    <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                                    <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                                    <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                                    <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                                    </div>
                                                    <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                                    <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                                    </div>
                                                    <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                                    <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                                    <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                                    <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                                    <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                                    <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                                    </div>
                                                    <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                                    <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                                    <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                                    </div>
                                                    </div>
                                                    <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                                    <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 100m²</div>
                                                    <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 100m²</div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                                    </div>
                                                    </div>
                                                    
                </div>
            </div>

            
        </div>
        </div>













        <div class="frame-156-pto" id="4:7196" style="">
            <div class="group-77-FDR" id="4:7198" style="">
            <div class="daftar-rumah-baru-ALP" id="4:7200">Properti Lainnya</div>
            
            <div class="slide-container swiper" style="">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                            <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                            <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                            <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                            <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                            <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                            <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                            <span class="rp-25-jt-Kps-sub-0">Rp</span>
                            <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                            </div>
                            <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                            <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                            </div>
                            <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                            <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                            <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                            <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                            <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                            <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                            </div>
                            <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                            <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                            <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                            </div>
                            </div>
                            <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                            <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                            <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                            </div>
                            </div>
                            <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                </div>
                                <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                </div>
                                <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                </div>
                                <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                </div>
                                </div>
                                <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                </div>
                                </div>
                                <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                    <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                    <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                    <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                    <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                    <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                    <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                    <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                    <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                    </div>
                                    <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                    <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                    </div>
                                    <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                    <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                    <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                    <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                    <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                    <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                    </div>
                                    <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                    <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                    <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                    </div>
                                    </div>
                                    <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                    <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                    <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                    </div>
                                    </div>
                                    <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                        <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                        <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                        <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                        <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                        <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                        <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                        <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                        <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                        </div>
                                        <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                        <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                        </div>
                                        <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                        <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                        <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                        <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                        <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                        <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                        </div>
                                        <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                        <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                        <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                        </div>
                                        </div>
                                        <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                        <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                        <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                        </div>
                                        </div>
                                        <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                            <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                            <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                            <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                            <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                            <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                            <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                            <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                            <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                            </div>
                                            <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                            <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                            </div>
                                            <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                            <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                            <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                            <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                            <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                            <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                            </div>
                                            <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                            <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                            <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                            </div>
                                            </div>
                                            <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                            <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                            <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                            </div>
                                            </div>
                                            <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                                <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                                <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                                <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                                <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                                <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                                <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                                <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                                <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                                </div>
                                                <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                                <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                                </div>
                                                <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                                <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                                <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                                <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                                <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                                <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                                </div>
                                                <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                                <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                                <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                                </div>
                                                </div>
                                                <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                                <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                                <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                                </div>
                                                </div>
                                                <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                                    <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                                    <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                                    <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                                    <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                                    <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                                    <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                                    <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                                    <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                                    </div>
                                                    <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                                    <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                                    </div>
                                                    <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                                    <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                                    <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                                    <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                                    <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                                    <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                                    </div>
                                                    <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                                    <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                                    <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                                    </div>
                                                    </div>
                                                    <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                                    <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 190m²</div>
                                                    <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 170m²</div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                                    </div>
                                                    </div>
                                                    <div class="card-5Ls swiper-slide" id="I4:7199;165:3744">
                                                        <div class="group-38-qL3" id="I4:7199;165:3744;527:54337">
                                                        <img class="rectangle-20-9rX" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54339"/>
                                                        <div class="group-63-rF9" id="I4:7199;165:3744;527:54340">
                                                        <div class="group-61-MBu" id="I4:7199;165:3744;527:54343">
                                                        <div class="frame-6-gzs" id="I4:7199;165:3744;527:54344">
                                                        <div class="rp-25-jt-Kps" id="I4:7199;165:3744;527:54345">
                                                        <span class="rp-25-jt-Kps-sub-0">Rp</span>
                                                        <span class="rp-25-jt-Kps-sub-1"> 1.5 m</span>
                                                        </div>
                                                        <div class="disewakan-2-ruko-daerah-bandung-maP" id="I4:7199;165:3744;527:54348">Dijual Rumah Klasik 2 Lantai</div>
                                                        <div class="bandung-jawa-barat-78T" id="I4:7199;165:3744;527:54349">Depok, Jawa Barat</div>
                                                        </div>
                                                        <div class="line-3-rLw" id="I4:7199;165:3744;527:54350"></div>
                                                        <div class="frame-58-aXq" id="I4:7199;165:3744;527:54351">
                                                        <div class="divflex-uq1" id="I4:7199;165:3744;527:54352">
                                                        <div class="divattribute-grid-TLj" id="I4:7199;165:3744;527:54353">
                                                        <img class="svg-kKq" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54354"/>
                                                        <div class="item-1-Rwm" id="I4:7199;165:3744;527:54359">2</div>
                                                        </div>
                                                        <div class="divattribute-grid-w9R" id="I4:7199;165:3744;527:54360">
                                                        <img class="svg-4zj" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54361"/>
                                                        <div class="item-2-Cr3" id="I4:7199;165:3744;527:54366">4</div>
                                                        </div>
                                                        </div>
                                                        <div class="frame-9-Y9D" id="I4:7199;165:3744;527:54367">
                                                        <div class="lt-90m-ei3" id="I4:7199;165:3744;527:54369">LT : 100m²</div>
                                                        <div class="lb-70m-n3Z" id="I4:7199;165:3744;527:54371">LB : 100m²</div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <img class="material-symbols-favorite-WVM" src="/api/try-prod-ap-southeast-1-first-cluster/project..." id="I4:7199;165:3744;527:54373"/>
                                                        </div>
                                                        </div>
                                                        
                    </div>
                </div>
    
                
            </div>
            </div>






        <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    {{-- <script src="js/home.js"></script> --}}
    <script>
      var swiper = new Swiper(".slide-content", {
  slidesPerView: 4,
  spaceBetween: 25,
  loop: false,
  centerSlide: 'false',
  fade: 'false',
  grabCursor: 'false',
  pagination: {
    el: ".swiper-pagination",
    clickable: false,
    dynamicBullets: false,
  },

  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
    }
  },
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const tabsBox = document.querySelector(".tabs-box"),
allTabs = tabsBox.querySelectorAll(".tab"),
arrowIcons = document.querySelectorAll(".icon i");

let isDragging = false;

const handleIcons = (scrollVal) => {
  let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
  arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
  arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
}

arrowIcons.forEach(icon => {
  icon.addEventListener("click", () => {
      // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
      let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
      handleIcons(scrollWidth);
  });
});

allTabs.forEach(tab => {
  tab.addEventListener("click", () => {
      tabsBox.querySelector(".active").classList.remove("active");
      tab.classList.add("active");
  });
});

const dragging14 = (e) => {
  if(!isDragging) return;
  tabsBox.classList.add("dragging");
  tabsBox.scrollLeft -= e.movementX;
  handleIcons(tabsBox.scrollLeft)
}

const dragStop14 = () => {
  isDragging = false;
  tabsBox.classList.remove("dragging");
}

tabsBox.addEventListener("mousedown", () => isDragging = true);
tabsBox.addEventListener("mousemove", dragging14);
document.addEventListener("mouseup", dragStop14);



// const wrapper = document.querySelector(".wrapperteks"),
// selectBtn = wrapper.querySelector(".select-btn-teks"),
// options = wrapper.querySelector(".optionsteks");

// let countries = ["Semua", "Rumah", "Apartemen", "Ruko", "VIlla"];

// function addCountry(selectedCountry) {
//     options.innerHTML = "";
//     countries.forEach(country => {
//         let isSelected = country == selectedCountry ? "selected" : "";
//         let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
//         options.insertAdjacentHTML("beforeend", li);
//     });
// }
// addCountry();

// function updateName(selectedLi) {
//     addCountry(selectedLi.innerText);
//     wrapper.classList.remove("active");
//     selectBtn.firstElementChild.innerText = selectedLi.innerText;
// }


// selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));


    </script>
    
    <script src="js/DetailProperty/detailproperty.js"></script>
</html>


@endsection

