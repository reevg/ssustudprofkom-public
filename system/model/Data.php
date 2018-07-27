<?

  defined("ACCESS")or die(header("location:../index.php"));

  class Data {

    public $data;

    function __construct() {

      $this->data = array(
        "pages" => array(
          "index"   => "index",
          "default" => "index",
          "documents" => "documents",
          "docs" => "documents",
          "crew" => "crew",
          "team" => "crew",
          "about" => "about",
          "report" => "report",
          "events" => "events",
          "nofound" => "404"
        ),
        "special" => array(
          "admin" => "admin",
          "join" => "join"
        ),
        "project" => array(
          "bughunter" => "bughunter",
        )
      );

    }

  }

?>