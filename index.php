<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cv-container">
        <div class="cv-header">
            <h1>Curiculum Vitae</h1>
        </div>
        <div class="cv-content">
            <?php include 'cv_data.php'; ?>
            <div class="cv-section">
                <p>Hi! I'm Rafly Syahnaufal, and I'm a Frontend Developer & UI/UX Designer who has a passion for building 
                    clean web designs with intuitive functionality. I enjoy the process of turning ideas into reality using 
                    creative solutions. I am always curious about learning new skills, tools, and concepts. In addition to 
                    working on various full-stack solo projects, I have worked with creative teams, involving stand-up and daily communications, 
                    source control, and project management.</p>

            <div class="cv-section">
            <h2>Personal Data</h2>
                <p><strong>Nama:</strong><?=$cv_data['nama']?></p>
                <p><strong>Umur:</strong><?=$cv_data['umur']?></p>
                <p><strong>Alamat:</strong><?=$cv_data['alamat']?></p>
                <p><strong>Tempat, Tanggal Lahir:</strong><?=$cv_data['Lahir']?></p>
                <p><strong>Handphone:</strong><?=$cv_data['No']?></p>
            </div>

            <div class="cv-section">
                <h2>Education</h2>
                <p><strong>SD:</strong><?=$cv_data['pendidikan']['SD']?></p>
                <p><strong>SMP:</strong><?=$cv_data['pendidikan']['SMP']?></p>
                <p><strong>SMK:</strong><?=$cv_data['pendidikan']['SMK']?></p>
            </div>
        
            <div class="cv-section">
                <h2>Experience Work</h2>
                    <ul>
                        <li><strong>Perusahaan A:</strong><?=$cv_data['pengalaman']['Perusahaan 1']?></li>
                        <li><strong>Perusahaan B:</strong><?=$cv_data['pengalaman']['Perusahaan B']?></li>
                    </ul>
            </div>

            <div class="cv-section">
                <h2>Skils</h2>
                    <ul>
                        <li><strong>Development:</strong><?=$cv_data['Development']?></li>
                        <li><strong>Graphic Design:</strong><?=$cv_data['Graphic']?></li>
                    </ul>
            </div>
        </div>
    </div>
</body>
</html>
