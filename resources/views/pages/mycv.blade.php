@extends('layout')
@section('content')
<Style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --facebook-color: #3b5999;
    --instagram-color: #e1306c;
    --youtube-color: #de463b;
    --twitter-color: #46c1f6;
    --github-color: #333;
}

html {
    font-family: 'Fira Sans', sans-serif;
}

a {
    text-decoration: none;
}

.icon-social {
    color: black;
}

body {
    /* background: #58aec3; */
}

.features_items {
    background-color: #58aec3;
    border-radius:16px;
}

h2.title{
    color: black
}

/* Header */

.intro {
    display: flex;
    justify-content: space-between;
    background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.3));
    padding: 32px;
    margin-top: 45px;
    border-radius: 16px;
}


/* <!-- Giới thiệu --> */

.intro-user {
    display: flex;
}

.intro-user_title {
    margin-left: 20px;
}

.intro_user-icon-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 45px;
}

.img-user_img {
    height: 160px;
    width: 160px;
    box-shadow: 0px 4px 7px rgb(0 0 0 / 45%);
    border-radius: 5px;
}

.user-heading {
    margin-top: 15px;
    letter-spacing: 1px;
    font-weight: 700;
}

.user-title {
    opacity: 0.8;
    line-height: 20px;
}

.intro_user-icon-social {
    font-size: 34px;
    color: rgb(21, 97, 110);
}


/* icon social */

.icon {
    margin: 0 20px;
    cursor: pointer;
    position: relative;
}

.icon i {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon .tooltip {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    padding: 10px 18px;
    font-size: 10px;
    font-weight: 500;
    border-radius: 25px;
    opacity: 0;
    pointer-events: none;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
}

.icon .tooltip:before {
    position: absolute;
    content: '';
    height: 15px;
    width: 15px;
    left: 50%;
    bottom: -6px;
    transform: translateX(-50%) rotate(45deg);
}

.tooltip,
.icon i {
    transition: 0.3s;
}

.icon:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    top: -40px;
}

.icon:hover i {
    color: white;
}

.facebook .tooltip:before,
.facebook:hover i,
.facebook .tooltip {
    background: var(--facebook-color);
}

.github .tooltip:before,
.github:hover i,
.github .tooltip {
    background: var(--github-color);
}

.instagram .tooltip:before,
.instagram:hover i,
.instagram .tooltip {
    background: var(--instagram-color);
}
.intro{
    border-radius:46px;
}


/* .intro_user-icon-social:hover {
        opacity: 0.8;
        color: rgb(29, 151, 221);
    } */


/* .intro-user::after {
    content: '';
    background-color: #c2c4c5;
    position: absolute;
    top: 7%;
    right: 50%;
    bottom: 0;
    height: 21%;
    width: 1px;
} */


/* <!-- Thông tin --> */

.intro-contact {
    display: flex;
    align-items: center;
    padding-right: 120px;
}

.intro-contact-list {
    margin: 0 20px;
}

.intro-contact-item {
    margin: 20px 0;
    list-style-type: none;
}

.intro-contact_heading {
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 700;
    line-height: 30px;
}

.intro-contact_title {
    font-size: 14px;
}


/* P2 */

.row.container {
    margin-top: 20px;
}


/* options */

.options {
    background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.3));
    padding: 30px;
    border-radius: 16px;
    position: fixed;
    width: 180px;
}

.option-item-icon {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.option-item {
    list-style-type: none;
    margin-bottom: 20px;
    cursor: pointer;
}

.option-item:hover {
    opacity: 0.5;
    background-image: linear-gradient(142.17deg, #4f93f177 6.66%, #dd8cec62 91.48%);
    border-radius: 16px;
}

.option-item.active {
    background-image: linear-gradient(142.17deg, #4f93f1 6.66%, #de8cec 91.48%);
    border-radius: 16px;
}


/* pane */

.panes {
    background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.3));
    padding: 30px;
    border-radius: 16px;
}

.pane-item {
    list-style-type: none;
}

.pane-heading {
    position: relative;
    margin-bottom: 45px;
}

.pane-heading::before {
    position: absolute;
    content: '';
    height: 5px;
    width: 12%;
    background-image: linear-gradient(142.17deg, #cc2dc4 6.66%, #cead1c 91.48%);
    top: 110%;
    border-radius: 25px;
}

.img-warp {
    overflow: hidden;
    border-radius: 16px;
}

.page-learn_img {
    width: -webkit-fill-available;
    height: 180px;
    border-radius: 16px;
    /* object-fit: cover; */
    object-position: center;
    transition: 0.25s;
}

.page-learn_img:hover {
    transform: scale(1.1);
}

.pane-description {
    margin: 15px 0;
    text-align: justify;
}

.page-learn_list {
    /* display: flex; */
    justify-content: space-between;
}

.page-learn_item {
    list-style-type: none;
}

.page-learn_link {
    text-decoration: none;
}

.page-learn_title {
    text-align: center;
    color: black;
}


/* tabUI */

.pane-item {
    display: none;
}

.pane-item.active {
    display: block;
}


/* pane-item 2 */

.pane-section_wrap {
    margin-bottom: 40px;
}

.pane-section_icon {
    color: #0f7081;
    font-size: 25px;
    margin-right: 12px;
}

.pane-section {
    margin-bottom: 24px;
    line-height: 30px;
    align-items: center;
}

.seft {
    margin-left: 24px;
    margin-bottom: 24px;
    position: relative;
}

.seft-icon {
    position: absolute;
    top: 4px;
    left: -24px;
    font-size: 12px;
    color: blue;
    box-shadow: 0 0 0 0.1875rem rgb(48 76 253 / 25%);
    border-radius: 10px;
}

.seft-heading {
    font-size: 16px;
}

.seft-title {
    font-size: 14px;
    opacity: 0.5;
    margin-bottom: 8px;
}

.seft-text {
    font-size: 16px;
    text-align: justify;
    line-height: 24px;
}
</Style>
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Thông tin thành viên</h2>
    <div class="main">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12">
                    <div class="intro">
                        <!-- Giới thiệu -->
                        <div class="intro-user">
                
                            <div class="intro-user_title">
                                <h2 class="user-heading">Nguyễn Ngọc Đăng</h2>
                                <p class="user-title">TH05</p>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Thông tin -->
                        <div class="intro-contact">
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">EMAIL</p>
                                    <p class="intro-contact_title">dagnguyen123@gmail.com</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Số điện thoại</p>
                                    <p class="intro-contact_title">0934042837</p>
                                </li>
                            </ul>
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">DATE</p>
                                    <p class="intro-contact_title">10/02/2000</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Địa chỉ</p>
                                    <p class="intro-contact_title">Việt Nam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col l-12">
                    <div class="intro">
                        <!-- Giới thiệu -->
                        <div class="intro-user">
                
                            <div class="intro-user_title">
                                <h2 class="user-heading">Cao chiến Hào</h2>
                                <p class="user-title">TH11</p>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Thông tin -->
                        <div class="intro-contact">
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">EMAIL</p>
                                    <p class="intro-contact_title">hao@gmail.com</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Số điện thoại</p>
                                    <p class="intro-contact_title">0935148371</p>
                                </li>
                            </ul>
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">DATE</p>
                                    <p class="intro-contact_title">29/05/2000</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Địa chỉ</p>
                                    <p class="intro-contact_title">Việt Nam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col l-12">
                    <div class="intro">
                        <!-- Giới thiệu -->
                        <div class="intro-user">
                
                            <div class="intro-user_title">
                                <h2 class="user-heading">Trần Thanh Tùng</h2>
                                <p class="user-title">TH14</p>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Thông tin -->
                        <div class="intro-contact">
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">EMAIL</p>
                                    <p class="intro-contact_title">thanhtung12@gmail.com</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Số điện thoại</p>
                                    <p class="intro-contact_title">0554127596</p>
                                </li>
                            </ul>
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">DATE</p>
                                    <p class="intro-contact_title">12/12/2000</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Địa chỉ</p>
                                    <p class="intro-contact_title">Việt Nam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col l-12">
                    <div class="intro">
                        <!-- Giới thiệu -->
                        <div class="intro-user">
                
                            <div class="intro-user_title">
                                <h2 class="user-heading">Lê Đình Huy</h2>
                                <p class="user-title">TH13</p>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Thông tin -->
                        <div class="intro-contact">
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">EMAIL</p>
                                    <p class="intro-contact_title">lehuyhuy135200@gmail.com</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Số điện thoại</p>
                                    <p class="intro-contact_title">0568423597</p>
                                </li>
                            </ul>
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">DATE</p>
                                    <p class="intro-contact_title">13/05/2000</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Địa chỉ</p>
                                    <p class="intro-contact_title">Việt Nam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col l-12">
                    <div class="intro">
                        <!-- Giới thiệu -->
                        <div class="intro-user">
                
                            <div class="intro-user_title">
                                <h2 class="user-heading">Nguyễn Thái Vỹ</h2>
                                <p class="user-title">TH04</p>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Thông tin -->
                        <div class="intro-contact">
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">EMAIL</p>
                                    <p class="intro-contact_title">thaivy@gmail.com</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Số điện thoại</p>
                                    <p class="intro-contact_title">0934564897</p>
                                </li>
                            </ul>
                            <ul class="intro-contact-list">
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">DATE</p>
                                    <p class="intro-contact_title">04/05/2000</p>
                                </li>
                                <li class="intro-contact-item">
                                    <p class="intro-contact_heading">Địa chỉ</p>
                                    <p class="intro-contact_title">Việt Nam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="row container">

                <div class="col l-10">
                    <div class="panes">
                        <ul class="panes-list">
                            <!-- Bản thân -->
                            <li class="pane-item active">
                                <h1 class="pane-heading">Giới thiệu</h1>
                                <p class="pane-description">Nhóm 12 sáng 3+5. Đại học Công Nghệ Sài Gòn .</p>
                                <p class="pane-description">Xin cảm thầy và các bạn đã ghé thăm !</p>
                            </li>
                            
                            
                            
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".option-item");
    const panes = $$(".pane-item");
    const tabActive = $(".option-item.active");


    tabs.forEach((tab, index) => {
        const pane = panes[index];
        tab.onclick = function() {
            $(".option-item.active").classList.remove("active");
            $(".pane-item.active").classList.remove("active");
            this.classList.add("active");
            pane.classList.add("active");
        };
    });
    </script>

</div>
<!--features_items-->



@endsection