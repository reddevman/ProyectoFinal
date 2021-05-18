<div class="header-full-wrapper">
    <div class="header-content container12">
        <!-- HEADER LOGO -->
        <div class="logo-wrapper">
            <a href="index.php">
                <img class="logo-header" src="/ProyectoFinal/static/images/logo.png" alt="E-Future logo" title="Aprende para el futuro" />
            </a>
        </div>

        <!-- HEADER BLOQUE DERECHO -->
        <div class="right-menu-header">
            <div class="icon-links">
                <div class="search-header">
                    <form action="search-result.php" id="data-form" class="search-form-header" method="GET" autocomplete="off">
                        <div class="autocomplete-wrapper">
                            <input class="header-courses-input" autocomplete="off" type="text" name="search" id="inputSearch" tabindex="16" value="Buscar cursos..." placeholder="" />
                            <button class="btn-search-header" type="button">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="cart-header">
                    <a href="../public_html/carrito.php"><i class="far fa-shopping-cart"></i></a>
                    <span class="tooltip-text">Carrito</span>
                </div>

                <?php
                require_once '../public_html/lib/seguridad.php';
                $seguridad = new Seguridad();
                if ($_SESSION['id'] == null) :
                ?>

                    <div class="login-header">
                        <a href="../public_html/login.php">
                            <i class="fad fa-sign-in-alt"></i>
                        </a>
                        <span class="tooltip-text">Login</span>
                    </div>

                <?php
                endif;
                if ($_SESSION['id'] != null) :
                ?>

                    <div class="profile-header">
                        <a href="../public_html/miperfil.php">
                            <i class="far fa-user-alt"></i>
                        </a>
                        <span class="tooltip-text">Perfil</span>
                    </div>

                    <div class="exit_session-header">
                        <a href="../public_html/cerrar_sesion.php">
                            <i class="far fa-door-open"></i>
                        </a>
                        <span class="tooltip-text">Cerrar Sesión</span>
                    </div>
                <?php
                endif;
                ?>
            </div>
            <div class="blog-link">
                <a href="#">BLOG</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        /*$('#inputSearch').focusin(function (e) {
            e.preventDefault();
            $(this).val('');
        });*/

        /*$('.header-courses-input').focusout(function (e) {
            e.preventDefault();
            $(this).val('Buscar cursos...');
        });*/

        $(".btn-search-header").on("click", function() {
            $(".search-header").toggleClass("inclicked");
            $(".btn-search-header").toggleClass("close-btn");
        });

        $('#inputSearch').keydown(function(event) {
            // enter has keyCode = 13, change it if you want to use another button
            if (event.keyCode == 13) {
                this.form.submit();
                return false;
            }
        });

    });
</script>
<script>
    function autocomplete(inp, arr) {
        var currentFocus;
        inp.addEventListener('input', function(e) {
            var a,
                b,
                i,
                val = this.value;
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            a = document.createElement('DIV');
            a.setAttribute('id', this.id + 'autocomplete-list');
            a.setAttribute('class', 'autocomplete-items');
            this.parentNode.appendChild(a);
            for (i = 0; i < arr.length; i++) {
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    b = document.createElement('DIV');
                    b.innerHTML = '<strong>' + arr[i].substr(0, val.length) + '</strong>';
                    b.innerHTML += arr[i].substr(val.length);
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    b.addEventListener('click', function(e) {
                        inp.value = this.getElementsByTagName('input')[0].value;
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        inp.addEventListener('keydown', function(e) {
            var x = document.getElementById(this.id + 'autocomplete-list');
            if (x) x = x.getElementsByTagName('div');
            if (e.keyCode == 40) {

                currentFocus++;

                addActive(x);
            } else if (e.keyCode == 38) {

                currentFocus--;

                addActive(x);
            } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = x.length - 1;
            x[currentFocus].classList.add('autocomplete-active');
        }

        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove('autocomplete-active');
            }
        }

        function closeAllLists(elmnt) {
            var x = document.getElementsByClassName('autocomplete-items');
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        document.addEventListener('click', function(e) {
            closeAllLists(e.target);
        });
    }

    let courses = ['Javascript', 'Python', 'Java', 'CSS'];
    autocomplete(document.getElementById('inputSearch'), courses);
</script>