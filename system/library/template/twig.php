<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($filename, $code = '', $registry = '') {
		$this->data['registry'] = $registry;

		$file = DIR_TEMPLATE . $filename . '.tpl';
		
		$file = str_replace("default/","techone/",$file);

		if (is_file($file)) {
			extract($this->data);

			ob_start();

			require($file);

			return ob_get_clean();
		} else {
			if (!$code) {
				$file = DIR_TEMPLATE . $filename . '.twig';

				if (is_file($file)) {
					$code = file_get_contents($file);
				} else {
					throw new \Exception('Error: Could not load template ' . $file . '!');
					exit();
				}
			}

			// initialize Twig environment
			$config = array(
				'autoescape'  => false,
				'debug'       => false,
				'auto_reload' => true,
				'cache'       => DIR_CACHE . 'template/'
			);

			try {
				$loader = new \Twig\Loader\ArrayLoader(array($filename . '.twig' => $code));

		            $techone_loader = new \Twig_Loader_Filesystem();

			        $techone_loader->addPath(DIR_TEMPLATE);

			    	$loader = new \Twig\Loader\ChainLoader(array($loader, $techone_loader));

				$twig = new \Twig\Environment($loader, $config);

				return $twig->render($filename . '.twig', $this->data);
			} catch (Exception $e) {
				trigger_error('Error: Could not load template ' . $filename . '!');
				exit();
			}
		}	
	}	
}
