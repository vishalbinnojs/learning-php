<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
   <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <div class="container">
   <?php
    include_once('./header.php');
   
    ?>

    <h1 class="heading">Home Page</h1>
    <p>Fitness, at its core, is about having the physical and mental capacity to perform daily activities without undue fatigue and to enjoy leisure time. It's a state of being that reflects a person's ability to handle various physical and mental challenges, influencing both present and future health outcomes. Regular exercise, a cornerstone of fitness, enhances physical stamina, strengthens muscles, and improves cardiovascular health. Furthermore, fitness promotes mental well-being by reducing stress, anxiety, and even the risk of depression. </p>
    <h5>Benefits of Fitness:</h5>
    <div class="benefits">
      <p>Regular exercise and a healthy lifestyle significantly improve physical and mental health. It can lower the risk of chronic diseases, increase energy levels, and enhance mood and cognitive function. <br><br>
      Cardiovascular Health:
      Regular physical activity strengthens your heart and lungs, improves blood circulation, and lowers the risk of heart disease, stroke, and high blood pressure.
      <br><br>
      Muscle and Bone Strength:
Exercise helps build and maintain strong muscles and bones, reducing the risk of osteoporosis and fractures. 
<br><br>
Weight Management:
Regular physical activity can help you maintain a healthy weight by burning calories and increasing metabolism. <br><br>
Mental Health:
Exercise can reduce stress, improve mood, and even help alleviate symptoms of depression and anxiety
      </p>

      <img src="./imgs/fitness.jpg" alt="fitness" >
      
    </div>

    <?php
    include_once('./footer.php')
    
    ?>
   </div>
 </body>
 </html>