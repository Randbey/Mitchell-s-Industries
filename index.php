<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Mitchell's Industries</title>
  <meta name="description" content="The Mitchell's Industries builds business tools for chat, compliance, inventory, and customer relationships.">

  <!-- Fonts: Fraunces (headings) and Public Sans (body text) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Public+Sans:wght@400;600&display=swap">

  <!-- The theme's style.css -->
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to content</a>

<!-- ========== HEADER ========== -->
<header class="site-header">
  <div class="container">
    <a class="brand" href="/">The Mitchell's Industries</a>
    <nav class="site-nav" aria-label="Main">
      <a href="#companies">Companies</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main id="main">

  <!-- ========== HERO ========== -->
  <section class="hero">
    <div class="container">
      <h1>Business tools, built under one name.</h1>
      <p class="hero-lead">The Mitchell's Industries builds and runs the software that keeps a business in order: customer chat, compliance, inventory, and customer relationships. Each company is listed below.</p>
    </div>
  </section>

  <!-- ========== HUB GRID ========== -->
  <section class="hub" id="companies">
    <div class="container">
      <h2 class="hub-heading">Our companies</h2>
      <p class="hub-intro">Each one runs on its own site. Choose one to visit.</p>

      <div class="card-grid">

        <!-- Card 1: Mivvi Chat -->
        <a class="card" href="https://mivvichat.com">
          <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
          <div class="card-body">
            <span class="card-type">Chat service</span>
            <h3 class="card-name">Mivvi Chat</h3>
            <p class="card-desc">Real-time chat for talking with your customers.</p>
            <span class="card-domain">mivvichat.com</span>
          </div>
        </a>

        <!-- Card 2: Mitchell's QA -->
        <a class="card" href="https://mitchellsqa.com">
          <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
          <div class="card-body">
            <span class="card-type">Compliance platform</span>
            <h3 class="card-name">Mitchell's QA</h3>
            <p class="card-desc">Keep documentation, audits, and quality records in order.</p>
            <span class="card-domain">mitchellsqa.com</span>
          </div>
        </a>

        <!-- Card 3: Balancexo -->
        <a class="card" href="https://balancexo.com">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80" alt="" loading="lazy">
          <div class="card-body">
            <span class="card-type">Inventory system</span>
            <h3 class="card-name">Balancexo</h3>
            <p class="card-desc">Track stock, products, and what's on the shelf.</p>
            <span class="card-domain">balancexo.com</span>
          </div>
        </a>

        <!-- Card 4: Bluepeakxo -->
        <a class="card" href="https://bluepeakxo.com">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=80" alt="" loading="lazy">
          <div class="card-body">
            <span class="card-type">CRM</span>
            <h3 class="card-name">Bluepeakxo</h3>
            <p class="card-desc">Keep customer contacts, deals, and follow-ups in one place.</p>
            <span class="card-domain">bluepeakxo.com</span>
          </div>
        </a>

        <!-- Card 5: Randall Mitchell -->
        <a class="card" href="https://randallmitchell.org">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80" alt="" loading="lazy">
          <div class="card-body">
            <span class="card-type">Founder</span>
            <h3 class="card-name">Randall Mitchell</h3>
            <p class="card-desc">The founder's corporate portal.</p>
            <span class="card-domain">randallmitchell.org</span>
          </div>
        </a>

      </div>
    </div>
  </section>

</main>

<!-- ========== FOOTER ========== -->
<footer class="site-footer" id="contact">
  <div class="container">
    <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> The Mitchell's Industries. All rights reserved.</p>
    <p>
      <a href="mailto:info@mitchellsqa.com">info@mitchellsqa.com</a>
      &nbsp;&nbsp;
      <a href="tel:+15108426705">510.842.6705</a>
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
