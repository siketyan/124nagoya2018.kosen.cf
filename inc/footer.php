    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <a href="https://bulma.io/"
             target="_blank">
            <img src="/img/made-with-bulma--black.png"
                 width="128" height="24">
          </a>
        </p>
      </div>
    </footer>

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89932058-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-89932058-2');
    </script>
    <script>
      const element = document.getElementById("replace-at");
      if (element) {
        element.innerText = element.innerText.replace("[at]", "@");
      }

      window.onscroll = function() {
        const navbar = document.getElementById("navbar");
        const header = document.getElementById("header");
        const height = header.getBoundingClientRect().height;
        
        if (window.pageYOffset >= height) {
          navbar.classList.remove("is-hidden");
        } else {
          navbar.classList.add("is-hidden");
        }
      };
    </script>
  </body>
</html>
