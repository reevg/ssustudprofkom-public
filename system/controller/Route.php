<?

  defined("ACCESS")or die(header("location:../index.php"));

  class Route {

    private $page;

    public function run(){

      $data = new Data();
      $view = new View();

      if(isset($_GET['url'])){

        if(array_key_exists(handlersLink($_GET['url']), $data->data["pages"])) $view->publickPage($data->data["pages"][handlersLink($_GET['url'])]);
        else if(array_key_exists(handlersLink($_GET['url']), $data->data["special"])) $view->specialPage($data->data["special"][handlersLink($_GET['url'])]);
        else if(array_key_exists(handlersLink($_GET['url']), $data->data["project"])) $view->separateProject($data->data["project"][handlersLink($_GET['url'])]);
        else $view->publickPage($data->data["pages"]["nofound"]);

      } else $view->publickPage($data->data["pages"]["default"]);

    }

  }

?>