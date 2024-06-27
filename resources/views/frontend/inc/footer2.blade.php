<style>
    .container-me{
    padding-left:15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
    min-height: 97px;
  }
  /* media  */
  @media (min-width: 768px) {
    .container {
      width: 750px;
    }
  }
  /* Medium */
  @media (min-width: 992px) {
    .container {
      width: 970px;
    }
  }
  /* Large */
  @media (min-width: 1200px) {
    .container {
      width: 1170px;
    }
  }
footer {
    background-color: #2a2a2a;
    color: #fff;
    font-size: 16px;
    line-height: 19px;
    font-weight: 500;
    padding: 10px 0;
}


footer .content {
    display: flex;
    flex-flow: row-reverse wrap;
    justify-content: space-evenly;
}

footer .content .img {
    max-width: 100%;

}
footer .content .img img {
    height: 100px;
    /* object-fit: cover; */
}
footer .content ul.links {
    list-style: none;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
@media (max-width: 768px) {
    footer .content {
        flex-flow: column wrap;
        gap: 10px;
        justify-content:center;
        align-items: center;
    }
    footer .content ul.links {
        flex-direction: column;
        gap: 10px;
    }
}
footer .content ul.links li {
    margin-left: 15px;
}
footer .content ul.links li a {
    text-decoration: none;
    color: #fff;
}
footer .content ul.social-media {
    list-style: none;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    /* margin-right: 60px; */
}
footer .content ul.social-media li {
    margin-left: 10px;
    border: 2px solid #4C6373;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    transition: 0.6s all;
}
footer .content ul.social-media li a{
    color: #fff;
}
footer .content ul.social-media li a i {
    font-size: 18px;
    line-height: 30px;
}
footer .content ul.social-media li:hover  {
    background-color: #e62e04;
}
footer .content .copyright {
    display: flex;
    align-items: center;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer>
        <div class="container-me">
            <div class="content">
                    <div class="img">
                        <img src="https://bblasheg.com/public/uploads/all/DFORoFv6tYHDPGlJcquf41kpRn48BtakkUv18yCe.png" alt="">
                    </div>
                    <ul class="links">
                        <li><a href="/contact-us">تواصل معنا.</a></li>
                        <li><a href="/service">خدماتنا</a></li>
                        <li><a href="/instraction">تعليمات الاستخدام</a></li>
                        <li><a href="/return">سياسة الاستبدال والاسترجاع</a></li>
                    </ul>
                    <ul class="social-media">
                        <li>
                            <a href="/facebook">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/telegram">
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/whatsapp">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="copyright">
                        Copyright &copy; 2024
                    </div>
                </div>
            
        </div>
</footer>