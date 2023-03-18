<?php
  $name = "Alex";
  $profession = "Developer";
  $location = "Москва, Россия";
  $email = "mail@example.com";
  $phone = "+7 987 654 32 10";
  $age = 30;
  $currentYear = date("Y");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name;?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p>
            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $profession; ?>
          </p>
          <p>
            <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $location; ?>
          </p>
          <p>
            <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $email; ?>
          </p>
          <p>
            <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $phone; ?>
          </p>
          <p>
            <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php echo $currentYear - 1985; ?> лет (<?php echo ($currentYear - 1985)*365; ?> в днях)
          </p>
          <hr>

          <?php 
            $skills = [
              [
                "name" => "Adobe Photoshop",
                "percent" => 40,
              ],
              [
                "name" => "Photography",
                "percent" => 88,
              ],
              [
                "name" => "Illustrator",
                "percent" => 67,
              ],
              [
                "name" => "Media",
                "percent" => 73,
              ],
            ];
          ?>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <?php foreach($skills as $skill): ?>
            <p><?php echo $skill["name"]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" 
                   style="width:<?php echo $skill["percent"]; ?>%">
                   <?php echo $skill["percent"]; ?>%
              </div>
            </div>
          <?php endforeach; ?>

          <!-- <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>

          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>

          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>

          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div> -->

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->

<?php
        // формируем массив c опытом работы
        $job = [
            'job_name' => ['Front End Developer', 'Web Developer', 'Graphic Designer'],
            'job_data' => ['2022-настоящее время', '2000-2006', '1999-2000'],
            'job_desc' => ['Разработка пользовательского интерфейса', 'Разработка сайтов', 'Создание визуальных композиций']
        ]
 ?>
<div class="w3-twothird">
<div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i
            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][0]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][0]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][1]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][1]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][1]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][2]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][2]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][2]; ?>
        </p><br>
    </div>
</div>