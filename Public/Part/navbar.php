<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    

</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <!-- <i class='bx bx-capsule'></i>
                <span>TEST</span> -->
                <img src="Image/minilogo.png" alt="Logo" class="logo-img">
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        

    <ul>
        <li>
            <a href="#">
                <i class='bx bx-user'></i>
                <span class="nav-item">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-bell'></i>
                <span class="nav-item">Subscription</span>
            </a>
            <span class="tooltip">Subscription</span>
        </li>
        <li>
            <a href="clubs.php">
            <i class='bx bx-group'></i>
                <span class="nav-item">Clubs</span>
            </a>
            <span class="tooltip">Clubs</span>
        </li>
        <li>
            <a href="events.php">
            <i class='bx bx-calendar-alt' ></i>
                <span class="nav-item">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-log-out' ></i>
                <span class="nav-item">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
</div>

</body>
<script>
    let btn = document.querySelector('#btn')
    let sidebar = document.querySelector('.sidebar')

    btn.onclick = function(){
        sidebar.classList.toggle('active');
    };
</script>
</html>