$(document).ready(function () {
    MenuNav();
})

function MenuNav() {
    var menunav = document.getElementById('menuNav');
    menunav.innerHTML = `<!-- Nav Info -->
    <div class="ContentPage-Nav full-width">
        <ul class="full-width">
            <li class="btn-MobileMenu ShowHideMenu">
                <a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu">
                    <i class="ion-navicon-round"></i>
                </a>
            </li>
            <li>
                <figure>
                    <img src="image/user.png" alt="Imagen de usuario">
                </figure>
            </li>
            <li style="padding:0 5px;">Usuario</li>
            <li>
                <a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50"
                    data-tooltip="Salir">
                    <i class="ion-log-out"></i>
                </a>
            </li>
            <li>
                <a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50"
                    data-tooltip="buscar">
                    <i class="ion-ios-search"></i>
                </a>
            </li>
            <li>
                <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notificaiones">
                    <i class="ion-android-notifications-none"></i>
                    <span class="ContentPage-Nav-indicator bg-danger">2</span>
                </a>
            </li>
        </ul>
    </div>`
}