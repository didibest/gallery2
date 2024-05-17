<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!--################# google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--##################### font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--######################## lord icon-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>   
</head>
<body>
    <article></article>
    <div id="modal" class="modal">
        <span id="closeBtn" class="close-btn">&times;</span>
        <img id="modalImage" class="modal-image" src="" alt="Large Image">
    </div>
    <div class="continer">
        <div class="box box1">
            <div class="ch1 logo">
               <img src="./image/D (1).png" alt="">
            </div>
            <span class="menu-icon">
                 <div></div>
                 <div></div>
                 <div></div>
            </span>
          <!-- <a href="#" class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </a> --> 
            <ul class="ch1">
               <li><a class="active">Home</a></li>
               <li><a href="/project/gallery/inndex.php">Galery</a></li>
               <li><a href="/project/contact/inndex.php">Contact</a></li>
               <li><a>About</a></li>
            </ul>
        </div>
        <div class="box box2">
              <h2>I'm a photographer</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
        <div class="box box3">
            <div class="ele">
                <!--################################################-->
                <?php
                $imageCounter = 1;
// اتصال بقاعدة البيانات
               $servername = "localhost"; 
               $username = "root";
               $password = ""; 
               $dbname = "gallery"; 
// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام SQL لاسترداد الصور
$sql = "SELECT image FROM foto LIMIT 7  ";
$result = $conn->query($sql);

// عرض الصور

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // استخراج البيانات الثنائية للصورة
        $imageData = $row['image'];
        $class = "im" . $imageCounter;
        // عرض الصورة باستخدام علامة الصورة base64
        echo '<div class="im '.$class.'" style="opacity: 1;">';
        echo '<h2>Watching</h2>';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($imageData).'" alt="">';
        echo '<lord-icon src="https://cdn.lordicon.com/tyounuzx.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" class="lord"></lord-icon>';
        echo '</div>';
        $imageCounter++;
    }
} else {
    echo "";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>

<!--#####################################################-->
       
            </div>
        </div>
    
        <div class="box box4">
            <h1>Gallery Didi</h1>
            <p>Lorem ipsum dolor sit amet similique autem? Rem, voluptatibus dolorum. Nisi molestias aliquid sapiente est.</p>
            <div>
                <a href="https://www.facebook.com/profile.php?id=100022881158933&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/didi_tedjani?igsh=NWh1NG5lZDdlMHFi"><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-square-twitter"></i></a>
            </div>
            <span></span>
            <p>© 2024 Didi Tedjani</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>