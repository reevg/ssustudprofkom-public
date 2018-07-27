<?

  defined("ACCESS")or die(header("location:../index.php"));

  class View {

    public function publickPage($name){

      $path = PAGES."/$name/index.php";

      include_once INCLUD."/header.php";

      if(file_exists($path)) {

        include_once INCLUD."/nav.php";
        require_once($path);
        include_once INCLUD."/footer.php";
        include_once INCLUD."/resourcefile.php";

      } else {
        $data = new Data();
        $path = PAGES."/".$data->data["pages"]["default"]."/index.php";
        require_once($path);
      }
    }

    public function specialPage($name) {

      $path = PAGES."/$name/index.php";

      include_once INCLUD."/header.php";
      require_once($path);
      include_once INCLUD."/resourcefile.php";

    }

    public function separateProject($name) {

      $path = PAGES."/$name/index.php";

      include_once INCLUD."/header.php";
      require_once($path);

    }

  }

?>