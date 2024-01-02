$(document).ready(function(){
    navsideBar();
});

function navsideBar(){
    var menusideBar = document.getElementById('navSideBar');
    menusideBar.innerHTML= `<section class="NavLateral full-width">
    <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
    <div class="NavLateral-content full-width">
        <header class="NavLateral-title full-width center-align">
            Pruebas T&T
            <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
        </header>
        <figure class="full-width NavLateral-logo">
            <img src="image/logo.jpg" alt="material-logo" class="responsive-img center-box">
            <figcaption class="center-align">
                <span class="">Administrador</span>
            </figcaption>
        </figure>
        <div class="NavLateral-Nav">
            <ul class="full-width">
                <li>
                    <a href="dashboard.html" class="waves-effect waves-light">
                        <i class="ion-home"></i> Incio</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="#" class="NavLateral-DropDown  waves-effect waves-light">
                        <i class="ion-checkmark-round"></i> Calificaciones</a>
                    <ul class="full-width">
                        <li>
                            <a href="calificaciones-individuales.html" class="waves-effect waves-light">Individuales </a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="calificaciones-generales.html" class="waves-effect waves-light">Generales</a>
                        </li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="#" class="NavLateral-DropDown  waves-effect waves-light">
                        <i class="ion-help"></i> Preguntas</a>
                    <ul class="full-width">
                        <li>
                            <a href="button.html" class="waves-effect waves-light">Agregar preguntas</a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="form.html" class="waves-effect waves-light" </a>
                        </li>
                    </ul>
                </li>
                <li class="NavLateralDivider"></li>
                <li>

                    <li>
                        <a href="template.html" class="waves-effect waves-light"></a>
                    </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</section>`
}