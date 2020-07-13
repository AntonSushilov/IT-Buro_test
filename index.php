<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>IT-Buro_test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="script.js" defer></script>
</head>
<body>
        <?php
            require_once ('ArrayWorker.php');
            $obj = new ArrayWorker();
        	$obj->dump();
        ?>
    <div class="container cloud">
        <header class="header">     
            <nav class="header-nav">   
                <a href="#">Junior</a>
                |
                <a href="#">Middle</a>
                |
                <a href="#">Senior</a>
            </nav>
        </header>
        <div class="content">
            
                <div class="content-head p-b-40">
                    Тестовое задание для Junior веб-разработчика
                </div>
                <div class="p-b-40">
                    Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.<br> Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a>
                </div>
                <div class="content-both p-b-40">
                    <div class="left content-text">
                        Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.
                    </div>
                    <div class="content-text">
                        У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)	
                    </div>
                </div>
                <div class="content-both">
                    <div class="logo">
                        <img  src="img/BX-logo.png" alt="logo">
                    </div>
                    <div class="content-text">
                        Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.	
                    </div>
                </div>
                
                
                <div class="content-footer">
                    <hr>
                    © 2009-2019 IT-Buro 
                </div>
               
            
        </div>
    </div>
</body>
</html>
