<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #EEE0C9;
            margin: 0;
            padding: 0;
            color: white;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        h1{
            text-align: center;
        }
        
        h2{
            text-align: center;
        }
        
        header{
            text-align: left;
            padding: 20px;
            justify-content: space-between;
            padding-right: 20px;
        }
        
        .menu{
            text-align: left;
            padding-left: 30px;
            gap: 30px;
        }
        
        ul{
            margin-left: 10px;
        }
        
        a{
            text-align: left;
            text-decoration: none;
            color: white;
            margin-left: 10px;
            padding-right: 8px;
        }
        
        .spanstyle1{
            color: #EEE0C9;
        }
        
        .content{
            display: flex;
            flex-direction: row;
            flex: 1;
        }
        
        .gallery{
            margin-left: 6px;
            margin-right: 20px;
        }
        
        .gallery a img{
            margin: 4px;
            width: 263px;
            height: 160px;
        }
          
        .gallery:hover{
            background-color: #B5B4A2;
        }
          
        .gallery img{
            width: 100%;
            height: auto;
        }
          
        .desc{
            padding: 5px;
            text-align: center;
        }
        
        .grid-container{
            display: grid;
            grid-template-areas:
              'header header'
              'menu menu'
              'main nav'
              'input input';
              grid-template-columns: 0.4fr 0.8fr;
              grid-template-rows: 0.1fr 0.3fr 0.8fr 0.2fr;
              padding: 5px;
              border: 3px rgb(232, 219, 199);
        }
        
        .grid-container > div{
            padding: 10px 0;
            background-color: #758467;
        }
        
        .item1{
            grid-area: header;
            text-align: center;
            border-radius: 10px 10px;
            margin-bottom: 10px;
        }
        
        .item2{
            grid-area: menu;
            text-decoration-color: white;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px 10px;
        }
        
        .item3{
            grid-area: main;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 10px 0px 0px 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            height: 400px;
        }
        
        .item4{
            grid-area: main nav;
            text-align: justify;
            margin-top: 10px;
            margin-bottom: 10px; 
            overflow: scroll;
            border-radius: 0px 10px 10px 0px;
            height: 400px;
        }
        
        .item5{
           grid-area: input;
           border-radius: 10px 10px;
           margin-bottom: 10px;
           margin-top: 10px;
        
        }
        
        .item5rating{
            float: inline-start;
            padding-left: 100px;
        }
        
        .item5pendapat{
            float: inline-end;
            padding-right: 100px;
            text-align: justify;
            margin-bottom: 80px;
            width: 500px;
            height: 45px;
        }
        
        #keterangan1{
            position: absolute;
            margin-top: 5px;
            left: 40px;
        }
        
        /* Mengatur border youtube */
        iframe{
            border: 10px solid #B5B4A2;
        }
    </style>
    <title>PopCorn Film</title>
</head>

<body>
    <div class="grid-container">
        <!-- membuat header untuk bagian judul dan menu -->
        <div class="item1"> 
            <h1>POPCORN  <span class="spanstyle1"> FILM</span></h1>
            <div class="menu">
                <a href="bagan"> Trending </a>
                <a href="bagan"> Tv/Streaming </a>
                <a href="/coming"> Coming Soon </a>
                <a href="/tiket"> Tiket</a>
                <a href="/films"> Daftar Film</a>
            </div>
        </div>

        <!-- membuat tampilan film yang sedang tayang sekarang -->
        <div class="item2">
            <h2>NOW PLAYING</h2>
            <div class="content">
                <div class="gallery">
                    <a target="_blank" href="https://cloud.jpnn.com/photo/jatim/news/normal/2023/09/28/film-petualangan-sherina-2-tayang-perdana-di-seluruh-bioskop-9ygr.jpg">
                        <img src="https://cloud.jpnn.com/photo/jatim/news/normal/2023/09/28/film-petualangan-sherina-2-tayang-perdana-di-seluruh-bioskop-9ygr.jpg" alt="Petualangan Sherina" width= "280" height= "160px">
                    </a>
                    <div class="desc">Petualangan Sherina</div>
                  </div>
                  
                <div class="gallery">
                    <a target="_blank" href="https://teropongmedia.id/wp-content/uploads/2023/05/Barbie-1.jpg">
                        <img src="https://teropongmedia.id/wp-content/uploads/2023/05/Barbie-1.jpg" alt="Barbie" width= "280" height= "160px">
                    </a>
                    <div class="desc">Barbie</div>
                </div>
                  
                <div class="gallery">
                    <a target="_blank" href="https://foto.kontan.co.id/WsyocQFRYMloTO274b_OD-uvj8U=/smart/filters:format(webp)/2023/09/04/2053041462p.jpg">
                        <img src="https://foto.kontan.co.id/WsyocQFRYMloTO274b_OD-uvj8U=/smart/filters:format(webp)/2023/09/04/2053041462p.jpg" alt="SawX" width= "280" height= "160px">
                    </a>
                    <div class="desc">SawX</div>
                </div> 
    
                <div class="gallery">
                    <a target="_blank" href="https://bisnisbanten.com/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-04-at-11.29.38-718x470.jpeg">
                        <img src="https://bisnisbanten.com/wp-content/uploads/2023/10/WhatsApp-Image-2023-10-04-at-11.29.38-718x470.jpeg" alt="SawX" width= "280" height= "160px">
                    </a>
                    <div class="desc">No More Bets</div>
                </div> 
            </div>
        </div>

        <!-- membuat tampilan judul, rating dan trailer film yang diambil dari youtube -->
        <div class="item3">
            <div id="keterangan1">
            <h1>Petualangan Sherina 2</h1>
            <p style="font-size: 24px;">&#9733;&#9733;&#9733;&#9733;</p>
            <iframe width="350" height="210" src="https://www.youtube.com/embed/nAx3GaOE5xI?si=iEGgB_JAI9wfK5ZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <br>
        </div>

        <!-- membuat tampilan review film-->
        <div class="item4">
            <p style="text-align: justify; margin: 3mm">Banyak yang menyebut Petualangan Sherina (2000) jadi gerbang kebangkitan film nasional. Itu betul, tapi Petualangan Sherina bukan sekadar fenomena 
                bisnis dalam industri film dalam negeri. Mari saksikan lagi, lihat lebih dekat, temukan bahwa Petualangan Sherina adalah sebuah keindahan kolektif. Kisah klasik sederhana, sajian musik yang 
                indah, dan pesan aktivisme yang nyata merupakan tiga bahan dasar yang membuat Petualangan Sherina tersaji dengan lezat. Tak banyak film yang setelah 20 tahun berlalu masih sering disebut-sebut, 
                Petualangan Sherina lah salah satunya. Sebuah film keluarga yang mengisahkan Sherina yang harus beradaptasi dengan lingkungan dan orang-orang baru kala ia sekeluarga harus pindah dari Jakarta 
                ke Bandung. Sebagai anak baru di sekolah, Sherina bertemu Sadam, seorang anak nakal dan manja. Perundungan Sadam terhadap Sherina menjadi pemantik api konflik dalam film tersebut. Sadam ternyata 
                merupakan anak dari rekan kerja ayah Sherina. Hal tersebut membuat Sherina tak bisa menghindar begitu saja, ia harus melewati hari-harinya dengan berjumpa dengan Sadam. seorang pebisnis jahat. 
                Drama pertemanan Sherina dan Sadam menjadi medium dalam premis luas tersebut. Film Petualangan Sherina menjadi salah satu mahakarya duet Mira Lesmana (produser) dan Riri Riza (sutradara). 
                Meski dua dekade berlalu, adegan, dialog, dan lagu latar film tersebut masih saja mudah diingat kembali. Namun beberapa hal dari film tersebut luput dibahas di ruang publik, salah satunya adalah 
                bagaimana pesan-pesan aktivisme modern terpampang nyata dalam film tersebut. Lagu-lagu soundtrack yang eksistensinya panjang tidak lepas dari sebuah karya film yang sukses. Melihat suksesnya 
                Petualangan Sherina di tangan Riri Riza, tidak berlebihan jika dirinya disebut sebagai salah satu sineas film anak terbaik di Indonesia.
            </p>
            <p style="text-align: justify; margin: 3mm"><b>Pemeran Utama Petualangan Sherina 2</b>
                <ul>
                    <li><a href="https://id.wikipedia.org/wiki/Sherina_Munaf">Sherina Munaf</a>sebagai Sherina</li>
                    <li><a href="https://id.wikipedia.org/wiki/Derby_Romero">Derby Romero</a>Derby Romero sebagai Sadam</li>
                </ul>
            </p>
        
            <div class="list">
                <p style="text-align:justify; margin: 3mm"><b>Pemeran Pendukung Petualangan Sherina 2</b>
                    <ul>
                        <li>Isyana Sarasvati sebagai Ratih</li>
                        <li>Ardit Erwandha sebagai Aryo</li>
                        <li>Kelly Tandiono sebagai Pingkan</li>
                        <li>Quinn Salman sebagai Sindai</li>
                        <li>Chandra Satria sebagai Syailendra</li>
                        <li>Randy Nidji sebagai Dedi</li>
                        <li>Mathias Muchus sebagai Darmawan</li>
                        <li>Ucy Nurul sebagai Ibu Darmawan</li>
                        <li>Ratna Riantiarno sebagai Ibu Ardiwilaga</li>
                        <li>Adi Timo sebagai pencuri</li>
                        <li>Novi Rahmat Hidayat sebagai Daim</li>
                        <li>Bima Zeno sebagai Abas</li>
                        <li>Wisnu Dwi sebagai Gito</li>
                        <li>Udin Bakti sebagai Jimmy</li>
                    </ul>
                </p>    
            </div>
        </div>

        <!-- membuat tampilan inputan rating dan pendapat dari user -->
        <div class="item5">
            <div class="item5rating">
                <form style="text-align:justify; margin: 3mm">Rating Film Petualangan Sherina 2 :
                    <label><br>
                        <input type="radio" name="rating" value="1">&#9733;
                        <input type="radio" name="rating" value="2">&#9733;&#9733;
                        <input type="radio" name="rating" value="3">&#9733;&#9733;&#9733;
                        <input type="radio" name="rating" value="4">&#9733;&#9733;&#9733;&#9733;
                        <input type="radio" name="rating" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;
                    </label><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="item5pendapat">
                <p><form action="/action_page.php">
                    <label for="fname">Apa pendapatmu tentang Film Petualangan Sherina 2 :</label><br><br>
                    <input type="text" id="fname" name="fname" style="width: 500px; height: 45px;"><br>
                    <input type="submit" value="Submit">
                </form></p>
            </div>
        </div>
    </div>
</body>
</html>

    
