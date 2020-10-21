<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">

            <div class="sidenav-menu-heading"></div>
            <a class="nav-link" href="charts.html">
                <div class="nav-link-icon"><i class="fas fa-home"></i></div>
                Inicio
            </a>
            <div class="sidenav-menu-heading">Opciones</div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows"
                aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                Marcas
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('brands.index')}}">
                        <div class="nav-link-icon"><i class="fas fa-list-ol"></i></div>
                        Lista
                    </a>
                    <a class="nav-link" href="{{route('brands/paper_bin')}}">
                        <div class="nav-link-icon"><i class="fas fa-trash"></i></div>
                        Papelera
                    </a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#categories"
                aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i class="fas fa-list-alt"></i></div>
                Categorias
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="categories" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('categories.index')}}">
                        <div class="nav-link-icon"><i class="fas fa-list-ol"></i></div>
                        Lista
                    </a>
                    <a class="nav-link" href="{{route('categories/paper_bin')}}">
                        <div class="nav-link-icon"><i class="fas fa-trash"></i></div>
                        Papelera
                    </a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#subcategories"
                aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i class="fas fa-list-alt"></i></div>
                SubCategorias
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="subcategories" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('subcategories.index')}}">
                        <div class="nav-link-icon"><i class="fas fa-list-ol"></i></div>
                        Lista
                    </a>
                    <a class="nav-link" href="{{route('subcategories/paper_bin')}}">
                        <div class="nav-link-icon"><i class="fas fa-trash"></i></div>
                        Papelera
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Usuario en sesion:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>