<style>
    .loader {
  position: relative;
  width: 120px;
  height: 90px;
  margin: 0 auto;
}

.loader:before {
  content: "";
  position: absolute;
  bottom: 30px;
  left: 50px;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  background: #00C292;
  animation: loading-bounce 0.5s ease-in-out infinite alternate;
}

.loader:after {
  content: "";
  position: absolute;
  right: 0;
  top: 0;
  height: 7px;
  width: 45px;
  border-radius: 4px;
  box-shadow: 0 5px 0 #E3DEBE, -35px 50px 0 #E3DEBE, -70px 95px 0 #E3DEBE;
  animation: loading-step 1s ease-in-out infinite;
}

@keyframes loading-bounce {
  0% {
    transform: scale(1, 0.7);
  }

  40% {
    transform: scale(0.8, 1.2);
  }

  60% {
    transform: scale(1, 1);
  }

  100% {
    bottom: 140px;
  }
}

@keyframes loading-step {
  0% {
    box-shadow: 0 10px 0 rgba(0, 0, 0, 0),
            0 10px 0 #E3DEBE,
            -35px 50px 0 #E3DEBE,
            -70px 90px 0 #E3DEBE;
  }

  100% {
    box-shadow: 0 10px 0 #E3DEBE,
            -35px 50px 0 #E3DEBE,
            -70px 90px 0 #E3DEBE,
            -70px 90px 0 rgba(0, 0, 0, 0);
  }
}

</style>
<!-- Start Footer Section -->
<footer class="footer-section" style="background-color: #D3D3D3">
    <div class="container relative" >

        <div class="col-12" >
            <div class="row">
                <div class="col-3">
                    <div class="mb-4 footer-logo-wrap"><a href="/" class="footer-logo">PointMaster</a></div>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f" style="color: #00c292"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram" style="color: #00c292"></span></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="links-wrap">
                        <ul class="list-unstyled" >
                            <li><a href="/acercade">Acerca de nosotros</a></li>
                            {{-- <li><a href="/servicios">Nuestros Servicios</a></li> --}}
                            <li><a href="/tienda">Nuestra Tienda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.175449322998!2d-89.6187474555725!3d20.938419000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5672270a784baf%3A0x764b40010695f0d9!2sUniversidad%20Tecnol%C3%B3gica%20Metropolitana!5e0!3m2!1ses!2smx!4v1688018322381!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-2">
                    <div class="sofa-img" style="margin-top: 5.5%">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">FLAG Desarrolladores &copy;<script>document.write(new Date().getFullYear());</script>. Todos los derechos reservados.<i class="fa fa-heart" aria-hidden="true"></i>
                    </p>
                </div>

            </div>
        </div>

    </div>
</footer>
<!-- End Footer Section -->