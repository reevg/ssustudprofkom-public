<?

  define("ACCESS", true);
  define("PATH", ".");

  define("SYSTEM", PATH."/system");
  define("INCLUD", PATH."/includes");
  define("PAGES", PATH."/pages");

  define("MODEL", SYSTEM."/model");
  define("CONTR", SYSTEM."/controller");

  // define("ALTIMG", "/controller");
  // define("DESCRI", "/controller");
  // define("DESIMG", "/controller");
  // define("VERIFI", "/controller");

  function handlersLink($name) {
    return htmlspecialchars(stripslashes(trim($name)));
  }

  include_once MODEL."/Data.php";
  include_once MODEL."/View.php";
  include_once CONTR."/Route.php";

  $route = new Route();
  $route->run();

?>