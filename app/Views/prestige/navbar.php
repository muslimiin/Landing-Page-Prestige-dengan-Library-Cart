    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap js-site-navbar bg-light">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="#">Prestige</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <a class="nav-item nav-link">
                        <a class="nav-item nav-link <?php echo $request == '' ? 'active': '' ?>" href="/">Home <span class="sr-only">(current)</span></a>
                      </a>
                      <a class="nav-item nav-link <?php echo $request == 'product' ? 'active': '' ?>">
                        <?php echo anchor('prestige/product', 'Product', 'class="nav-link"'); ?>
                      </a>
                      <a class="nav-item nav-link <?php echo $request == 'about' ? 'active': '' ?>">
                        <?php echo anchor('prestige/about', 'About', 'class="nav-link"'); ?>
                      </a>
                      <a class="nav-item nav-link <?php echo $request == 'contact' ? 'active': '' ?>">
                        <?php echo anchor('prestige/contact', 'Contact', 'class="nav-link"'); ?>
                      </a>
                      <a class="nav-item nav-link">
                        <a  class="nav-item nav-link" href="<?= base_url('prestige/cart')?>" data-toogle="dropdown">
                        Keranjang Belanja
                        </a>
                      </a>
                      <a class="nav-item nav-link">
                        <?php if (logged_in()) : ?>
                          <a class="nav-item nav-link" href="/logout">Log-Out</a>
                        <?php else : ?>
                          <a class="nav-item nav-link" href="/login">Log-In</a>
                        <?php endif ; ?>
                      </a>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>