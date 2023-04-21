<!-- sidebar  -->
<div class="sidebar">
    <ul class="menu">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Identifikasi Penyakit</a></li>
        <li><a href="#">Kalkulasi pupuk</a></li>
        <li><a href="#">Prakiraan Cuaca</a></li>
        <li><a href="#"></a></li>
    </ul>
</div>

<style>
body {
    margin: 0;
    font-family: 'poppins' , Times, serif;
    font-size: 10px;
    color: #212529;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

main {
    display: flex;
    flex-wrap: nowrap;
    height: -webkit-fill-availeble;
    max-height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
}

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}

.sidebar {
    position: fixed;
    left: 0px;
    width: 250px;
    height: 100%;
    background: #74bdcb;
    transition: all 0.5s ease;
}

.sidebar .top {
    font-size: 22px;
    color: #fff;
    text-align: center;
    line-height: 70px;
    background-image: linear-gradient(to right, #fec8a7, #b2d2a4);
}

.sidebar ul a {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: #fff;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(6, 255, 251, 0.1);
    border-bottom: 1px solid rgba(125, 134, 146, 0.302);
    transition: all 0.5s ease;
}

ul li:hover a {
    padding-left: 100px;
    background: #efe7bc;
    color: rgb(0, 0, 0);
}

.sidebar ul a i {
    margin-right: 16px;
}


#check {
    display: none;
}

label #btn {
    position: absolute;
    cursor: pointer;
    background: #ffffff;
    border-radius: 3px;
}

label #open {
    position: absolute;
    cursor: pointer;
    background: #924227;
    border-radius: 1px;
    font-size: 30px;
}

label #open {
    left: 0;
    top: 10;
    font-size: 30px;
    color: rgb(255, 255, 255);
    padding: 6px 12px;
    transition: all 0.5s ease;
}

label #btn {
    z-index: 1111;
    left: 195px;
    top: 25px;
    font-size: 20px;
    color: #000000;
    padding: 4px 9px;
    transition: all 0.5s ease;
}

#check:checked~.sidebar {
    left:-250px;
}

#check:checked~label #open {
    left:30px;
    font-size: 20px;
}

#check:checked~label #btn {
    left:-195px;
}

section {
    background: #ffffff;
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
}

section h1 {
    text-align: center;
    padding-top: 200px;
    font-size: 60px;
    color: #004369;
}
</style>