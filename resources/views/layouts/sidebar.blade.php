<div class="sidebar-panel offscreen-left">
      <div class="brand">
 
        <!-- /toggle small sidebar menu -->
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
          <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
          <span></span>
        </a>
        <a href="#" class="small-menu-visible brand-logo">R</a>
        <!-- /logo -->
      </div>
      
      <!-- main navigation -->
      <nav role="navigation">
        <ul class="nav">
          <!-- dashboard -->
          <li>
            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              <i class="icon-compass"></i>
              <span>Tablero</span>
            </a>
          </li>
          <!-- /dashboard -->
          <!-- customizer -->
          <li>
            <a href="#" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Edificios</span>
            </a>
          </li>
          <!-- /customizer -->
                  <li>
            <a href="#" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Administraciones</span>
            </a>
          </li>
                  <li>
            <a href="#" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Empresas Externas</span>
            </a>
          </li>
          
           </li>
                  <li>
            <a href="#" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Corredores</span>
            </a>
          </li>

 
          <!-- usuarios -->
         <li>
            <a href="{{ route('user.index') }}" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Usuarios</span>
            </a>
          </li>
          <!-- /usuarios -->
          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="icon-book-open"></i>
              <span>Configuraci贸n</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="ui-buttons.html">
                  <span>MetaData</span>
                </a>
              </li>
              <li>
                <a href="ui-social-buttons.html">
                  <span>Campos adicionales</span>
                </a>
              </li>
              <li>
                <a href="ui-general.html">
                  <span>Documentos</span>
                </a>
              </li>
              <li>
                <a href="ui-tabs.html">
                  <span>Calendario</span>
                </a>
              </li>
             
               

            </ul>
          </li>
          <!-- /ui -->
          <!-- forms -->
          <li>
            <a href="javascript:;">
              <i class="icon-loop"></i>
              <span>Gestion Interna</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="forms-basic.html">
                  <span>Reserva de Espacios</span>
                </a>
              </li>
              <li>
                <a href="forms-custom.html">
                  <span>Asambleas</span>
                </a>
              </li>
              <li>
                <a href="forms-plugins.html">
                  <span>Encomiendas</span>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- /forms -->
          <!-- tables -->
          <li>
            <a href="javascript:;">
              <i class="icon-share-alt"></i>
              <span>Facturacion</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="tables-basic.html">
                  <span>Pagos</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /tables -->
          <!-- charts -->
          <li>
            <a href="javascript:;">
              <i class="icon-pie-chart"></i>
              <span>Reportes</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="#">
                  <span>Edificios</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Administradores</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Empresas Externas</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Corredores</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Usuarios</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Sistema</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /charts -->
          <!-- maps -->
          <li>
            <a href="javascript:;">
              <i class="icon-pointer"></i>
              <span>Comunicaciones</span>
            </a>
            
          </li>
          <!-- /maps -->
         
          <!-- menu levels -->
          <li>
            <a href="javascript:;">
              <i class="icon-frame"></i>
              <span>Soporte</span>
            </a>
           
      </nav>
      <!-- /main navigation -->
    </div>

