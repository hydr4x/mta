    <section class="container-fluid footer">
      <div class="footer__left col-sm-6">
        <p>Copyright &copy;
          <?php
          $dateFooter = date("Y");
          echo $dateFooter;
          ?> CodeUnion
        </p>
      </div>
      <div class="footer__right col-sm-6">
        <p>Powered by <a href="https://codeunion.pl">#&lt;CodeUnion&gt;</a></p>
      </div>
    </section>
    <?php wp_footer(); ?>
   </body>
</html>
