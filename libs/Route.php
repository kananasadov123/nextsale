<?php


class Route
{
	public function __construct()
	{
		require_once CONTROLLER_PATH . '/Errors.php';
	}

	public function split()
	{

		$url = (isset($_GET['url'])) ? $_GET['url'] : null;
		$url = $this->getUrl($url);

//$url[0] control
		if ($url[0] == 'index.php' || $url[0] == 'index' || !isset($url[0])) {
			$this->getHomePage();
		} else {
			if (is_readable(CONTROLLER_PATH . ucfirst($url[0]) . '.php')) {
				require_once CONTROLLER_PATH . ucfirst($url[0]) . '.php';
				$controller = new $url[0]();
			} else {
				$error = new Errors();
				die();
			}
//$url[2] control

			if (isset($url[2])) {
				if (method_exists($url[0], $url[1])) {
					$path = $url[1]($url[2]);
					$controller->$path();
				} else {
					$error = new Errors();
					die();
				}
			} else {
//$url[1] control
				if (isset($url[1])) {
					if (method_exists($url[0], $url[1])) {
						$path = $url[1];
						$controller->$path();
					} else {
						$error = new Errors();
						die();
					}

				} else {
					$error = new Errors();
					die();
				}
			}
		}
	}


	private function getUrl($url)
	{
		if ($url != null) {
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = rtrim($url, '/');
			$url = explode('/', $url);
		} else {
			$error = new Errors();
			die();
		}

		return $url;
	}

	private function getHomePage()
	{
		require_once CONTROLLER_PATH . 'User.php';
		$controller = new User();
		$controller->userView();
	}

}

?>