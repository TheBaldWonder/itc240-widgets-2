<!-- footer starts here -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; <?php echo date("Y"); ?></p>
      </div>
        <?=$config->adminWidget;?>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=$config->theme_virtual?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=$config->theme_virtual?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?=$config->loadfoot;?>
  </body>

</html>
